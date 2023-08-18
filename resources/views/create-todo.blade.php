@extends('progenitor')

@section('content')
    <div class="container">
        <div class="index-indent">
            <h1 class="alert alert-success">Todo Create</h1>
            <form action="{{ route('todo.store') }}" method="POST">
                @csrf
                <div class="form-indent">
                    <label for="to_do">To Do *</label>
                    <textarea name="to_do" id="to_do" cols="30" rows="10" class="form-control"></textarea>
                    @if ($errors->has('to_do'))
                        @foreach ($errors->get('to_do') as $error)
                            <small class="text-danger">{{ $error }}</small>
                        @endforeach
                    @endif
                </div>
                <input type="submit" value="Submit" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
