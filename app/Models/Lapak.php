<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapak extends Model
{
    protected $guarded = [];
    protected $with = ['sellers'];

    public static $rulesCreate = [
        'nama_toko' => 'required',
        'deskripsi' => 'nullable',
        'lokasi' => 'required',
        'foto_lapak' => 'nullable|image',
    ];

    public static function rulesEdit(Lapak $data)
    {
        return [
            'nama_toko' => 'required',
            'deskripsi' => 'nullable',
            'lokasi' => 'required',
            'foto_lapak' => 'nullable|image',
        ];
    }

    public function getNamaTokoAttribute($value)
    {
        return ucwords($value);
    }

    public function getLokasiAttribute($value)
    {
        return ucfirst($value);
    }

    public function sellers()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }
}
