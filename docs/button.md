# Button component

<img src="https://cdn.discordapp.com/attachments/776387257224921088/1257620098210861136/image.png?ex=6685117c&is=6683bffc&hm=a4f0fbb8daeaa12ad5fcad0c41f014f0cc219bbe4d49651a1339adaeb23d7e17&" style="max-height: 10rem;"/>

The button component provides a simple prefabricated button. It only comes in one color for now.

## Imports

The button component requires no additional imports.

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

