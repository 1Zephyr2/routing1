@extends('taskTemplate')

@section('content')
    @if(isset($id))
        <form method="POST" action="{{ url('/tasks/' . $id) }}">
            @method('PUT')
    @else
        <form method="POST" action="{{ url('/tasks') }}">
    @endif

        @csrf

        @if(isset($id))
            <input type="hidden" name="id" value="{{ $id }}">
            <input type="text" name="title" value="{{ $title }}" required>
            <input type="text" name="description" value="{{ $description }}" required>
        @else
            <input type="text" name="title" placeholder="Task Title" required>
            <input type="text" name="description" placeholder="Task Description" required>
        @endif
        
        <input type="submit" value="Submit">
    </form>
@endsection