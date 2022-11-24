<?php


namespace app\Models;

use Machine\Auth\Events\Verified;
use Machine\Session\Session;
use Machine\Validation\Validator;
use Machine\Valve\Model;

class Login extends Model
{
    use Validator;
    use Verified;


    protected string $table = 'users';
    public string $email;
    public string $password;

    protected array $fillable = [
        'email', 'password',
    ];

    public function logger($email = null, $pass = null)
    {
        $this->email    = $email ? $email : $this->email;
        $this->password = $pass ? $pass : $this->password;

        $findUser = $this->verifiedUserEmail('email', $this->email);

        if(!$findUser)
        {
            $this->getError('email', 'User does not exist with this email');
            return false;
        }

        if(!password_verify($this->password, $findUser['password']))
        {
            $this->getError('password', 'Incorrect password');
            return false;
        }

        return Session::$session->login($findUser);
    }

    public function validator(): array
    {
        return [
            'email'              => [RULE_REQUIRED],
            'password'           => [RULE_REQUIRED]
        ];
    }


}