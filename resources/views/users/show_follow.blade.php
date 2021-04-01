@extends('layouts.default')
@section('title', $title)

@section('content')
    <div class="offset-md-1 col-md-9">
        <h2 class="mb-4 text-center">{{ $title }}</h2>

        <div class="list-group list-group-flush">
            @foreach ($users as $user)
                <div class="list-group-item">
                    <a href="{{ route('users.show', $user) }}" title="{{ $user->name }}"><img class="mr-3 border-radius50" src="{{ $user->gravatar() }}" title="{{ $user->name }}" alt="{{ $user->name }}" width=35></a>
                    <a href="{{ route('users.show', $user) }}" title="{{ $user->name }}">
                        {{ $user->name }}
                    </a>
                </div>

            @endforeach
        </div>

        <div class="mt-3">
            {!! $users->render() !!}
        </div>
    </div>
@stop
