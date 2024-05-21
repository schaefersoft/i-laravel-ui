# Sidebar layout
The sidebar layout can be used to display filters or subpages inside of a menu.

## Imports
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
};
````
## Usage
Follow these steps, to use the sidebar layout.

There are multiple named slots in the layout, where each serves a different pupose.

````html
<x-ui::sidebar-layout>
    <x-slot name="expand_button">
        <!-- 
            Add all content here, that should be displayed in the expand button on mobile devices. 
        -->
    </x-slot>
    
    <x-slot name="sidebar">
        <!--  
            Add all content for the sidebar here, Filtes, authors, whatever you'd like. 
            
            ! This is not visible on mobile devices. It will be expanded with JS whem clicking on the "expand_button"
         -->
    </x-slot>
    
    <x-slot name="content">
        <!--  This is your main content. Display articles, reviews or other data here. -->
    </x-slot>
</x-ui::sidebar-layout>
````

#### Example
````html
<x-ui::sidebar-layout>
    <x-slot name="expand_button">
        <h2>Filters</h2>
    </x-slot>
    
    <x-slot name="sidebar">
        <ul>
            <li>Red</li>
            <li>Green</li>
            <li>...</li>
        </ul>
    </x-slot>
    
    <x-slot name="content">
        <div class="card"
            ...
        </div>
        <div class="card"
            ...
        </div>
        <div class="card"
            ...
        </div>
    </x-slot>
</x-ui::sidebar-layout>
````
