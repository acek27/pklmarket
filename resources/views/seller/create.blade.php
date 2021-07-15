@extends('layouts.master')
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
        <div class="col-lg-6">
            {!! Form::open(['url'=>route('seller.store')]) !!}
            <div class="form-group">
                {{Form::label('nama_pedagang', 'Nama Pedagang', ['class' => 'awesome'])}}
                {{ Form::text('nama_pedagang',null,[
                    'class'=>'form-control',
                    'id' => 'nama_pedagang',
                    'required' => 'required'
                ]) }}
            </div>
            <div class="form-group">
                <div class="form-group">
                    {{Form::label('alamat', 'Alamat', ['class' => 'awesome'])}}
                    {{ Form::text('alamat',null,[
                        'class'=>'form-control',
                        'id' => 'alamat',
                        'required' => 'required'
                    ]) }}
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    {{Form::label('telp', 'No. HP', ['class' => 'awesome'])}}
                    {{ Form::number('telp',null,[
                        'class'=>'form-control',
                        'id' => 'telp',
                        'required' => 'required'
                    ]) }}
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    {{Form::label('whatsapp', 'No. Whatsapp', ['class' => 'awesome'])}}
                    {{ Form::number('whatsapp',null,[
                        'class'=>'form-control',
                        'id' => 'whatsapp',
                        'required' => 'required'
                    ]) }}
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
