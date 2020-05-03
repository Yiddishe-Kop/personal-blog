const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
    '**.php',
    '**.html',
  ],
  theme: {
    extend: {
      colors: {
        brand: '#ffad1f'
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ],
}
