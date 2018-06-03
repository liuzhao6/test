<li>
    <img src="{{ $user->gravatar('50') }}" alt="{{ $user->name }}" class="gravator img-circle img-thumbnail img-responsive" />
    <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
    @can('destroy',$user)
        <form class=" pull-right " action="{{ route('users.destroy', $user->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger btn-sm btn-delete">删除</button>

        </form>
    @endcan
</li>