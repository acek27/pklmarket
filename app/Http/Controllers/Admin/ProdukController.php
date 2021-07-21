<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Lapak;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin')->except(['file', 'show','viewall']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function viewall($id)
    {
        $key = $id;
        $data = Produk::with('lapaks')->where('kategori_id', $id)->get();
        return view('view-all', compact('data', 'key'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Produk::$rulesCreate);
        $fill = $request->all();
        if ($request->foto_produk == '') {
            unset($fill['foto_produk']);
        } else {
            $filename = uniqid() . '-' . uniqid() . '.' . $request->foto_produk->
                getClientOriginalExtension();
            $path = $request->foto_produk->storeAs('foto_produk', $filename);
            $fill['foto_produk'] = $path;
        }
        Produk::create($fill);;
        return redirect()->back()->with(['message' => 'Berhasil menyimpan']);
    }

    public function file($id)
    {
        $poster = Produk::find($id);
        $file = storage_path('app/' . $poster->foto_produk);
        return response()
            ->file($file, [
                'Cache-Control' => 'no-cache, no-store, must-revalidate',
                'Pragma' => 'no-cache',
                'Expires' => '0'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Produk::with('lapaks')->findOrFail($id);
        return view('produk.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
