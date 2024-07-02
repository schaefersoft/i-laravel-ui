# Expand Component

<img src="https://cdn.discordapp.com/attachments/776387257224921088/1257622100466729010/msedge_Hxz7Qk2aMj.gif?ex=6685135a&is=6683c1da&hm=51e2eecacac42180b371d240cda2a879ed613c19fabcc83027c3b1028d31d6b9&" style="max-height: 10rem;"/>

The Expand component provides a simple and lightweight solution for creating expandable sections within your Laravel
application.

## Imports

To use the Expand component, you need to import the corresponding assets. These assets are located
in `vendor/schaefersoft/laravel-ui/resources/{js,css}` and include both **JavaScript** and **CSS** files.

There are two ways to import the required assets:

### Option 1: Import All Assets

You can import all assets from the package, which is only required once per project, even if you use multiple components from the
laravel-ui package.

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

To reduce bundle size and improve overall performance, you can import only the assets required for the Expand component.

#### `resources/css/app.css`

```css
@import "../../vendor/schaefersoft/laravel-ui/resources/css/modules/expand.css";
```

#### `resources/js/app.js`

```javascript
import '../../vendor/schaefersoft/laravel-ui/resources/js/modules/expand';
```

## Usage

To use the Expand component, follow these steps. The layout includes multiple named slots, each serving a different
purpose.

### Basic Structure

```html
<x-ui::expand>
    <x-slot name="title">
        <!-- 
            Add all content here that should always be displayed. 
        -->
    </x-slot>

    <x-slot name="content">
        <!--  
            Add all content for the expandable section here, such as filters, authors, or any other content.
        -->
    </x-slot>
</x-ui::expand>
```

### Example

```html
<x-ui::expand>
    <x-slot name="title">
        <h2>Filters</h2>
    </x-slot>

    <x-slot name="content">
        <ul>
            <li>Red</li>
            <li>Green</li>
            <li>Blue</li>
        </ul>
    </x-slot>
</x-ui::expand>
```

### Customizing Content Height

The content has a default max-height of `15rem`. You can customize this by using the `max-height` attribute. Provide
your custom max-height through a CSS class, using either a Tailwind class or Tailwind's arbitrary values.

#### Example

```html
<x-ui::expand max-height="max-h-[250px]">
    <x-slot name="title">
        ...
    </x-slot>
    <x-slot name="content">
        ...
    </x-slot>
</x-ui::expand>
```

### Setting the Initial State

You can set the initial state of the expandable section using the `opened` attribute.

#### Example

```html
<x-ui::expand opened="true">
    <x-slot name="title">
        ...
    </x-slot>
    <x-slot name="content">
        ...
    </x-slot>
</x-ui::expand>
```

### Displaying a State Indicator (Arrow)

To add an arrow that changes its direction based on the state of the component, use an element with the class 
**expand-toggle**. This element will be transformed with CSS.

#### Example

```html
<x-ui::expand opened="true">
    <x-slot name="title">
        ...
        <div class="expand-toggle">
            <!-- Add your arrow here -->
        </div>
    </x-slot>
    <x-slot name="content">
        ...
    </x-slot>
</x-ui::expand>
```
