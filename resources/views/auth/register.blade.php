@extends('layouts/main')



@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3 loginBox registerBox" style="">
        <span class="glyphicon glyphicon-home loginHomeLink" > {!!Html::link('/',trans('Home'))!!}</span>
 
    
    {!! Form::model(['method' => 'POST']) !!}
    {!! csrf_field() !!}

    <h3>{{trans('Create an account')}}</h3>
    <hr />
    <div class="form-group-lg">
         {!! Form::text('name', null,['class'=>'form-control' ,'value'=> old('email'),'placeholder' => 'Name'] ) !!}
       
    </div>
    <div class="form-group-lg">
         {!! Form::text('email', null,['class'=>'form-control' ,'value'=> old('email'),'placeholder' => 'Email'] ) !!}
       
    </div>

    <div class="form-group-lg">
        {!! Form::password('password', ['class'=>'form-control','placeholder' => 'Password' ,'type' => 'password']) !!}
       
    </div>
    <div class="form-group-lg">
        {!! Form::password('password_confirmation', ['class'=>'form-control','placeholder' => 'Re-type Password','type' => 'password']) !!}
       
    </div>

   

    <div>
        {!! Form::submit(trans('Register'),['class' => 'btn btn-default btn-leather']) !!}
       
        <button type="cancel" class="btn btn-default btn-leather">Cancel</button>
    </div>
{!! Form ::close()!!}
        <div class="registerLink">{!!Html::link('/auth/login',trans('Go to login'))!!}</div>
    </div>
</div>
<style>
    body{
        background-color:rgb(184, 90, 12);
    }
</style>
    
@stop