<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" title="{{ $user->name }}" class="gravatar"/>
</a>
<h1><a href="{{ route('users.show', $user->id) }}" title="{{ $user->name }}" class="nameLink">{{ $user->name }}</a></h1>
