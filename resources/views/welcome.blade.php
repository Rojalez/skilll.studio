@extends('layouts.base')
@section('title')
    {{env('APP_NAME')}}
@endsection
@section('content')
    <div class="relative overflow-hidden">
        <main class="lg:relative">
            <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
                <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
                    <x-title align="left">Turn first-time customers into forever customers with the world’s most trusted loyalty app</x-title>
                    <x-subtitle align="left">
                        Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                    </x-subtitle>
                    <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                        <x-button-link color="primary" class="btn-wide">
                            Get Started
                        </x-button-link>
                    </div>
                </div>
            </div>
            <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
                <img class="absolute inset-0 w-full h-full" src="https://website-assets.smilecdn.co/assets/home/hero-2-2030048081739b943dded2de8b6d09247c88398754d92e113629c378df634823.svg" alt="">
            </div>
        </main>
        <div class="relative max-w-screen-2xl mt-10 mx-auto py-12 px-4 sm:px-6 lg:py-4 lg:px-8 bg-[url('/img/background.svg')] bg-100% bg-no-repeat">
            <h1 class="text-center text-base font-semibold uppercase text-gray-700 mt-10 tracking-wider">Trusted by over 5 very
                average small businesses</h1>
            <div class="mt-6 max-w-7xl mx-auto grid grid-cols-2 gap-0.5 md:grid-cols-6 lg:mt-8">
                <div class="col-span-1 flex justify-center py-8 px-8 ">
                    <img class="max-h-12 z-10" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg"
                         alt="Workcation">
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8">
                    <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8">
                    <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8">
                    <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg"
                         alt="Laravel">
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8">
                    <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg"
                         alt="StaticKit">
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8">
                    <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg"
                         alt="Statamic">
                </div>
            </div>
        </div>
    </div>
@endsection
