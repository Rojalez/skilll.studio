@extends('layouts.blog')
@section('title')
    {{$author->name}}
@endsection
@section('blog')

    <div class="max-w-screen-2xl bg-grey-50 rounded-md items-center flex h-72 mt-10 mx-auto p-12 ">
        <div class="rounded-xl bg-opacity-90 p-2 bg-white w-full h-full flex flex-row justify-between">
            <div class="p-4 flex flex-row items-center space-x-4">
                <img class="max-w-sm rounded h-full" src="{{$author->image}}" alt="">
                <h4 class="text-3xl font-bold text-gray-900 tracking-wider">{{$author->name}}</h4>
            </div>
            <div class="rounded bg-grey flex items-center justify-center w-32 text-4xl p-2">
                {{$author->posts->count()}}
            </div>
        </div>
    </div>
    <div class="mt-4 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
        @foreach($author->posts as $post)
            @if($post->is_published === 1)
                <article class="flex flex-col rounded-lg shadow-xl overflow-hidden hover:-translate-y-0.5 transition duration-150 ease-linear">
                    <a href="{{route('post.index', $post->slug)}}">
                        <div class="flex-shrink-0">
                            <img class="h-80 w-full object-cover" src="{{url('img/post/'.$post->image)}}" alt="">
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
    </div>
@endsection
