<h2>Task Manager</h2>

<table border="1">

    @foreach($tasks as $task)

        <tr>

            <td>{{ $task->title }}</td>

            <td>{{ $task->status }}</td>

        </tr>

    @endforeach

</table>