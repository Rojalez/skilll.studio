@extends('layouts.blog')
@section('title')
    {{$category->title}}
@endsection
@section('blog')

            <div style="background-image: url('/img/category/{{$category->image}}')" class="max-w-screen-2xl rounded-md items-center flex h-72 mt-10 mx-auto py-12 px-4 sm:px-6 lg:py-4 lg:px-12 bg-100% bg-center bg-no-repeat">
                <div class="rounded-xl bg-opacity-90 p-2 bg-white max-w-sm flex flex-row justify-between">
                    <div class="p-4 flex flex-col space-y-4">
                        <h4 class="text-3xl font-bold text-gray-900 tracking-wider">{{$category->title}}</h4>
                        <p class="text-sm tracking-wide">{{$category->description}}</p>
                    </div>
                    <div class="rounded bg-grey flex items-center justify-center w-32 text-4xl p-2">
                        {{$category->posts->count()}}
                    </div>
                </div>
            </div>
            <div class="mt-4 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                @foreach($category->posts as $post)
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
{{--                                    <div class="mt-6 flex items-center">--}}
{{--                                        <x-button-link href="{{route('blog.category', $post->category->id)}}" color="" class="bg-gray-200 btn-sm w-max hover:bg-yellow-700 font-semibold border-0 text-black text-xs">--}}
{{--                                            {{$post->category->title}}--}}
{{--                                        </x-button-link>--}}
{{--                                    </div>--}}
                                </div>
                            </a>
                        </article>
                    @endif
                @endforeach
            </div>

@endsection
