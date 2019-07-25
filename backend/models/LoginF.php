<?php
/**author 1711426**/
namespace backend\models;

use Yii;
use yii\base\Model;
use backend\models\NkuAdmin;
use common\models\LoginForm;
use common\models\User;

class LoginF extends LoginForm
{
  
    private $_user;
    public function login()
    {
        if ($this->validate()) {
        //     return (Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0)&& NkuAdmin::findIdentity($this->id));
        if(!NkuAdmin::findIdentity($this->id))
        {
            $this->addError('username', '没有权限');
         
        }
        return (Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0)&& NkuAdmin::findIdentity($this->id));
         
    }
        
        return false;
    }
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user =User::findByUsername($this->username);
        }

        return $this->_user;
    }
}

?>
