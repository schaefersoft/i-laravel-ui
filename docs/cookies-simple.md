# Cookies (simple)

The Cookie Notification component provides a simple and effective way to notify users about cookie usage on your
website. It includes accept and decline buttons, allowing users to manage their cookie preferences.

## Imports

To use the simple-cookies component, you need to import the corresponding assets, which are located
in `vendor/schaefersoft/laravel-ui/resources/js`. Only **JS** assets are required, no CSS.

There are two ways to import the necessary assets:

### Option 1: Import All Assets

You can import all assets from the package, which is only required once per project, even if you use multiple
components.

Add the following lines to the corresponding files:

#### `resources/js/app.js`

```javascript
import '../../vendor/schaefersoft/laravel-ui/resources/js/laravel-ui';
```

### Option 2: Import Only Required Assets

To reduce bundle size and improve overall performance, you can import only the assets required for the simple-cookies
component.

#### `resources/js/app.js`

```javascript
import {simpleCookieHandler} from '../../../vendor/schaefersoft/laravel-ui/resources/js/modules/cookies-simple';
```

#### Advantages of Option 2

When using this approach, you can use the `SidebarHandler` to customize some behaviors of the sidebar.

##### Example

You can use these events and properties.

```typescript
simpleCookieHandler.cookie_consent_given;

simpleCookieHandler.onCookiesDeclined = () => {
    //Do something here, e.g. enable Google analytics
};

simpleCookieHandler.onCookiesDeclined = () => {
    //Do something here
};
```

## Usage

Follow these steps to use the component. It includes multiple named slots, each serving a different
purpose.

### Basic Structure

```html

<x-ui::cookies-simple>
    <x-slot name="content">
        <!--
            Add the info for your user here.
         -->
    </x-slot>

    <x-slot name="accept_button">
        <!-- 
            Text of the "accept" button
        -->
    </x-slot>
    <x-slot name="decline_button">
        <!-- 
            Text of the "only required" button
        -->
    </x-slot>
</x-ui::cookies-simple>
```

### Example

```html

<x-ui::cookies-simple>
    <x-slot name="content">
        We use cookies for tracking, hacking and other illegal stuff. Find more <a href="/hacking">here</a>
    </x-slot>

    <x-slot name="accept_button">
        Accept all cookies
    </x-slot>
    <x-slot name="decline_button">
        Only required
    </x-slot>
</x-ui::cookies-simple>
```
