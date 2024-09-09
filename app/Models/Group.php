<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number_of_students',
        'linked_certificate_id'
    ];

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class)
            ->using(Student::class)
            ->withPivot('name');
    }
}
