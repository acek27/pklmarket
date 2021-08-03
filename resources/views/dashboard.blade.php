@extends('layouts.layout-master')
@section('title')
    Home
@endsection

@section('content')
    <div class="d-flex flex-row">
        <!--begin::Aside-->
        <div class="flex-column offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
            <!--begin::Forms Widget 13-->
            <div class="card card-custom gutter-b">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column mb-3">
                        <span class="card-label font-size-h3 font-weight-bolder text-dark">Add New Product</span>
                        <span
                            class="text-muted mt-5 font-weight-bolder font-size-lg">Pending Image</span>
                    </h3>
                </div>
                <!--begin::Body-->
                <div class="card-body pt-4">
                    <!--begin::Form-->
                    <form>
                        <!--begin::Product images-->
                        <div class="d-flex mb-8 justify-content-between">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-70 flex-shrink-0 mr-4 bg-light">
                                <div class="symbol-label"
                                     style="background-image: url('assets/media/products/11.png')"></div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Symbol-->
                            <div class="symbol symbol-70 flex-shrink-0 mr-4">
                                <div class="symbol-label"
                                     style="background-image: url('assets/media/products/12.png')"></div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Symbol-->
                            <div class="symbol symbol-70 flex-shrink-0">
                                <a href="#"
                                   class="h-70px w-70px btn btn-light-primary d-flex flex-column flex-center font-weight-bolder p-0">
															<span class="svg-icon svg-icon-lg m-0">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Image.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"/>
																		<path
                                                                            d="M6,5 L18,5 C19.6568542,5 21,6.34314575 21,8 L21,17 C21,18.6568542 19.6568542,20 18,20 L6,20 C4.34314575,20 3,18.6568542 3,17 L3,8 C3,6.34314575 4.34314575,5 6,5 Z M5,17 L14,17 L9.5,11 L5,17 Z M16,14 C17.6568542,14 19,12.6568542 19,11 C19,9.34314575 17.6568542,8 16,8 C14.3431458,8 13,9.34314575 13,11 C13,12.6568542 14.3431458,14 16,14 Z"
                                                                            fill="#000000"/>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>Upload</a>
                            </div>
                            <!--end::Symbol-->
                        </div>
                        <!--end::Product images-->
                        <!--begin::Product info-->
                        <div class="mt-6">
                            <div class="text-muted mb-4 font-weight-bolder font-size-lg">Product
                                Info
                            </div>
                            <!--begin::Input-->
                            <div class="form-group mb-8">
                                <label class="font-weight-bolder">Name</label>
                                <input type="text"
                                       class="form-control form-control-solid form-control-lg"
                                       placeholder=""/>
                            </div>
                            <div class="form-group mb-8">
                                <label class="font-weight-bolder">Category</label>
                                <select class="form-control form-control-solid form-control-lg">
                                    <option></option>
                                    <option>Mens</option>
                                    <option>Womens</option>
                                    <option>Accessories</option>
                                    <option>Technology</option>
                                    <option>Appliances</option>
                                </select>
                            </div>
                            <div class="form-group mb-8">
                                <label class="font-weight-bolder">Size</label>
                                <select class="form-control form-control-solid form-control-lg">
                                    <option></option>
                                    <option>XS</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                            </div>
                            <div class="form-group mb-8">
                                <label for="exampleTextarea"
                                       class="font-weight-bolder">Description</label>
                                <textarea class="form-control form-control-solid form-control-lg"
                                          rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bolder">Price (Euro)</label>
                                <input type="text"
                                       class="form-control form-control-solid form-control-lg"
                                       placeholder=""/>
                            </div>
                            <!--begin::Color-->
                            <div class="form-group">
                                <label class="font-weight-bolder">Color</label>
                                <div class="radio-inline mb-11">
                                    <label class="radio radio-accent radio-danger mr-0">
                                        <input type="radio" name="color-selector"
                                               checked="checked"/>
                                        <span></span>
                                    </label>
                                    <label class="radio radio-accent radio-primary mr-0">
                                        <input type="radio" name="color-selector"/>
                                        <span></span>
                                    </label>
                                    <label class="radio radio-accent radio-success mr-0">
                                        <input type="radio" name="color-selector"/>
                                        <span></span>
                                    </label>
                                    <label class="radio radio-accent radio-info mr-0">
                                        <input type="radio" name="color-selector"/>
                                        <span></span>
                                    </label>
                                    <label class="radio radio-accent radio-dark mr-0">
                                        <input type="radio" name="color-selector"/>
                                        <span></span>
                                    </label>
                                    <label class="radio radio-accent radio-secondary mr-0">
                                        <input type="radio" name="color-selector"/>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <!--end::Color-->
                            <button type="submit"
                                    class="btn btn-primary font-weight-bolder mr-2 px-8">Save
                            </button>
                            <button type="reset"
                                    class="btn btn-clear font-weight-bolder text-muted px-8">Discard
                            </button>
                            <!--end::Input-->
                        </div>
                        <!--end::Product info-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Forms Widget 13-->
            <!--begin::List Widget 21-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column mb-5">
                                            <span
                                                class="card-label font-weight-bolder text-dark mb-1">Recent Products</span>
                        <span
                            class="text-muted mt-2 font-weight-bold font-size-sm">New Arrivals</span>
                    </h3>
                    <div class="card-toolbar">
                        <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-header font-weight-bold py-4">
                                        <span class="font-size-lg">Choose Label:</span>
                                        <i class="flaticon2-information icon-md text-muted"
                                           data-toggle="tooltip" data-placement="right"
                                           title="Click to learn more..."></i>
                                    </li>
                                    <li class="navi-separator mb-3 opacity-70"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-dark">Staff</span>
																		</span>
                                        </a>
                                    </li>
                                    <li class="navi-separator mt-3 opacity-70"></li>
                                    <li class="navi-footer py-4">
                                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-2">
                    <!--begin::Item-->
                    <div class="d-flex mb-8">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
                            <div class="d-flex flex-column">
                                <div class="symbol-label mb-3"
                                     style="background-image: url('assets/media/stock-600x400/img-23.jpg')"></div>
                                <a href="#"
                                   class="btn btn-light-primary font-weight-bolder py-2 font-size-sm">Edit</a>
                            </div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                            <a href="#"
                               class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-2">Darius
                                the Great</a>
                            <span class="text-muted font-weight-bold font-size-sm mb-3">All it takes tank credibility is one glaring error</span>
                            <span class="text-muted font-weight-bold font-size-lg">Price:
														<span
                                                            class="text-dark-75 font-weight-bolder">99.00$</span></span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
                            <div class="d-flex flex-column">
                                <div class="symbol-label mb-3"
                                     style="background-image: url('assets/media/stock-600x400/img-25.jpg')"></div>
                                <a href="#"
                                   class="btn btn-light-primary font-weight-bolder py-2 font-size-sm">Edit</a>
                            </div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                            <a href="#"
                               class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-2">Nike
                                Airmax</a>
                            <span class="text-muted font-weight-bold font-size-sm mb-3">All it takes tank credibility is one glaring error</span>
                            <span class="text-muted font-weight-bold font-size-lg">Price:
														<span
                                                            class="text-dark-75 font-weight-bolder">99.00$</span></span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 21-->
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
                                        <form
                                            class="form d-flex align-items-md-center flex-sm-row flex-column flex-grow-1 flex-sm-grow-0">
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
                                                <input type="text"
                                                       class="form-control border-0 font-weight-bold pl-2"
                                                       placeholder="Produk">
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <span
                                                class="bullet bullet-ver h-25px d-none d-sm-flex mr-2"></span>
                                            <div
                                                class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
												<span class="svg-icon svg-icon-lg">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<rect fill="#000000" x="4" y="4" width="7" height="7"
                                                                  rx="1.5"></rect>
															<path
                                                                d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                                fill="#000000" opacity="0.3"></path>
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
                                                <input type="text"
                                                       class="form-control border-0 font-weight-bold pl-2"
                                                       placeholder="Kategori" data-toggle="dropdown"
                                                       aria-haspopup="true" aria-expanded="false"
                                                       data-target="kt_searchbar_7_category-options"
                                                       data-offset="0,10" readonly="readonly">
                                                <div id="kt_searchbar_7_category-options"
                                                     class="dropdown-menu dropdown-menu-sm">
                                                    <div class="dropdown-item cursor-pointer">HR
                                                        Management
                                                    </div>
                                                    <div class="dropdown-item cursor-pointer">
                                                        Developers
                                                    </div>
                                                    <div class="dropdown-item cursor-pointer">
                                                        Creative
                                                    </div>
                                                    <div class="dropdown-divider"></div>
                                                    <div class="dropdown-item cursor-pointer">Top
                                                        Management
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->

                                            <button type="submit"
                                                    class="btn btn-dark font-weight-bold btn-hover-light-primary mt-3 mt-sm-0 px-7">
                                                Search
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

