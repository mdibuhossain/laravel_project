/** @type {import('tailwindcss').Config} */
import daisyui from "daisyui";

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    daisyui: {
        themes: ["light", "dark", "cupcake"],
    },
    theme: {
        extend: {},
    },
    plugins: [daisyui],
};
