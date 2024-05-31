@extends('layouts.main')

@push('title')
    <title>Form control</title>
@endpush

@section('content')
    <section class="w-5/12 mx-auto">


        <form action="{{ url('/') }}/form-create" method="POST">
            @csrf
            <h3 class="text-2xl text-center mb-2">Fill the form</h3>
            <x-input type="email" name="email" placeholder="Enter email address" />
            <x-input type="text" name="username" placeholder="Enter username" />
            <x-input type="password" name="password" placeholder="Enter password" />
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
        @if (isset($username) || isset($email) || isset($password))
            <div class="border-2 mt-4 p-2 rounded-md space-y-2">
                @if ($email)
                    <p>Email: {{ $email }}</p>
                @endif
                @if ($username)
                    <p>Username: {{ $username }}</p>
                @endif
                @if ($password)
                    <p>Password: {{ $password }}</p>
                @endif
            </div>
        @endif
    </section>
@endsection
