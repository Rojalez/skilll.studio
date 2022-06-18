<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
        <x-button-link href="{{route('posts.create')}}" color="primary" class="btn-sm">New</x-button-link>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Url</th>
{{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Content</th>--}}
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Is published</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($posts as $post)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{$post->title}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{$post->slug}}
                                            </td>
{{--                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">--}}
{{--                                                {{Str::limit($post->content, 150, $end='...')}}--}}
{{--                                            </td>--}}
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                <img class="rounded" src="{{ url('img/post/'.$post->image) }}">
                                            </td>
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                @if($post->is_published === 1)
                                                    Yes
                                                @elseif($post->is_published === 0)
                                                    No
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                {{$post->user->name}}
                                            </td>
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                @foreach($post->categories as $category)
                                                    <a class="badge badge-secondary badge-outline mb-1" href="{{route('blog.category', $category->slug)}}">{{$category->title}}</a>
                                                @endforeach
                                            </td>
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                {{$post->created_at}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex flex-row space-x-2 items-center justify-end">
                                                    <x-button-link href="post/{{$post->id}}/edit" color="primary" class="btn-xs" >
                                                        Edit
                                                    </x-button-link>
                                                    <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <x-button type="submit" color="secondary" class="btn-xs">
                                                            Delete
                                                        </x-button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
