@extends('layout.default')
    @section('title',$user->name)
    @section('content')
        <div class="row">
            <section class="user_info">
                @include('shared._user_info', ['user' => $user])
            </section>
            <div class="col-md-12">
                @if (count($statuses) > 0)
                    <ol class="statuses">
                        @foreach ($statuses as $status)
                            @include('statuses._status')
                        @endforeach
                    </ol>
                    {!! $statuses->render() !!}
                @endif
            </div>

        </div>
    @stop()
