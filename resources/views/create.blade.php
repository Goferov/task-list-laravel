@extends('layouts.app')

@section('title', 'Add task')

@section('style')
    <style>
        .error-msg {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="post" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input name="title" id="title">
            @error('title')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5"></textarea>
            @error('description')
            <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">Long description</label>
            <textarea name="long_description" id="long_description" rows="10"></textarea>
            @error('long_description')
            <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Add task</button>
        </div>
    </form>
@endsection
