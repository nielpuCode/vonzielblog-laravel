/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            seaBlue: '#30A2FF',
            seaCyan: '#00C4FF',
            seaYellow: '#FFE7A0',
            seaLightYellow: '#FFF5B8',
        },
    },
  },
  plugins: [],
}

