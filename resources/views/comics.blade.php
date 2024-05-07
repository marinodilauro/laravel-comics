@extends('layouts.app')

@section('content')


<div id="comics_list">
    <section class="py-4">
        <div class="container">
            <h1 id="page_title">CURRENT SERIES</h1>
            <div class="row row-cols-1 row-cols-md-4 row-cols-lg-6 g-5">

                @foreach($comics as $comic)
                <div class="col mt-3">
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

        <div class="d-flex justify-content-center align-items-center mt-5">
            <button type="button" class="btn rounded-0 load_more_btn py-2">LOAD MORE</button>
        </div>

    </section>
</div>


@endsection