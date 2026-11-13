<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\IconSetsIonicons\Enums\Variant;

/**
 * Pure-enum behaviour tests. Anything that touches config.json (default(),
 * isDefault(), getClass(), getPath()) lives in the Feature suite where the
 * Laravel container is bootstrapped.
 */
it(description: 'exposes the filled case value', closure: function () {
    expect(Variant::FILLED->getValue())->toBe('filled');
});

it(description: 'exposes the outline case value', closure: function () {
    expect(Variant::OUTLINE->getValue())->toBe('outline');
});

it(description: 'exposes the sharp case value', closure: function () {
    expect(Variant::SHARP->getValue())->toBe('sharp');
});

it(description: 'returns every case from values', closure: function () {
    expect(Variant::values())->toBe(['filled', 'outline', 'sharp']);
});

it(description: 'resolves known values and rejects unknown ones', closure: function () {
    expect(Variant::tryFromValue('filled'))->toBe(Variant::FILLED)
        ->and(Variant::tryFromValue('sharp'))->toBe(Variant::SHARP)
        ->and(Variant::tryFromValue('not-a-real-variant'))->toBeNull();
});
