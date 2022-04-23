@extends('partials/head')
@section('content')
    <div class="d-flex justify-content-center mt-3" style="padding-bottom: 30px;border-bottom: 1px ridge #cecece;">
        <h1>Contacts</h1>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact['name'] }}</td>
                        <td>{{ $contact['contact'] }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td><a href="contacts/edit/{{ $contact['id'] }}"><i class="material-icons">edit</i></a></td>
                        <td>
                            <form method="POST" action="{{ route('contacts.delete', $contact['id']) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-danger delete" title='Delete'>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
