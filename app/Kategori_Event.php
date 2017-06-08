<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Event extends Model
{
    protected $table = 'kategori_event';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array(
    	'event_id',
    	'kategori_id'
    	);

    public function event(){
    	return $this->belongsTo('App\Event','id');
    }

    public function kategori(){
    	return $this->belongsTo('App\Kategori','id');
    }
}