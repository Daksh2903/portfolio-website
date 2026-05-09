@extends('layout')

@section('content')

<h1 class="text-center mb-4">Contact Me</h1>

<div class="row justify-content-center">

    <div class="col-md-6">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <form action="/contact" method="POST">

            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>


            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>


            <div class="mb-3">
                <label>Message</label>
                <textarea name="message" class="form-control" rows="4" required></textarea>
            </div>


            <button type="submit" class="btn btn-primary">
                Send Message
            </button>

        </form>

    </div>

</div>

@endsection