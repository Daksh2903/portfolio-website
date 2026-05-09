@extends('layout')

@section('content')

<h1 class="text-center mb-4">Contact Messages</h1>

<div class="card shadow p-4">

<table class="table table-bordered">

    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
    </thead>

    <tbody>

        @foreach($messages as $msg)

        <tr>
            <td>{{ $msg->name }}</td>
            <td>{{ $msg->email }}</td>
            <td>{{ $msg->message }}</td>
            <td>{{ $msg->created_at->format('d M Y') }}</td>
        </tr>

        @endforeach

    </tbody>

</table>

</div>

@endsection