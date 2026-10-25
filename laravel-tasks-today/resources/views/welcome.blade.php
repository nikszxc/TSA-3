@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
    <h1>Welcome</h1>
    <p class="sub">Today is {{ today()->format('l, F j, Y') }} · {{ $tasks->count() }} {{ Str::plural('task', $tasks->count()) }} on your list.</p>

    <div class="card">
        @if ($tasks->isEmpty())
            <p class="empty">Nothing scheduled for today.</p>
        @else
            <table>
                <thead><tr><th>#</th><th>Task</th><th>Status</th></tr></thead>
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $task->title }}</td>
                        <td><span class="badge {{ $task->status }}">{{ $task->status }}</span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
