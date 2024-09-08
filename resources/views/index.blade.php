@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <nav class="mb-4">
        <a href="{{ route('tasks.create') }}" class="link">Add Task!</a>
    </nav>
    <div>
        @forelse($tasks as $task)
            <div><a @class(['line-through' => $task->completed]) href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a></div>
        @empty
            <div>Brak</div>
        @endforelse
        @if($tasks->count())
            <nav class="mt-4">{{ $tasks->links() }}</nav>
        @endif
    </div>
@endsection
