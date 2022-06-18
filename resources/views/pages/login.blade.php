@extends('layouts.base')
@section('title', 'Login | Infinity')
@section('content')
    <div class="relative mt-40 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-7xl mx-auto">
            <div class="sm:flex sm:flex-col sm:align-center">
                <x-title align="center">Log in to your account</x-title>
                <x-subtitle align="center">
                    Please log in using your Shopify store address
                </x-subtitle>
                <form class="mt-10 flex flex-row w-full rounded justify-center">
                        <input type="text" placeholder="Store name" class="w-56 border-gray-300 px-3 rounded-l border border-r-0 focus:ring-0 focus:border-gray-300 focus:outline-none text-gray-500 sm:text-sm" />
                        <input type="text" disabled class="px-3 py-2 w-32 rounded-none border-gray-300 bg-gray-50 rounded-r-none sm:text-sm" value=".myshopify.com" placeholder=".myshopify.com">
                        <x-button color="primary" class="rounded-l-none"> Log in </x-button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('isHidden', 'hidden')

