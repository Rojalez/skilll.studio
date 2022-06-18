@extends('layouts.blog')
@section('title', $post->title)
@section('blog')
    <div class="relative py-16 max-w-7xl mx-auto overflow-hidden">
        <div class="flex flex-row space-x-12 items-center">
            <div class="rounded h-96 w-1/3 bg-100% bg-center bg-no-repeat bg-cover" style="background-image: url('/img/post/{{$post->image}}')">

            </div>
            <div class="flex flex-col w-2/3 space-y-8">
                <div class="flex flex-row space-x-2">
                    @foreach($post->categories as $category)
                        <x-button-link href="{{route('blog.category', $category->slug)}}" color="" class="bg-gray-200 w-max hover:bg-yellow-700 font-semibold border-0 text-black text-xs">
                            {{$category->title}}
                        </x-button-link>
                    @endforeach
                </div>
                <h1 class="text-5xl font-semibold">
                    {{$post->title}}
                </h1>
                <p class="font-medium text-sm">{{$post->created_at->diffForHumans()}} by {{$post->user->name}} &bull; {{ Str::readingTime($post->content) }} read</p>
            </div>
        </div>
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="mt-12 prose prose-yellow prose-lg font-light text-gray-800 mx-auto">
                {!! $post->content !!}
            </div>
        </div>
    </div>
    @if ($posts->count() > 0)
    <div class="mt-4">
        <div class="flex flex-row justify-between">
            <div class="text-left text-lg tracking-wider font-semibold mb-4 ml-12">You might also like</div>
{{--            <a class="mr-12 text-sm font-light tracking-wide" href="{{route('blog.category', $post->categories->slug)}}">See all {{$post->category->title}} →</a>--}}
        </div>
        <div class="max-w-lg mx-auto grid gap-4 p-12 lg:grid-cols-5 lg:max-w-none bg-gray-100 rounded-lg">
            @foreach($posts as $post)
                @if($post->is_published === 1)
                    <article class="flex flex-col rounded-lg overflow-hidden hover:-translate-y-0.5 transition duration-150 ease-linear">
                        <a href="{{route('post.index', $post->slug)}}">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover" src="{{ url('img/post/'.$post->image) }}" alt="">
                            </div>
                            <div class="flex-1 bg-white p-4 flex flex-col justify-between">
                                <div>
                                    <p class="text-xs font-medium text-gray-900">
                                        {{$post->user->name}}
                                    </p>
                                </div>
                                <div class="flex-1">
                                    <a href="{{route('post.index', $post->slug)}}" class="block mt-2">
                                        <p class="text-lg font-medium text-gray-900">{{$post->title}}</p>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </article>
                @endif
            @endforeach
        </div>
    </div>
    @endif
    <div class="flex flex-row justify-between items-center space-x-4">
        @if (isset($previous_post))
            <a href="{{route('post.index', $previous_post->slug)}}" class="bg-grey mt-4 @if(!$next_post) rounded-lg @endif rounded-l-lg  flex flex-row justify-between items-center w-full">
                <img class="object-cover h-52 w-52 rounded-l-lg" src="{{ url('img/post/'.$previous_post->image) }}" alt="">
                <div class="flex flex-col w-full space-y-4 pl-12 pr-6">
                    <small class="uppercase text-xs font-medium text-left tracking-widest">Older post</small>
                    <h3 class="text-3xl tracking-wide font-medium text-left">
                        {{$previous_post->title}}
                    </h3>
                </div>
            </a>
        @endif
        @if (isset($next_post))
            <a href="{{route('post.index', $next_post->slug)}}" class="bg-grey mt-4 @if(!$previous_post) rounded-lg @endif rounded-r-lg flex flex-row justify-between items-center w-full">
                <div class="flex flex-col w-full space-y-4 pr-12 pl-6">
                    <small class="uppercase text-xs font-medium text-right tracking-widest">Newer post</small>
                    <h3 class="text-3xl tracking-wide font-medium text-right">
                        {{$next_post->title}}
                    </h3>
                </div>
                <img class="object-cover h-52 w-52 rounded-r-lg" src="{{ url('img/post/'.$next_post->image) }}" alt="">
            </a>
        @endif
    </div>

@endsection
