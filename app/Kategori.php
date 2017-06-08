<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = array(
    	'nama_kategori'
    	);
    public function kategori_event(){
    	return $this->hasMany('App\Kategori_Event');
    }
}
