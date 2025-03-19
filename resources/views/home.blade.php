@extends('layouts.app')

@section('title', 'Laravel di Azure')

@section('content')
<div class="card shadow-sm">
    <div class="card-body text-center">
        <h1 class="text-primary">Hello, World!</h1>
        <p>Selamat datang di aplikasi Laravel di Azure.</p>
        <a href="{{ route('form') }}" class="btn btn-primary">Form</a>
    </div>
</div>
@endsection
