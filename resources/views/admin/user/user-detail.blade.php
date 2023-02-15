@extends('layouts.main')

@section('title', 'User Detail')

@section('content')
<h1>User Detail</h1>

<div class="mt-4 d-flex justify-content-end">
    @if($users->status == 'inavtive')
    <a href="/users-approve/{{$users->slug}}" class="btn btn-primary me-2">Approve User</a>
    <a href="/users-registered" class="btn btn-secondary me-2">Back</a>
    @else
    <a href="/users" class="btn btn-secondary me-2">Back</a>
    @endif
</div>
        @if(session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
        @endif

<div class="mt-4">
    <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" readonly value="{{$users->username}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Phone</label>
        <input type="text" class="form-control" readonly value="{{$users->phone}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Address</label>
        <input type="text" class="form-control" readonly value="{{$users->address}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Status</label>
        <input type="text" class="form-control" readonly value="{{$users->status}}">
    </div>
</div>
@endsection