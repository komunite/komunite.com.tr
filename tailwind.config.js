const colors = require("tailwindcss/colors");
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    mode: "jit",
    purge: [
        "./pages/**/*.{js,ts,jsx,tsx}",
        "./components/**/*.{js,ts,jsx,tsx}",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
                readex: [
                    "Readex Pro",
                    "Inter",
                    ...defaultTheme.fontFamily.sans,
                ],
            },
            fontSize: {
                "1xl": "1.3125rem",
                xxl: "1.375rem",
                "2.25xl": "1.625rem",
                "2.5xl": "1.6875rem",
                "3.5xl": "2rem",
                "4.5xl": "2.625rem",
                "6.5xl": "4rem",
            },
            maxWidth: {
                "6xl": "73.125rem",
            },
            colors: {
                bright: "#F5F3F0",
                turquoise: "#82D0E4",
                ghost: "#CBC7DB",
                neptune: "#80A5AE",
                "bubble-gum": "#F5CBCD",
                "almost-black": "#090909",
                navy: "#364373",
            },
            padding: {
                4.5: "1.125rem",
                6.5: "1.625rem",
                7.5: "1.875rem",
                15: "3.75rem",
                17.5: "4.375rem",
                18.75: "4.6875rem",
                22.5: "5.625rem",
                25: "6.25rem",
                30: "7.5rem",
                50: "12.5rem",
            },
            margin: {
                7.5: "1.875rem",
                13: "3.25rem",
                15: "3.75rem",
                17.5: "4.375rem",
                22: "5.5rem",
            },
            gap: {
                4.5: "0.9375rem",
                7.5: "1.875rem",
                13: "3.25rem",
                15: "3.75rem",
                18: "4.375rem",
                21.5: "5.625rem",
                25: "6.25rem",
            },
            spacing: {
                7.5: "1.875rem",
                11.5: "2.85rem",
                13: "3.25rem",
                15: "3.75rem",
                18.5: "4.625rem",
                22: "5.65rem",
                26: "6.25rem",
            },
            height: {
                7.5: "1.875rem",
                8.5: "2.125rem",
                11.5: "2.875rem",
                12.5: "3.125rem",
                18: "4.5rem",
                30: "7.5rem",
                35: "8.75rem",
                42.5: "10.625rem",
                67.5: "16.875rem",
                92: "23.125rem",
            },
            width: {
                8.5: "2.125rem",
                12.5: "3.25rem",
                30: "7.5rem",
                35: "8.75rem",
                42.5: "10.625rem",
                67.5: "16.875rem",
            },
            borderWidth: {
                3: "3px",
                10: "10px",
            },
            boxShadow: {
                dropdown: "0px 30px 100px rgba(0, 0, 0, 0.15)",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
    variants: {
        extend: { typography: ["tint", "dark", "primary"] },
    },
};
