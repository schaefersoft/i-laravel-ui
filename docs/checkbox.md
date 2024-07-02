# Checkbox

<img src="https://cdn.discordapp.com/attachments/776387257224921088/1257620544132481034/image.png?ex=668511e7&is=6683c067&hm=f16a6e23d79563d3ef4642cdb24b23b60132a35461ecc4b8e9900d8469c2bbcc&" style="max-height: 10rem;"/>

The checkbox component provides a simple checkbox.

## Imports

The checkbox component requires no additional imports.

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

