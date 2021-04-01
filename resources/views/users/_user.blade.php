<div class="list-group-item">
    <a href="{{ route('users.show', $user) }}" title="{{ $user->name }}"><img class="mr-3 border-radius50" src="{{ $user->gravatar() }}" title="{{ $user->name }}" alt="{{ $user->name }}" width=35></a>
    <a href="{{ route('users.show', $user) }}" title="{{ $user->name }}">
        {{ $user->name }}
    </a>
    @can('destroy', $user)
        <form action="{{ route('users.destroy', $user->id) }}" method="post" class="float-right">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
        </form>
    @endcan
</div>
