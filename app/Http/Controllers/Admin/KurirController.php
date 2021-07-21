<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = Kurir::all();
        return view('kurir.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kurir.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Kurir::$rulesCreate);
        $fill = $request->all();
        if ($request->logo == '') {
            unset($fill['logo']);
        } else {
            $filename = uniqid() . '-' . uniqid() . '.' . $request->logo->
                getClientOriginalExtension();
            $path = $request->logo->storeAs('logo', $filename);
            $fill['logo'] = $path;
        }
        Kurir::create($fill);;
        return redirect()->route('kurir.index')->with(['message' => 'Berhasil menyimpan']);
    }

    public function file($id)
    {
        $poster = Kurir::find($id);
        $file = storage_path('app/' . $poster->logo);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kurir::find($id);
        return view('kurir.edit', compact('data'));
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
        $data = Kurir::findOrFail($id);
        $this->validate($request, Kurir::rulesEdit($data));
        $fill = $request->all();
        if ($request->logo == '') {
            unset($fill['logo']);
        } else {
            $filename = uniqid() . '-' . uniqid() . '.' . $request->logo->
                getClientOriginalExtension();
            $path = $request->logo->storeAs('logo', $filename);
            $fill['logo'] = $path;
        }
        $data->update($fill);;
        return redirect()->route('kurir.index')->with(['message' => 'Berhasil menyimpan']);
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
