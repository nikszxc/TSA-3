@extends('layouts.app')
@section('title', 'Task List')
@section('content')
    <h1>Task List</h1>
    <p class="sub">All {{ $tasks->count() }} tasks, ordered by date.</p>

    <div class="card">
        @if ($tasks->isEmpty())
            <p class="empty">No tasks yet.</p>
        @else
            <table>
                <thead><tr><th>Date</th><th>Task</th><th>Status</th></tr></thead>
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->task_date->format('M j, Y') }}@if ($task->task_date->isToday()) <span class="badge pending">today</span>@endif</td>
                        <td>{{ $task->title }}</td>
                        <td><span class="badge {{ $task->status }}">{{ $task->status }}</span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
