@extends('layouts.master')
@section('content')
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Seller <strong>{{$data->nama_pedagang}}</strong></h3>
                    <button type="button" style="float: right" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-schedule">
                        <i class="fas fa-plus"></i> Lapak Baru
                    </button>
                </div>
                <div class="card-body">
                    <h6>Daftar Lapak {{$data->nama_pedagang}}</h6>
                    <div class="row d-flex align-items-stretch">
                        @foreach($data->lapaks as $lapak)
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header text-muted border-bottom-0">
                                        {{$lapak->nama_toko}} <a href="{{route('lapak.edit',$lapak->id)}}"
                                                                 class="text-info" style="float: right">edit</a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h6>Lokasi :</h6>
                                                <p class="lead">{{$lapak->lokasi}}</p>
                                                <h6>Whatsapp :</h6>
                                                <a target="_blank"
                                                   href="{{url('https://api.whatsapp.com/send?phone=+62'.$data->whatsapp)}}">+62{{$data->whatsapp}}</a>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="{{route('lapak.file',$lapak->id)}}" alt=""
                                                     class="img-circle img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#"
                                           class="btn btn-sm btn-danger">
                                            <i class="fas fa-user"></i> Nonaktifkan
                                        </a>
                                        <a href="{{route('lapak.show', $lapak->id)}}" style="float: right"
                                           class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Kunjungi
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-schedule">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Lapak Baru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['url'=>route('lapak.store'), 'files' => true]) !!}
                    <div class="form-group">
                        {{Form::label('nama_toko', 'Nama Toko', ['class' => 'awesome'])}}
                        {{ Form::text('nama_toko',null,[
                            'class'=>'form-control',
                            'id' => 'nama_toko',
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
                        {{Form::label('lokasi', 'Lokasi', ['class' => 'awesome'])}}
                        {{ Form::text('lokasi',null,[
                            'class'=>'form-control',
                            'id' => 'lokasi',
                            'required' => 'required'
                        ]) }}
                    </div>
                    <div class="form-group">
                        {{Form::label('foto_lapak', 'Gambar Toko', ['class' => 'awesome'])}}
                        {{ Form::file('foto_lapak',null,[
                            'class'=>'form-control-file',
                            'id' => 'foto_lapak',
                        ]) }}
                    </div>
                    <input type="hidden" name="seller_id" value="{{$data->id}}">
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
