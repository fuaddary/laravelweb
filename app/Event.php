<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array(
    	'image',
        'user_id',
    	'nama_event',
    	'lokasi',
    	'repeat',
    	'start',
    	'end',
    	'deskripsi_event',
    	'nama_org',
    	'deskripsi_org'
    	);

    public function kategori_event(){
        return $this->hasMany('App\Kategori_Event','id')
    }
}
