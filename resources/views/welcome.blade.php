<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire To-Do List</title>
    @vite('resources/css/app.css') <!-- Ensure Vite is configured -->
    @livewireStyles
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        @livewire('todo')
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo/dist/echo.js"></script>
    <script>
        // Broadcast listener (optional)
        // Echo.channel('tasks')
        //     .listen('TaskAdded', (e) => {
        //         Livewire.emit('taskAdded', e.task);
        //     });

    Echo.channel('todos')
    .listen('TodoCreated', (event) => {
        console.log(event);  // Ensure this logs data in your browser console
        Livewire.emit('todoAdded', event.task);  // Emit the event to Livewire
    });
    </script>
</body>
</html>
