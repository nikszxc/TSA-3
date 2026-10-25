@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <h1>Profile</h1>
    <p class="sub">Demo user information.</p>

    <div class="card">
        @if ($user)
            <dl>
                <dt>ID</dt><dd>{{ $user->id }}</dd>
                <dt>Username</dt><dd>{{ $user->username }}</dd>
                <dt>Full name</dt><dd>{{ $user->full_name }}</dd>
                <dt>Email</dt><dd>{{ $user->email }}</dd>
                <dt>Member since</dt><dd>{{ $user->created_at->format('F j, Y') }}</dd>
            </dl>
        @else
            <p class="empty">No user found. Run <code>php artisan db:seed</code>.</p>
        @endif
    </div>
@endsection
