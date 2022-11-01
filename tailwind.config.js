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
          mono: ['Roboto Mono', 'mono-space'],
      },
      extend: {
          colors: {
              'orange': {
                  light: '#C9A376',
                  DEFAULT: '#AB630D',
                  dark: '#89500B',
              },
              'blue': {
                  card: '#D9E7ED',
                  light: '#D5E9F1',
                  DEFAULT: '#003B48',
                  dark: '#002C36',
              },
              'white': '#FFFFFF',
          },
      }
  },
  plugins: [],
}
