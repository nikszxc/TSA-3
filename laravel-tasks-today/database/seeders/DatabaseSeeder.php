<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Dates are relative to "today" so the Welcome page always has data.
        $yesterday = today()->subDay()->toDateString();
        $today     = today()->toDateString();
        $tomorrow  = today()->addDay()->toDateString();

        $tasks = [
            ['Submit Applications Development lab',   'done',    $yesterday],
            ['Review Philippine history reading',     'done',    $yesterday],
            ['Fix MySQL connection in video rental',  'pending', $yesterday],
            ['Build Laravel Tasks for Today app',     'pending', $today],
            ['Push project to GitHub',                'pending', $today],
            ['Deploy app to hosting',                 'pending', $today],
            ['Study for web development quiz',        'pending', $tomorrow],
            ['Prepare case brief outline',            'pending', $tomorrow],
        ];

        foreach ($tasks as [$title, $status, $date]) {
            Task::create([
                'title'     => $title,
                'status'    => $status,
                'task_date' => $date,
            ]);
        }

        User::create([
            'username'  => 'andrea',
            'full_name' => 'Andrea Magnaye',
            'email'     => 'magnayeandreanica@gmail.com',
        ]);
    }
}
