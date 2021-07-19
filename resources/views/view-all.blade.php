@extends('layouts.layout-master')
@section('title')
    Manakan
@endsection

@section('css')

@endsection

@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body">
                    <div class="mb-11">
                        <div class="d-flex justify-content-between align-items-center mb-7">
                            <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">{{$key == 1 ? 'Makanan' : 'Minuman'}}</h2>
                        </div>
                        <div class="row">
                            @foreach($data as $datum)
                            <div class="col-md-4 col-lg-3 col-xxl-4">
                                <div class="card card-custom card-shadowless">
                                    <div class="card-body p-0">
                                        <div class="overlay">
                                            <div class="overlay-wrapper rounded bg-light text-center">
                                                @if(is_null($datum->foto_produk))
                                                    <img src="{{asset('assets/media/products/16.png')}}" alt=""
                                                         class="mw-100 w-200px">
                                                @else
                                                    <img src="{{route('produk.file',$datum->id)}}" alt=""
                                                         class="mw-100 w-200px">
                                                @endif
                                            </div>
                                            <div class="overlay-layer">
                                                <a href="#" class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                    View</a>
                                                <a href="#" class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                            </div>
                                        </div>
                                        <div
                                            class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                            <a href="{{url('produk')}}"
                                               class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">NAMA
                                                MAKANAN</a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 symbol-light-white">
                                                <div class="symbol-label">
                                                    <img src="assets/media/users/100_5.jpg" class="h-75" alt="">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column font-weight-bold">
                                                <a href="{{url('outlet')}}"
                                                   class="text-dark text-hover-primary mb-1 font-size-lg">Nama Toko</a>
                                                <span class="text-muted">Alamat Toko</span>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                                    </div>
                    </div>

                    <a href="{{url('view-all')}}" class="btn btn-light-primary btn-sm font-weight-bolder">Load More</a>

                </div>
            </div>
        </div>
    </div>
    <!--end::Row-->

@endsection

@section('js')

@endsection
