@extends('layouts.app')

@section('content')


<div id="comics_list">
    <section class="py-4">
        <div class="container">
            <h2 class="text-white">CURRENT SERIES</h2>
            <div class="row row-cols-1 row-cols-md-4 row-cols-lg-6 g-5">

                @foreach($comics as $comic)
                <div class="col">
                    <div class="comic border-0">

                        <img class="img-flud" src="{{$comic['thumb']}}" alt="Cover image of {{$comic['title']}}">

                        <div class="comic_serie mt-3 mb-4">
                            {{strtoupper($comic['series'])}}
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</div>


@endsection