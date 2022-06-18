@extends('layouts.base')

@section('content')
    <div class="relative pt-8 pb-20 max-w-7xl mx-auto px-4 sm:px-6 lg:pt-8 lg:pb-28 lg:px-8">
        <div class="relative ">
            @yield('blog')
            <div class="mt-4 max-w-7xl rounded-lg w-full bg-100% bg-center bg-no-repeat bg-cover" style="background-image: url('https://blog.smile.io/content/images/2020/04/abstract-1.png')">
                <div class="m-0 m-auto rounded-t-lg px-12 py-24 flex flex-wrap justify-between items-center bg-yellow-700">
                    <h3 class="text-4xl font-semibold m-0">
                        Subscribe to the Infinity newsletter
                    </h3>
                    <div class="flex flex-row space-x-1">
                        <x-input class="rounded-r-none bg-white btn-lg font-light placeholder-gray-900" placeholder="Your email address"/>
                        <x-button color="" class="bg-white btn-lg text-black hover:text-white transition duration-150 ease-linear font-light border-0 rounded-l-none">Subscibe</x-button>
                    </div>
                </div>

                <div class="p-12">
                    <div class="bg-white px-12 py-20 flex flex-col space-y-12 rounded-lg w-max max-w-xl">
                        <h3 class="text-4xl tracking-wider font-semibold">Learn how to grow your ecommerce brand from expert entrepreneurs</h3>
                        <p class="text-xl tracking-wider font-light">Each issue of Talking Shop, we’ll dive deep into a single ecommerce-related topic to share practical insights from small businesses like you.</p>
                    </div>
                </div>
            </div>
            <div class="mt-12 flex flex-row space-x-4 max-w-7xl w-full">
                <div class="w-1/2 h-72 min-h-full">
                    <x-subtitle class="text-center font-bold mb-2">Meet our authors</x-subtitle>
                    <div class="rounded-lg bg-gray-100 h-full flex flex-row justify-center space-x-4 p-6 items-center ">
                        @foreach($users as $user)
                            <x-avatar href="{{route('blog.author', $user->id)}}">
                                <x-slot name="image">
                                    {{$user->image}}
                                </x-slot>
                                <x-slot name="name">
                                    {{$user->name}}
                                </x-slot>
                            </x-avatar>
                        @endforeach
                    </div>
                </div>
                <div class="w-1/2 h-72">
                    <x-subtitle class="text-center font-bold mb-2">Explore popular topics</x-subtitle>
                    <div class="rounded-lg bg-gray-100 h-full p-6 flex-wrap">
                        @foreach($categories as $category)
                            <x-button-link href="{{route('blog.category', $category->slug)}}" color="" class="bg-gray-200 m-1 w-max hover:bg-yellow-700 font-semibold border-0 text-black text-xs">
                                {{$category->title}}
                            </x-button-link>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
