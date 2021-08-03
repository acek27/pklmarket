@extends('layouts.layout-master')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header border-0 py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">Data Kurir</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{route('kurir.create')}}" class="btn btn-info font-weight-bolder font-size-sm">Data Baru</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-0">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
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
            <!--end::Table-->
        </div>
        <!--end::Body-->
    </div>
@endsection
