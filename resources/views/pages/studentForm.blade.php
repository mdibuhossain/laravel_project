@extends('layouts.main')

@push('title')
    <title>Form control</title>
@endpush

@section('content')
    <section class="w-5/12 mx-auto">
        <form action="{{ url('/') }}/student-form-create" method="POST" class="space-y-2">
            @csrf
            <h3 class="text-2xl text-center mb-2">Fill the stduent form</h3>
            <x-input type="name" name="email" placeholder="Enter Name" />
            <x-input type="st_id" name="username" placeholder="Enter Student ID" />
            <x-input type="semester" name="city" placeholder="Enter semester" />
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </section>
@endsection
