@push('css')
    <link rel="stylesheet" href="/css/trix.css">
@endpush
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit portfolio') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('portfolios.update', $portfolio->id)}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col space-y-4">
                            <div>
                                <x-input name="title" value="{{ $portfolio->title ?? '' }}" class="w-full" placeholder="Post title"/>
                            </div>
                            <div>
                                <x-input name="slug" value="{{ $portfolio->slug ?? '' }}" class="w-full" placeholder="Post url"/>
                            </div>
                            <div>
                                <input id="content" type="hidden" value="{{ $portfolio->content ?? '' }}" name="content" />
                                <trix-editor input="content" class="trix-content"></trix-editor>
                            </div>
                            <div>
                                <x-input name="categories" value="{{ $portfolio->categories ?? '' }}" class="w-full" placeholder="Portfolio categories"/>
                            </div>
                            <div>
                                <x-input type="file" name="image" value="{{ $portfolio->image ?? '' }}" class="w-full" placeholder="Image url"/>
                                <img class="h-80 w-full object-cover rounded my-5" src="{{ url('img/portfolio/'.$portfolio->image) }}" alt="">
                            </div>
                            <div>
                                <x-select name="is_published" class="w-full">
                                    <option value="{{$portfolio->is_published}}">
                                        @if($portfolio->is_published === 1)
                                            Published
                                        @elseif($portfolio->is_published === 0)
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
