@extends('layouts.blog')

@section('content')
    <main class="container mx-auto mt-6 flex gap-6">
        <!-- Blog Posts Section -->
        <section class="w-3/4 bg-white p-6 shadow-md rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Latest Posts</h2>
            <div class="space-y-6">

                @foreach ($posts as $post)
                    <article class="flex gap-4 border-b pb-4">
                        <img src="{{ asset('images/article_1.jpeg') }}" alt="{{ $post->title }} Image" class="w-32 h-32 object-cover rounded">
                        <div>
                            <h3 class="text-lg font-semibold"><a href="{{ route('article') }}" class="hover:underline">{{ $post->title }}</a></h3>
                            <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset">{{$categories->find($post->category_id)->name}}</span>

                            <p class="text-gray-600">{{ $post->text }}</p>
                        </div>
                    </article>

                @endforeach

            </div>
        </section>
        <!-- Sidebar Section -->
        <aside class="w-1/4 bg-white p-6 shadow-md rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Categories</h2>
            <ul class="space-y-2">
                @foreach ($categories as $category)
                    <li>
                        <a href="/?category_id={{ $category->id }}" class="text-gray-600 hover:text-gray-800">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </aside>
    </main>
@endsection
