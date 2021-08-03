@extends('layouts.layout-master')
@section('title')
    {{$key->nama_kategori}}
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
                            <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">{{$key->nama_kategori}}</h2>
                        </div>
                        <div class="row">
                            @foreach($produk->where('kategori_id',$key->id) as $datum)
                                <div class="col-md-4 col-6 col-sm-6 col-lg-3 col-xxl-4">
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
                                                    <a href="{{route('produk.show', $datum->id)}}"
                                                       class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                        View</a>
                                                    <a href="#" class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                                </div>
                                            </div>
                                            <div
                                                class="text-center mt-0 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                <span
                                                    class="font-size-lg font-weight-bold text-primary">Rp {{number_format($datum->harga,0,',','.')}}</span>
                                                <a href="{{route('produk.show',$datum->id)}}"
                                                   class="font-size-sm font-weight-bolder text-dark-75 text-hover-primary mb-0">{{$datum->nama_produk}}</a>
                                                <span class="text-muted">{{$datum->lapaks->nama_toko}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{--                    <a href="{{url('view-all')}}" class="btn btn-light-primary btn-sm font-weight-bolder">Load More</a>--}}

                </div>
            </div>
        </div>
    </div>
    <!--end::Row-->

@endsection

@section('js')

@endsection
