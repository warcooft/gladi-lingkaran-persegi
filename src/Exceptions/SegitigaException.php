<?php

namespace Gladi\LingkaranPersegi\Exceptions;

use RuntimeException;

final class SegitigaException extends RuntimeException
{
    public static function forParamGreaterThanZero(): SegitigaException
    {
        return new self("Alas dan tinggi harus lebih besar dari nol.");
    }
}
