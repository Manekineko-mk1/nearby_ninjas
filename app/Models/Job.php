<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// In PHP, Eloquent is an ORM (Object Relational Mapping) included with Laravel. It provides a beautiful, simple ActiveRecord implementation for working with your database. 
// Each database table has a corresponding "Model" which is used to interact with that table. Models allow you to query for data in your tables, as well as insert new records into the table.

// PHP user autoloading feature with psr-4 convention (see composer.json). Namespace will let autoloader to find the class file.
// For example, we have a namespace of App\Models, and the class is in the app/Models directory.
// and we have a namespace of Database\Seeders, and the class is in the database/Seeders directory.

class Job extends Model
{
   use HasFactory;
   protected $table = 'job_listings';
   protected $fillable = ['title', 'description', 'salary'];

   // This method is used to define the relationship between the Job model and the Employer model.
   // To test this in CLI, run the following command: 
   // 1. php artisan tinker
   // 2. App\Models\Job::first()->employer 
   // Note: We don't need to call the employer() method because Laravel is smart enough to know that we are trying to access the employer relationship.
   // Note: When we call ->employer, Laravel will call 2nd SQL using lazy loading to get the employer table data.
   public function employer() {
      return $this->belongsTo(Employer::class);
   }

   public function tags() {
      return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
   }
}