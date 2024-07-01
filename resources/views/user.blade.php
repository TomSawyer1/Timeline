@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="mt-6">
        @foreach($posts as $post)
            <div class="bg-white p-6 rounded-lg shadow-lg mb-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="font-bold">{{ $post->user->name }}</p>
                        <p class="text-gray-600">{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <p class="mt-4">{{ $post->body }}</p>
            </div>
        @endforeach
    </div>

    {{ $posts->links() }}
</div>
@endsection
