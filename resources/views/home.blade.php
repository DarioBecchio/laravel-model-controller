@extends('layouts.app')

@section('content')

        @foreach($movies as $movie)

            <div class="card">
                {{$movie->title}}

            </div>
        @endforeach
        {{--$movies->links()--}}
@endsection