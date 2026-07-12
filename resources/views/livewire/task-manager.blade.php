<div class="container">
    @foreach($tasks as $task)
        {{ $task->title }} <br>
    @endforeach
</div>