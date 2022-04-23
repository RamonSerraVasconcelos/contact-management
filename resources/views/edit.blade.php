@extends('partials/head')
@section('content')
    <div class="container mt-3">
        <form class="form-group" action="{{ route('contacts.update', $contact['id']) }}" method="POST">
            @csrf
            <label>Name</label>
            <input name="name" type="text" class="form-control" value="{{ $contact['name'] }}" required>
            <label>Contact Number</label>
            <input name="contact" type="text" class="form-control" value="{{ $contact['contact'] }}" maxlength="9" required>
            <label>Email</label>
            <input name="email" type="email" class="form-control" value="{{ $contact['email'] }}" required>
            <button type="submit" class="btn btn-primary w-100 mt-3">Save</button>
        </form>
    </div>
@endsection
