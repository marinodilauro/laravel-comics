@extends('layouts.app')

@section('content')
  <div class="container">
    <h2>{{ strtoupper(Route::currentRouteName()) }}</h2>
  </div>
@endsection
