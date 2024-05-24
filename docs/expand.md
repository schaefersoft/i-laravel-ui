# Expand

The expand component provides a simple and lightweight solution for different expanders.

## Imports

To use the expand component you have to import is corresponding assets.
These can be found inside `./vendor/schaefersoft/laravel-ui/resources/{js, css}`. The layout requires both JS assets and
CSS assets.

There are 2 ways of importing assets in this package.

### Option 1

Importing all assets from the package. (This is only required once, even if you use multiple components from the
laravel-ui package)

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

Only import the required assets to reduce bundle size and improve overall performance.

`resources/css/app.css`

```css
@import "../../vendor/schaefersoft/laravel-ui/resources/css/modules/expand.css";
```

`resources/js/app.js`

```javascript
import '../../../vendor/schaefersoft/laravel-ui/resources/js/modules/expand';
```

## Usage

Follow these steps, to use the expand component.

There are multiple named slots in the layout, where each serves a different pupose.

````html

<x-ui::expand>
    <x-slot name="title">
        <!-- 
            Add all content here, that should always be displayed. 
        -->
    </x-slot>

    <x-slot name="content">
        <!--  
            Add all content for the expand here, Filtes, authors, whatever you'd like.
        -->
    </x-slot>
</x-ui::expand>
````

#### Example

````html

<x-ui::sidebar-layout>
    <x-slot name="title">
        <h2>Filters</h2>
    </x-slot>

    <x-slot name="content">
        <ul>
            <li>Red</li>
            <li>Green</li>
            <li>...</li>
        </ul>
    </x-slot>
</x-ui::sidebar-layout>
````

### Content Height
The content has a default max-height of `15rem`. You can customize this, by using the `max-height` attribute.

#### Example
You have to provide your custom max-height through a TailwindCSS class. You may use Tailwind's arbitary values here.
````html
<x-ui::expand max-height="max-h-[250px]">
    <x-slot name="title">
        ...
    </x-slot>
    <x-slot name="content">
        ...
    </x-slot>
</x-ui::expand>
````

### State
There is a attribute for the opened state. Use the `opened` attribute here.

#### Example
You have to provide your custom max-height through a TailwindCSS class. You may use Tailwind's arbitary values here.
````html
<x-ui::expand opened="true">
    <x-slot name="title">
        ...
    </x-slot>
    <x-slot name="content">
        ...
    </x-slot>
</x-ui::expand>
````
