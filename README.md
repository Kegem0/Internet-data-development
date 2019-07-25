

# Internet-data-development

Nankai university centennial anniversary database and front-end

- ### 项目分工：

  仪德智，杨俊辉:前端样式设计

  杨铭:前后端交互，前端MVC的设计

  陈颖，诸佳昕：后端设计

  ----------------

  ------------------

  

- ### 需求文档：

  前端功能：
  ·首页：首页主要包括以下几个部分：
    首先是菜单栏，包含首页，活动，新闻，学院，嘉宾五个按钮跳转至相应子页面，还有登录和注销两个按钮供用户登录使用。
    接下来可以看到南开大学津南校区图书馆作为背景图片位于工具栏下方。
    然后是动态播放的南开大学美景图片，点击图片可跳转至论坛欣赏更多南开大学美图。
    热点动态版块主要包含两部分：校庆新闻和活动预告。分别展示出最近的新闻和活动，点击词条可查看详细信息。版块尾部可分别跳转至相应网页查看校庆活动一览表、百年校庆校史主题展以及百年南开大讲坛讲座一览相关信息。
    接下来是南开大学校庆祝福弹幕墙的图片及跳转网页，可以进入南开大学祝福的弹幕墙进行输入和观看。
    右边会滚动播放校徽、校训、校歌的详细信息。
    然后是百年历程版块，在这个版块以时间轴为标准，点击相应按钮可查看百年南开校史。
    接下来是校庆元素版块，主要包含六个部分：点击相应图片可以分别跳转至子网页查看校庆LOGO、校庆歌曲、校庆吉祥物、校庆标语、校庆视频、吉祥物表情包的相关信息。
    接近页脚的部分是南开大学两大校区的地址信息，点击“地图查看”可以进入百度地图进行详细查看。
    页脚部分主要包括南开大学百年校庆LOGO、常用链接、官微二维码、邮箱及网页制作团队等信息。
    首页的子网页部分：
    1.校庆活动一览表
    沿用首页的菜单栏和页脚。主体内容为校庆活动一览表。
    2.百年校庆校史主题展
    沿用首页的菜单栏和页脚。主体内容为“南开大学百年校史主题展”开放参观通知。
    3.百年南开大讲坛讲座一览
    沿用首页的菜单栏和页脚。主体内容为百年南开大讲坛讲座一览表。
    4.校徽
    沿用首页的菜单栏和页脚。主体内容为校徽的图案及含义。
    5.校训
    沿用首页的菜单栏和页脚。主体内容为校训的内容及含义。
    6.校歌
    沿用首页的菜单栏和页脚。主体内容为校歌的词曲及创作背景。
    7.校庆LOGO
    沿用首页的菜单栏和页脚。主体内容为校庆LOGO的图案、设计理念及相关作品。
    8.校庆歌曲
    沿用首页的菜单栏和页脚。主体内容为校庆主题歌的歌词、播放链接及相关下载内容。
    9.校庆吉祥物
    沿用首页的菜单栏和页脚。主体内容为校庆吉祥物的动画宣传片、设计说明及相关作品。
    10.校庆标语
    沿用首页的菜单栏和页脚。主体内容为百年校庆标语口号。
    11.校庆视频
    沿用首页的菜单栏和页脚。主体内容为百年校庆视频的相关链接。
    12.吉祥物表情包
    沿用首页的菜单栏和页脚。主体内容为校庆吉祥物表情包。
·活动页面
    活动以当前月份为起点，显示了当前月份的所有活动以及对应的信息，然后通过右边的日历可以进行选择不同的月份以查看不同月份的活动，以及可以选择不同分类的活动， 
·新闻页面
    新闻页面按时间逆序显示了所有上传且被审核通过的新闻，点击可以查看新闻内容，这个新闻的内容是通过数据库实现的，我们为登录的用户提供了上传新闻的功能，可以进行新闻的上传，但是要经过管理员审核才能通过以显示在前端的页面上
·嘉宾页面
    这里提供了一些嘉宾的图片及对应的介绍，点击图片以进入详细介绍
    
    
  后端功能：为项目管理员提供数据操作的平台。用于对各张表进行增删改查。对于某些操作，例如审核新闻是否通过，提供快速一键审核功能。

  ---------------

  --------------

  

