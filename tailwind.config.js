module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily:{
        'sans': ['Poppins'],
        // 'sans': ['Poppins', ...defaultTheme.fontFamily.sans],
          'serif': [...defaultTheme.fontFamily.serif],
          'mono': [...defaultTheme.fontFamily.mono]
    
      },
    },
  },
//   module.exports ={
// theme: {
//   fontFamily:{
//     'sans': ['Poppins', ...defaultTheme.fontFamily.sans],
//       'serif': [...defaultTheme.fontFamily.serif],
//       'mono': [...defaultTheme.fontFamily.mono]

//   },
//   // extend:{
//   //   fontFamily:{
//   //     'Poppins':['Poppins','sans-serif']
//   //   },
//   // },



//   // fontFamily:{
//   //   'Poppins' : ['Poppins','sans-serif'],
//   // },
// },
//   },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
  corePlugins: {
    // ...
   boxDecorationBreak: false,
  },
}
