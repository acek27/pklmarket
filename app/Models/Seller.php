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

    public function setWhatsappAttribute($value)
    {
        $this->attributes['whatsapp'] = ltrim($value, 0);

    }

    public function setTelpAttribute($value)
    {
        $this->attributes['telp'] = ltrim($value, 0);

    }
    public function getNamaPedagangAttribute($value)
    {
        return ucwords($value);
    }

    public function lapaks()
    {
        return $this->hasMany(Lapak::class);
    }
}
