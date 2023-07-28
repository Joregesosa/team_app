/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        firstFont: ["'Poppins', sans-serif"],
        secondFont: ["'PT Serif', serif"],
      }
    },
  },
  plugins: [],
}
