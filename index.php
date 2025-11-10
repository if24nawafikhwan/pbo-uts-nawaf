<?php

require_once('./LuasLingkaran.php'); // memanggil file class
use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(10);
$lingkaran->tampil('roda');
