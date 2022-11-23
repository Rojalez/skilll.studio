@extends('layouts.base')
@section('title', env('APP_NAME'))
<style>
    .floating-sitoe-p-500 {
        animation-name: floating;
        animation-duration: 5s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-in-out;
    }
    @keyframes floating {
        0% { transform: translateY(0px); }
        50%  { transform: translateY(20px); }
    }
    .floating-sitoa-p-1080 {
        animation-name: floating;
        animation-duration: 4s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-in-out;
    }
    @keyframes floating {
        0% { transform: translateY(0px); }
        50%  { transform: translateY(20px); }
    }
    .floating-sitoc-p-800 {
        animation-name: floating;
        animation-duration: 6s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-in-out;
    }
    @keyframes floating {
        0% { transform: translateY(0px); }
        50%  { transform: translateY(20px); }
    }
    .floating-sitob-p-1080 {
        animation-name: floating;
        animation-duration: 8s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-in-out;

    }
    @keyframes floating {
        0% { transform: translateY(0px); }
        50%  { transform: translateY(20px); }
    }
</style>
@section('content')
    <header class="py-4 px-4 sm:px-10 lg:px-12 relative w-full h-screen overflow-x-clip relative">
        <div class="mx-auto max-w-7xl w-full lg:pt-36 pt-48 pb-20 lg:text-center text-left lg:py-48 lg:text-left">
            <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
                <h1 class="text-6xl tracking-normal text-left font-bold text-gray-900 xl:text-7xl 2xl:text-9xl">
                    <div class="rellax"
                          data-rellax-speed="1.5">
                        {{__('Новый способ')}}
                    </div>
                    <div class="rellax"
                          data-rellax-speed="1.5"
                    >{{__('Общения.')}}</div>
                </h1>
                <p data-rellax-speed="1"
                   class="mt-3 rellax max-w-md font-semibold mx-auto text-lg text-left text-custom-blue sm:text-3xl drop-shadow-2xl md:mt-5 md:max-w-3xl">{{__('Изменяйте мир по одному байту за раз.')}}</p>
            </div>
            <div class="">
                <img class="floating-sitoe-p-500  drop-shadow-2xl absolute xl:w-60 lg:w-40 md:w-40 w-40 z-20 md:-top-12 md:-left-12 top-0 -left-6" src="{{asset('img/sitoe-p-500.png')}}" alt="sitoe-p-500">
                <img class="floating-sitoa-p-1080  drop-shadow-2xl absolute 2xl:max-w-2xl xl:max-w-xl lg:max-w-lg md:max-w-sm sm:max-w-xs max-w-xs z-20 md:-top-40 md:right-2 -top-24 -right-20" src="{{asset('img/sitoa-p-1080.png')}}" alt="sitoa-p-1080">
                <img class="floating-sitoc-p-800  drop-shadow-2xl absolute 2xl:w-96 xl:w-96 lg:w-60 w-60 z-20 md:bottom-20 md:right-0" src="{{asset('img/sitoc-p-800.png')}}" alt="sitoc-p-800">
                <img class="floating-sitob-p-1080  drop-shadow-2xl absolute 2xl:w-96 xl:w-72 lg:w-60 w-60 z-20 md:bottom-20 md:left-40 bottom-0 left-40" src="{{asset('img/sitob-p-1080.png')}}" alt="sitob-p-1080">
            </div>
        </div>
    </header>
    <section class="mx-auto py-4 px-4 sm:px-10 lg:px-12">
        <div data-rellax-speed="0.5" class="rounded-3xl rellax bg-custom-blue md:px-24 md:py-24 py-12 px-6 w-full flex flex-row">
            <div class="flex flex-col xl:w-2/3 w-full text-white space-y-14 md:text-left text-center">
                <div data-rellax-speed="2" class="text-2xl rellax font-semibold tracking-wider uppercase"></div>
                <div data-rellax-speed="1" class="md:text-4xl xl:text-5xl 2xl:text-6xl rellax text-3xl font-bold tracking-wide">{{__('Мы многопрофильная студия, базирующаяся в Бишкеке.')}} </div>
                <div data-rellax-speed="0.5" class="md:text-2xl rellax text-lg font-medium tracking-wide leading-relaxed">{{__('Каждый человек имеет право на социальный и международный порядок, при котором права и свободы, изложенные в настоящей Декларации, могут быть полностью осуществлены.')}}</div>
                <a href="{{route('services.index')}}" data-tilt class="rounded-3xl md:w-max p-4 bg-white text-indigo-700 text-xl font-semibold shadow-2xl">{{__('Наши услуги')}}</a>
            </div>
            <div data-rellax-speed="-0.5" class="w-1/2 xl:block hidden rellax">
                <img class="drop-shadow-2xl" src="https://uploads-ssl.webflow.com/603cf20cb11d6e40846c46e2/603cf20cb11d6e43466c4753_sitof-p-1600.png" alt="">
            </div>
        </div>
    </section>

    <section class="mx-auto pb-4 px-4 sm:px-10 lg:px-12">
        <div class="flex xl:flex-row flex-col space-y-12 xl:space-y-0 w-full xl:space-x-12 space-x-0">
            <div class="bg-yellow-700-accent rounded-3xl xl:w-3/5 w-full p-16 space-y-8 flex flex-col justify-center items-center">
                <div>
                    <lottie-player  class="w-96 h-auto" src="{{asset('img/lf30_editor_1ydmere1.json')}}" background="transparent"  speed="1" loop autoplay></lottie-player>
                </div>
                <div class=" text-center">
                    <a href="{{route('portfolio.index')}}" class="md:text-6xl text-5xl font-bold hover:underline text-grey-900">{{__("Посмотреть все работы.")}}</a>
                </div>
                <div class="text-2xl font-normal tracking-tight leading-relaxed text-center">
                    {{__("Узнайте, как мы разработали успешные маркетинговые стратегии.")}}
                </div>
            </div>
            <div class="bg-gray-50 rounded-3xl xl:w-2/5 w-full md:px-16 md:py-16 px-6 py-10 space-y-12 flex flex-col justify-center items-center">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="text-4xl font-bold text-center flex flex-row justify-between space-x-4 items-center">
                    <p class="text-gray-900">Задайте вопрос.</p>
                    <img class="h-12 w-auto md:block hidden" src="{{asset('img/mail.svg')}}" alt="">
                </div>
                <div class="text-2xl font-normal tracking-tight leading-relaxed text-center">{{__('Вам перезвонят в течение 10 минут!')}}</div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{asset('js/jquery.js')}}" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="{{asset('js/tilt.js')}}"></script>
    <script src="{{asset('js/rellax.min.js')}}"></script>
    <script>
        var rellax = new Rellax('.rellax', {
            breakpoints:[576, 768, 1201]
        });
    </script>
@endpush

