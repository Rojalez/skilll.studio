@extends('layouts.base')
@section('title', 'Наши работы')
@section('content')
    <section>
        <div class="space-y-10 py-10 md:px-10 px-5">
            @foreach($portfolios as $portfolio)
                <div class="flex xl:flex-row xl:space-x-10 flex-col bg-gray-50 duration-300 rounded-3xl">
                    <div class="xl:w-1/2 w-full xl:h-auto h-80">
                      <img class="h-full xl:rounded-l-3xl rounded-t-3xl xl:rounded-tr-none w-full object-cover" src="{{ url('img/portfolio/'.$portfolio->image) }}" alt="">
                    </div>
                    <div class="rounded-3xl xl:w-1/2 w-full py-16 px-4 flex flex-col xl:space-y-10">
                        <div class="flex flex-col space-y-6 xl:py-52">
                            <div class="flex flex-col space-y-3 ">
                                <h2 class="font-bold xl:text-6xl text-3xl">{{$portfolio->title}}</h2>
                                <h4 class="uppercase xl:text-lg text-sm font-semibold tracking-widest">{{$portfolio->categories}}</h4>
                            </div>
                            <div class="xl:text-2xl text-lg w-max font-semibold">
                                <a class="" target="_blank" href="{{$portfolio->slug}}">
                                    <p class="hover:scale-105 hover:text-custom-blue duration-200 ease-in-out">{{__('Открыть портфолио')}}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
