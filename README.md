# i-laravel-ui

Free schaefersoft UI package for Laravel. Tailwind is required.

# Setup

Add the following lines to your `tailwind.config.json`:

````json
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        
        //Add this line
        "./vendor/schaefersoft/laravel-ui/resources/**/*.{blade.php, css, js}"
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
````

# Using UI components, that need style or javascript

Every UI component (if required) has its own according style and functionality scripts.
Please check the corresponding docs for each component.
