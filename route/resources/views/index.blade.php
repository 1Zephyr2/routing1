<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>
<body>
    <h1>Tasks</h1>
    <a href="/tasks/create">Add New Task</a>
    
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->title }} - {{ $task->description }} <a href="{{ route('tasks.show', $task->id) }}">View Task</a>;</li>
        @endforeach
    </ul>
</body>
</html>
