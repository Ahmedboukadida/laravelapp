module.exports = {  
    plugins: [  
        require('postcss-import'),
        require('tailwindcss'),  
        require('postcss-nested'),  
        require('autoprefixer'),
        require('postcss-custom-properties'),
        require('postcss-preset-env')({ stage: 1 }),
        require('cssnano')({  
            preset: 'default'  
        })  
    ]
}