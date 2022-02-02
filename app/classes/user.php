<?php


namespace App\classes;


class user
{
    protected $user =[];
    public function getAllUser()
    {
        $this->user=[
            0=>[
                'name'=>'jahid',
                'mobile'=> '1234',
                'location'=>'gazipur',
            ],
            1=>[
                'name'=>'salah',
                'mobile'=> '1234456',
                'location'=>'dhaka',
               ] ,

            ];
        return $this->user;
    }
}