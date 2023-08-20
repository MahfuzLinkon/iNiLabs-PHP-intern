@extends('master')
@section('title', 'To-do list page')
@section('content')
    <div class="container py-5">
        <div class="row ">
            <div class="col-lg-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>List</h4>
                    </div>
                    <div class="card-body" style="padding: 50px 120px ">
                        @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success: </strong> {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Descrption</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todos as $todo)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $todo->title }}</td>
                                    <td>{{ $todo->description }}</td>
                                    <td>
                                        <span class="badge text-bg-{{ $todo->status == 1 ? 'success' : 'primary' }}">{{ $todo->status == 1 ? 'Complete' : 'Incomplete' }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('todos.status', $todo->id) }}" class="btn btn-{{ $todo->status == 1 ? 'primary' : 'success' }}" title="Make {{ $todo->status == 1 ? 'Incomplete' : 'Complete' }}"><i class="fa-solid fa-thumbs-{{ $todo->status == 1 ? 'down' : 'up' }}"></i></a>
                                        <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-secondary" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>

                                        <form action="{{ route('todos.destroy', $todo->id) }}" onsubmit="return confirm('Are you sure want to delete ?')" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
