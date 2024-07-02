# SchaeferSoft LaravelUI

<img src="https://cdn.discordapp.com/attachments/776387257224921088/1252603513150771200/logo_full_dark_1.png?ex=66849dad&is=66834c2d&hm=f19ef4e0a4981aaea8c87c683272a927ee19ed3f1d4d54d0ce9f91cd7252eeab&"/>

Free schaefersoft UI package for Laravel. Tailwind is required.

## Setup

Add the following lines to your `tailwind.config.json`:

````javascript
//Add this line
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        
        //Add this line
        "./vendor/schaefersoft/laravel-ui/resources/**/*.{blade.php,css,js,ts}"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        //Add this line
        forms
    ],
}
````
## Defining theme color
To define the theme color of the package, for now there is only option.

Extend the theme with the following code in your  `tailwind.config.json`:

````javascript
extend: {
    colors: {
        theme: {
            '50': '#fffbeb',
            '100': '#fef3c7',
            '200': '#fde58a',
            '300': '#fbd24e',
            '400': '#fabe25',
            '500': '#f49d0c',
            '600': '#d87607',
            '700': '#bc560a',
            '800': '#923f0e',
            '900': '#78340f',
            '950': '#451a03'
        },
    }
},
````
We recommend using https://uicolors.app/create to get ideal color palettes.


## Using UI components, that need style or javascript

Every UI component (if required) has its own according style and functionality scripts.
Please check the corresponding docs for each component.
