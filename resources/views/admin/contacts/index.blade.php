@extends('adminlte::page')

@section('title', 'Contact Submissions')

@section('content_header')
    <h1>Contact Submissions</h1>
@stop

@section('content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->message }}</td>
                <td>{{ $contact->created_at->format('d M Y h:i A') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contacts->links() }}
@stop
