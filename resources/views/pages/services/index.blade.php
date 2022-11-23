@extends('layouts.base')
@section('title', 'Услуги')
@section('content')
    <section>
        <div class="space-y-10 py-10">
            <div class="flex xl:flex-row flex-col-reverse md:space-x-10 px-4 sm:px-10 lg:px-12">
                <div class="bg-gray-50 shadow-sm rounded-3xl xl:w-1/2 w-full py-16 2xl:px-16 xl:px-10 lg:px-8 md:px-6 sm:px-4 px-4 flex flex-col space-y-10">
                    <div class="flex flex-col space-y-6">
                        <div class="flex flex-col space-y-3 md:text-left text-center">
                            <h2 class="font-bold text-custom-blue md:text-4xl text-3xl">{{__('Стратегия бренда')}} </h2>
                            <h4 class="uppercase md:text-lg text-sm font-semibold tracking-widest">{{__('СОЗДАНИЕ ИЗОБРАЖЕНИЙ')}}</h4>
                        </div>
                        <div class="md:text-2xl text-base md:tracking-wide tracking-tight md:leading-9 leading-relaxed text-justify">
                            {{__('Infinity разрабатывает фирменный стиль, начиная с дизайна, который отличается от конкурентов. В качестве долгосрочной стратегии наша деятельность не ограничивается этапом проектирования, а продолжается постоянным контролем эффективности наших действий до тех пор, пока мы не достигнем желаемой бизнес-цели.')}}
                        </div>
                    </div>
                </div>
                <div class="xl:w-1/2 w-full">
                    <img data-tilt class="rounded-3xl w-full drop-shadow-2xl" src="{{asset('img/wave-sphere.png')}}" alt="">
                </div>
            </div>
            <div class="flex xl:flex-row flex-col md:space-x-10 px-4 sm:px-10 lg:px-12">
                <div class="xl:w-1/2 w-full">
                    <img data-tilt class="rounded-3xl w-full  drop-shadow-2xl" src="{{asset('img/cryptocurrency-certificate.png')}}" alt="">
                </div>
                <div class="bg-gray-50 shadow-sm rounded-3xl xl:w-1/2 w-full py-16 2xl:px-16 xl:px-10 lg:px-8 md:px-6 sm:px-4 px-4 flex flex-col space-y-10">
                    <div class="flex flex-col space-y-6">
                        <div class="flex flex-col space-y-3 md:text-left text-center">
                            <h2 class="font-bold text-custom-blue md:text-4xl text-3xl">{{__('Стратегия бренда')}}</h2>
                            <h4 class="uppercase md:text-lg text-sm font-semibold tracking-widest">{{__('СОЗДАНИЕ ИЗОБРАЖЕНИЙ')}}</h4>
                        </div>
                        <div class="md:text-2xl text-base md:tracking-wide tracking-tight md:leading-9 leading-relaxed text-justify">
                            {{__('Infinity разрабатывает фирменный стиль, начиная с дизайна, который отличается от конкурентов. В качестве долгосрочной стратегии наша деятельность не ограничивается этапом проектирования, а продолжается постоянным контролем эффективности наших действий до тех пор, пока мы не достигнем желаемой бизнес-цели.')}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex xl:flex-row flex-col-reverse md:space-x-10 px-4 sm:px-10 lg:px-12">
                <div class="bg-gray-50 shadow-sm rounded-3xl xl:w-1/2 w-full py-16 2xl:px-16 xl:px-10 lg:px-8 md:px-6 sm:px-4 px-4 flex flex-col space-y-10">
                    <div class="flex flex-col space-y-6">
                        <div class="flex flex-col space-y-3 md:text-left text-center">
                            <h2 class="font-bold text-custom-blue md:text-4xl text-3xl">{{__('Стратегия бренда')}}</h2>
                            <h4 class="uppercase md:text-lg text-sm font-semibold tracking-widest">{{__('СОЗДАНИЕ ИЗОБРАЖЕНИЙ')}}</h4>
                        </div>
                        <div class="md:text-2xl text-base md:tracking-wide tracking-tight md:leading-9 leading-relaxed text-justify">
                            {{__('Infinity разрабатывает фирменный стиль, начиная с дизайна, который отличается от конкурентов. В качестве долгосрочной стратегии наша деятельность не ограничивается этапом проектирования, а продолжается постоянным контролем эффективности наших действий до тех пор, пока мы не достигнем желаемой бизнес-цели.')}}
                        </div>
                    </div>
                </div>
                <div class="xl:w-1/2 w-full">
                    <img data-tilt class="rounded-3xl w-full  drop-shadow-2xl" src="{{asset('img/cloud-ball.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="{{asset('js/jquery.js')}}" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="{{asset('js/tilt.js')}}"></script>
@endpush
