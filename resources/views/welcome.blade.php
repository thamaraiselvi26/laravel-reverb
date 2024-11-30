<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire To-Do List</title>
    @vite('resources/css/app.css')  <!-- Ensure Vite is configured -->
    @livewireStyles
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        @livewire('todo')
    </div>

    @vite('resources/js/app.js')
    @livewireScripts
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Echo.channel('todos')
            .listen('TodoCreated', (event) => {
                Livewire.dispatchTo('todo', 'todoAdded', event);
            });
        });
    </script>
</body>
</html>
