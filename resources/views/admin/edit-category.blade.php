@extends('layouts.main')

@section('title', 'Update Category')

@section('content')
<h1>Add Category</h1>
@if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
            </div>
            @endif
<form action="/category-edit/{{$category->slug}}" method="post" class="mt-4">
    @csrf
    @method('put')
    <label for="name" class="form-label">Category Name</label>
    <input type="text" name="name" id="name" class="form-control w-50" value="{{$category->name}}">
    <button type="submit" class="mt-3 btn btn-success">Save</button>
</form>

@endsection