@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="font-weight-bold">Dashboard</h1>
@stop

@section('content')

@php
    use App\Models\Blog;
    use App\Models\ContactSubmission;

    $blogCount = Blog::count();
    $contactCount = ContactSubmission::count();
@endphp

<div class="row">

    <!-- Blogs Card -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ $blogCount }}</h3>
                <p>Total Blogs</p>
            </div>
            <div class="icon">
                <i class="fas fa-blog"></i>
            </div>
            <a href="{{ route('blogs.index') }}" class="small-box-footer">
                Manage Blogs <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <!-- Contacts Card -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $contactCount }}</h3>
                <p>Total Contacts</p>
            </div>
            <div class="icon">
                <i class="fas fa-envelope"></i>
            </div>
            <a href="{{ route('contacts.index') }}" class="small-box-footer">
                View Contacts <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

</div>


<div class="row">

    <!-- Latest Blogs -->
    <div class="col-lg-6">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Latest Blogs</h3>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach (Blog::latest()->take(5)->get() as $blog)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $blog->title }}
                            <span class="badge badge-primary badge-pill">{{ $blog->created_at->format('d M Y') }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Latest Contacts -->
    <div class="col-lg-6">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h3 class="card-title">Recent Contact Messages</h3>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach (ContactSubmission::latest()->take(5)->get() as $contact)
                        <li class="list-group-item">
                            <strong>{{ $contact->name }}</strong>  
                            <br>
                            <small>{{ $contact->email }} | {{ $contact->created_at->diffForHumans() }}</small>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</div>

@stop
