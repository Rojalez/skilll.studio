@push('css')
    <link rel="stylesheet" href="/css/trix.css">
@endpush
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit cookie') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('cookie.update', $cookie->id)}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col space-y-4">
                            <div>
                                <input id="content" type="hidden" value="{{ $cookie->content ?? '' }}" name="content" />
                                <trix-editor input="content" class="trix-content"></trix-editor>
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
