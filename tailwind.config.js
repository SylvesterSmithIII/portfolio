/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      backgroundColor: {
        'blue-darker': 'rgb(16, 28, 38)',
        'dark-gray': 'rgb(43, 51, 59)',
      },
      textColor: {
        'dark-gray': 'rgb(255, 255, 255, 0.1)',
      },
      fontFamily: {
        'baskerville': ['Libre Baskerville', 'serif'],
      },
    },
  },
  plugins: [],
}

