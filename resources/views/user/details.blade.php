<p><b>User id:</b> {{ $user->id }}</p>
<p><b>Name:</b> {{ $user->name }}</p>
<p><b>Email:</b> {{ $user->email }}</p>
<p><b>Password:</b> {{ $user->password }}</p>
<p><b>Created at:</b> {{ $user->created_at }}</p>
<p><b>Updated at:</b> {{ $user->updated_at }}</p>

<a href="{{ route('users.index') }}">Go to Index</a>