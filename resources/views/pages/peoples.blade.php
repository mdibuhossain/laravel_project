@extends('layouts.main')

@push('title')
    <title>Form control</title>
@endpush

@section('content')
    <section class="w-8/12 mx-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peoples as $people)
                    <tr>
                        <td>{{ $people->username }}</td>
                        <td>{{ $people->email }}</td>
                        <td>{{ $people->password }}</td>
                        <td>{{ $people->city }}</td>
                        <td>
                            <a href="{{ route('form.delete', ['id' => $people->id]) }}">
                                <button class="btn btn-error">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
