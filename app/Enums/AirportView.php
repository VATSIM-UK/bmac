<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static NAME()
 * @method static static ICAO()
 * @method static static IATA()
 */
final class AirportView extends Enum
{
    public const NAME = 0;
    public const ICAO = 1;
    public const IATA = 2;
}
