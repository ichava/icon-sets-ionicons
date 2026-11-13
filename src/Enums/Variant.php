<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsIonicons\Enums;

use Simtabi\Laranail\Ichava\Traits\HasIconSetVariants;
use Simtabi\Laranail\Ichava\Contracts\IconSetVariantInterface;
use Simtabi\Laranail\Ichava\IconSetsIonicons\Constants\IconsConstants;

/**
 * Type-safe variant selection for Ionicons (filled / outline / sharp).
 */
enum Variant: string implements IconSetVariantInterface
{
    use HasIconSetVariants;

    case FILLED = 'filled';
    case OUTLINE = 'outline';
    case SHARP = 'sharp';

    public function getPath(): string
    {
        return IconsConstants::getSvgPath($this->value);
    }

    private static function getDefaultValue(): string
    {
        return IconsConstants::getDefaultVariant() ?? self::FILLED->value;
    }

    private static function getClassPrefix(): string
    {
        return IconsConstants::getPrefix();
    }
}
