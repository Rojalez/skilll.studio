<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('categories.store')}}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="flex flex-col space-y-4">
                            <div>
                                <x-input name="title" class="w-full" placeholder="Category title"/>
                            </div>
                            <div>
                                <x-input name="description" class="w-full" placeholder="Category description"/>
                            </div>
                            <div>
                                <x-input type="file" name="image" class="w-full" placeholder="Category image"/>
                            </div>
                            <div>
                                <x-input name="slug" class="w-full" placeholder="Category url"/>
                            </div>
                            <div class="w-full flex justify-end">
                                <x-button type="submit" class="btn-wide" color="primary">Create</x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
