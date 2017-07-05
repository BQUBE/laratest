<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Lists</title>
</head>
<body>
    <h1>Hello, <?= $name; ?></h1>
    <h4>List of task for you</h4>
    <ul>
        @foreach ($tasks as $task)

        <li>
            <a href="/tasks/{{ $task->id }}">
                {{ $task->body }}
            </a>
        </li>

        @endforeach
    </ul>
</body>
</html>