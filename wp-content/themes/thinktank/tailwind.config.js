/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/**/*.php',
    './resources/**/*.php',
    './resources/**/*.vue',
    './resources/**/*.js',
  ],
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1440px',
    },
    extend: {
      colors: {
        'tt-darkblue': '#112530',
        'tt-blue': '#3A6E8E',
        'tt-stone': '#2F4F5B',
        'tt-sand': '#EBE9E4',
        'tt-beige': '#e9ddd2',
        'tt-gold': '#C3884D',
        'tt-ltblue': '#92B7C6',
        'tt-gray': '#58595B',
        'tt-turq': '#13a89d',
        'tt-brown': '#C4A485',
      },
      fontFamily: {
        muli: ['Muli'],
        oswald: ['Oswald'],
        acumin: ['acumin-pro-condensed'],
      },
      boxShadow: {
        tt: '0 2px 10px rgba(0,0,0,0.25)',
      }
    },
  },
  plugins: [],
}