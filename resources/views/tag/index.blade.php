@foreach($tags as $tag)
    <h2>{{$tag->id}}.{{$tag->name}}</h2>
    <ul>
    @foreach($tag->posts as $post)
        <li>{{$post->title}}</li>
    @endforeach
</ul>
@endforeach