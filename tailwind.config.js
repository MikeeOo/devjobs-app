/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
    extend: {
        fontFamily: {
            main: ["Noto Sans", "sans-serif"],
            headings: ["Space Grotesk", "sans-serif"],
        },
    },
  },
  plugins: [],
}

