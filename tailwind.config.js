/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
      fontFamily: {
          body: ['Open Sans', 'sans-serif'],
          display: ['Spartan', 'sans-serif'],
      },
      extend: {
          colors: {
              'lightblue': '#D5E9F1',
              'darkorange': '#89500B',
              'orange': '#AB630D',
              'darkblue': '#002C36',
              'blue': '#003B48',
              'card': '#D9E7ED',
              'white': '#FFFFFF'
          },
      }
  },
  plugins: [],
}
