<x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    @foreach($blogs as $blog)
        <article class="{{$loop->odd? "bg-white":"border-white"}}">
            <h1><a href="blog/{{$blog->slug}}">{{$blog->title}}</a></h1>
            <span class="date">{{$blog->date}}</span>
            <p>{{$blog->intro}}</p>
        </article>
    @endforeach
</x-layout>

