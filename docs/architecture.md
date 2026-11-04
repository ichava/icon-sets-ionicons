# Architecture

*Explanation.* What this pack is, what it delegates, and why it is shaped that way.

## What it ships

1,357 SVGs, addressed by variants -- see [Variants](variants.md). Counted from the tracked
files rather than quoted from prose:

```bash
git ls-tree -r --name-only origin/main -- resources/assets/svg/files | grep -c '\.svg$'
```

Besides the assets it ships a provider, a constants class, an enum for its addressing axis, and a
Blade component extending core's. That is the whole surface.

## Why a subset

No subset: the whole `dist/svg` directory. Upstream names carry the style as a suffix (`heart-outline.svg`); the suffix moves into the folder (`outline/heart`). The 94 `logo-*` icons exist in one style only and sit in `filled/`.

Measured on 2026-11-04: before the subset, 1,357 SVGs, 754,857 bytes, 5.3 MB on disk; after it, 1,357 SVGs, 754,585 bytes, 5.3 MB on disk (nothing dropped; sanitising removed 272 bytes). The pack plan
caps a pack at 150 MB on disk and 30,000 SVGs, because every install downloads the whole archive and
most applications use one style.

## It depends on core, and core does not depend on it

The pack registers its icon directory with core's `IconRegistry` during `bootingPackage()`, after
core's singletons are bound. Core discovers installed packs at runtime. It has no list of them, so a
pack is added by installing it and removed by removing it.

## It requires `laranail/package-tools` directly

The provider writes `Package` into its own `configurePackage()` signature, so it depends on that
class whatever the dependency graph delivers transitively through core. **Require what you import**
is the rule; a transitive dependency is not a contract.

## Upstream

Its upstream is the `ionicons` npm package `8.1.0` (ionic-team/ionicons tag `v8.1.0`), directory `dist/svg`. The version these SVGs came from is recorded in
`resources/assets/svg/config.json` under `upstream.current_version`, and the licence text's SHA-256
under `license.sha256`, rather than written out here, so the two cannot drift.

## See also

- [Core architecture](https://github.com/ichava/core/blob/main/docs/architecture.md) -- topology, boot order, the registry
- [Attribution](attribution.md) -- the upstream project and its licence
- [Release](release.md)

---

[← Docs index](../README.md#documentation)
