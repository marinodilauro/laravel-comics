@extends('layouts.app')

@section('content')


<div id="comics_list">
    <section class="py-4">
        <div class="container">
            <h2 class="text-white">CURRENT SERIES</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">

                @foreach($comics as $comic)
                <div class="col">
                    <div class="card rounded-0 border-0">

                        <img class="card-img-top" src="{{$comic['thumb']}}" alt="Cover image of {{$comic['title']}}">

                        <div class="card-body">
                            {{$comic['series']}}
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</div>


@endsection