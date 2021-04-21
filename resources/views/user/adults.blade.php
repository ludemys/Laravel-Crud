@include('includes.header')

<ul>
    @foreach ($users as $user)
        @if ($user->age >= 18)
            <li>{{ $user->name }} | {{ $user->age }}</li>
        @endif
    @endforeach
</ul>

@include('includes.footer')