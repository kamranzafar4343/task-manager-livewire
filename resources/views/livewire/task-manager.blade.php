<div class="container py-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

            <div>
                <h3 class="mb-0">📋 Task Manager</h3>
                <small>Total Tasks: {{ $tasks->count() }}</small>
            </div>

            <button class="btn btn-light">
                <i class="bi bi-plus-circle"></i> Add Task
            </button>

        </div>

        <div class="card-body p-0">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                    <tr>
                        <th width="60">#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th width="150">Created</th>
                        <th width="140">Status</th>
                        <th width="220" class="text-center">Actions</th>
                    </tr>

                </thead>

                <tbody>

                @forelse($tasks as $task)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td class="fw-semibold">
                            {{ $task->title }}
                        </td>

                        <td class="text-muted">
                            {{ $task->description }}
                        </td>

                        <td>
                            {{ $task->created_at->format('d M Y') }}
                        </td>

                        <td>

                            @if($task->status == 'Completed')

                                <span class="badge bg-success px-3 py-2">
                                    ✔ Completed
                                </span>

                            @elseif($task->status == 'Pending')

                                <span class="badge bg-warning text-dark px-3 py-2">
                                    ⏳ Pending
                                </span>

                            @elseif($task->status == 'In Progress')

                                <span class="badge bg-info px-3 py-2">
                                    🚀 In Progress
                                </span>

                            @else

                                <span class="badge bg-secondary px-3 py-2">
                                    {{ $task->status }}
                                </span>

                            @endif

                        </td>

                        <td class="text-center">

                            <button class="btn btn-sm btn-outline-primary">
                                Edit
                            </button>

                            <button class="btn btn-sm btn-outline-success">
                                Complete
                            </button>

                            <button class="btn btn-sm btn-outline-danger">
                                Delete
                            </button>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" class="text-center py-5 text-muted">

                            <h5>No Tasks Found</h5>

                            <p class="mb-0">
                                Click the <strong>Add Task</strong> button to create your first task.
                            </p>

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>