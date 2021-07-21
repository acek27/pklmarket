@extends('layouts.layout-master')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="row">
        <a href="{{route('kurir.create')}}" class="btn btn-primary mb-2">Data Baru</a>
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
                    <td>+62{{$datum->kontak}}</td>
                    <td><div class="symbol symbol-50 symbol-light-white">
                            <div class="symbol-label">
                                <img src="{{route('kurir.file',$datum->id)}}"
                                     class="h-75" alt="">
                            </div>
                        </div></td>
                    <td>
{{--                        <a class="btn btn-primary" href="{{route('kurir.show',$datum->id)}}">lihat</a>--}}
                        <a class="btn btn-info" href="{{route('kurir.edit',$datum->id)}}">edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
