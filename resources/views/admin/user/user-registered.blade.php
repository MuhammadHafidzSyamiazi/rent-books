@extends('layouts.main')

@section('title', 'Registered User')

@section('content')
<h1>List Registered User</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/users" class="btn btn-success me-2">Approve User List</a>
</div>
        @if(session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
        @endif
<div class="mt-4">
    <table class="table">
        <thead>
            <tr>
                <td>No. </td>
                <td>Username</td>
                <td>Phone</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($usersRegistered as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->phone}}</td>
                <td>
                    <a href="/users-detail/{{$item->slug}}" class="me-2 btn btn-primary ">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection