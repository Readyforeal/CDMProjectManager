<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    protected $guarded = [];

    protected $fillable = [
        'schedule_items', 'item_type'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
