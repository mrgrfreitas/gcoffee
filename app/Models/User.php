<?php


namespace app\Models;

use Machine\Valve\Model;

class User extends Model
{

    public string $name;
    public string $email;
    public string $password;
    public string $confirm_password;

    protected array $fillable = [
        'name', 'email', 'password',
    ];
    protected array $hashing = ['password'];
    protected array $status = ['status' => STATUS_ACTIVE];

    public function register()
    {
        parent::save();
        return true;
    }

    public function validator(): array
    {
        return [
            'name'               => [RULE_REQUIRED],
            'email'              => [RULE_REQUIRED, RULE_EMAIL, RULE_UNIQUE],
            'password'           => [RULE_REQUIRED, [RULE_MIN, 'min' => 8], [RULE_MAX, 'max' => 32]],
            'confirm_password'   => [RULE_REQUIRED, [RULE_MATCH, 'match' => 'password']]
        ];
    }


}