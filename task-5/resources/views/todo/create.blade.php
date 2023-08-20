@extends('master')
@section('title', 'Create page')
@section('content')
    <div class="container py-5">
        <div class="row ">
            <div class="col-lg-9 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Add New</h4>
                    </div>
                    <div class="card-body" style="padding: 50px 120px ">
                        @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success: </strong> {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form action="{{ route('todos.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Title *</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                                @error('title')
                                    <div class="mt-2">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Description *</label>
                                {{-- <input type="text" name="name" value="{{ old('name') }}" class="form-control"> --}}
                                <textarea name="description" class="form-control" id="" cols="30" rows="5">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="mt-2">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-success" value="Create">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
