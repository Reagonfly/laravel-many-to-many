@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between my-3">
                <h2>Post Details {{ $post->title }}</h2>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-secondary text-white align-self-center">
                    <strong>Back To List</strong>
                </a>
            </div>
        </div>
        <div class="col-12">
            <p>
                <strong class="text-danger">Slug: </strong> {{ $post->slug }}
            </p>
            <p>
                <strong class="text-secondary">Author: </strong> {{ $post->author ? $post-author-name : 'No Author' }}
            </p>
            <p>
                <strong class="text-secondary">Short: </strong> {{ $post->excerpt ? $post-excerpt : 'No Short' }}
            </p>
            <p>
                <strong>Category: </strong>{{ $post->category ? $post->category->name : 'Without Category' }}
            </p>
            <label class="d-block text-danger my-3">
                <strong>Content: </strong>
            </label>
            <p>
                {{ $post->content }}
            </p>
        </div>
    </div>
</div>
@endsection