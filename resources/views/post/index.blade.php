@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    {{-- <p>{{ optional($post->user)->name }}</p> --}}
    <p>{{ $post->user->name }}</p>
@endforeach