@extends('layouts.app')

@section('content')
  <div class="container">
    <div id="wip_page" class="d-flex flex-column justify-content-center align-items-center text-center p-5">

      <img src="{{ Vite::asset('resources/img/wip_page.png') }}" alt="">

      <p class="display-3 py-5">Sorry, this page is still under construction, but you can check our comics here!</p>

      <div class="d-flex justify-content-center align-items-center">
        <button type="button" class="btn rounded-0 check_comics_btn py-3">
          <a href="{{ route('comics') }}">CHECK OUR COMICS</a>
        </button>
      </div>

    </div>
  </div>
@endsection
