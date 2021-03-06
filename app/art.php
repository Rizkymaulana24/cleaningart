<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class art extends User
{
    protected $table = 'art';
    protected $fillable= ['user_id', 'foto', 'name', 'nohp', 'tanggallahir', 'kecamatan', 'alamat',
    'kodepos', 'status', 'deskripsi'];
    //protected $primaryKey = 'user_id';

    public function getPhoto(){
    	if(!$this->foto){
    		return asset('/images/default.png');
    	}
    	return asset('images/'.$this->foto);
    }

    public function Users()
    {
        return $this->hasOne(User::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
