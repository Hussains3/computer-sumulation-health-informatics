/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors:{
        transparent: 'transparent',
        black: '#000',
        white: '#FFF',
        leaf: '#00A896',
        day: '#FFF8F2',
        night: '#1C1C1C',
        cream: '#FFE8D6',
        red: '#EF4444',
        green: '#22C55E',
        gray: '#E9ECEF',
    },
    extend: {
        fontFamily: {
            jakarta: "'Plus Jakarta Sans', 'sans-serif'",
        },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
