@trix(\App\Article::class, 'content')
@once
    @push('css')
        @trixassets
    @endpush
@endonce
