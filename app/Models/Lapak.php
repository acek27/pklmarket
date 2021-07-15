<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapak extends Model
{
    protected $guarded = [];

    public static $rulesCreate = [
        'nama_toko' => 'required',
        'lokasi' => 'required',
        'foto_lapak' => 'required|image',
    ];

    public static function rulesEdit(Seller $data)
    {
        return [
            'nama_toko' => 'required',
            'lokasi' => 'required',
            'foto_lapak' => 'required|image',
        ];
    }
}
