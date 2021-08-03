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
                <span class="card-label font-weight-bolder text-dark">Data Pedagang</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{route('seller.create')}}" class="btn btn-info font-weight-bolder font-size-sm">Data Baru</a>
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
                            <td>+62{{$datum->telp}}</td>
                            <td>+62{{$datum->whatsapp}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('seller.show',$datum->id)}}">lihat</a>
                                <a class="btn btn-info" href="{{route('seller.edit',$datum->id)}}">edit</a>
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
