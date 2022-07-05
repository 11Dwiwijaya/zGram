<?php

namespace app\commands;

class AccessRule extends \yii\filters\AccessRule
{

    protected function matchRole($user)
    {
        if (empty($this->roles)) {
            return true;
        }
        foreach ($this->roles as $role) {
            if ($role == '?' && $user->getIsGuest()) {
                return true;
            } elseif (!$user->getIsGuest() && $role == '@') {
                return true;
            } elseif (!$user->getIsGuest() && $role == $user->identity->roles) {
                return true;
            }
            return false;
        }
    }
}
