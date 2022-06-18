<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update review') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('reviews.update', $review->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col space-y-4">
                            <div>
                                <x-input name="customer" value="{{ $review->customer ?? '' }}" class="w-full" placeholder="Customer name"/>
                            </div>
                            <div>
                                <x-input name="title" value="{{ $review->title ?? '' }}" class="w-full" placeholder="Title od review"/>
                            </div>
                            <div>
                                <x-input name="text" value="{{ $review->text ?? '' }}" class="w-full" placeholder="Text of review"/>
                            </div>
                            <div>
                                <x-select name="rate" class="w-full">
                                    <option value="{{$review->rate}}">{{$review->rate}}</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </x-select>
                            </div>
                            <div class="w-full flex justify-end">
                                <x-button type="submit" class="btn-wide" color="primary">Update</x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
