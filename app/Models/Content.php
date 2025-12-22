<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Content extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['section_id', 'htmlclass', 'content'];

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
