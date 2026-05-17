@extends('admin.layout')

@section('content')

<h1 class="text-info fw-bold mb-5">
    Contact Messages
</h1>


@if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif


<div class="card glass-about p-4 shadow-lg border-0">

    <div class="table-responsive">

        <table class="table table-dark table-hover align-middle">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Name</th>

                    <th>Email</th>

                    <th>Message</th>

                    <th>Action</th>

                </tr>

            </thead>

            <tbody>

                @foreach($messages as $message)

                <tr>

                    <td>{{ $message->id }}</td>

                    <td>{{ $message->name }}</td>

                    <td>{{ $message->email }}</td>

                    <td>{{ $message->message }}</td>

                    <td>

                        <form action="/messages/delete/{{ $message->id }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection