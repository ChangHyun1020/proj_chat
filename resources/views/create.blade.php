@extends('layouts.app')
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->
@section('css')
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }
</style>
@stop

@section('js')

@stop

@section('content')
  <div class="container">
    <h1 class="page-header">
        create
    </h1>
    <form method="post" action="{{ route('chats.store') }}">
        {!! csrf_field() !!}

        @include('partial.form')

        <div class="form-group">
            <button type="submit" class="btn gtn-primary"> 저장 </button>
        </div>
    </form>
  </div>
@endsection