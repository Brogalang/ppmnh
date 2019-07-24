<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    public $table = 'staf';
    protected $primaryKey = 'nip_staf';

        protected $fillable = [
    	'nip_staf',
    	'nama_staf',
    	'email_staf',
    	'alamat_staf',
    	'tempat_lahir_staf',
    	'tgl_lahir_staf',
    	'no_telp_staf',
        'univ_staf',
        'image'
    ];
}
