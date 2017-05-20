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
    	'nama_event',
    	'lokasi',
    	'repeat',
    	'start',
    	'end',
    	'deskripsi_event',
    	'nama_org',
    	'deskripsi_org'
    	);
}
