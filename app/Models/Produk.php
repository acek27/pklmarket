<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guarded = [];
    protected $with = ['kategoris'];

    public static $rulesCreate = [
        'nama_produk' => 'required',
        'harga' => 'required|numeric',
        'deskripsi' => 'nullable',
        'foto_produk' => 'nullable|image',
    ];

    public static function rulesEdit(Produk $data)
    {
        return [
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
            'foto_produk' => 'nullable|image',
        ];
    }

    public function lapaks()
    {
        return $this->belongsTo(Lapak::class, 'lapak_id');
    }
    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
