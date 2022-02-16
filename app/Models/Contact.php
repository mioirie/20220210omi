<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 'gender', 'email' , 'postcode' , 'address' , 'building_name' , 'opinion'];

    static $genders = [
        '男', '女'
    ];

    public static $rules = array(
            'id' => 'required',
            'fullname' => 'required|max:255',
            'gender' => 'required|in:男性,女性',
            'email' => 'required|email',
            'postcode' => 'required|max:8',
            'address' => 'required|max:255',
            'building_name' => 'nullable|max:255',
            'opinion'=> 'required|max:120',
            'created_at' => 'date',
            'updated_at' => 'date',
    );

        public function getDetail()
    {
        $txt = 'ID:'.
        $this->id . ' ' .
        $this->fullname . ' ' .
        $this->gender . ' ' .
        $this->email . ' ' .
        $this->postcode . ' ' .
        $this->address . ' ' .
        $this->building_name . ' ' .
        $this->opinion . ' ' .
        $this->created_at . ' ' .
        $this->updated_at;
        return $txt;
    }


    //public function book(){
        //return $this->hasOne('App\Models\Book');
    }
    //public function books(){
        //return $this->hasMany('App\Models\Book');
    //}
//}
