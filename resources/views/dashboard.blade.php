@extends('app')
@section('title', 'Dashboard')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 text-center">
        <h2>Welcome, {{ $user->name }}</h2>
        <p>Email: {{ $user->email }}</p>
        <a href="{{ route('logout') }}" class="btn btn-danger mt-3">Logout</a>
    </div>
</div>
@endsection
