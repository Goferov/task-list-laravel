@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <div>
        <a href="{{ route('tasks.create') }}">Add Task</a>
    </div>
    <div>
        @forelse($tasks as $task)
            <div><a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a></div>
        @empty
            <div>Brak</div>
        @endforelse
        @if($tasks->count())
            <div>{{ $tasks->links() }}</div>
        @endif
    </div>
@endsection
