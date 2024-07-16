<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// PHP user autoloading feature with psr-4 convention (see composer.json). Namespace will let autoloader to find the class file.
// For example, we have a namespace of App\Models, and the class is in the app/Models directory.
// and we have a namespace of Database\Seeders, and the class is in the database/Seeders directory.

class Job extends Model
{
   use HasFactory;
   protected $table = 'job_listings';
   protected $fillable = ['title', 'description', 'salary'];
}