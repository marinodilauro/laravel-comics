@extends('layouts.app')

@section('content')
  <!-- Comic -->
  <div id="divider">
    <div class="cover_container">
      <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="Cover image of {{ $comic['title'] }}">
    </div>
  </div>


  <div class="wrapper">
    <div class="row gx-5">

      <div class="col-8">

        <h2 class="comic_title mb-3">{{ strtoupper($comic['title']) }}</h2>

        <div class="description_wrapper">

          <div class="price_availability d-flex mb-3">

            <div class="price flex-fill d-flex justify-content-between align-items-center py-3 px-4">
              <div><span>U.S. Price:</span>{{ $comic['price'] }}</div>
              <div><span>AVAILABLE</span></div>
            </div>

            <div class="availability py-3 px-4">
              Check Availability <i class="fa-solid fa-caret-down fa-xs"></i>
            </div>

          </div>

          <div class="comic_description">
            <p>{{ $comic['description'] }}</p>
          </div>

        </div>

      </div>

      <div class="col-4 text-end">
        <h5 class="adv_title">ADVERTISEMENT</h5>

        <div class="adv_image">
          <img class="img-fluid" src="{{ Vite::asset('resources/img/adv.jpg') }}">
        </div>

      </div>

    </div>

  </div>
@endsection
