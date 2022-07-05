<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class SignupForm extends Model
{

    public $username;
    public $name;
    public $password;

    const roles = 2;

    public static function tableName()
    {
        return 'user';
    }
    public function rules()
    {
        return [
            [['name', 'username', 'password'], 'required'],

        ];
    }
}
