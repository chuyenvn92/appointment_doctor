<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded=[];

    public function specialistImage($request){
        $image = $request->file('image');
        $name = $image->hashName();
        $destination = public_path('/images');
        $image->move($destination,$name);
        return $name;

    }

}
