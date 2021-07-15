@extends('layouts.master')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="row">
        <a href="{{route('seller.create')}}" class="btn btn-primary mb-2">Data Baru</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Nama Seller</th>
                <th scope="col">Alamat</th>
                <th scope="col">HP</th>
                <th scope="col">WA</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $datum)
                <tr>
                    <th>{{$datum->nama_pedagang}}</th>
                    <td>{{$datum->alamat}}</td>
                    <td>{{$datum->telp}}</td>
                    <td>{{$datum->whatsapp}}</td>
                    <td><a href="{{route('seller.show',$datum->id)}}">lihat</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
