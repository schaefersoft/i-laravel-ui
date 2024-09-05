# Menu

<img src="https://imgur.com/a/2MXqWFi" style="max-height: 10rem;"/>

The Menu component provides a simple and lightweight solution for creating beautiful menus your Laravel
application.

## Imports

The button component requires no additional imports.

## Usage

To use the button component, follow these steps.

### Example

```html
<x-ui::menu>
    <x-ui::menu-title>
        My Menu
    </x-ui::menu-title>
    <x-ui::menu-link href="/cool" :respect-sub-navigation="false">
        Cool link
    </x-ui::menu-link>

    <x-ui::menu-divider/>
</x-ui::menu>
```

## Components

### Menu

The Menu is the parent, you need. It renders a `<ul/>` element to display the menu. It has no attributes.

### Menu title

The title renders a styled title. It has a slot to set the content of the title.

#### Example

```html
<x-ui::menu-title>
    Settings
</x-ui::menu-title>
```

### Menu Divider

Renders a simple divider for the menu.

#### Example

```html
<x-ui::menu-divider/>
```

### Menu Link

The link renders a link. It has a slot to set the content of the link.

#### Example

```html
<x-ui::menu-link href="/settings"
                 :respect-sub-navigation="false">
    Settings
</x-ui::menu-link>
```

#### Slot

The link has a slot for a extra, this is a item, which is shown at the end of the link (intended for a badge or button)

```html
<x-ui::menu-link href="/settings"
                 :respect-sub-navigation="false">
    Settings
    
    <x-slot name="extra">
        6
    </x-slot>
</x-ui::menu-link>
```

#### Attributes

| Name                  | Type                 | Purpose                                                                | Default value | Example value |
|-----------------------|----------------------|------------------------------------------------------------------------|---------------|---------------|
| $href                 | string, **required** | Set the href of the link and when the link should be highlighted       | -             | /settings     |
| $respectSubNavigation | boolean              | If `/settings` should be highlighted when visiting `/settings/account` | false         | true          |

