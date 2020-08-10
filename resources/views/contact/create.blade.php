@extends('layouts.app')
@section('content')
<div class="container">
@if($errors->all())
<ul class="alert alert-danger">
    @foreach($errors->all() as $error)  
    <li>
    {{$error}}
    </li>
    @endforeach
</ul>
@endif
{!! Form::open(['action' => 'ContactController@store','method'=>'POST']) !!}
    <div class="col-md-6">
        <div class="form-group">
        {!! Form::label('name')!!}
        {!! Form::text('name',null,["class"=>"form-control"]) !!}
        </div>
        <div class="form-group">
        {!! Form::label('email')!!}
        {!! Form::text('email',null,["class"=>"form-control"]) !!}
        </div>
        <div class="form-group">
        {!! Form::label('phone')!!}
        {!! Form::text('phone',null,["class"=>"form-control"]) !!}
        </div>
    
        <input type="submit" value="บันทึก" class="btn btn-primary col-2 " name="" id="">
        <a href="/contact" class="btn btn-success col-2">กลับ</a>
    </div>
{!! Form::close() !!}
</div>
@endsection

