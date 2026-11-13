# Attribution

This package has two owners, and each part keeps its own licence.

| Part | Owner | Licence |
|---|---|---|
| The SVG icons in `resources/assets/svg/files/` | Ionic | MIT, text below |
| Everything else: the PHP, configuration, translations, tests and documentation | Simtabi LLC | MIT, see [`LICENSE`](LICENSE) |

Simtabi LLC packages and redistributes the icons. It did not draw them and claims no authorship of them.

## Ionicons

- **Project**: [Ionicons](https://ionic.io/ionicons), source [github.com/ionic-team/ionicons](https://github.com/ionic-team/ionicons)
- **Author**: Ionic
- **Vendored version**: 8.1.0 of `ionicons` (`upstream.current_version` in `resources/assets/svg/config.json`), upstream ref `v8.1.0`
- **Licence**: MIT, SHA-256 `c89dabc60b2e4e1a04b33bd7010b5a56bb4725ffe8c00d793a5ae009fbbfebd8`, recorded as `license.sha256` in `config.json`

The MIT licence lets you use, modify and redistribute the icons, on one condition: the copyright notice and permission notice below go with every copy or substantial portion. This file and the licence text at [`resources/assets/svg/licenses/ionicons/LICENSE`](resources/assets/svg/licenses/ionicons/LICENSE) ship in the package so those conditions hold wherever the package goes. If you copy the SVGs out of the package, copy this notice with them.

### What is included

No subset: the whole `dist/svg` directory. Upstream names carry the style as a suffix (`heart-outline.svg`); the suffix moves into the folder (`outline/heart`). The 94 `logo-*` icons exist in one style only and sit in `filled/`.

| Variant | Icons | Style |
|---|---:|---|
| `filled` | 515 | Solid style, and the 94 logo icons |
| `outline` | 421 | Stroked style |
| `sharp` | 421 | Solid style with square corners |

The upstream licence, verbatim from `LICENSE` at `v8.1.0`:

```text
The MIT License (MIT)

Copyright (c) 2015-present Ionic (http://ionic.io/)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
```

## Trademarks

The `logo-*` icons depict trademarks of their owners (GitHub, Apple, Google and others). The MIT licence covers the drawings, not the marks: using a logo still needs the owner's permission where trademark law requires it, and implies no endorsement.

## Crediting

The licence asks only for the notice above to travel with the icons. A visible credit is not required, but is welcome:

> Icons from [Ionicons](https://ionic.io/ionicons) by Ionic (MIT).
