<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'training_name',
        'start_period_training',
        'end_period_training',
        'duration_training',
        'city_of_training',
        'state_of_training',
    ];

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class)
            ->using(Certificate::class)
            ->withPivot('certificate_status');
    }
}
