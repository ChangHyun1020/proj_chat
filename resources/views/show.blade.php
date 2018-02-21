@extends('layouts.app')

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
    @param

@stop

@section('content')
  <div class="container">
    @foreach($users as $user)
      <div class="wrap">
        <span class="contact-status online"></span>
        <img src="/images/support.jpg" alt="" />
        <div class="meta">
          <p class="name"> {{ $user->name }} </p>
          <p class="preview"> {{ $user->email }} </p>
        </div>
      </div>
    @endforeach
  </div>
@endsection