@extends('layouts.blog')
@section('title')
    Blog
@endsection
@section('blog')
    <div class="max-w-lg mx-auto px-12 py-20 grid gap-4 lg:grid-cols-4 lg:max-w-none mt-12 rounded-lg w-full bg-100% bg-center bg-no-repeat bg-cover" style="background-image: url('https://blog.smile.io/content/images/2020/04/abstract-1.png')">
        @foreach($news as $new)
            @if($new->is_published === 1)
                <article class="flex flex-col bg-white rounded-lg overflow-hidden hover:-translate-y-0.5 transition duration-150 ease-linear">
                    <a href="{{route('post.index', $new->slug)}}">
                        <div class="flex-shrink-0 px-4 pt-4">
                            <img class="h-60 w-full object-cover rounded" src="{{url('img/post/'.$new->image)}}" alt="">
                        </div>
                        <div class="flex-1 bg-white p-4 flex flex-col justify-between">
                            <div>
                                <p class="text-xs font-medium text-gray-900">
                                    {{$new->user->name}}
                                </p>
                            </div>
                            <div class="flex-1">
                                <a href="{{route('post.index', $new->slug)}}" class="block">
                                    <p class="text-xl font-medium text-gray-900">{{$new->title}}</p>
                                </a>
                            </div>
                        </div>
                    </a>
                </article>
            @endif
        @endforeach
    </div>
    <div class="mt-4 max-w-lg mx-auto grid gap-4 lg:grid-cols-3 lg:max-w-none">
        @foreach($posts as $post)
            @if($post->is_published === 1)
            <article class="flex flex-col rounded-lg shadow-xl overflow-hidden hover:-translate-y-0.5 transition duration-150 ease-linear">
                <a href="{{route('post.index', $post->slug)}}">
                    <div class="flex-shrink-0">
                        <img class="h-80 w-full object-cover" src="{{ url('img/post/'.$post->image) }}" alt="">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-900">
                                {{$post->user->name}}
                            </p>
                        </div>
                        <div class="flex-1">
                            <a href="{{route('post.index', $post->slug)}}" class="block mt-2">
                                <p class="text-xl font-medium text-gray-900">{{$post->title}}</p>
                                <p class="mt-3 text-sm font-light text-gray-700">{!! Str::limit($post->content, 150, $end='...')!!}</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center space-x-2">
                            @foreach($post->categories as $category)
                                <x-button-link href="{{route('blog.category', $category->slug)}}" color="" class="bg-gray-200 btn-sm w-max hover:bg-yellow-700 font-semibold border-0 text-black text-xs">
                                    {{$category->title}}
                                </x-button-link>
                            @endforeach
                        </div>
                    </div>
                </a>
            </article>
            @endif
        @endforeach
        {{ $posts->links('vendor.pagination.tailwind') }}
    </div>
@endsection
