<x-layout>

    <x-slot name="title">
        <title>{{$blog->title}}</title>
    </x-slot>

    <h1>{{ $blog->title }}</h1>
    <span class="date">{{ $blog->date; }}</span>
    <p>{!!$blog->body; !!}</p>

    <a href="/">Back to Home</a>
</x-layout>

