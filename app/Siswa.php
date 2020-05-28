<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama', 'alamat', 'avatar'];

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('images/default.jpeg');
        }
        return asset('images/' . $this->avatar);
    }
}