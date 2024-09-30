<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'class_id', 'section_id'];

    /*==== Relationship ====*/
    
    // Student belongsTo Classes
    public function class(){
        return $this->belongsTo(Classes::class, 'class_id');
    }

    // Student belongsTo Section
    public function sections(){
        return $this->belongsTo(Section::class);
    }
}
