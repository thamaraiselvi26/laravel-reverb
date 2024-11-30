<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire To-Do List</title>

    @vite('resources/css/app.css')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    @livewireStyles
</head>
<body class="bg-light p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        @livewire('todo')
    </div>

    @vite('resources/js/app.js')

    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Echo.channel('todos')
                .listen('TodoCreated', (event) => {
                    Livewire.dispatchTo('todo', 'todoAdded', event);
                });
        });
    </script>
</body>
</html>
