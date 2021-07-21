<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    protected $guarded = [];

    public static $rulesCreate = [
        'nama_kurir' => 'required',
        'kontak' => 'nullable',
        'logo' => 'nullable|image',
    ];

    public static function rulesEdit(Kurir $data)
    {
        return [
            'nama_kurir' => 'required',
            'kontak' => 'nullable',
            'logo' => 'nullable|image',
        ];
    }

    public function setKontakAttribute($value)
    {
        $this->attributes['kontak'] = ltrim($value, 0);

    }

//    public function getKontakAttribute($value)
//    {
//        return $value ? '+62' . $value : '';
//    }
}
