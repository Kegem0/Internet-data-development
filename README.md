

# Internet-data-development

Nankai university centennial anniversary database and front-end

- ### 项目分工：

  仪德智，杨俊辉:前端样式设计

  杨铭:数据库设计，前后端交互，前端MVC的设计

  陈颖，诸佳昕：后端设计

  ----------------

  ------------------

  

- ### 需求文档：

  前端功能：
  ·首页：首页主要包括以下几个部分：<br>
    首先是菜单栏，包含首页，活动，新闻，学院，嘉宾五个按钮跳转至相应子页面，还有登录和注销两个按钮供用户登录使用。<br>
    接下来可以看到南开大学津南校区图书馆作为背景图片位于工具栏下方。<br>
    然后是动态播放的南开大学美景图片，点击图片可跳转至论坛欣赏更多南开大学美图。<br>
    热点动态版块主要包含两部分：校庆新闻和活动预告。分别展示出最近的新闻和活动，点击词条可查看详细信息。版块尾部可分别跳转至相应网页查看校庆活动一览表、百年校庆校史主题展以及百年南开大讲坛讲座一览相关信息。<br>
    接下来是南开大学校庆祝福弹幕墙的图片及跳转网页，可以进入南开大学祝福的弹幕墙进行输入和观看。<br>
    右边会滚动播放校徽、校训、校歌的详细信息。<br>
    然后是百年历程版块，在这个版块以时间轴为标准，点击相应按钮可查看百年南开校史。<br>
    接下来是校庆元素版块，主要包含六个部分：点击相应图片可以分别跳转至子网页查看校庆LOGO、校庆歌曲、校庆吉祥物、校庆标语、校庆视频、吉祥物表情包的相关信息。<br>
    接近页脚的部分是南开大学两大校区的地址信息，点击“地图查看”可以进入百度地图进行详细查看。<br>
    页脚部分主要包括南开大学百年校庆LOGO、常用链接、官微二维码、邮箱及网页制作团队等信息。<br>
    首页的子网页部分：<br>
    1.校庆活动一览表<br>
    沿用首页的菜单栏和页脚。主体内容为校庆活动一览表。<br>
    2.百年校庆校史主题展<br>
    沿用首页的菜单栏和页脚。主体内容为“南开大学百年校史主题展”开放参观通知。<br>
    3.百年南开大讲坛讲座一览<br>
    沿用首页的菜单栏和页脚。主体内容为百年南开大讲坛讲座一览表。<br>
    4.校徽<br>
    沿用首页的菜单栏和页脚。主体内容为校徽的图案及含义。<br>
    5.校训<br>
    沿用首页的菜单栏和页脚。主体内容为校训的内容及含义。<br>
    6.校歌<br>
    沿用首页的菜单栏和页脚。主体内容为校歌的词曲及创作背景。<br>
    7.校庆LOGO<br>
    沿用首页的菜单栏和页脚。主体内容为校庆LOGO的图案、设计理念及相关作品。<br>
    8.校庆歌曲<br>
    沿用首页的菜单栏和页脚。主体内容为校庆主题歌的歌词、播放链接及相关下载内容。<br>
    9.校庆吉祥物<br>
    沿用首页的菜单栏和页脚。主体内容为校庆吉祥物的动画宣传片、设计说明及相关作品。<br>
    10.校庆标语<br>
    沿用首页的菜单栏和页脚。主体内容为百年校庆标语口号。<br>
    11.校庆视频<br>
    沿用首页的菜单栏和页脚。主体内容为百年校庆视频的相关链接。<br>
    12.吉祥物表情包<br>
    沿用首页的菜单栏和页脚。主体内容为校庆吉祥物表情包。<br>
·活动页面<br>
    活动以当前月份为起点，显示了当前月份的所有活动以及对应的信息，然后通过右边的日历可以进行选择不同的月份以查看不同月份的活动，以及可以选择不同分类的活动， <br>
    活动页面的子页面:<br>
    1、一些活动的介绍<br>
