@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        {!! $post->title !!}
                    </h4>
                </div>

                <div class="panel-body">
                    {!! $post->body !!}
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Comments
                    <button class="pull-right btn-link
                        {{ $post->isFavouritedBy(Auth::user()) ? 'btn-favourited' : 'btn-not-favourited'}}">
                        <i class="glyphicon glyphicon-heart"></i>
                    </button>
                </div>
                <div class="panel-body">
                    <ul>
                    @forelse ($post->comments as $comment)
                        <li>
                            <button class="btn-link
                                {{ $comment->isFavouritedBy(Auth::user()) ? 'btn-favourited' : 'btn-not-favourited'}}">
                                <i class="glyphicon glyphicon-heart"></i>
                            </button>

                            {!! $comment->body !!}
                        </li>
                    @empty
                        <p>No comments.</p>
                    @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
