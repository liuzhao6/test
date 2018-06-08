<li id="status-{{ $status->id }}">
    <a href="{{ route('users.show', $user->id )}}">
        <img src="{{ $user->gravatar(50) }}" alt="{{ $user->name }}" class="gravatar img-circle"/>
    </a>
    <span class="user">
    <a href="{{ route('users.show', $user->id )}}">{{ $user->name }}</a>
  </span>
    @can('destroy', $status)
        <form method="post" action="{{ route('statuses.destroy', $status->id) }}" class="pull-right">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger status-del-btn">删除</button>

        </form>
    @endcan
    <span class="timestamp">
    {{ $status->created_at->diffForHumans() }}
  </span>
    <span class="content">{{ $status->content }}</span>

</li>