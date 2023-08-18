@extends('progenitor')

@section('content')
    <div class="container">
        <div class="index-indent">
            <h1 class="alert alert-success">Todo Lists</h1>
            <table class="table table-success table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">To Do</th>
                        <th scope="col">Is Completed?</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $key => $todo)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <th scope="row">{{ $todo->id }}</th>
                            <td>
                                <p class="text-overflow">{{ $todo->to_do }}</p>
                            </td>
                            <td>
                                @if ($todo->is_completed == 'yes')
                                    <form action="{{ route('todo.patch.update', $todo->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success">
                                            {{ $todo->is_completed }}
                                        </button> <span><-- click to update</span>
                                    </form>
                                @else
                                    <form action="{{ route('todo.patch.update', $todo->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-danger">
                                            {{ $todo->is_completed }}
                                        </button> <span><-- click to update</span>
                                    </form>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('todo.show', $todo->id) }}" class="btn btn-info"><i
                                        class="fas fa-eye"></i></a>
                                <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-warning" data-inline="true"><i
                                        class="fas fa-edit"></i></a>
                                <a href="{{ route('todo.destroy', $todo->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')"><i class="fas fa-trash-can text-dark"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
