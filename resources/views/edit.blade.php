@extends('partials/head')
@section('content')
    <div class="container mt-3">
        <form class="form-group" action="/create" method="POST">
            @csrf
            <input type="hidden" name="contact_id" value="{{ $contact['id'] }}">
            <label>Name</label>
            <input type="text" class="form-control" value="{{ $contact['name'] }}">
            <label>Contact Number</label>
            <input type="text" class="form-control" onkeypress="$(this).mask('00000-0000', {reverse: true});" value="{{ $contact['contact'] }}">
            <label>Email</label>
            <input type="email" class="form-control" value="{{ $contact['email'] }}">
            <button type="submit" class="btn btn-primary w-100 mt-3">Save</button>
        </form>
    </div>
@endsection
