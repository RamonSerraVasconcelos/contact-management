@extends('partials/head')
@section('content')
    <div class="container mt-3">
        <form class="form-group" action="/contacts/create" method="POST">
            @csrf
            <label>Name</label>
            <input name="name" type="text" class="form-control" required>
            <label>Contact Number</label>
            <input name="contact" type="text" class="form-control" maxlength="10">
            <label>Email</label>
            <input name="email" type="email" class="form-control">
            <button type="submit" class="btn btn-primary w-100 mt-3">Save</button>
        </form>
    </div>
@endsection
