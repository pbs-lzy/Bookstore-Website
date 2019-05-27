@extends('layout')

@section('content')

@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
    @endforeach
@endif

{!! Form::open(['route' => 'books.store']) !!}

<div class="form-group">
    {!! Form::label('contactName', 'Contact Name') !!}
    {!! Form::text('contactName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('mobile', 'Mobile') !!}
    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('bookName', 'Book Name') !!}
    {!! Form::text('bookName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('datepicker', 'Pickup Date') !!}
    {!! Form::text('pickupDate', null, ['class' => 'form-control', 'id' => 'datepicker']) !!}
</div>

{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}

@endsection

@section('search')

<div class="form-group">
  <input type="text" class="form-controller" id="search" name="search"/>
  <p id="test"></p>
</div>

@endsection
