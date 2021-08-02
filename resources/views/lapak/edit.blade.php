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
    <div class="row">
        <div class="col-lg-12">
            {!! Form::model($data, ['url'=>route('lapak.update',$data->id), 'files' => true, 'method'=>'put']) !!}
            <div class="form-group">
                {{Form::label('nama_toko', 'Nama Toko', ['class' => 'awesome'])}}
                {{ Form::text('nama_toko',null,[
                    'class'=>'form-control',
                    'id' => 'nama_toko',
                    'required' => 'required'
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
            <div class="form-group justify-content-between">
                {!! Form::submit('Simpan', [
                        'class'=>'btn btn-info',
                        'id' => 'save'
                    ]) !!}
            </div>
            {!! Form::close() !!}
        </div>

    </div>
    </div>
@endsection
