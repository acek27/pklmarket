<div class="form-group">
    {{Form::label('nama_kurir', 'Nama Kurir', ['class' => 'awesome'])}}
    {{ Form::text('nama_kurir',null,[
        'class'=>'form-control',
        'id' => 'nama_kurir',
        'required' => 'required'
    ]) }}
</div>
<div class="form-group">
    <div class="form-group">
        {{Form::label('kontak', 'Kontak', ['class' => 'awesome'])}}
        {{ Form::number('kontak',null,[
            'class'=>'form-control',
            'id' => 'kontak',
        ]) }}
    </div>
</div>
<div class="form-group">
    {{Form::label('logo', 'Logo', ['class' => 'awesome'])}}
    {{ Form::file('logo',null,[
        'class'=>'form-control',
        'id' => 'logo',
    ]) }}
</div>
