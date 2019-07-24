<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    public $table = 'guru';
    protected $primaryKey = 'nip';

        protected $fillable = [
    	'nip',
    	'nama',
    	'tempat_lahir',
    	'tgl_lahir',
    	'no_telp',
        'status_nikah',

        'image'
    ];

    public function waliKelas()
	{
    	return $this->hasOne('App\WaliKelas', 'id_guru', 'nip');
    	// return $this->hasOne('App\UserProfile', 'profile_user_id', 'user_id');
	}

}
