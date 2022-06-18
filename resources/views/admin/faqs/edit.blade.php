<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update faq') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('faqs.update', $faq->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col space-y-4">
                            <div>
                                <x-input name="title" value="{{ $faq->title ?? '' }}" class="w-full" placeholder="Faq title"/>
                            </div>
                            <div>
                                <x-input name="text" value="{{ $faq->text ?? '' }}" class="w-full" placeholder="Faq text"/>
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
