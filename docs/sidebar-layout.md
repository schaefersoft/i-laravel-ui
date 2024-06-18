# Sidebar Layout

The Sidebar layout can be used to display filters or subpages inside a menu. It automatically collapses on mobile
devices for a better user experience.

## Imports

To use the Sidebar layout, you need to import the corresponding assets, which are located
in `vendor/schaefersoft/laravel-ui/resources/{js, css}`. Both JavaScript and CSS assets are required.

There are two ways to import the necessary assets:

### Option 1: Import All Assets

You can import all assets from the package, which is only required once per project, even if you use multiple components.

Add the following lines to the corresponding files:

#### `resources/css/app.css`

```css
@import "../../vendor/schaefersoft/laravel-ui/resources/css/laravel-ui.css";
```

#### `resources/js/app.js`

```javascript
import '../../vendor/schaefersoft/laravel-ui/resources/js/laravel-ui';
```

### Option 2: Import Only Required Assets

To reduce bundle size and improve overall performance, you can import only the assets required for the Sidebar layout.

#### `resources/css/app.css`

```css
@import "../../vendor/schaefersoft/laravel-ui/resources/css/modules/sidebar.css";
```

#### `resources/js/app.js`

```javascript
import {sidebarHandler} from '../../../vendor/schaefersoft/laravel-ui/resources/js/modules/sidebar';
```

#### Advantages of Option 2

When using this approach, you can use the `sidebarHandler` to customize some behaviors of the sidebar.

##### Example

Use the given events to handle scroll management of your page with the
package [body-scroll-lock](https://github.com/rick-liruixin/body-scroll-lock-upgrade).

```typescript
sidebarHandler.onSidebarOpened = (sidebarElement: HTMLElement): void => {
    disableBodyScroll(sidebarElement);
};

sidebarHandler.onSidebarClosed = (_: HTMLElement): void => {
    clearAllBodyScrollLocks();
};
```

## Usage

Follow these steps to use the Sidebar layout. The layout includes multiple named slots, each serving a different
purpose.

### Basic Structure

```html

<x-ui::sidebar-layout>
    <x-slot name="expand_button">
        <!-- Add content here that should be displayed in the expand button on mobile devices. -->
    </x-slot>

    <x-slot name="sidebar">
        <!--  
            Add content for the sidebar here, such as filters, authors, etc.
            This content is not visible on mobile devices and will be expanded with JavaScript when clicking on the "expand_button".
        -->
    </x-slot>

    <x-slot name="content">
        <!-- This is your main content area. Display articles, reviews, or other data here. -->
    </x-slot>
</x-ui::sidebar-layout>
```

### Example

```html

<x-ui::sidebar-layout>
    <x-slot name="expand_button">
        <h2>Filters</h2>
    </x-slot>

    <x-slot name="sidebar">
        <ul>
            <li>Red</li>
            <li>Green</li>
            <li>Blue</li>
        </ul>
    </x-slot>

    <x-slot name="content">
        <div class="card">
            <!-- Main content card 1 -->
        </div>
        <div class="card">
            <!-- Main content card 2 -->
        </div>
        <div class="card">
            <!-- Main content card 3 -->
        </div>
    </x-slot>
</x-ui::sidebar-layout>
```
