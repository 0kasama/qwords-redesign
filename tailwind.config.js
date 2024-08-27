/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                bumblebee: {
                    ...require("daisyui/src/theming/themes")["light"],
                    primary: "#FF6D0B",
                    secondary: "#FFF8F3",
                    accent: "#D75600",
                },
            },
        ],
    },
};
