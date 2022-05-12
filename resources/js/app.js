window.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".js-footerDate").forEach((date) => {
        date.innerHTML = new Date().getFullYear();
    });

    const headerAsideMenuBtns = document.querySelectorAll(
        ".js-headerAsideMenuBtn"
    );
    const headerAsideMenus = document.querySelectorAll(".js-headerAsideMenu");
    headerAsideMenuBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            headerAsideMenus.forEach((menu) => {
                menu.parentElement.removeAttribute("open");
            });
        });
    });

    const newsletter = document.querySelector(".js-newsletter");
    const NEWSLETTER_ID = "NEWSLETTER";
    const isHideNewsletter = localStorage.getItem(NEWSLETTER_ID);

    if (newsletter) {
        document.querySelectorAll(".js-newsletterBtn").forEach((button) => {
            button.addEventListener("click", (e) => {
                e.preventDefault();
                localStorage.setItem(NEWSLETTER_ID, true);
                newsletter.remove();
            });
        });
    }

    const headerBounce = document.querySelector(".js-headerBounce");
    if (headerBounce) {
        const headerBounceHeight = headerBounce.getBoundingClientRect().height;
        const headerBounceAnimationHeight = headerBounceHeight / 2;
        const headerScrollHeight =
            headerBounceHeight - headerBounceHeight * 0.4;
        let toHeader = true;
        let toTop = false;
        let lastScroll = 0;
        let downBefore = false;

        window.addEventListener("scroll", function (e) {
            const scrollY = window.pageYOffset;
            if (!downBefore && scrollY > headerBounceHeight) {
                downBefore = true;
            }

            if (
                !toTop &&
                downBefore &&
                scrollY < lastScroll &&
                scrollY < headerScrollHeight
            ) {
                toTop = true;
                toHeader = true;

                window.scrollTo({
                    left: 0,
                    top: 0,
                });
            }

            lastScroll = scrollY;

            if (scrollY > headerBounceAnimationHeight) {
                headerBounce.classList.add("stop-animation");
            } else {
                headerBounce.classList.remove("stop-animation");
            }

            if (toHeader && scrollY > headerScrollHeight) {
                toHeader = false;
                toTop = false;
                window.scrollTo({
                    left: 0,
                    top: headerBounceHeight,
                });
            }

            if (newsletter) {
                if (scrollY > headerBounceHeight && !isHideNewsletter) {
                    newsletter.classList.remove("hidden");
                } else {
                    newsletter.classList.add("hidden");
                }
            }
        });

        document.querySelectorAll(".js-bounceDownBtn").forEach((button) => {
            button.addEventListener("click", () => {
                window.scrollTo({
                    left: 0,
                    top: headerBounceHeight,
                });
            });
        });
    } else if (newsletter && !isHideNewsletter) {
        newsletter.classList.remove("hidden");
    }

    window.dispatchEvent(new Event("scroll"));

    const announcementBar = document.querySelector(".js-announcementBar");
    if (announcementBar) {
        const ANNOUNCEMENT_BAR_ID = "ANNOUNCEMENT_BAR";

        try {
            if (localStorage.getItem(ANNOUNCEMENT_BAR_ID)) {
                announcementBar.remove();
            }

            document
                .querySelectorAll(".js-announcementBarBtn")
                .forEach((button) => {
                    button.addEventListener("click", (e) => {
                        e.preventDefault();
                        localStorage.setItem(ANNOUNCEMENT_BAR_ID, true);
                        announcementBar.remove();
                    });
                });
        } catch (e) {}
    }

document.querySelectorAll(".js-videoPopupBtn").forEach(videoPopupBtn => {
        const videoPopup = document.querySelector(".js-videoPopup");

        if (videoPopup && videoPopupBtn) {
            const iframe = videoPopup.querySelector("iframe");
            videoPopupBtn.addEventListener("click", () => {
                iframe.src = videoPopupBtn.getAttribute("data-url");
                videoPopup.classList.remove("hidden");
            });
    
            videoPopup.addEventListener("click", function () {
                iframe.removeAttribute("src");
                videoPopup.classList.add("hidden");
            });
        }
    })

   

    const partners = document.querySelectorAll(".js-partnerCard");
    if (partners.length) {
        const searchInput = document.querySelector(".js-partnerSearch");
        const categoryInput = document.querySelector(".js-partnerCategory");
        const banner = document.querySelector(".js-partnerBanner");
        searchInput.addEventListener("keyup", () => {
            filterPartners();
        });

        categoryInput.addEventListener("change", () => {
            filterPartners();
        });

        function filterPartners() {
            for (var i = 0; i < partners.length; i++) {
                const partnerName = partners[i]
                    .querySelector(".js-partnerName")
                    .textContent.trim()
                    .toLowerCase();
                const partnerCategory =
                    partners[i].getAttribute("data-category");
                let isAvailable = true;

                if (
                    categoryInput.value &&
                    !(partnerCategory == categoryInput.value)
                ) {
                    isAvailable = false;
                }

                if (
                    searchInput.value &&
                    !partnerName.includes(searchInput.value.toLowerCase())
                ) {
                    isAvailable = false;
                }

                if (isAvailable) {
                    partners[i].classList.remove("hidden");
                } else {
                    partners[i].classList.add("hidden");
                }
            }

            if (document.querySelector(".js-partnerCard.hidden")) {
                banner.classList.add("hidden");
            } else {
                banner.classList.remove("hidden");
            }
        }
    }
});
