<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    // To create a model along with migration and factory in CLI
    // Run `php artisan make:model Employer -mf`

    // This method is used to define the relationship between the Employer model and the Job model.
    public function jobs() {
        return $this->hasMany(Job::class);
    }
}
