# SchaeferSoft LaravelUI

<img src="https://media.discordapp.net/attachments/776387257224921088/1252603513150771200/logo_full_dark_1.png?ex=6672d16d&is=66717fed&hm=2b8e1ae4f30ee46f4414c3ce9e9d48723c09102649f6903fbdb91bc817f427ab&=&format=webp&quality=lossless&width=1800&height=300"/>

Free schaefersoft UI package for Laravel. Tailwind is required.

# Setup

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

# Using UI components, that need style or javascript

Every UI component (if required) has its own according style and functionality scripts.
Please check the corresponding docs for each component.
