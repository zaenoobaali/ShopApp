<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
    <p>My Tasks</p>
    @foreach($tasks as $task)
    <ul>
        <li>
            Title: {{$task["title"]}} <br>
                    {{$task["body"]}}
        </li>
        
    </ul>
    @endforeach
</body>
</html>