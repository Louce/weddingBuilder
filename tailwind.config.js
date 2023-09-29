/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#336148',
        'secondary': '#F1EFE2'
      },
      size: {
        xs: '12px',
      }
    },
  },
  plugins: [],
}

