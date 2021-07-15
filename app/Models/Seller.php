<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $guarded = [];
    public static $rulesCreate = [
        'nama_pedagang' => 'required',
        'alamat' => 'required',
        'telp' => 'required|numeric',
        'whatsapp' => 'required|numeric',
    ];

    public static function rulesEdit(Seller $data)
    {
        return [
            'nama_pedagang' => 'required',
            'alamat' => 'required',
            'telp' => 'required|numeric',
            'whatsapp' => 'required|numeric',
        ];
    }

    public function lapaks()
    {
        return $this->hasMany(Lapak::class);
    }
}
