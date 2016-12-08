@extends('master')
@section('content')
<h1 class="title is-1">Search</h1>

@foreach ($films as $film)
<article class="notification">
    <a href="/{{$film->titleSlug}}">
        <p class="title">{{$film->title}} ({{$film->release_year}})</p>
        <p class="subtitle">
            <span class="icon is-small"><i class="fa fa-star"></i></span>
            @foreach ($film->actors as $actor)
                {{$actor->fullname}}
            @endforeach
        </p>
    </a>
</article>
@endforeach

@endsection
