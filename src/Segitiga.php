<?php

namespace Gladi\LingkaranPersegi;

use Gladi\LingkaranPersegi\Interfaces\BentukInterface;

class Segitiga implements BentukInterface
{
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas()
    {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function hitungKeliling()
    {
        // Implementasi sederhana untuk segitiga sama sisi
        return 3 * $this->alas;
    }
}
