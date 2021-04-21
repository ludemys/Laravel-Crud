@include('includes.header')

<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }} | {{ $user->age }}</li>
    @endforeach
</ul>

@include('includes.footer')