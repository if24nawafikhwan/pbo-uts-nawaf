<?php

namespace App\Math;

class LuasLingkaran {
    public const PHI = 3.14;
    protected int $jari;

    public function __construct($isiJari = 1) {
        $this->jari = $isiJari;
    }

    public function hitungLuas(): float {
        return self::PHI * ($this->jari ** 2);
    }

    public function tampil($nama = 'ban'): void {
        echo "Luas lingkaran {$nama} = " . $this->hitungLuas();
    }
}
