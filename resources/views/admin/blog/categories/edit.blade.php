<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('categories.update', $category->id)}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col space-y-4">
                            <div>
                                <x-input name="title" value="{{ $category->title ?? '' }}" class="w-full" placeholder="Category title"></x-input>
                            </div>
                            <div>
                                <x-input name="description" value="{{ $category->description ?? '' }}" class="w-full" placeholder="Category description"></x-input>
                            </div>
                            <div>
                                <x-input type="file" name="image" value="{{ URL::asset('/img/'.$category->image) ?? '' }}" class="w-full" placeholder="Category image"></x-input>
                            </div>
                            <div>
                                <x-input name="slug" value="{{ $category->slug ?? '' }}" class="w-full" placeholder="Category url"></x-input>
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
