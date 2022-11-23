@extends('layouts.base')
@section('title', env('APP_NAME') . ' | ' . 'Cookie')
@section('content')
    <section>
        <div class="space-y-10 py-10 px-10">
            <div class="bg-white rounded-3xl md:p-16 p-6 md:prose-base prose-sm">
                {!! $cookie->content !!}
            </div>
        </div>
    </section>
@endsection
