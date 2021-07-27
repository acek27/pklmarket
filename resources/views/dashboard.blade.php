@extends('layouts.layout-master')
@section('title')
    Home
@endsection

@section('css')

@endsection

@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-xl-8">
            <!--begin::Nav Panel Widget 1-->
            <div class="card card-custom gutter-b card-stretch card-shadowless">
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Nav Tabs-->
                    <ul class="dashboard-tabs nav nav-pills nav-danger row row-paddingless m-0 p-0 flex-column flex-sm-row"
                        role="tablist">
                        <!--begin::Item-->
                        <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                            <a class="nav-link active border py-10 d-flex flex-grow-1 rounded flex-column align-items-center"
                               data-toggle="pill" href="#forms_widget_tab_1">
                            <span class="nav-icon py-2 w-auto">
                                <span class="svg-icon svg-icon-3x">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                fill="#000000"/>
                                            <rect fill="#000000" opacity="0.3"
                                                  transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                                  x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                                <span class="nav-text font-size-lg py-2 font-weight-bold text-center">Home</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                            <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center"
                               data-toggle="pill" href="#forms_widget_tab_2">
                            <span class="nav-icon py-2 w-auto">
                                <span class="svg-icon svg-icon-3x">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                            <path
                                                d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                                <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Makanan</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                            <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center"
                               data-toggle="pill" href="#forms_widget_tab_3">
                            <span class="nav-icon py-2 w-auto">
                                <span class="svg-icon svg-icon-3x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"
                                                fill="#000000"/>
                                            <path
                                                d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
                                        </g>
                                    </svg>
                                </span>
                            </span>
                                <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Minuman</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                            <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center"
                               data-toggle="pill" href="#forms_widget_tab_4">
                            <span class="nav-icon py-2 w-auto">
                                <span class="svg-icon svg-icon-3x">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16"
                                                  rx="1.5"/>
                                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"/>
                                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"/>
                                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                                <span
                                    class="nav-text font-size-lg py-2 font-weight-bolder text-center">Coming Soon</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                            <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center"
                               data-toggle="pill" href="#forms_widget_tab_5">
                            <span class="nav-icon py-2 w-auto">
                                <span class="svg-icon svg-icon-3x">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                fill="#000000" opacity="0.3"/>
                                            <path
                                                d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z"
                                                fill="#000000"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                                <span
                                    class="nav-text font-size-lg py-2 font-weight-bolder text-center">Coming Soon</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                            <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center"
                               data-toggle="pill" href="#tab_forms_widget_6" id="kt_quick_actions_toggle">
                            <span class="nav-icon py-2 w-auto">
                                <span class="svg-icon svg-icon-3x">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                            <path
                                                d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"
                                                fill="#000000"/>
                                        <path
                                            d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                                <span
                                    class="nav-text font-size-lg py-2 font-weight-bolder text-center">Semua Kategori</span>
                            </a>
                        </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Nav Tabs-->
                </div>
                <!--end::Body-->
            </div>
            <!--begin::Nav Panel Widget 1-->
        </div>
        <div class="col-xl-4">
            <!--begin::Engage Widget 8-->
            <div class="card card-custom gutter-b card-stretch card-shadowless">
                <div class="card-body p-0 d-flex">
                    <div
                        class="d-flex align-items-start justify-content-start flex-grow-1 bg-light-warning p-8 card-rounded flex-grow-1 position-relative">
                        <div class="d-flex flex-column align-items-start flex-grow-1 h-100">
                            <div class="p-1 flex-grow-1">
                                <h4 class="text-warning font-weight-bolder">PROMO HARINI...!!!</h4>
                                <p class="text-dark-50 font-weight-bold mt-3">Dapatkan Potongan Harga</p>
                            </div>
                            <a href='#' class="btn btn-link btn-link-warning font-weight-bold">Lihat Semua Promo
                                <span class="svg-icon svg-icon-lg svg-icon-warning">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <rect fill="#000000" opacity="0.3"
                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                          x="11" y="5" width="2" height="14" rx="1"/>
                                    <path
                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
                                </g>
                            </svg>
                                    <!--end::Svg Icon-->
                        </span></a>
                        </div>
                        <div class="position-absolute right-0 bottom-0 mr-5 overflow-hidden">
                            <img src="{{asset('assets/media/svg/humans/custom-13.svg')}}"
                                 class="max-h-200px max-h-xl-275px mb-n20" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Engage Widget 8-->
        </div>
    </div>
    <!--end::Row-->

    <div class="tab-content m-0 p-0">
        <div class="tab-pane active" id="forms_widget_tab_1" role="tabpanel">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body">
                    <div class="mb-11">
                        <div class="d-flex justify-content-between align-items-center mb-7">
                            <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Makanan</h2>
                            <a href="{{route('view.all', 1)}}" class="btn btn-light-primary btn-sm font-weight-bolder">View
                                All</a>
                        </div>
                        <div class="row">
                            @foreach(count($produk->where('kategori_id', 1)) > 2 ? $produk->where('kategori_id', 1)->random(3) : $produk->where('kategori_id', 1) as $makanan)
                                <div class="col-md-4 col-lg-3 col-xxl-4">
                                    <div class="card card-custom card-shadowless">
                                        <div class="card-body p-0">
                                            <div class="overlay">
                                                <div class="overlay-wrapper rounded bg-light text-center">
                                                    @if(is_null($makanan->foto_produk))
                                                        <img src="{{asset('assets/media/products/16.png')}}" alt=""
                                                             class="mw-100 w-200px">
                                                    @else
                                                        <img src="{{route('produk.file',$makanan->id)}}" alt=""
                                                             class="mw-100 w-200px">
                                                    @endif
                                                </div>
                                                <div class="overlay-layer">
                                                    <a href="{{route('produk.show', $makanan->id)}}"
                                                       class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                        View</a>
                                                    <button data-toggle="modal"
                                                            data-target="#modal-schedule"
                                                            class="btn font-weight-bolder btn-sm btn-light-primary">
                                                        Purchase
                                                    </button>
                                                </div>
                                            </div>
                                            <div
                                                class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                <p class="text-info font-weight-boldest ml-2 mb-0">
                                                    Rp {{number_format($makanan->harga, 0, ',', '.')}}</p>
                                                <a href="{{('produk')}}"
                                                   class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">{{$makanan->nama_produk}}</a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 symbol-light-white">
                                                    <div class="symbol-label">
                                                        <img src="{{route('lapak.file',$makanan->lapaks->id)}}"
                                                             class="h-75" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="{{route('lapak.show', $makanan->lapaks->id)}}"
                                                       class="text-dark text-hover-primary mb-1 font-size-lg">{{$makanan->lapaks->nama_toko}}</a>
                                                    <span class="text-muted">{{$makanan->lapaks->lokasi}}</span>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <hr>

                    <div class="mb-11">
                        <div class="d-flex justify-content-between align-items-center mb-7">
                            <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Minuman</h2>
                            <a href="{{route('view.all', 2)}}" class="btn btn-light-primary btn-sm font-weight-bolder">View
                                All</a>
                        </div>
                        <div class="row">
                            @foreach(count($produk->where('kategori_id', 2)) > 2 ? $produk->where('kategori_id', 1)->random(3) : $produk->where('kategori_id', 2) as $minuman)
                                <div class="col-md-4 col-lg-3 col-xxl-4">
                                    <div class="card card-custom card-shadowless">
                                        <div class="card-body p-0">
                                            <div class="overlay">
                                                <div class="overlay-wrapper rounded bg-light text-center">
                                                    @if(is_null($minuman->foto_produk))
                                                        <img src="{{asset('assets/media/products/16.png')}}" alt=""
                                                             class="mw-100 w-200px">
                                                    @else
                                                        <img src="{{route('produk.file',$minuman->id)}}" alt=""
                                                             class="mw-100 w-200px">
                                                    @endif
                                                </div>
                                                <div class="overlay-layer">
                                                    <a href="{{route('produk.show', $minuman->id)}}"
                                                       class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                        View</a>
                                                    <a href="#" class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                                </div>
                                            </div>
                                            <div
                                                class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                <p class="text-info font-weight-boldest ml-2 mb-0">
                                                    Rp {{number_format($minuman->harga, 0, ',', '.')}}</p>
                                                <a href="{{('produk')}}"
                                                   class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">{{$minuman->nama_produk}}</a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 symbol-light-white">
                                                    <div class="symbol-label">
                                                        <img src="{{route('lapak.file',$minuman->lapaks->id)}}"
                                                             class="h-75" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="{{route('lapak.show',$minuman->lapaks->id)}}"
                                                       class="text-dark text-hover-primary mb-1 font-size-lg">{{$minuman->lapaks->nama_toko}}</a>
                                                    <span class="text-muted">{{$minuman->lapaks->lokasi}}</span>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="tab-pane" id="forms_widget_tab_2" role="tabpanel">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body">

                    <div class="mb-11">
                        <div class="d-flex justify-content-between align-items-center mb-7">
                            <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Makanan</h2>
                            <a href="{{route('view.all', 1)}}" class="btn btn-light-primary btn-sm font-weight-bolder">View
                                All</a>
                        </div>
                        <div class="row">
                            @foreach(count($produk->where('kategori_id', 1)) > 2 ? $produk->where('kategori_id', 1)->random(3) : $produk->where('kategori_id', 1) as $makanan)
                                <div class="col-md-4 col-lg-3 col-xxl-4">
                                    <div class="card card-custom card-shadowless">
                                        <div class="card-body p-0">
                                            <div class="overlay">
                                                <div class="overlay-wrapper rounded bg-light text-center">
                                                    @if(is_null($makanan->foto_produk))
                                                        <img src="{{asset('assets/media/products/16.png')}}" alt=""
                                                             class="mw-100 w-200px">
                                                    @else
                                                        <img src="{{route('produk.file',$makanan->id)}}" alt=""
                                                             class="mw-100 w-200px">
                                                    @endif
                                                </div>
                                                <div class="overlay-layer">
                                                    <a href="{{route('produk.show', $makanan->id)}}"
                                                       class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                        View</a>
                                                    <a href="#" class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                                </div>
                                            </div>
                                            <div
                                                class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                <p class="text-info font-weight-boldest ml-2 mb-0">
                                                    Rp {{number_format($makanan->harga, 0, ',', '.')}}</p>
                                                <a href="{{('produk')}}"
                                                   class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">{{$makanan->nama_produk}}</a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 symbol-light-white">
                                                    <div class="symbol-label">
                                                        <img src="{{route('lapak.file',$makanan->lapaks->id)}}"
                                                             class="h-75" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="{{route('lapak.show', $makanan->lapaks->id)}}"
                                                       class="text-dark text-hover-primary mb-1 font-size-lg">{{$makanan->lapaks->nama_toko}}</a>
                                                    <span class="text-muted">{{$makanan->lapaks->lokasi}}</span>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane" id="forms_widget_tab_3" role="tabpanel">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body">

                    <div class="mb-11">
                        <div class="d-flex justify-content-between align-items-center mb-7">
                            <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Minuman</h2>
                            <a href="{{route('view.all', 2)}}" class="btn btn-light-primary btn-sm font-weight-bolder">View
                                All</a>
                        </div>
                        <div class="row">
                            @foreach(count($produk->where('kategori_id', 2)) > 2 ? $produk->where('kategori_id', 1)->random(3) : $produk->where('kategori_id', 2) as $minuman)
                                <div class="col-md-4 col-lg-3 col-xxl-4">
                                    <div class="card card-custom card-shadowless">
                                        <div class="card-body p-0">
                                            <div class="overlay">
                                                <div class="overlay-wrapper rounded bg-light text-center">
                                                    @if(is_null($minuman->foto_produk))
                                                        <img src="{{asset('assets/media/products/16.png')}}" alt=""
                                                             class="mw-100 w-200px">
                                                    @else
                                                        <img src="{{route('produk.file',$minuman->id)}}" alt=""
                                                             class="mw-100 w-200px">
                                                    @endif
                                                </div>
                                                <div class="overlay-layer">
                                                    <a href="{{route('produk.show', $minuman->id)}}"
                                                       class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                        View</a>
                                                    <a href="#" class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                                </div>
                                            </div>
                                            <div
                                                class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                <p class="text-info font-weight-boldest ml-2 mb-0">
                                                    Rp {{number_format($minuman->harga, 0, ',', '.')}}</p>
                                                <a href="{{('produk')}}"
                                                   class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">{{$minuman->nama_produk}}</a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 symbol-light-white">
                                                    <div class="symbol-label">
                                                        <img src="{{route('lapak.file',$minuman->lapaks->id)}}"
                                                             class="h-75" alt="">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="{{route('lapak.show', $minuman->lapaks->id)}}"
                                                       class="text-dark text-hover-primary mb-1 font-size-lg">{{$minuman->lapaks->nama_toko}}</a>
                                                    <span class="text-muted">{{$minuman->lapaks->lokasi}}</span>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane" id="forms_widget_tab_4" role="tabpanel">Coming Soon</div>
        <div class="tab-pane" id="forms_widget_tab_5" role="tabpanel">Coming Soon</div>
    </div>
    <div class="modal fade" id="modal-schedule">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pilih Metode Pengiriman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row align-content-center">
                        @foreach($kurir as $mitra)
                            <div class="symbol symbol-50 symbol-light-white">
                                <button class="btn btn-secondary ml-4">
                                    <div class="symbol-label">
                                        <img src="{{route('kurir.file',$mitra->id)}}"
                                             class="h-75" alt="">
                                    </div>
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection


