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

@stop

@section('content')
  <div class="container">
    <h1 class="page-header">
        title
    </h1>

    <form method="post" action="{{ route('chats.update'), $chat->id }}">
        {!! csrf_field() !!}
        {!! method_field('put') !!}

        @include('parial.form')
        <div class="form-group">
            <button class="btn btn-primary"> 수정 </button>
        </div>
    </form>
  </div>
@endsection