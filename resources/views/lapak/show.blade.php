@extends('layouts.layout-master')
@section('title')
    Market
@endsection

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body">
                    <div class="mb-11">
                        <div class="card card-custom mb-12">
                            <div class="card-body rounded p-0 d-flex" style="background-color:#DAF0FD;">
                                <div
                                    class="d-flex flex-column flex-lg-row-auto w-auto w-lg-350px w-xl-450px w-xxl-500px p-10 p-md-20">
                                    <h1 class="font-weight-bolder text-dark">{{$data->nama_toko}}</h1>
                                    <div class="font-size-h4 mb-8">{{$data->lokasi}}</div>
                                    @can('admin')
                                        <button type="button" style="float: right" class="btn btn-primary"
                                                data-toggle="modal"
                                                data-target="#modal-produk">
                                            <i class="fa fa-plus"></i> Tambah Produk
                                        </button>
                                    @endcan
                                </div>
                                <div
                                    class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover"
                                    style="background-image: {{route('lapak.file',$data->id)}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body">
                    <div class="mb-11">
                        <div class="d-flex justify-content-between align-items-center mb-7">
                            <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Produk</h2>
                        </div>
                        <div class="row">
                            @foreach($produk as $value)
                                <div class="col-md-4 col-lg-3 col-xxl-4">
                                    <div class="card card-custom card-shadowless">
                                        <div class="card-body p-0">
                                            <div class="overlay">
                                                <div class="overlay-wrapper rounded bg-light text-center">
                                                    @if(is_null($value->foto_produk))
                                                        <img src="{{asset('assets/media/products/16.png')}}" alt=""
                                                             class="mw-100 w-200px">
                                                    @else
                                                        <img src="{{route('produk.file',$value->id)}}" alt=""
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
                                                <p class="text-info font-weight-boldest ml-2 mb-0">Rp {{number_format($value->harga, 0, ',', '.')}}</p>
                                                <a href="{{url('produk')}}"
                                                   class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">{{$value->nama_produk}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder">Load More</a>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-produk">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Produk Baru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['url'=>route('produk.store'), 'files' => true]) !!}
                    <div class="form-group">
                        {{Form::label('nama_produk', 'Nama Produk', ['class' => 'awesome'])}}
                        {{ Form::text('nama_produk',null,[
                            'class'=>'form-control',
                            'id' => 'nama_produk',
                            'required' => 'required'
                        ]) }}
                    </div>
                    <div class="form-group">
                        {{Form::label('deskripsi', 'Deskripsi', ['class' => 'awesome'])}}
                        {{ Form::textarea('deskripsi', null, [
                             'class'      => 'form-control',
                             'rows'       => 3,
                             'name'       => 'deskripsi',
                             'id'         => 'deskripsi',
                         ]) }}
                    </div>
                    <div class="form-group">
                        {{Form::label('harga', 'Harga', ['class' => 'awesome'])}}
                        {{ Form::number('harga',null,[
                            'class'=>'form-control',
                            'id' => 'harga',
                            'required' => 'required'
                        ]) }}
                    </div>
                    <div class="form-group">
                        {{Form::label('kategori_id', 'Kategori', ['class' => 'awesome'])}}
                        {{ Form::select('kategori_id', $kategori,null,[
                              'class'=>'form-control select2',
                              'id' => 'kategori_id',
                              'placeholder' => '-- Pilih kategori --',
                              'required' => 'required'
                          ]) }}
                    </div>
                    <div class="form-group">
                        {{Form::label('foto_produk', 'Gambar Produk', ['class' => 'awesome'])}}
                        {{ Form::file('foto_produk',null,[
                            'class'=>'form-control',
                            'id' => 'foto_produk',
                        ]) }}
                    </div>
                    <input type="hidden" name="lapak_id" value="{{$data->id}}">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {!! Form::submit('Simpan', [
                            'class'=>'btn btn-info',
                            'id' => 'save'
                        ]) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@push('js')
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js')}}"></script>
    <script !src="">
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endpush
