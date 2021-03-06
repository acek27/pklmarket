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
        <div class="col-lg-6">
            {!! Form::model($data, ['url'=>route('kurir.update',$data->id), 'files' => true, 'method'=>'put']) !!}
            @include('kurir._form')
            <button type="submit" class="btn btn-primary">Submit</button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