·新闻页面<br>
    新闻页面按时间逆序显示了所有上传且被审核通过的新闻，每页10条，会根据条数的增加增加分页的功能，点击可以查看新闻内容，这个新闻的内容是通过数据库实现的，我们为登录的用户提供了上传新闻的功能，可以进行新闻的上传，但是要经过管理员审核才能通过以显示在前端的页面上<br>
    新闻页面的子页面<br>
    1、新闻模板页面（因为是从数据库中取值来填充）<br>
    2、新闻上传页面<br>
    ·嘉宾页面<br>
    这里提供了一些嘉宾的图片及对应的介绍，点击图片以进入详细介绍<br>
    嘉宾页面的子页面：<br>
    1、一些嘉宾的页面<br>
    
    
  后端功能：为项目管理员提供数据操作的平台。用于对各张表进行增删改查。对于某些操作，例如审核新闻是否通过，提供快速一键审核功能。

  ---------------

  --------------

  

- ### 设计文档：

  数据库设计：
  ![数据库ER图](https://github.com/Kegem0/Internet-data-development/blob/master/%E6%B5%81%E7%A8%8B%E5%9B%BE/%E6%95%B0%E6%8D%AE%E5%BA%93%E8%AE%BE%E8%AE%A1%E5%9B%BE.png)<br>
  ![数据字典](https://github.com/Kegem0/Internet-data-development/blob/master/%E6%B5%81%E7%A8%8B%E5%9B%BE/%E6%95%B0%E6%8D%AE%E5%AD%97%E5%85%B8.pdf)<br>
  
  流程图（即前后端功能模块图）设计：

  ​	前端流程图：
  ![前端流程图](https://github.com/Kegem0/Internet-data-development/blob/master/%E6%B5%81%E7%A8%8B%E5%9B%BE/%E5%89%8D%E7%AB%AF%E6%B5%81%E7%A8%8B%E5%9B%BE.png)

  ​	后端流程图：

  ![后端流程图](https://github.com/Kegem0/Internet-data-development/blob/master/%E6%B5%81%E7%A8%8B%E5%9B%BE/%E5%90%8E%E7%AB%AF%E6%B5%81%E7%A8%8B%E5%9B%BE.png)

  ---------------------

  ----------------

  

- ### 实现文档：

  #### 	前端主要功能与展示：
  ##### 			Part I 注册：
  ​				 注册时必须给定学号和学院和姓名才能注册，除了在user表中添加记录还会在nku_student表中添加记录，以实现学生和用户的连接
   ![注册]()
  
  代码更改：
  M：添加了几个属性，并且同时创建学生，以id作为连接
  class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $id;
    public $college;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['id', 'trim'],
            ['id', 'required'],
            ['id', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This id has already been taken.'],
            ['id', 'integer', 'min' => 2, 'max' => 10000000000],

            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['college', 'trim'],
            ['college', 'required'],
        ];
    }
    
    C：无
    V:添加了几个输入框，来获取新的数据
    <div class="site-signup" style="margin-left:100px">
    <br><br><br><br><br><br>
    <h1><?= Html::encode($this->title) ?></h1>
    <p>请填写下面的信息以注册</p>
    <p>由于维护需要，目前仅支持南开大学学生注册</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

               <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
               
               <?= $form->field($model, 'id') ?>
       
               <?= $form->field($model, 'college')?>

               <?= $form->field($model, 'email') ?>

               <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->id=$this->id;
        $user->status=10;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        
        $student=new NkuStudent();
        $student->student_id=$this->id;
        $student->student_name=$this->username;
        $student->college_name=$this->college;
        return $user->save() &&$student->save()&& $this->sendEmail($user);

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
  ##### 			Part Ⅱ 倒计时：
  ​				 
  ##### 			Part Ⅲ 弹幕发送：
  ​				 
  ##### 			Part Ⅳ 活动显示：
  ​				    通过将数据库中的活动按月份和属性进行分类，然后在旁边的框架中通过选择并且上传值来显示不同的月份或不同类型的活动
  ![活动]()
  
  代码编写：
  M：gii自动生成，并无修改
  C：通过年份和月份两个选项进行时间分类或者通过type进行种类分类
  class ActivityController extends Controller
    {
        public function actionIndex()
        {
            if(\Yii::$app->request->post()){
                if($year=\Yii::$app->request->post('type')==null){
                    $year=\Yii::$app->request->post('year');
                    $month=\Yii::$app->request->post('month');
                    return $this->render('index',['year'=>$year,'month'=>$month]);
                }
                else{
                    $type=\Yii::$app->request->post('type');
                    return $this->render('index',['year'=>0,'type'=>$type]);
                }
            }
            return $this->render('index',['year'=>2019,'month'=>7]);
        }
    }
  V:
    <section class="ftco-section ftco-degree-bg">
        <div class="subcontainer">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-5 heading-section text-center ftco-animate">
                    <h2 class="mb-4">校庆精彩活动
                        <img src="images/100num.png" alt="" class="img-100 ">
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 ftco-animate " class="div-inline">
                </div>
                <div class="col-md-6 ftco-animate " class="div-inline">
                    <?php $AllActs = NkuActivity::find()->orderBy('activity_date')->all();$total=0;
                    foreach($AllActs as $acts):
                    $Allcollege = UndertakenBycollege::find()->where(['activity_date'=>$acts->activity_date,'activity_num'=>$acts->activity_num])->all();
                    $Allorgani = UndertakenByorgani::find()->where(['activity_date'=>$acts->activity_date,'activity_num'=>$acts->activity_num])->all();
                    if($year!=0){
                        if(date('Y',strtotime($acts->activity_date))==$year&&date('m',strtotime($acts->activity_date))==$month){$total+=1?>
                            <div class="item-test" style="display: block; opacity: 1;">
                                <div class="singleline">
                                    <a class="news-title" href=<?= Html::encode($acts->activity_url)?>>主题：<?= Html::encode($acts->activity_name)?></a>
                                    <p> &nbsp;<i class="fa fa-fw fa-user"></i> 主办单位:<?php foreach($Allcollege as $clg):?><?= Html::encode($clg->college_name)?> <?php endforeach?><?php foreach($Allorgani as $ogn):?><?= Html::encode($ogn->organi_name)?> <?php endforeach?></p>
                                    <p> &nbsp;<i class="fa fa-fw fa-calendar"></i> 日期：<?= Html::encode($acts->activity_date)?></p>
                                    <p> &nbsp;<i class="fa fa-fw fa-map-marker"></i> 地点:<?= Html::encode($acts->activity_position)?></p>
                                </div>
                            </div>
                    <?php }}
                    else{ 
                        if($acts->activity_type==$type){$total+=1?>
                            <div class="item-test" style="display: block; opacity: 1;">
                                <div class="singleline">
                                    <a class="news-title" href=<?= Html::encode($acts->activity_url)?>>主题：<?= Html::encode($acts->activity_name)?></a>
                                    <p> &nbsp;<i class="fa fa-fw fa-user"></i> 主办单位:<?php foreach($Allcollege as $clg):?><?= Html::encode($clg->college_name)?> <?php endforeach?><?php foreach($Allorgani as $ogn):?><?= Html::encode($ogn->organi_name)?> <?php endforeach?></p>
                                    <p> &nbsp;<i class="fa fa-fw fa-calendar"></i> 日期：<?= Html::encode($acts->activity_date)?></p>
                                    <p> &nbsp;<i class="fa fa-fw fa-map-marker"></i> 地点:<?= Html::encode($acts->activity_position)?></p>
                                </div>
                            </div>
                    <?php }}endforeach?>
                    <p1><br /></p1>
                    <?php if($total<=3){?>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <?php }?>
                </div>
                <div class="col-md-4  sidebar ftco-animate" position:fixed float:right class="div-inline">
                    <div class="date-move">
                        <h3><i class="fa fa-angle-right"></i> 日期筛选</h3>
                        <?php if($year!=0){ ?>
                        <h4><i class="fa fa-angle-right"></i> 当前显示：<?= Html::encode($year)?>年<?= Html::encode($month)?>月</h4>
                        <?php }else{?>
                        <h4><i class="fa fa-angle-right"></i> 当前显示：<?= Html::encode($type)?></h4>
                        <?php }for($tyear=2018;$tyear<2021;$tyear++){?>
                            <?php for($tmonth=1;$tmonth<13;$tmonth++){?>
                                <?php if(($tyear==2018&&$tmonth<10)||($tyear==2020&&$tmonth>3))continue;?>
                                        <form action="<?= Yii::$app->urlManager->createAbsoluteUrl(['activity/index']);?>" method="post" >
                                                <?php $form=ActiveForm::begin();?>
                                                <input id="reply-write" name="year" type="hidden" value=<?= Html::encode($tyear)?>>
                                                <input id="reply-write" name="month" type="hidden" value=<?= Html::encode($tmonth)?>>
                                                <?php if($tyear==$year&&$tmonth==$month){ ?>
                                                    <div class="date date-active">
                                                    <button class="date-month" style="border: 0px; background:none" ><?= Html::encode($tmonth)?> <span>月</span>  </button>
                                                    <div class="date-year"><?= Html::encode($year)?></div>
                                                    </div>
                                                <?php }else{ ?>
                                                    <div class="date">
                                                    <button class="date-month" style="border: 0px; background-color: #FFFFFF "><?= Html::encode($tmonth)?> <span>月</span>  </button>
                                                    <div class="date-year"><?= Html::encode($year)?></div>
                                                    </div>
                                                <?php }?>
                                                <?php ActiveForm::end();?>
                                        </form>
                                        <?php if($tyear==2019&&$tmonth==10){?>
                                            <form id="reply-form2" action="<?= Yii::$app->urlManager->createAbsoluteUrl(['activity/index']);?>" method="post" >
                                                    <?php $form=ActiveForm::begin();?>
                                                    <input id="reply-write" name="year" type="hidden" value=2019>
                                                    <input id="reply-write" name="month" type="hidden" value=10>
                                                    <div class="date date-active date-1017">
                                                        <button class="date-month" style="border: 0px; background:none" >百年校庆</button>
                                                            <div class="date-year">2019.10.17</div>
                                                    </div>
                                                    <?php ActiveForm::end();?>
                                            </form>
                                        <?php }?>
                            <?php }}?>
                       

                        <div style="clear:both;"></div>

                        <h4><i class="fa fa-angle-right"></i>&nbsp</h4>
                        <h3><i class="fa fa-angle-right"></i>活动分类</h3>
                     
                        
                       
                       <div class="row">
                       <?php $acttype=array(1=>"宣传活动",2=>"校友活动",3=>"学术活动",4=>"纪念活动");
                       $actco=array(1=>"green",2=>"blue",3=>"#dc3545",4=>"#ffc107");?>
                       <?php for($typenum=1;$typenum<5;$typenum++){ ?>
                            <form id="reply-form2" action="<?= Yii::$app->urlManager->createAbsoluteUrl(['activity/index']);?>" method="post">
                                <?php $form=ActiveForm::begin();?>
                                <div class="input" style="width:65%;float:left;margin-left:5%;">
                                    <input id="reply-write" name="type" type="hidden" value=<?= Html::encode($acttype[$typenum])?>>
                                </div>
                                <div class="pc3">
                                    <button style="border: 0px;background-color: #FFFFFF;color:<?= Html::encode($actco[$typenum])?>"><?= Html::encode($acttype[$typenum])?></button>
                                </div>
                                <?php ActiveForm::end();?>
                            </form>
                       <?php }?>
                </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

  ##### 			Part Ⅵ 新闻显示及新闻上传：
  ​			      
  ##### 			Part Ⅶ 新闻显示及新闻上传：
  ​			
  #### 	后端主要功能与展示：

  ##### 			Part I 注册与登录：

  ​					后台模块只能对管理员开放，在原生的adminlte的基础上加入id选项，用于判断该用户是否具有管理员权限。
 

  ![登录](https://github.com/Kegem0/Internet-data-development/blob/master/back-end-img/登陆.jpg)

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

  ​				后台的主页实现的比较简陋，主要按照admintle的框架进行更改，并加入图片轮播功能。我们将数据库中的表分为四个大部分，可以从左边的侧拉框或者上方的四个选择进入相应的模块进行操作，每个操作都应用gii自动生成。![主页](https://github.com/Kegem0/Internet-data-development/blob/master/back-end-img/主页.jpg)

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

  

  