- ### 设计文档：

  数据库设计：

  流程图设计：

  ​	前端流程图：

  ​	后端流程图：

  ![后端流程图](https://github.com/Kegem0/Internet-data-development/blob/master/%E6%B5%81%E7%A8%8B%E5%9B%BE/%E5%90%8E%E7%AB%AF%E6%B5%81%E7%A8%8B%E5%9B%BE.png)

  ---------------------

  ----------------

  

- ### 实现文档：

  #### 	前端主要功能与展示：

  #### 	后端主要功能与展示：

  ##### 			Part I 注册与登录：

  ​					后台模块只能对管理员开放，在原生的adminlte的基础上加入id选项，用于判断该用户是否具有管理员权限。

  ![登录](https://github.com/Kegem0/Internet-data-development/blob/master/back-end-img/登录.jpg)

  代码更改：

  M：

  ```
  在backend中继承common的login模块，用于控制后台的特殊权限。
  class LoginF extends LoginForm
  {
    
      private $_user;
      public function login()//增加id判断是否有登录权限
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
  ```

  C：

  ```
   public function actionLogin()
      {
          if (!Yii::$app->user->isGuest) {
              return $this->goHome();
          }
  
          $model = new loginF();
  
          if ($model->load(Yii::$app->request->post()) && $model->login() ) {
              return $this->goBack();
          } else {
              $model->password = '';
  
              return $this->render('login', [
                  'model' => $model,
              ]);
          }
  ```

  V：在admin的模板上加入id输入框

  ```PHP
  /* @var $this yii\web\View */
  /* @var $form yii\bootstrap\ActiveForm */
  /* @var $model \common\models\LoginForm */
  
  $this->title = 'Sign In';
  
  $fieldOptions1 = [
      'options' => ['class' => 'form-group has-feedback'],
      'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
  ];
  
  $fieldOptions2 = [
      'options' => ['class' => 'form-group has-feedback'],
      'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
  ];
  
  <div class="login-box">
      <div class="login-logo">
          <a href="#"><b>Admin</b>LTE</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
          <p class="login-box-msg">Sign in to start your session</p>
  
          <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>
  
          <?= $form
              ->field($model, 'username', $fieldOptions1)
              ->label(false)
              ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>
  
  <?= $form
              ->field($model, 'id', $fieldOptions1)
              ->label(false)
              ->textInput(['placeholder' => $model->getAttributeLabel('id')]) ?>
  
     
          <?= $form
              ->field($model, 'password', $fieldOptions2)
              ->label(false)
              ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>
  
          <div class="row">
              <div class="col-xs-8">
                  <?= $form->field($model, 'rememberMe')->checkbox() ?>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                  <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
              </div>
              <!-- /.col -->
          </div>
  
  
          <?php ActiveForm::end(); ?>
  
          <div class="social-auth-links text-center">
              <p>- OR -</p>
              <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in
                  using Facebook</a>
              <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign
                  in using Google+</a>
          </div>
          <!-- /.social-auth-links -->
  
          <a href="#">I forgot my password</a><br>
          <a href="./signup" class="text-center">Register a new membership</a>
  
      </div>
      <!-- /.login-box-body -->
  </div><!-- /.login-box -->
  
  ```

  

  ##### 			Part II 主页与操作：

  ​				后台的主页实现的比较简陋，主要按照admintle的框架进行更改，并加入图片轮播功能。我们将数据库中的表分为四个大部分，可以从左边的侧拉框或者上方的四个选择进入相应的模块进行操作，每个操作都应用gii自动生成。![主页]((https://github.com/Kegem0/Internet-data-development/blob/master/back-end-img/主页.jpg)

  ​			

  ​				对于审核这个功能，为了让管理员进行快速的审核，我们添加了快速审核的按钮pass，点击pass即可快速将未审核的状态改为已审核。同样对于管理员审核操作，增添快速审核按钮。

  ![审核_LI](https://github.com/Kegem0/Internet-data-development/blob/master/back-end-img/审核_LI.jpg)

  ![管理员审核](https://github.com/Kegem0/Internet-data-development/blob/master/back-end-img/管理员审核.jpg)

  代码更改：

  新闻审核：

  ```PHP
  增加Failed作为尚未审核通过的新闻页面
      <?php
  
  use yii\data\ActiveDataProvider;
  use yii\grid\GridView;
  use yii\helpers\Html;
  use yii\web\View;
  
  /* @var $this yii\web\View */
  /* @var $searchModel backend\models\NkuNewsSearch */
  /* @var $dataProvider yii\data\ActiveDataProvider */
  
  $this->title = 'Failed-Pass';
  $this->params['breadcrumbs'][] = 'news';
  $this->params['breadcrumbs'][] = ['label' => 'Failed-pass', 'url' => ['failed']];
  ?>
  <div class="nku-news-index">
      <?= GridView::widget([
          'dataProvider' => $dataProvider,
          'filterModel' => $searchModel,
          'columns' => [
              ['class' => 'yii\grid\SerialColumn'],
  
              'news_date',
              'news_num',
              'news_headline',
              'news_ifpassed',
              ['class' => 'yii\grid\ActionColumn'],
              [
                  'class' => 'yii\grid\ActionColumn',
                  'header' => 'pass',
                  'template' => '{audit}',
                  'buttons' => [
                      'audit' => function($url,$model){
                          return '<a class="btn btn-default btn-xs btn-warning" href="'.$url.'" role="button">pass</a>';
                      },
                  ],
                  'headerOptions' => ['width' => '80'],
              ],
          ],
      ]); ?>
  
  </div>
  
  ```

  C层中添加failed和audit方法，failed用于渲染未通过的新闻的view层，audit用于pass按键之后的响应，将未通过状态修改为通过状态。

  ```PHP
   public function actionFailed()
  {
      $searchModel = new NkuNewsSearch();
      $dataProvider = $searchModel->search_fail(Yii::$app->request->queryParams);
  
      return $this->render('failed', [
          'searchModel' => $searchModel,
          'dataProvider' => $dataProvider,
      ]);
  
  }
  public function actionAudit($news_date, $news_num)
      {
          $audit=$this->findModel($news_date, $news_num);
          $audit->news_ifpassed=1;
          $audit->save();
          return $this->redirect(['index']);
      }
  ```

   管理员审核：

  ```PHP
  新增一个页面，显示所有的学生
  <?php
  
  use yii\data\ActiveDataProvider;
  
  use yii\helpers\Html;
  use yii\grid\GridView;
  use yii\web\View;
  use backend\models\NkuAdmin;
  
  /* @var $this yii\web\View */
  /* @var $searchModel backend\models\NkuStudentSearch */
  /* @var $dataProvider yii\data\ActiveDataProvider */
  
  $this->title = 'ADmin Pass';
  $this->params['breadcrumbs'][] = $this->title;
  ?>
  <div class="nku-student-index">
  
      <h1><?= Html::encode($this->title) ?></h1>
  
  
  
      <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
  
      <?= GridView::widget([
          'dataProvider' => $dataProvider,
          'filterModel' => $searchModel,
          'columns' => [
              ['class' => 'yii\grid\SerialColumn'],
  
              'student_id',
              'student_name',
              'college_name',
  
              ['class' => 'yii\grid\ActionColumn'],
              [
                  'class' => 'yii\grid\ActionColumn',
                  'header' => 'pass',
                  'template' => '{audit} ',
                  'buttons' => [
                      'audit' => function($url,$model){
                      if(true) {
                          return '<a class="btn btn-default btn-xs btn-warning" href="' . $url . '" role="button">pass</a>';
                      }
                          },
  //                    'forbidden' => function($url,$model){
  //                    if(true)
  //                        return '<a class="btn btn-default btn-xs btn-warning"    role="button">admin-already</a>';
  //                    },
                  ],
                  'headerOptions' => ['width' => '80'],
              ],
          ],
      ]); ?>
  
  
  </div>
  
  ```

  ```PHP
  在C层对操作进行判断，如果该用户已经是管理员则不进行任何操作，返回之前的页面，如果当前用户不是管理员，则点击PASS之后该用户成为管理员。
      public function actionNonadmin()
      {
          $searchModel = new NkuStudentSearch();
          $dataProvider = $searchModel->search_nonadmin(Yii::$app->request->queryParams);
  
          return $this->render('nonadmin', [
              'searchModel' => $searchModel,
              'dataProvider' => $dataProvider,
          ]);
  
      }
      public function actionAudit($id)
      {
          $ad=NkuAdmin::find()->where(['admin_id'=>$id])->exists();
          if($ad==0) {
              $audit = $this->findModel($id);
              $admin = new NkuAdmin();
              $admin->admin_id = $audit->student_id;
              $admin->admin_num = 0;
              $admin->save();
              return $this->redirect(['index']);
          }
          else {
  //           return $this->redirect(['nonadmin']);
  
              echo Alert::widget([
                  'options' => [
                      'class' => 'alert-info',
                  ],
                  'body' => '已经存在！',
              ]);
              return $this->redirect(['nonadmin']);
  
          }
      }
  ```

  

--------------------

------------



- ### 部署文档：

  环境需求

  

  
