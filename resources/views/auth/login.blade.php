@extends('layouts/main')



@section('content')
@if ($error = $errors->first('password'))
  <div class="alert alert-danger">
    {{ $Message }}
  </div>
@endif
<div class="row">
    <div class="col-md-6 col-md-offset-3 loginBox" style="">
        <span class="glyphicon glyphicon-home loginHomeLink" > {!!Html::link('/',trans('Home'))!!}</span>
 
    
    {!! Form::model(['method' => 'POST']) !!}
    {!! csrf_field() !!}

    <div class="form-group-lg">
         {!! Form::text('email', null,['class'=>'form-control' ,'value'=> old('email'),'placeholder' => 'Email'] ) !!}
       
    </div>

    <div class="form-group-lg">
        {!! Form::password('password', ['class'=>'form-control','placeholder' => 'Password']) !!}
       
    </div>

   

    <div>
        {!! Form::submit('Login',['class' => 'btn btn-default btn-leather']) !!}
       
        <button type="cancel" class="btn btn-default btn-leather">Cancel</button>
    </div>
{!! Form ::close()!!}
        <div class="registerLink">{!!Html::link('/auth/register',trans('Create an account'))!!}</div>
    </div>
</div>
<style>
    body{
        background-color:rgb(184, 90, 12);
    }
</style>
    
@stop