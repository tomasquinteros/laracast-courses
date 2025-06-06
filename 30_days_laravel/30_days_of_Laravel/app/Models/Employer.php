<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Employer extends Model
    {

        use HasFactory;

        protected $fillable = ['name'];

        public function jobs(): HasMany
        {
            return $this->hasMany(Job::class);
        }

        public function user(): belongsTo
        {
            return $this->belongsTo(User::class, 'user_id');
        }

    }