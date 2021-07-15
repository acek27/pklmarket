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
                <th scope="col">Nama</th>
                <th scope="col">Kontak</th>
                <th scope="col">Logo</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $datum)
                <tr>
                    <th>{{$datum->nama_kurir}}</th>
                    <td>{{$datum->kontak}}</td>
                    <td>{{$datum->logo}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('kurir.show',$datum->id)}}">lihat</a>
                        <a class="btn btn-info" href="{{route('kurir.edit',$datum->id)}}">edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
