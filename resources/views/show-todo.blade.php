@extends('progenitor')

@section('content')
    <div class="container">
        <div class="index-indent">
            <h1 class="alert alert-success">Todo Create</h1>

            <h2>Todo:</h2> {{ $todo->to_do }}
            <h2>Is Completed?:</h2> {{ $todo->is_completed }}
            <h2>Created at:</h2> {{ $todo->created_at }}
            <br><br>
            <a href="{{ route('home') }}" class="btn btn-secondary">Back to Todo Lists</a>
        </div>
    </div>
@endsection
