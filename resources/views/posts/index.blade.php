@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-4">Timeline</h1>
    @foreach ($posts as $post)
        <div class="bg-white shadow-md rounded-lg p-4 mb-4">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-700">{{ $post->body }}</p>
                    <small class="text-gray-500">{{ $post->created_at->diffForHumans() }}</small>
                </div>
                <div>
                    <form action="{{ route('posts.like', $post) }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                            @if($post->likes->contains('user_id', Auth::id()))
                                Unlike
                            @else
                                Like
                            @endif
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</div>
@endsection
