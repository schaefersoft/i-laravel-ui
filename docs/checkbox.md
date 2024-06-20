# Button

The `<x-ui::chechbox/>` provides a simple checkbox.

## Imports

The checkbox requires no additional imports.

## Usage

To use the checkbox component, follow these steps.

### Example

```html

<x-ui::checkbox name="my_checkbox">
    <!--
        Your content goes here
     -->
</x-ui::checkbox>
```

## Attributes

| Name                  | Type                 | Purpose                                                 | Default value | Example value   |
|-----------------------|----------------------|---------------------------------------------------------|---------------|-----------------|
| $name                 | string, **required** | Set the name and id of the checkbox                     | -             | my_checkbox     |
| $requiredAsterisk     | bool                 | Set if there should be a red asteriks next to the label | false         | true            |
| $checked              | bool                 | Set if the checkbox is checked                          | false         | true            |
| $showValidationErrors | bool                 | Set if the validations errors should be displayed       | true          | false           |
| DEFAULT               | any                  | You may use all default HTML attributes aswell          | -             | disabled="true" |

