<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $authKey
 * @property string $accessToken
 * @property int $status
 * @property string $time_updated
 * @property string $time_created
 * @property int $id_role
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'name', 'authKey', 'accessToken', 'time_updated', 'time_created', 'id_role'], 'required'],
            [['status', 'id_role'], 'integer'],
            [['time_updated', 'time_created'], 'safe'],
            [['username', 'password'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 30],
            [['authKey', 'accessToken'], 'string', 'max' => 100],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'name' => 'Name',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'status' => 'Status',
            'time_updated' => 'Time Updated',
            'time_created' => 'Time Created',
            'id_role' => 'Id Role',
        ];
    }
}
