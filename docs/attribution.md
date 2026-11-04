# Attribution and licence

*Reference.*

## Upstream

[Ionicons](https://ionic.io/ionicons) is made by Ionic. Source: [github.com/ionic-team/ionicons](https://github.com/ionic-team/ionicons).

## Licence

The icons and this package are owned separately:

- **The icons** are © Ionic, under [MIT](https://github.com/ionic-team/ionicons/blob/v8.1.0/LICENSE). Simtabi LLC redistributes them and claims no authorship of them.
- **This package's code** (provider, enum, component, configuration) is © Simtabi LLC, [MIT](../LICENSE).

MIT allows commercial and non-commercial use, modification and redistribution, provided the copyright notice and permission notice accompany every copy. That is a condition, not a courtesy: the upstream notice is reproduced in [`ATTRIBUTION.md`](../ATTRIBUTION.md) at the package root, which ships in the dist archive (`docs/` does not). Keep them with the icons if you copy them out of the package.

## Credit

A visible credit is not required by the licence, but is welcome on a "credits" or "about" page:

> Icons from [Ionicons](https://ionic.io/ionicons) by Ionic (MIT).

## Updating from upstream

Asset refreshes run **maintainer-side** via
[`ichava/icon-sets-sync`](https://github.com/ichava/icon-sets-sync). End users **don't** refresh
locally -- `vendor/` is regenerated on every `composer install`, so any local change is discarded.
Run `php artisan ichava::ichava-core.check-updates --package=ichava/icon-sets-ionicons` to see whether a new upstream
version is available.

## See also

- [Ionicons](https://ionic.io/ionicons)
- [Source repository](https://github.com/ionic-team/ionicons)

---

[← Docs index](../README.md#documentation)
