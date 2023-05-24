<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mouse extends Model
{
    protected $table = 'mouses';
    protected $primaryKey = 'mouse_id';
    public $timestamps = false;

    protected $fillable = [
        'mouse_id',
        'name'
    ];

    protected $casts = [
        'mouse_id' => 'int',
        'name' => 'string'
    ];
    public function equipment(): BelongsTo
    {
        return $this->belongsTo(Equipment::class);
    }
    
}
