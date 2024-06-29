<?php

namespace Practice\LingkaranPersegi;

use Practice\LingkaranPersegi\Interfaces\BentukInterface;

class Lingkaran implements BentukInterface
{
    private $jariJari;

    public function __construct($jariJari)
    {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas()
    {
        return pi() * $this->jariJari * $this->jariJari;
    }

    public function hitungKeliling()
    {
        return 2 * pi() * $this->jariJari;
    }
}
