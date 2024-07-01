@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <form action="/posts" method="POST">
            @csrf
            <textarea name="body" rows="3" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Quoi de neuf ?"></textarea>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-2">Poster</button>
        </form>
    </div>

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
