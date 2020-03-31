@extends('layouts.app')

@section('content')
<header class="mb-6">
    <img src="/images/background.jpg" alt="" class="mb-2 w-full rounded-lg" style="height: 200px;">

    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
            <p>Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div>
            <a href="" class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2">Edit Profile</a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
        </div>
    </div>
    <p class="text-sm">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor convallis ipsum, elementum sodales tellus
        posuere et. Quisque sit amet ex eget ex consequat auctor vel ac urna. Pellentesque tempor nec nisl vel suscipit.
        Aenean non velit ac felis tincidunt mattis. Praesent tempor at leo eget porttitor. Nulla eu lorem id nisi
        ultricies vehicula. Donec semper orci vel vestibulum malesuada. Maecenas dapibus sed lorem sed consequat. In
        eget sodales metus, sit amet condimentum ligula. Morbi sed turpis at turpis auctor fringilla at ac felis.
        Praesent felis lorem, porttitor eget ex ac,
    </p>
    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute"
        style="width: 150px; left: calc(50% - 100px); top: 220px">

</header>
    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
