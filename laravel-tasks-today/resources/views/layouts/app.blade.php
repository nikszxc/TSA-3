<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') · Tasks for Today</title>
    <style>
        :root { --bg:#0b0d12; --panel:#141821; --line:#232a38; --text:#e8eaf0; --muted:#8b93a7; --accent:#e0a458; --ok:#5fcf9b; }
        * { box-sizing: border-box; }
        body { margin:0; font-family: system-ui, -apple-system, "Segoe UI", sans-serif; background: radial-gradient(1200px 600px at 80% -10%, #1b2132, var(--bg)); color:var(--text); min-height:100vh; }
        nav { display:flex; align-items:center; gap:.25rem; padding:1rem 1.5rem; border-bottom:1px solid var(--line); flex-wrap:wrap; }
        nav .brand { font-weight:700; letter-spacing:.04em; color:var(--accent); margin-right:auto; }
        nav a { color:var(--muted); text-decoration:none; padding:.45rem .8rem; border-radius:8px; }
        nav a:hover { color:var(--text); }
        nav a.active { color:var(--bg); background:var(--accent); }
        main { max-width:860px; margin:0 auto; padding:2.5rem 1.5rem 4rem; }
        h1 { margin:0 0 .25rem; font-size:2rem; }
        .sub { color:var(--muted); margin:0 0 2rem; }
        .card { background:var(--panel); border:1px solid var(--line); border-radius:14px; padding:1.25rem 1.5rem; }
        table { width:100%; border-collapse:collapse; }
        th, td { text-align:left; padding:.75rem .5rem; border-bottom:1px solid var(--line); }
        th { color:var(--muted); font-weight:600; font-size:.8rem; text-transform:uppercase; letter-spacing:.06em; }
        tr:last-child td { border-bottom:0; }
        .badge { display:inline-block; padding:.15rem .6rem; border-radius:999px; font-size:.8rem; border:1px solid var(--line); }
        .badge.pending { color:var(--accent); border-color:var(--accent); }
        .badge.done { color:var(--ok); border-color:var(--ok); }
        .empty { color:var(--muted); text-align:center; padding:2rem 0; }
        dl { display:grid; grid-template-columns:140px 1fr; gap:.75rem 1rem; margin:0; }
        dt { color:var(--muted); } dd { margin:0; }
        footer { text-align:center; color:var(--muted); font-size:.85rem; padding-bottom:2rem; }
    </style>
</head>
<body>
    <nav>
        <span class="brand">TASKS FOR TODAY</span>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Welcome</a>
        <a href="{{ route('tasks') }}" class="{{ request()->routeIs('tasks') ? 'active' : '' }}">Task List</a>
        <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}">Profile</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
    </nav>
    <main>@yield('content')</main>
    <footer>Tasks for Today Management System · Laravel {{ app()->version() }}</footer>
</body>
</html>
