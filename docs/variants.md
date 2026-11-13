# Variants

*Reference.* The 3 variants of `ichava/icon-sets-ionicons`, and how to address them.

`ichava/icon-sets-ionicons` ships **1,357 icons across 3 variants**. Each variant is a folder under `resources/assets/svg/files/`, and core files every icon under its folder, so the variant is the first segment of the icon path.

| Variant | Path | Icons | Style |
|---|---|---:|---|
| `filled` | `filled/<name>` | 515 | Solid style, and the 94 logo icons |
| `outline` | `outline/<name>` | 421 | Stroked style |
| `sharp` | `sharp/<name>` | 421 | Solid style with square corners |

The default variant is `filled`. Always include the variant in the icon path: `ichava/icon-sets-ionicons::filled/home`.

Each SVG has `viewBox="0 0 512 512"` and the `ionicon` class. Filled and sharp icons paint with the default fill; outline icons stroke with `currentColor`.

## Examples

```blade
<x-ichava::icon name="ichava/icon-sets-ionicons::filled/home" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-ionicons::sharp/heart" class="w-6 h-6" />
```

## Variant enum (PHP)

```php
use Simtabi\Laranail\Ichava\IconSetsIonicons\Enums\Variant;

Variant::FILLED->value;                // 'filled'
Variant::OUTLINE->value;               // 'outline'
Variant::SHARP->value;                 // 'sharp'
Variant::default();             // Variant::FILLED
```

The enum implements `IconSetVariantInterface` from core, so it works wherever core's registry expects a variant.

## What is not here

No subset: the whole `dist/svg` directory. Upstream names carry the style as a suffix (`heart-outline.svg`); the suffix moves into the folder (`outline/heart`). The 94 `logo-*` icons exist in one style only and sit in `filled/`.

## See also

- [Customisation](customization.md), colour and size
- [Icon path format](https://github.com/ichava/core/blob/main/docs/tools/icon-path-format.md)

---

[← Docs index](../README.md#documentation)
