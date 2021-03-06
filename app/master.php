<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class master extends User
{
   // use Notifiable;

    protected $table = 'master';
    protected $fillable= [ 'foto', 'name', 'nohp', 'kecamatan', 'alamat',
    'kodepos', 'user_id'];
    //protected $primaryKey = 'user_id';

    public function getPhoto(){
        if(!$this->foto){
            return asset('images/default.png');
        }
        return asset('images/'.$this->foto);
    }

    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }
     public function User()
    {
        return $this->belongsTo(User::class);
    }

     public function Users()
    {
        return $this->hasOne(User::class);
    }
    private function getRandomRoomId() {
    $master = \App\master::inRandomOrder()->first();
    return $master->id;
}

}
