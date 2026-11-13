<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Ionicons -- localisable strings
|--------------------------------------------------------------------------
|
| An overlay, not a second source of truth. `name` and `description` are
| deliberately absent: IconRegistry::fromDirectory() reads those from
| resources/assets/svg/config.json, which is canonical. A copy here would
| drift from it, and nothing would notice, because nothing loads this file
| for those keys. A non-English locale may add them to override; `en` must
| not.
|
| Variant keys match Simtabi\Laranail\Ichava\IconSetsIonicons\Enums\Variant.
|
*/

return [
    'variants' => [
        'filled'  => 'Filled',
        'outline' => 'Outline',
        'sharp'   => 'Sharp',
    ],

    'variant_descriptions' => [
        'filled'  => 'Solid style, and the 94 logo icons',
        'outline' => 'Stroked style',
        'sharp'   => 'Solid style with square corners',
    ],
];
