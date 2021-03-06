<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'info', 'public_book', 'created_on'
    ];
    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['created_on'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setCreatedOnAttribute($value)
    {
        $this->attributes['created_on'] = $value ? Carbon::parse($value) : null;
    }

}
