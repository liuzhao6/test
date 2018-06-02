
        <a href="{{ route('users.show',$user->id) }}">
        <img src="{{ $user->gravator('140') }}" alt="{{ $user->name }}" class="gravator" />
        </a>
        <h1>{{ $user->name }}</h1>
