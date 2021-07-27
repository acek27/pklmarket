@extends('layouts.layout-master')
@section('title')
    Detail Produk
@endsection

@section('css')

@endsection

@section('content')
    <!--begin::Row-->
    <div class="row">

        <div class="col-md-12 col-lg-12 col-xxl-12">
            <!--begin::Engage Widget 14-->
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body p-15 pb-20">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xxl-6">
                            <div class="col-xxl-5 mb-11 mb-xxl-0">
                                <!--begin::Image-->
                                <div class="card card-custom card-stretch">
                                    <div
                                        class="card-body p-0 rounded px-10 py-15 d-flex align-items-center justify-content-center"
                                        style="background-color: #FFCC69;">
                                        @if(is_null($data->foto_produk))
                                            <img src="{{asset('assets/media/products/16.png')}}" alt=""
                                                 class="mw-100 w-200px">
                                        @else
                                            <img src="{{route('produk.file', $data->id)}}" class="mw-100 w-200px"
                                                 style="transform: scale(1.6);">
                                        @endif
                                    </div>
                                </div>
                                <!--end::Image-->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xxl-6">
                            <div class="col-xxl-7 pl-xxl-11">
                                <h2 class="font-weight-bolder text-dark mb-7"
                                    style="font-size: 20px;">{{$data->nama_produk}}</h2>
                                <div class="font-size-h2 mb-7 text-dark-50">Harga
                                    <span
                                        class="text-info font-weight-boldest ml-2">  Rp {{number_format($data->harga, 0, ',', '.')}}</span>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50 symbol-light-white">
                                        <div class="symbol-label">
                                            <img src="{{route('lapak.file', $data->lapaks->id)}}" class="h-75" alt="">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column font-weight-bold">
                                        <a href="{{route('lapak.show', $data->lapaks->id)}}"
                                           class="text-dark text-hover-primary mb-1 font-size-lg">{{$data->lapaks->nama_toko}}</a>
                                        <span class="text-muted">{{$data->lapaks->lokasi}}</span>
                                    </div>
                                </div>
                                <hr>
                                <h5>Deskripsi</h5>
                                <div class="line-height-xl">{{$data->deskripsi}}</div>
                                <hr>
                                <h5>Hubungi Pedagang</h5>
                                <a class="text-success" target="_blank"
                                   href="{{url('https://api.whatsapp.com/send?phone=+62'.$data->lapaks->sellers->whatsapp.'&text=Saya ingin memesan '.$data->nama_produk.' di warung '.$data->lapaks->nama_toko)}}">
                                    +62{{$data->lapaks->sellers->whatsapp}}</a>
                                <hr>
                                <h5>Kurir</h5>
                                <div class="form-group row">
                                    @foreach($kurir as $mitra)
                                        <a class="btn btn-primary ml-1 mt-1" target="_blank"
                                           href="{{url('https://api.whatsapp.com/send?phone=+62'.$mitra->kontak.'&text=Saya ingin memesan '.$data->nama_produk.' di warung '.$data->lapaks->nama_toko)}}">{{$mitra->nama_kurir}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!--end::Engage Widget 14-->
        </div>

    </div>
    <!--end::Row-->

@endsection

@section('js')

@endsection
