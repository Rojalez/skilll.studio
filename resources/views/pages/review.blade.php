@extends('layouts.base')
@section('title')
    Reviews
@endsection
@section('content')

        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="sm:flex sm:flex-col sm:align-center">
                <x-title align="center">Infinity Reviews From Real Customers</x-title>
                <x-subtitle align="center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
                </x-subtitle>
                <div class="mt-10 flex w-full space-x-2 justify-center">
                    <x-button-link color="primary" href="#">
                        Start trial
                    </x-button-link>
{{--                    <x-button-link color="outline">--}}
{{--                        Book a demo--}}
{{--                    </x-button-link>--}}
                </div>
            </div>
            <h2 class="text-lg font-medium text-gray-900">Recent reviews</h2>
            <div class="mt-6 pb-10 border-t border-b border-gray-200 divide-y divide-gray-200 space-y-10">
                @foreach($reviews as $review)
                    <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">
                        <div class="lg:col-start-5 lg:col-span-8 xl:col-start-4 xl:col-span-9 xl:grid xl:grid-cols-3 xl:gap-x-8 xl:items-start">
                            <div class="flex items-center xl:col-span-1 relative">
                                <div class="flex items-center  absolute left-0 z-10 ">
                                    @for($i = 0; $i < $review->rate; $i++)
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    @endfor
                                </div>
                                <div class="flex items-center z-0">
                                    @for($i = 0; $i < 5; $i++)
                                        <svg class="text-gray-300 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    @endfor
                                </div>
                            </div>

                            <div class="mt-4 lg:mt-6 xl:mt-0 xl:col-span-2">
                                <h3 class="text-sm font-medium text-gray-900">{{$review->title}}</h3>

                                <div class="mt-3 space-y-6 text-sm text-gray-500">
                                    <p>{{$review->text}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center text-sm lg:mt-0 lg:col-start-1 lg:col-span-4 lg:row-start-1 lg:flex-col lg:items-start xl:col-span-3">
                            <p class="font-medium text-gray-900">{{$review->customer}}</p>
                            <time datetime="{{$review->created_at}}" class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0">
                                {{$review->created_at}}
                            </time>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


@endsection
