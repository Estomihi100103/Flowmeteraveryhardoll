/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      height: {
        '160': '40rem',
      }
    }
  },
  plugins: [
    require('flowbite'),
    require('flowbite/plugin')({
      charts: true,
  }),
  ],
}



