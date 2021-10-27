@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    {{-- <p>{{ optional($post->user)->name }}</p> --}}
    <p>{{ $post->user->name }}</p>
    <ul>
        @foreach($post->tags as $tag)
            <li>{{$tag->name}}</li>
        @endforeach
    </ul>
@endforeach