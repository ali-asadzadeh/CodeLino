/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
export default {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            },
        },
        extend: {
            fontFamily: {
                Kalameh : ['Kalameh'],
                Yekan : ['Yekan']
            },
            colors: {
                lightgray: {
                    50: '#757575',
                    100: '#CBCBCB',
                    500: '#082F49',
                },
                skyblue: {
                    100: '#D5EFF9',
                    600: '#0C4A6E',
                },
                charcoal: '#413838',
                primaryvioent: '#DDD6FE',
            }
        },
    },
    plugins: [],
}
