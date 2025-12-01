@extends('adminlte::page')

@section('title', 'Create Blog')

@section('content_header')
    <h1>Create Blog</h1>
@stop

@section('content')
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('admin.blogs.form')
    </form>
@stop
