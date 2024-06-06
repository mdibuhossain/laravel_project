@extends('layouts.main')

@push('title')
    <title>Form control</title>
@endpush

@section('content')
    <section class="w-5/12 mx-auto">
        <form action="{{ route('login') }}" method="POST" class="space-y-2">
            @csrf
            <h3 class="text-2xl text-center mb-2">Register</h3>
            @php
                print_r(old('email'));
            @endphp
            <x-input type="text" name="name" value="{{ old('name') }}" placeholder="Enter name" />
            @error('name')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <x-input type="email" name="email" value="{{ old('email') }}" placeholder="Enter email address" />
            @error('email')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <x-input type="password" name="password" value="{{ old('password') }}" placeholder="Enter password" />
            @error('password')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    {{ $message }}
                </div>
            @enderror
            already have an account? <a href="{{ route('login.view') }}" class="text-blue-500">Login</a><br />
            <button type="submit" class="btn btn-info">Register</button>
        </form>
    </section>
@endsection
