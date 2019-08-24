module.exports = {
  theme: {
    extend: {
    	width: {
    		'96': '24rem',
    		'1000': '250rem'
    	},
    	padding: {
    		'96': '24rem'
    	}
    }
  },
  variants: {},
  plugins: [
  	require('@tailwindcss/custom-forms')
  ]
}
