
@extends('layouts.base')

@section('title', $portfolio->title)

@section('content')
<section>
    <div class="space-y-10">
        <div class="relative mx-auto overflow-hidden">
            <div data-rellax-speed="-3" class="flex flex-col rellax bg-gray-100 w-full px-10 space-y-8 py-20">
                <h1 data-rellax-speed="1" class="md:text-7xl rellax text-2xl md:text-left text-center font-bold">{{$portfolio->title}}</h1>
                <h4 data-rellax-speed="0.6" class="uppercase rellax md:text-lg text-sm font-semibold tracking-widest">{{$portfolio->categories}}</h4>
                <p data-rellax-speed="0.3" class="font-medium rellax text-sm md:text-left text-center">{{$portfolio->created_at->diffForHumans()}} by {{$portfolio->user->name}} &bull; {{ Str::readingTime($portfolio->content) }} read</p>
            </div>
               <img class="object-center h-full w-full" src="{{asset('/img/portfolio/'.$portfolio->image)}}" alt="">
            <div data-rellax-speed="3" class="relative rellax py-4 px-4 min-h-screen bg-gray-100 sm:px-6 lg:px-8">
                <div class="mt-12 prose prose-yellow md:prose-xl prose-lg md:text-left text-justify font-light text-gray-800 mx-auto">
                    {!! $portfolio->content !!}
                </div>
            </div>
        </div>
        @if ($portfolios->count() > 0)
            <div class="mt-4 px-10">
                <div class="flex flex-row justify-between">
                    <div class="text-left text-lg tracking-wider font-semibold mb-4 ml-12">You might also like</div>
                </div>
                <div class="max-w-lg mx-auto grid gap-4  lg:grid-cols-5 lg:max-w-none bg-gray-100 rounded-lg">
                @foreach($portfolios as $portfolio) @if($portfolio->is_published === 1)
                    <article class="flex flex-col rounded-lg overflow-hidden hover:-translate-y-0.5 transition duration-150 ease-linear">
                        <a href="{{route('portfolio.item', $portfolio->slug)}}">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover" src="{{ url('img/portfolio/'.$portfolio->image) }}" alt="">
                            </div>
                            <div class="flex-1 bg-white p-4 flex flex-col justify-between">
                                <div>
                                    <p class="text-xs font-medium text-gray-900">
                                        {{$portfolio->user->name}}
                                    </p>
                                </div>
                                <div class="flex-1">
                                    <a href="{{route('portfolio.item', $portfolio->slug)}}" class="block mt-2">
                                        <p class="text-lg font-medium text-gray-900">{{$portfolio->title}}</p>
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
        <div class="flex md:flex-row flex-col justify-between items-center md:space-x-4 px-10">
            @if (isset($previous_portfolio))
                <a href="{{route('portfolio.item', $previous_portfolio->slug)}}" class="bg-grey mt-4 @if(!$next_portfolio) rounded-lg @endif rounded-l-lg  flex flex-row justify-between items-center w-full">
                    <img class="object-cover md:h-52 md:w-52 h-24 w-24 rounded-l-lg" src="{{ url('img/portfolio/'.$previous_portfolio->image) }}" alt="">
                    <div class="flex flex-col w-full space-y-4 md:pl-12 pl-6 pr-6">
                        <small class="uppercase text-xs font-medium text-left tracking-widest">Older portfolio</small>
                        <h3 class="md:text-3xl text-xl tracking-wide font-medium text-left">
                            {{$previous_portfolio->title}}
                        </h3>
                    </div>
                </a>
            @endif
            @if (isset($next_portfolio))
                <a href="{{route('portfolio.item', $next_portfolio->slug)}}" class="bg-grey mt-4 @if(!$previous_portfolio) rounded-lg @endif rounded-r-lg flex flex-row justify-between items-center w-full">
                    <div class="flex flex-col w-full space-y-4 md:pr-12 pr-6 pl-6">
                        <small class="uppercase text-xs font-medium text-right tracking-widest">Newer post</small>
                        <h3 class="md:text-3xl text-xl tracking-wide font-medium text-right">
                            {{$next_portfolio->title}}
                        </h3>
                    </div>
                    <img class="object-cover md:h-52 md:w-52 h-24 w-24 rounded-r-lg" src="{{ url('img/portfolio/'.$next_portfolio->image) }}" alt="">
                </a>
            @endif
        </div>
    </div>
</section>
@endsection

@push('js')
    <script src="{{asset('js/rellax.min.js')}}"></script>
    <script>
        var rellax = new Rellax('.rellax', {
            breakpoints:[576, 768, 1201]
        });
    </script>
@endpush
