<?php
namespace backend\components;


use Yii;
use yii\rbac\Rule;


class ArticleRule extends Rule
{
    public $name = 'article';


    /**
     * @param string|integer $user 当前登录用户的uid
     * @param Item $item 所属规则rule，也就是我们后面要进行的新增规则
     * @param array $params 当前请求携带的参数. 
     * @return true或false.true用户可访问 false用户不可访问
     */
    public function execute($user, $item, $params)
    {
        return true;
    }
}
?>