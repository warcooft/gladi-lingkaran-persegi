<?php

namespace Gladi\LingkaranPersegi;

use Gladi\LingkaranPersegi\Interfaces\BentukInterface;

class Persegi implements BentukInterface
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function hitungLuas()
    {
        return $this->sisi * $this->sisi;
    }

    public function hitungKeliling()
    {
        return 4 * $this->sisi;
    }
}
