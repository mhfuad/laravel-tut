
{{-- 
@foreach($users as $user)
    <h2>{{$user->name}}</h2>
    @foreach($user->addresses as $address)
        <p>{{$address->country}}</p>
    @endforeach
@endforeach

--}}

@foreach($users as $user)
    <h2>{{$user->name}}</h2>
    @foreach($user->posts as $post)
        <p>{{$post->title}}</p>
    @endforeach
@endforeach


