<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    use HasFactory;

    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'name',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion',
        'created_at',
        'updated_at',
    ];


    public static $rules = array(

    );

    public function getDetail()
    {

    }
    public function Contact()
    {
        return $this->hasOne('App\Models\Contact');
    }
    public function Contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }
}