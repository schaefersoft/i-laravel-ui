# Range slider component

<img src="https://cdn.discordapp.com/attachments/776387257224921088/1257619375247331328/image.png?ex=668510d0&is=6683bf50&hm=4952b8c2d856f3dd703b99c5736454435510f0e196fdbfd82d6d2eca7caffb4a&" style="max-height: 10rem;"/>

The range slider component provides a simple and lightweight solution for sliders with **two** handles in your laravel
application.

## Imports

To use the range slider component, you need to import the corresponding assets. These assets are located
in `vendor/schaefersoft/laravel-ui/resources/{js,css}` and include both **JavaScript** and **CSS** files.

There are two ways to import the required assets:

### Option 1: Import All Assets

You can import all assets from the package, which is only required once per project, even if you use multiple components
from the
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
@import "../../vendor/schaefersoft/laravel-ui/resources/css/modules/range-slider.css";
```

#### `resources/js/app.js`

```javascript
import '../../vendor/schaefersoft/laravel-ui/resources/js/modules/range-slider';
```

## Usage

To use the range slider component, follow these steps.

### Basic Structure

```html

<x-ui::expand>
    <x-ui::range-slider lower-name=""
                        upper-name=""/>
</x-ui::expand>
```

### Example

```html

<x-ui::range-slider lower-name="height-lower"
                    upper-name="height-upper"
                    :lower-value="old('height-lower', 10)"
                    :upper-value="old('height-upper', 90)"/>
```

## Attributes

| Name           | Type                 | Purpose                                                                     | Default value | Example value |
|----------------|----------------------|-----------------------------------------------------------------------------|---------------|---------------|
| $lowerName     | string, **required** | Set the name and ID of the lower input value                                | -             | heigth-lower  |
| $upperName     | string, **required** | Set the name and ID of the lower upper value                                | -             | heigth-upper  |
| $min           | int, nullable        | Set the min value of both inputs                                            | 0             | 50            |
| $max           | int, nullable        | Set the max value of both inputs                                            | 100           | 180           |
| $lowerValue    | int, nullable        | Set the current lower value                                                 | null          | 20            |
| $upperValue    | int, nullable        | Set the current upper value                                                 | null          | 80            |
| $showDetails   | bool, nullable       | Set if the details (values below ths slider) should be displayed            | true          | false         |
| $unit          | string, nullable     | Appends a unit to the values below the silder (only if $showDetails = true) | null          | cm            |
| $lowerDisabled | boolean, nullable    | Set if the lower input is disabled                                          | null          | true          |
| $upperDisabled | boolean, nullable    | Set if the upper input is disabled                                          | null          | true          |
