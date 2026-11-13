<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\Services\IconRegistry;
use Simtabi\Laranail\Ichava\IconSetsIonicons\Enums\Variant;
use Simtabi\Laranail\Ichava\IconSetsIonicons\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsIonicons\Providers\IconsServiceProvider;

it(description: 'boots the provider without error', closure: function () {
    $providers = array_keys($this->app->getLoadedProviders());

    expect($providers)->toContain(IconsServiceProvider::class);
});

it(description: 'resolves constants from config json', closure: function () {
    expect(IconsConstants::getVendorPackage())->toBe('ichava/icon-sets-ionicons')
        ->and(IconsConstants::getTitle())->toBe('Ionicons')
        ->and(IconsConstants::getPrefix())->toBe('ion')
        ->and(IconsConstants::getDefaultVariant())->toBe('filled');
});

it(description: 'uses the config prefix in enum class helpers', closure: function () {
    expect(Variant::FILLED->getClass())->toBe('ion-filled')
        ->and(Variant::OUTLINE->getClass())->toBe('ion-outline')
        ->and(Variant::SHARP->getClass())->toBe('ion-sharp');
});

it(description: 'matches the default variant to config json', closure: function () {
    expect(Variant::default())->toBe(Variant::FILLED)
        ->and(Variant::FILLED->isDefault())->toBeTrue()
        ->and(Variant::OUTLINE->isDefault())->toBeFalse()
        ->and(Variant::SHARP->isDefault())->toBeFalse();
});

it(description: 'picks up the package in the icon registry', closure: function () {
    $registry = $this->app->make(IconRegistry::class);

    expect($registry->isRegistered('ichava/icon-sets-ionicons'))->toBeTrue(
        'IconRegistry should have ichava/icon-sets-ionicons registered after boot.',
    );
});

it(description: 'ships one directory per variant, holding the measured number of icons', closure: function () {
    // Counted 2026-11-04 from the vendored tree. The subset is deliberate (see
    // docs/architecture.md); a refresh that changes a count changes this table
    // in the same pull request, so a silently shrunk or grown variant fails.
    $expected = [
        'filled'  => 515,
        'outline' => 421,
        'sharp'   => 421,
    ];

    $files = dirname(__DIR__, 2) . '/resources/assets/svg/files';
    $actual = [];

    foreach (glob($files . '/*', GLOB_ONLYDIR) ?: [] as $dir) {
        $actual[basename($dir)] = count(glob($dir . '/*.svg') ?: []);
    }

    ksort($expected);
    ksort($actual);

    expect($actual)->toBe($expected)
        ->and(array_keys($actual))->toEqualCanonicalizing(Variant::values());
});
