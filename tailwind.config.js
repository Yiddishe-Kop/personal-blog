const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
    './resources/**/*.php',
    './resources/**/*.html',
  ],
  theme: {
    extend: {
      colors: {
        brand: '#ffad1f'
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        mono: ['Cascadia', ...defaultTheme.fontFamily.mono], // font for code snippets 😎
      },
    },
  },
  variants: {
    boxShadow: ['hover', 'group-hover', 'responsive'],
  },
  plugins: [
    require('@tailwindcss/ui'),
  ],
}
