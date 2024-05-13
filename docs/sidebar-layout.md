# Sidebar layout
The sidebar layout can be used to display filters or subpages inside of a menu.

## Usage
To use the Sidebar layout you have to import is corresponding assets.
These can be found inside `./vendor/schaefersoft/laravel-ui/resources/{js, css}`. The layout requires both JS assets and css assets.

There are 2 ways of importing assets in this package.

### Option 1
Importing all assets from the package. (This is only required once, even if you use multiple components)

Add the following lines to the corresponding files:

`resources/css/app.css`
```css
@import "../../vendor/schaefersoft/laravel-ui/resources/css/laravel-ui.css";
```
`resources/js/app.js`
```javascript
import '../../vendor/schaefersoft/laravel-ui/resources/js/laravel-ui'
```

### Option 2
Only import the required assets to reduce bundle size and imporve overall performance.

`resources/css/app.css`
```css
@import "../../vendor/schaefersoft/laravel-ui/resources/css/modules/sidebar.css";
```
`resources/js/app.js`
```javascript
import {SidebarHanlder} from '../../../vendor/schaefersoft/laravel-ui/resources/js/modules/sidebar';
```
#### Advantages of option 2

When using this 2nd approach, you can use the `SidebarHanlder` to change some behaviours of the sidebar.

Examples:

Use the given events to handle scroll management of your page, with the package [body-scroll-lock](https://github.com/rick-liruixin/body-scroll-lock-upgrade).
````typescript
SidebarHanlder.onSidebarOpened = (sidebarElement: HTMLElement): void => {
    disableBodyScroll(sidebarElement);
};
SidebarHanlder.onSidebarClosed = (_: HTMLElement): void => {
    clearAllBodyScrollLocks();
}
````
