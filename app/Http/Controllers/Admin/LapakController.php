<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Lapak;
use App\Models\Produk;
use Illuminate\Http\Request;

class LapakController extends Controller
{
    public function __construct()
    {
    $this->middleware('can:admin')->except(['file','show']);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Lapak::$rulesCreate);
        $fill = $request->all();
        if ($request->foto_lapak == '') {
            unset($fill['foto_lapak']);
        } else {
            $filename = uniqid() . '-' . uniqid() . '.' . $request->foto_lapak->
                getClientOriginalExtension();
            $path = $request->foto_lapak->storeAs('foto_lapak', $filename);
            $fill['foto_lapak'] = $path;
        }
        Lapak::create($fill);;
        return redirect()->back()->with(['message' => 'Berhasil menyimpan']);
    }

    public function file($id)
    {
        $poster = Lapak::find($id);
        $file = storage_path('app/' . $poster->foto_lapak);
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
        $data = Lapak::findOrFail($id);
        $produk = Produk::where('lapak_id', $data->id)->get();
        $option = Kategori::all()->pluck('nama_kategori', 'id');
        $lapak = Lapak::all();
        $kategori= Kategori::all();
        return view('lapak.show', compact('data', 'kategori', 'produk', 'option','lapak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Lapak::findOrFail($id);
        return view('lapak.edit', compact('data'));
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
        $data = Lapak::findOrFail($id);
        $this->validate($request, Lapak::rulesEdit($data));
        $fill = $request->all();
        if ($request->foto_lapak == '') {
            unset($fill['foto_lapak']);
        } else {
            $filename = uniqid() . '-' . uniqid() . '.' . $request->foto_lapak->
                getClientOriginalExtension();
            $path = $request->foto_lapak->storeAs('foto_lapak', $filename);
            $fill['foto_lapak'] = $path;
        }
        $data->update($fill);;
        return redirect()->route('seller.show', $data->seller_id)->with(['message' => 'Berhasil menyimpan']);
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
