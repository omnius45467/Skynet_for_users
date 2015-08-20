<?php namespace App\Skynet\Repositories;

use App\Skynet\Repositories\Contracts\UserRepository;
use App\User;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Config;
//use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Collection;

class EloquentUserRepository implements UserRepository
{

    /**
     * @var
     */
    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function all()
    {
        if ($this->user->hasRole('admin'))
        {
            return User::all();
        }

        $users = new Collection;

        return $users;
    }

    public function find($id)
    {
        return User::findOrFail($id);
    }

    public function create(array $data)
    {
        if (!isset($data['password']))
        {
            $password = str_random(10);
            $data['password'] = Hash::make($password);

        Mail::send('emails.welcome', ['user'=> $data, 'password' => $password],  function ($message) use ($data, $password){

            $message->to($data['email'], $data['first_name'])->subject('Welcome to Skynet!');

        });
        }
        return User::create($data);
    }

}