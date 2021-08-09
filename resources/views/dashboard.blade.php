@extends('layouts.layout-master')
@section('title')
    Home
@endsection

@section('content')
    <div class="d-flex flex-row">
        <!--begin::Aside-->
        <div class="flex-column offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
            <!--begin::List Widget 21-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column mb-5">
                                            <span
                                                class="card-label font-weight-bolder text-dark mb-1"></span>
                        <span
                            class="text-primary font-size-h4-md mt-2 font-weight-bold font-size-sm">Produk Tersedia</span>
                    </h3>

                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-2">
                    <!--begin::Item-->
                    @foreach($kategori as $kat)
                        <div class="d-flex mb-8">
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                <span class="text-muted font-weight-bold font-size-sm">{{$kat->nama_kategori}}<span class="font-weight-bold"
                                        style="float: right">{{$produk->where('kategori_id', $kat->id)->count()}}</span></span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Item-->
                    @endforeach

                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 21-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column mb-5">
                                            <span
                                                class="card-label font-weight-bolder text-dark mb-1"></span>
                        <span
                            class="text-primary mt-2 font-weight-bold font-size-h4-md">Produk Terbaru</span>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-2">
                    <!--begin::Item-->
                    @foreach($produk->take(3) as $item)
                        <div class="d-flex mb-8">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
                                <div class="d-flex flex-column">
                                    <div class="symbol-label mb-3"
                                         style="background-image: url({{route('produk.file',$item->id)}})"></div>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                <a href="#"
                                   class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-2">{{$item->nama_produk}}</a>
                                <span class="text-muted font-weight-bold font-size-sm mb-3">{{$item->deskripsi}}</span>
                                <span class="text-muted font-weight-bold font-size-lg">Harga:
														<span
                                                            class="text-dark-75 font-weight-bolder">Rp {{number_format($item->harga,0,',','.')}}</span></span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Item-->
                    @endforeach
                </div>
                <!--end::Body-->
            </div>
        </div>
        <!--end::Aside-->
        <!--begin::Layout-->
        <div class="flex-row-fluid ml-lg-8">
            <!--begin::Card-->
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body">
                    <!--begin::Engage Widget 15-->
                    <div class="card card-custom mb-12">
                        <div class="card-body rounded p-0 d-flex" style="background-color:#DAF0FD;">
                            <div
                                class="d-flex flex-column flex-lg-row-auto w-auto w-lg-350px w-xl-450px w-xxl-500px p-10 p-md-20">
                                <h1 class="font-weight-bolder text-dark">Cari disini..</h1>
                                <div class="font-size-h4 mb-8">Lebih mudah dan cepat</div>
                                <div
                                    class="d-flex align-items-md-center mb-2 flex-column flex-md-row">
                                    <div
                                        class="bg-white rounded p-4 d-flex flex-grow-1 flex-sm-grow-0">
                                        <!--begin::Form-->
                                        <form method="post" action="{{route('produk.search')}}"
                                              class="form d-flex align-items-md-center flex-sm-row flex-column flex-grow-1 flex-sm-grow-0">
                                        @csrf
                                        <!--begin::Input-->
                                            <div
                                                class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
												<span class="svg-icon svg-icon-lg">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/General/Search.svg-->
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path
                                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
															<path
                                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
                                                <input type="text" name="nama_produk"
                                                       class="form-control border-0 font-weight-bold pl-2"
                                                       placeholder="Produk" autofocus>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <span
                                                class="bullet bullet-ver h-25px d-none d-sm-flex mr-2"></span>
                                            <div
                                                class="d-flex align-items-center py-3 py-sm-0 px-sm-3">

                                                <select class="form-control text-muted" name="kategori_id" required>
                                                    @foreach($kategori as $option)
                                                        <option class="text-secondary"
                                                                value="{{$option->id}}">{{$option->nama_kategori}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <!--end::Input-->

                                            <button type="submit"
                                                    class="btn btn-dark font-weight-bold btn-hover-light-primary mt-3 mt-sm-0 px-7">
                                                Cari
                                            </button>
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                </div>
                            </div>
                            <div
                                class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover"
                                style="background-image: url(assets/media/svg/illustrations/progress.svg);"></div>
                        </div>
                    </div>
                    <!--end::Engage Widget 15-->
                    @foreach($kategori as $category)
                        <div class="mb-11">
                            <!--begin::Heading-->
                            <div class="d-flex justify-content-between align-items-center mb-7">
                                <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">{{$category->nama_kategori}}</h2>
                                <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder">View
                                    All</a>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Products-->
                            <div class="row mb-8">
                            @foreach($produk->where('kategori_id', $category->id) as $product)
                                <!--begin::Product-->
                                    <div class="col-md-4 col-xxl-4 col-sm-6 col-6 col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom card-shadowless">
                                            <div class="card-body p-0">
                                                <!--begin::Image-->
                                                <div class="overlay">
                                                    <div
                                                        class="overlay-wrapper rounded bg-light text-center">
                                                        <img
                                                            src="{{route('produk.file', $product->id)}}"
                                                            alt=""
                                                            class="mw-100 w-200px"/>
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#"
                                                           class="btn font-weight-bolder btn-sm btn-primary mr-2">Lihat</a>
                                                        <a href="#"
                                                           class="btn font-weight-bolder btn-sm btn-light-primary">Beli</a>
                                                    </div>
                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Details-->
                                                <div
                                                    class="text-center mt-0 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                    <span
                                                        class="font-size-lg font-weight-bold text-primary">Rp {{number_format($product->harga,0,',','.')}}</span>
                                                    <a href="{{route('produk.show',$product->id)}}"
                                                       class="font-size-sm font-weight-bolder text-dark-75 text-hover-primary">{{$product->nama_produk}}</a>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Product-->
                                @endforeach
                            </div>
                            <div class="separator separator-solid"></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Layout-->
    </div>
@endsection

