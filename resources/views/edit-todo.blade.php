@extends('progenitor')

@section('content')
    <div class="container">
        <div class="index-indent">
            <h1 class="alert alert-success">Todo Edit</h1>
            <form action="{{ route('todo.update', $todo->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-indent">
                    <label for="to_do">To Do *</label>
                    <textarea name="to_do" id="to_do" cols="30" rows="10" class="form-control">{{ $todo->to_do }}</textarea>
                    @if ($errors->has('to_do'))
                        @foreach ($errors->get('to_do') as $error)
                            <small class="text-danger">{{ $error }}</small>
                        @endforeach
                    @endif
                </div>
                <div class="form-indent">
                    <label for="is_completed">Is Completed? *</label>
                    <select id="is_completed" name="is_completed" class="form-control">
                        <option value="">Select an option</option>
                        <option value="yes" @if ($todo->is_completed == 'yes') selected @endif>Yes</option>
                        <option value="no" @if ($todo->is_completed == 'no') selected @endif>No</option>
                    </select>
                    @if ($errors->has('is_completed'))
                        @foreach ($errors->get('is_completed') as $error)
                            <small class="text-danger">{{ $error }}</small>
                        @endforeach
                    @endif
                </div>
                <input type="submit" value="Submit" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
