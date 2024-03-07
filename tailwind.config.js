module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        mycolor: '#03132C',
        yellowish: '#FCD789',  
        cyan: '#4B9284',
        magentaa: '#F78F9E',
        darkerMagenta: '#8D357C',
        darkerdark: '#010030',
      },
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
