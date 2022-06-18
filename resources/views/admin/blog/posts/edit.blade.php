@push('css')
    <link rel="stylesheet" href="/css/trix.css">
@endpush
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit post') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('posts.update', $post->id)}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col space-y-4">
                            <div>
                                <x-input name="title" value="{{ $post->title ?? '' }}" class="w-full" placeholder="Post title"/>
                            </div>
                            <div>
                                <x-input name="slug" value="{{ $post->slug ?? '' }}" class="w-full" placeholder="Post url"/>
                            </div>
                            <div>
                                <input id="content" type="hidden" value="{{ $post->content ?? '' }}" name="content" />
                                <trix-editor input="content" class="trix-content"></trix-editor>
                            </div>
                            <div>
                                <x-input type="file" name="image" value="{{ $post->image ?? '' }}" class="w-full" placeholder="Image url"/>
                                <img class="h-80 w-full object-cover rounded my-5" src="{{ url('img/post/'.$post->image) }}" alt="">
                            </div>
                            <div>
                                <x-select name="categories[]" multiple="" class="w-full h-24">
                                    @foreach($post->categories as $category)
                                        <option value="{{$category->id}}" selected>{{$category->title}}</option>
                                    @endforeach
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </x-select>
                            </div>
                            <div>
                                <x-select name="is_published" class="w-full">
                                    <option value="{{$post->is_published}}">
                                        @if($post->is_published === 1)
                                            Published
                                        @elseif($post->is_published === 0)
                                            Not published
                                        @endif
                                    </option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
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
    @push('js')
        <script src="{{ asset('js/trix.js') }}"></script>
        <script src="{{ asset('js/attachments.js') }}"></script>
    @endpush
</x-app-layout>
