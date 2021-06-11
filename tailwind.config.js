const colors = require("tailwindcss/colors");

module.exports = {
  purge: [
    './resources/views/welcome.blade.php',
    './resources/js/app.js',
    './resources/js/components/App.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        cyan: colors.cyan,
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
