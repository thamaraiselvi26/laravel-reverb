<div>
    <h1 class="text-lg font-bold mb-4">To-Do List</h1>

    <!-- Task Input -->
    <form wire:submit.prevent="submit" class="mb-4">
        <input
            type="text"
            wire:model="task"
            placeholder="What you need to do?"
            class="border rounded p-2 w-full"
            required
        />
        @error('task') <span class="text-red-500">{{ $message }}</span> @enderror

        <button type="submit" class="btn btn-sm btn-primary px-4 py-2 rounded">
            Add
        </button>
    </form>

    <!-- Task List in Table -->
    @if (isset($tasks) && count($tasks) > 0)
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Todo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $index => $task)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $task }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-gray-500">No tasks yet. Start by adding one!</p>
    @endif
</div>
