<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kriteria_komputer extends Model
{
    protected $table = "kriteria-komputer";
    protected $primarykey = "id";
    protected $filltable = ['id','c1_processor', 'c2_ram', 'c3_penyimpanan', 
                            'c4_motherboard', 'c5_merk'];
}
