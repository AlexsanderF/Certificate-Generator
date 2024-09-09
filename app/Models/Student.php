<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'document',
        'birthday',
        'user_id',
    ];

    public function group_students(): BelongsToMany
    {
        return $this->belongsToMany(GroupStudent::class);
    }

    public function certificates(): BelongsToMany
    {
        return $this->belongsToMany(Certificate::class)
            ->using(Certificate::class)
            ->withPivot('certificate_status');
    }

    public function group(): BelongsToMany
    {
        return $this->belongsToMany(Group::class)
            ->using(Group::class)
            ->withPivot('name');
    }
}
