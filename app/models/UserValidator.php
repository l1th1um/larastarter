<?php
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;


class UserValidator extends Zizaco\Confide\UserValidator
{
    public $rules = [
        'create' => [
            'username' => 'required|alpha_dash|min:4',
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ],
        'update' => [
            'username' => 'required|alpha_dash|min:4',
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]
    ];

}