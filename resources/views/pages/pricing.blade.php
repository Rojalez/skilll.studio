@extends('layouts.base')

@section('title', 'Pricing')

@section('content')
        <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:flex-col sm:align-center">
                <x-title align="center">Pricing Plans</x-title>
                <x-subtitle align="center">
                    Start building for free, then add a site plan to go live. Account plans unlock additional features.
                </x-subtitle>
{{--                <div class="relative self-center mt-6 bg-gray-100 rounded-lg p-0.5 flex sm:mt-8">--}}
{{--                    <button type="button" class="relative w-1/2 bg-white border-gray-200 rounded-md shadow-sm py-2 text-sm font-medium text-gray-900 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:z-10 sm:w-auto sm:px-8">Monthly billing</button>--}}
{{--                    <button type="button" class="ml-0.5 relative w-1/2 border border-transparent rounded-md py-2 text-sm font-medium text-gray-700 whitespace-nowrap focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:z-10 sm:w-auto sm:px-8">Yearly billing</button>--}}
{{--                </div>--}}
            </div>
        <div class="bg-[url('/img/background-curve.svg')] bg-no-repeat bg-bottom pb-8">
            <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-4xl xl:mx-auto xl:grid-cols-3">
                <div class="border bg-white border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
                    <div class="p-6">
                        <h2 class="text-lg leading-6 font-medium text-gray-900">Hobby</h2>
                        <p class="mt-4 text-sm text-gray-500">All the basics for starting a new business</p>
                        <p class="mt-8">
                            <span class="text-4xl font-extrabold text-gray-900">$12</span>
                            <span class="text-base font-medium text-gray-500">/mo</span>
                        </p>
                        <x-button-link href="#" color="primary btn-outline" class="w-full mt-8">
                            Buy Hobby
                        </x-button-link>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">Potenti felis, in cras at at ligula nunc.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="border bg-white border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
                    <div class="p-6">
                        <h2 class="text-lg leading-6 font-medium text-gray-900">Startup</h2>
                        <p class="mt-4 text-sm text-gray-500">All the basics for starting a new business</p>
                        <p class="mt-8">
                            <span class="text-4xl font-extrabold text-gray-900">$32</span>
                            <span class="text-base font-medium text-gray-500">/mo</span>
                        </p>
                        <x-button-link href="#" color="primary" class="w-full mt-8">
                            Buy Startup
                        </x-button-link>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">Potenti felis, in cras at at ligula nunc. </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="border bg-white border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
                    <div class="p-6">
                        <h2 class="text-lg leading-6 font-medium text-gray-900">Enterprise</h2>
                        <p class="mt-4 text-sm text-gray-500">All the basics for starting a new business</p>
                        <p class="mt-8">
                            <span class="text-4xl font-extrabold text-gray-900">$48</span>
                            <span class="text-base font-medium text-gray-500">/mo</span>
                        </p>
                        <x-button-link href="#" color="primary btn-outline" class="w-full mt-8">
                            Buy Enterprise
                        </x-button-link>
                    </div>
                    <div class="pt-6 pb-8 px-6">
                        <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex space-x-3">
                                <!-- Heroicon name: solid/check -->
                                <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-500">Potenti felis, in cras at at ligula nunc. </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-center text-3xl font-semibold text-gray-900 sm:text-4xl">Frequently asked questions</h2>
                    <dl class="mt-12 space-y-6">
                        @foreach($faqs as $faq)
                            <div class="collapse border border-base-300 rounded collapse-arrow hover:bg-grey transition duration-100">
                                <input type="checkbox" />
                                <div class="collapse-title text-xl font-medium">
                                    {{$faq->title}}
                                </div>
                                <div class="collapse-content tracking-wider font-light">
                                    <p>{{$faq->text}}</p>
                                </div>
                            </div>
                        @endforeach
                    </dl>
                </div>
            </div>
@endsection
