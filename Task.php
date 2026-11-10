<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'completed'
    ];

    protected function casts(): array
    {
        return [
            'completed' => 'boolean'
        ];
    }
}

// Why do we need it?
// In our database, a boolean is usually stored as:
// - 1 = true
// - 0 = false
// Without casting, Laravel might return:
// {
//     "id": 1,
//     "title": "Study Laravel",
//     "completed": 0
// }


// With casting:
// {
//     "id": 1,
//     "title": "Study Laravel",
//     "completed": false
// }