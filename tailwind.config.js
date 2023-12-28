/** @type {import('tailwindcss').Config} */
import rippleui from "rippleui";
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                main: ["Noto Sans", "sans-serif"],
                headings: ["Space Grotesk", "sans-serif"],
            },
        },
    },
    plugins: [rippleui, "prettier-plugin-tailwindcss"],
};
