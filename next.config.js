const withSvgr = require("next-svgr");

module.exports = withSvgr({
    async rewrites() {
        return [
            {
                source: "/",
                destination: "/home",
            },
            { source: "/urun-gelistirme", destination: "/product-development" },
            { source: "/ekibimiz", destination: "/team" },
            { source: "/kariyer", destination: "/careers" },
            { source: "/is-ortaklarimiz", destination: "/partners" },
            { source: "/burs-programi", destination: "/scholarship-program" },
            { source: "/canli-yayinlar", destination: "" },
            { source: "/creators-networking", destination: "" },
            { source: "/topluluk", destination: "" },
            { source: "/masterclass", destination: "" },
            { source: "/egitimler", destination: "" },
            { source: "/katma-deger-fonu", destination: "" },
            { source: "/yatirimlarimiz", destination: "" },
            { source: "/venture-building", destination: "" },
            { source: "/service-for-equity", destination: "" },
            { source: "/iletisim", destination: "/contact" },
            { source: "/gizlilik-sozlesmesi", destination: "/privacy" },
            { source: "/sss", destination: "/faq" },
            { source: "/hackathonlar", destination: "" },
            { source: "/kullanici-sozlesmesi", destination: "" },
            { source: "/komunite-social-media-manager", destination: "" },
            { source: "/komunite-growth-product-manager", destination: "" },
            { source: "/the-bulten-editor-at-large", destination: "" },
        ];
    },
});
