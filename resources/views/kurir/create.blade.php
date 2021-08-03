@extends('layouts.layout-master')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header border-0 py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">Buat Pedagang Baru</span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-0">
            <!--begin::Table-->
            {!! Form::open(['url'=>route('kurir.store'), 'files' => true]) !!}
            @include('kurir._form')
            <button type="submit" class="btn btn-primary mb-5">Submit</button>
        {!! Form::close() !!}
        <!--end::Table-->
        </div>
        <!--end::Body-->
    </div>
@endsection
