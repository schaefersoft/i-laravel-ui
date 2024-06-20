# Button

The `<x-ui::button/>` provides a simple prefabricated button. It only comes in one color for now.

## Imports

The button requires no additional imports.

## Usage

To use the button component, follow these steps.

### Example

```html
<x-ui::button type="submit">
    <!--
        Your content goes here
     -->
</x-ui::button>
```

## Attributes

| Name    | Type                 | Purpose                                            | Default value | Example value |
|---------|----------------------|----------------------------------------------------|---------------|---------------|
| $type   | string, **required** | Set the type of the button (submit, button, reset) | -             | submit        |
| DEFAULT | any                  | You may use all default HTML attributes aswell     | -             | id="myButton" |

