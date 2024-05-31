@extends('layouts.main')

@push('title')
    <title>Controller Type</title>
@endpush

@section('content')
    <h1 class="text-3xl font-bold">
        {{ $title ?? 'CONTROLLER TYPE' }}
    </h1>
@endsection
