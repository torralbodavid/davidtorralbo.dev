const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        typography: {
            default: {
                css: {
                    color: '#333',
                    a: {
                        color: '#047481',
                        '&:hover': {
                            color: '#0694a2',
                        },
                    },
                },
            },
        },
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {},
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/custom-forms'),
        require('@tailwindcss/ui'),
        require('@tailwindcss/typography')
    ],
};
