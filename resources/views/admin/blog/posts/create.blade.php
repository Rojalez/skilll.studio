@push('css')
    <link rel="stylesheet" href="/css/trix.css">
@endpush
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new posts') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('posts.store')}}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="flex flex-col space-y-4">
                            <div>
                                <x-input name="title" class="w-full" placeholder="Post title"/>
                            </div>
                            <div>
                                <input id="content" type="hidden" name="content" value="" />
                                <trix-editor input="content" class="trix-content"></trix-editor>
                            </div>
                            <div>
                                <x-input name="slug" class="w-full" placeholder="Post url"/>
                            </div>
                            <div>
                                <x-input type="file" required name="image" class="w-full" placeholder="Image url"/>
                            </div>
                            <div>
                                <x-select multiple name="categories[]" class="w-full h-24">
                                    <option disabled selected>Choose category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </x-select>
                            </div>
                            <div>
                                <x-select name="is_published" class="w-full">
                                    <option disabled selected>Is published?</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </x-select>
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
    @push('js')
        <script src="{{ asset('js/trix.js') }}"></script>
        <script src="{{ asset('js/attachments.js') }}"></script>
    @endpush
</x-app-layout>

