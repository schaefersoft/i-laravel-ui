# i-laravel-ui

Free schaefersoft UI package for Laravel. Tailwind is required.

# Setup

Add the following lines to your `tailwind.config.json`:

````json
content: [
//Your remaining resources here
"./vendor/schaefersoft/laravel-ui/resources/**/*.{blade.php, css, js}"
],
````

# Using UI components, that need style or javascript

Every UI component (if required) has its own according style and functionality scripts.

## Importing all assets

To import all styles and scripts (this might bloat your package), add the following:

`resources/css/app.css`

````css
@import "../../vendor/schaefersoft/laravel-ui/resources/css/laravel-ui.css";
````

`resources/js/app.js`

````css
import '../../vendor/schaefersoft/laravel-ui/resources/js/laravel-ui'
````

## Importing only the required assets

Importing only the required assets is better for performance, but makes your code less readable.
This also comes with the option to listen for events or change some default behavoiurs of the scripts.

| Component Name                                                                                       | Requires Assets | CSS Module                                                                        | JS Module                                                                                            |
|------------------------------------------------------------------------------------------------------|-----------------|-----------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------|
| Sidebar                                                                                              | YES             | @import "../../vendor/schaefersoft/laravel-ui/resources/css/modules/sidebar.css"; | import {SidebarHanlder} from '../../../vendor/schaefersoft/laravel-ui/resources/js/modules/sidebar'; |
|                                                                                                      |                 |                                                                                   |                                                                                                      |
|                                                                                                      |                 |                                                                                   |                                                                                                      |
