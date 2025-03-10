<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>
<body>
    <h1>Tasks</h1>
    
    <form action="/tasks" method="POST">
        @csrf
        <label for="name">Task Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Add Task</button>
    </form>

</body>
</html>
