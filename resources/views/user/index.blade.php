
{{--@foreach($users as $user)--}}
{{--    <h2>{{$user->name}}</h2>--}}
{{--    <p>{{$user->address->country}}</p>--}}
{{--@endforeach--}}

@foreach($address as $item)
    <h2>{{$item->country}}</h2>
    <p>{{$item->user->name}}</p>
@endforeach
