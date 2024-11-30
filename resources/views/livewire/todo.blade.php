<div>
    <h1 class="text-lg font-bold mb-4">To-Do List</h1>

    <!-- Task Input -->
    <form wire:submit.prevent="submit" class="mb-4 d-flex">
        <input
            type="text"
            wire:model="task"
            placeholder="What you need to do?"
            class="form-control me-2"
            required
        />
        <button type="submit" class="btn btn-primary btn-sm">
            Add
        </button>
    </form>

    <!-- Task List in Table -->
    @if (isset($tasks) && count($tasks) > 0)
        <table class="table table-bordered">
            <thead>
                <tr class="table-light">
                    <th>#</th>
                    <th>Todo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $index => $task)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $task }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-muted">No tasks yet. Start by adding one!</p>
    @endif
</div>
