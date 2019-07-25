

# Internet-data-development

Nankai university centennial anniversary database and front-end

- ### 项目分工：（仅为主要任务）

  仪德智，杨俊辉:前端样式设计

  杨铭（组长）:数据库设计，前后端交互，前端MVC的设计

  陈颖，诸佳昕：后端设计<br><br>
  ![我们的github](https://github.com/Kegem0/Internet-data-development)<br><br>
   ​      git提交记录：
  ![git提交记录](https://github.com/Kegem0/Internet-data-development/blob/master/git%E6%8F%90%E4%BA%A4%E8%AE%B0%E5%BD%95.png)

  ----------------

  ------------------

- ### 需求文档：

 前端功能：
  （本部分的图过多，所以不放在说明文档中）
#### 首页：首页主要包括以下几个部分：<br>
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
#### 活动页面<br>
    活动以当前月份为起点，显示了当前月份的所有活动以及对应的信息。通过右边的日历可以选择不同的月份以查看不同月份的活动。右侧还提供可选择的不同分类的活动和嘉宾的图片，点击图片跳转至我们制作的嘉宾介绍页或百度百科<br>
    活动页面的子页面:<br>
    1、一些活动的介绍<br>
#### 新闻页面<br>
    新闻页面按时间逆序显示了所有上传且被审核通过的新闻，每页10条，会根据条数的增加增加分页的功能，点击可以查看新闻内容，这个新闻的内容是通过数据库实现的，我们为登录的用户提供了上传新闻的功能，可以进行新闻的上传，但是要经过管理员审核才能通过以显示在前端的页面上<br>
    新闻页面的子页面<br>
    1、新闻模板页面（因为是从数据库中取值来填充）<br>
    在样例新闻页面中，相关人物部分，每位人物都附有链接，转至我们制作的详情页或百度百科。<br>
    2、新闻上传页面<br>
#### 嘉宾页面<br>
    嘉宾主页面沿用我们主页的页眉页脚，提供了一些嘉宾的图片及对应的介绍。点击图片可以进入详细介绍<br>
    嘉宾页面的子页面：<br>
    1、一些嘉宾的详细介绍页面<br>
    包含可查询到的人物主要经历和贡献。提供每位嘉宾的照片和文字资料。页面右侧有本网页目录，点击可跳转至该网页不同板块。
#### 作业界面<br>
     提供作业的下载地址
  
  后端功能：为项目管理员提供数据操作的平台。用于对各张表进行增删改查。对于某些操作，例如审核新闻是否通过，提供快速一键审核功能。

  ---------------

  --------------

  

- ### 设计文档：

  数据库设计：
  ![数据库ER图](https://github.com/Kegem0/Internet-data-development/blob/master/%E6%B5%81%E7%A8%8B%E5%9B%BE/%E6%95%B0%E6%8D%AE%E5%BA%93%E8%AE%BE%E8%AE%A1%E5%9B%BE.png)<br>
  ![数据字典下载地址](https://github.com/Kegem0/Internet-data-development/blob/master/%E6%B5%81%E7%A8%8B%E5%9B%BE/%E6%95%B0%E6%8D%AE%E5%AD%97%E5%85%B8.pdf)<br>
  
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
  
  代码更改：
  M：添加了几个属性，并且同时创建学生，以id作为连接
  ```
  class SignupForm extends Model
  {
    public $username;
    public $email;
    public $password;
    public $id;
    public $college;

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
  }  
  ```
    C：无
    V:添加了几个输入框，来获取新的数据  
  ```
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
   ```
 

  ##### 			Part Ⅱ 倒计时：
  ​				 ![](http://ww1.sinaimg.cn/large/006tNc79ly1g58z9zr969j322d0u07wk.jpg)

`TimeController.php` 用于渲染视图的控制器

![](http://ww3.sinaimg.cn/large/006tNc79ly1g5c445xn7aj30ms0dg403.jpg)

`gettime.php` 视图页面

`style.css` 设置了倒计时的样式

`function.js` 可以设置目标日期的时间

![](http://ww2.sinaimg.cn/large/006tNc79ly1g5bd1v2gwij30gs09ogmh.jpg)
  ##### 			Part Ⅲ 弹幕发送：
  ​				 ###### 2.1 sql

一个弹幕类，两个属性，自增的`id`以及弹幕内容`words`

```
--
-- 表的结构 `danmus`
--

CREATE TABLE `danmus` (
  `id` int(11) NOT NULL,
  `words` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `danmus`
--

INSERT INTO `danmus` (`id`, `words`) VALUES
(1, '祝nku100周年快乐！'),
(2, '20191017'),
(3, '允公允能日新月异！'),
(4, '我要发弹幕(≧▽≦)'),
(5, '预祝南开大学百年校庆圆满成功～');
```

###### 2.2 M

`Danmus.php`

![](http://ww3.sinaimg.cn/large/006tNc79ly1g5bd5c5mv9j30kq09w0u6.jpg)

###### 2.3 V

`fun.php`

css样式在`danmu/danmu.css`文件中

js函数直接写在了`fun.php`中

弹幕显示思路是，每个弹幕格式都为`"<div style='font-size:"+ransize+"px;color:"+rancolor+";'><p>" + content + "</p></div>"`，这些div增加到`d_show`中，在显示的时候通过js函数`init_screen()`定位显示

数据库中的弹幕由controller返回查询结果`danmus`，并在js函数`startRequest()`中获取

![](http://ww1.sinaimg.cn/large/006tNc79ly1g58yyt67rdj31qw0u0kjo.jpg)

发送弹幕并添加到数据库，提交表单，methon为post，通过action设为控制器中写的actioncreate来提交数据

![](http://ww2.sinaimg.cn/large/006tNc79ly1g5c41aclasj30ra0hmjw9.jpg)

###### 2.4 C

`DanmuController.php`

在控制器中实现弹幕数据库的查询和增加以及视图的渲染

![](http://ww4.sinaimg.cn/large/006tNc79ly1g5c3x98cxaj30to0cmdip.jpg)
  ##### 			Part Ⅳ 活动显示：主要集中在10月，由于时间原因没有添加过多的元素
  ​				    通过将数据库中的活动按月份和属性进行分类，然后在旁边的框架中通过选择并且上传值来显示不同的月份或不同类型的活动
  
  代码编写：
  M：gii自动生成，并无修改
  C：通过年份和月份两个选项进行时间分类或者通过type进行种类分类
  ```
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
  ```
  V:通过一些yii自带的查询语句和php语法将自己想要类型和月份的活动筛选出来 css文件和js函数没有给出
  ```
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
  ```

  ##### 			Part Ⅵ 新闻显示及新闻上传：
  ​			      通过实践逆序，将新闻全部显示出来，每页显示10条，没多十条会多出现一个分支页面，当登录之后会出现一个新闻上传按钮，点击可以进行新闻上传，但是要通过后端管理员的审核才能显示在该页面。
  M：nku_news是gii自动生成的，没有变化，编写了一个uploadnews类已完成上传新闻的功能
  ```
      <?php
    namespace frontend\models;

    use Yii;
    use yii\base\Model;
    use common\models\User;
    use frontend\models\NkuNews;
    use frontend\models\WriteBystu;
    /**
     * Signup form
     */
    class Uploadnews extends Model
    {
        public $date;
        public $headline;
        public $text;

        public function rules()
        {
            return [
                ['date', 'trim'],
                ['date', 'required'],

                ['headline', 'trim'],
                ['headline', 'required'],

                ['text', 'trim'],
                ['text', 'required'],
            ];
        }

        /**
         * Signs user up.
         *
         * @return bool whether the creating new account was successful and email was sent
         */
        public function uploadnews()
        {   
            $news=new NkuNews();
            $news->news_date=$this->date;
            $news->news_headline=$this->headline;
            $news->news_text=$this->text;
            $news->news_ifpassed=0;
            if($AllNews = NkuNews::find()->where(['news_date'=>$this->date])->orderby(['news_num'=> SORT_DESC])->one()){
                $news->news_num=$AllNews->news_num+1;
            }
            else{
                $news->news_num=0;
            }
            $AllNews = NkuNews::find()->orderby(['news_url'=> SORT_DESC])->one();
            $news->news_url=$AllNews->news_url+1;
            $news->save(); 
            $writeby = new WriteBystu();
            $writeby->news_date=$news->news_date;
            $writeby->news_num=$news->news_num;
            $writeby->student_id=Yii::$app->user->id;
            return $news->save()&&$writeby->save();;
        }
    }
  ```
  C:主要实现主页面、上传页面和显示模板界面的跳转 
  ```
      class NewsController extends Controller
    {
        public function actionIndex()
        {
            if(\Yii::$app->request->post()){
                $cur = Yii::$app->request->post('next');
                return $this->render('index',['cur'=> $cur]);
            }   
            return $this->render('index',['cur'=>1]);   
        }
        public function actionUploadnews()
        {
            $model = new Uploadnews();
            if ($model->load(Yii::$app->request->post())) {
                $model->uploadnews();
                return $this->render('uploadnews',['passed'=>1]);
            }
            return $this->render('uploadnews', [
                'model' => $model,'passed'=>0
            ]);
        }
        public function actionAllnews()
        {
            if(\Yii::$app->request->post()){
                $model =new NkuNews;
                $request = \Yii::$app->request;
                $model = NkuNews::find()->where(['news_url'=>\Yii::$app->request->post('url')])->one();
                return $this->render('allnews',['model'=> $model]);
            }   
        }
    }
  ```
  V：包括，所有新闻的显示页面 css文件和js函数没有给出 css文件和js函数没有给出
  ```
  <section class="ftco-section ftco-degree-bg">
            <!--<img style="position:absolute;left:0px;top:0px;width:100%;height:50%;z-Index:-1; border:1px solid blue" src="images/backnews1.jpg">
            -->
            <div class="subcontainer">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-5 heading-section text-center ftco-animate">
                        <h2 class="mb-4">南开百年新闻
                            <img src="images2/100num.png" alt="" class="img-100 ">
                        </h2>
                    </div>
                <?php if(Yii::$app->user->isGuest){}else{ ?>
                    <div class="col-md-1 ftco-animate " class="div-inline">
                        <a href="index.php?r=news%2Fuploadnews">
                            <div class="uploaddata">
                                <span class="uploadword">上传新闻</span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                    
                </div>
                <div class="row">
                    <div class="col-md-2 ftco-animate " class="div-inline">
                    </div>
                    <div class="col-md-10 ftco-animate " class="div-inline">
                        <?php $AllNews = NkuNews::find()->orderBy(['news_date' => SORT_DESC])->all(); ?>
                        <?php $news_num=0;
                        foreach($AllNews as $news):
                        if(($news_num<($cur*10-10))&&$news->news_ifpassed==1){
                            $news_num++;
                            continue;
                        }
                        if($news->news_ifpassed==1){?>
                        <div class="item-test" style="display: block; opacity: 1;">
                            <div class="singleline">
                            <form id="reply-form2" action="<?= Yii::$app->urlManager->createAbsoluteUrl(['news/allnews']);?>" method="post" style="padding-top:8px;padding-bottom:30px;">
                                <?php $form=ActiveForm::begin();?>
                                <div class="input" style="width:65%;float:left;margin-left:5%;">
                                    <input id="reply-write" name="url" type="hidden" value=<?=Html::encode($news->news_url)?>>
                                </div>
                                <div class='send-btn'>
                                    <button style="color:#a0468c; background-color: #FFFFFF;border: 0px none;font-size: 15px;" ><?=Html::encode($news->news_headline)?></button>
                                </div>
                                <?php ActiveForm::end();?>
                            </form>
                                    <p class="dateshowright"><i class="fa fa-fw fa-calendar"></i> 日期：<?=Html::encode($news->news_date)?><a href=""></a></p>
                            </div>
                        </div>
                        <p1><br/></p1>
                        <?php $news_num+=1;}
                        endforeach?>
                </div>

                <div id="jz">
                    <div class="row">
                        <?php $total=NkuNews::find()->count();
                        if($total<50){
                            $pnum=1;
                            while($pnum*10-10<$total){?>
                            <form id="reply-form2" action="<?= Yii::$app->urlManager->createAbsoluteUrl(['news/index']);?>" method="post" style="padding-top:8px;padding-bottom:30px;">
                                    <?php $form=ActiveForm::begin();?>
                                    <div class="input" style="width:65%;float:left;margin-left:5%;">
                                        <input id="reply-write" name="next" type="hidden" value=1>
                                    </div>
                                    <?php if($pnum!=$cur){ ?>
                                    <button style="color:#a0468c; background-color: #FFFFFF;border: 0px none;font-size: 30px;"><?=Html::encode($pnum)?></button>
                                    <?php }else{?>
                                    <button style="color:#a0468c; background-color: #FFFFFF;border: 0px none;font-size: 30px; text-decoration:underline;"><?=Html::encode($pnum)?></button>
                                    <?php } ?>
                                    <?php ActiveForm::end();?>
                            </form>
                            <?php $pnum+=1;} ?>
                        <?php } ?> 
                        <!-- <a href="#">
                            <div class="pc-active">
                                <span>1</span>
                            </div>
                        </a>
                        <p>&nbsp &nbsp</p>
                        <a href="news2.html">
                            <div class="pc">
                                <span>2</span>
                            </div>
                        </a>
                        <p>&nbsp &nbsp</p>
                        <a href="http:\\www.baidu.com">
                            <div class="pc">
                                <span>3</span>
                            </div>
                        </a>
                        <p>&nbsp &nbsp</p>
                        <a href="http:\\www.baidu.com">
                            <div class="pc">
                                <span>4</span>
                            </div>
                        </a>
                        <p>&nbsp &nbsp</p>
                        <a href="http:\\www.baidu.com">
                            <div class="pc">
                                <span>5</span>
                            </div>
                        </a>
                        <p>&nbsp &nbsp</p>
                        <a href="news2.html">
                            <div class="pc2">
                                <span>下一页</span>
                            </div>
                        </a> -->
                    </div>
                </div>
        </section>
  ```
  新闻上传页面:css文件和js函数没有给出
  ```
    <?php

  /* @var $this yii\web\View */
  /* @var $form yii\bootstrap\ActiveForm */
  /* @var $model \frontend\models\ContactForm */

  use yii\helpers\Html;
  use yii\bootstrap\ActiveForm;
  use yii\captcha\Captcha;

  $this->title = 'Contact';
  $this->params['breadcrumbs'][] = $this->title;
  ?>
  <div class="site-news" style="margin-left:100px">
      <br><br><br><br><br><br>
      <?php if($passed==1){ ?>
      <h1>新闻上传成功！请等待审核</h1>
      <?php }else{ 
      if(Yii::$app->user->isGuest) {?>
      <h3>新闻上传？你以为这么简单就能破了我的局么，虽然我不会权限控制，但是这种还是会的</h3>
      <?php }else{ ?>
      <h1>
      新闻上传
      </h1>
      <div class="row">
          <div class="col-lg-5">
              <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                  <?= $form->field($model, 'date')?>

                  <?= $form->field($model, 'headline') ?>

                  <?= $form->field($model, 'text')->textarea(['rows' => 6])?>

                  <div class="form-group">
                      <?= Html::submitButton('新闻上传', ['class' => 'btn btn-primary', 'name' => 'upnews-button']) ?>
                  </div>

              <?php ActiveForm::end(); ?>
          </div>
      </div>
      <?php }}?>
   </div>
  ```
  以及显示所有新闻的模板页面，这里通过从数据库中取数据以达到相应的功能 
  ```
      <?php
    // 1711447
    use yii\helpers\Html;
    use yii\db\Query;
    use frontend\models\NkuNews;
    use frontend\models\WriteBystu; 
    use frontend\models\NkuStudent;
    use frontend\models\JoinGuest;   
    use frontend\models\Guest;   
    use yii\widgets\ActiveForm;
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <!DOCTYPE html>
    <html lang="en">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

        <link rel="stylesheet" href="css2/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css2/animate.css">

        <link rel="stylesheet" href="css2/owl.carousel.min.css">
        <link rel="stylesheet" href="css2/owl.theme.default.min.css">
        <link rel="stylesheet" href="css2/magnific-popup.css">

        <link rel="stylesheet" href="css2/aos.css">

        <link rel="stylesheet" href="css2/ionicons.min.css">

        <link rel="stylesheet" href="css2/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css2/jquery.timepicker.css">



        <link rel="stylesheet" href="css2/flaticon.css">
        <link rel="stylesheet" href="css2/icomoon.css">
        <link rel="stylesheet" href="css2/style.css">
        <!-- <link rel="stylesheet" href="css/styleeole.css"> -->
    </head>

    <body>
        <?php $writeby=WriteBystu::find()->where(['news_date'=>$model->news_date,'news_num'=>$model->news_num])->one();
        $student=NkuStudent::find()->where(['student_id'=>$writeby->student_id])->one();
        ?>
        <br><br><br>
        <h3>&nbsp</h3>
        <h1 style="text-align: center   "><?=Html::encode($model->news_headline)?></h1>
        <h2 style="text-align:center;font-size:25px !important;color:cornflowerblue">
            <p1>&nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp   &nbsp &nbsp &nbsp  
                    &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp</p1>
            作者:<?=Html::encode($student->student_name)?>
        </h2>
        <h3>&nbsp</h3>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" style="text-align: left;font-size:20px;font:#000000;font-weight: 500!important">
                 <?=Html::encode($model->news_text)?>
            <h3 style="text-align: right !important; font-size:18px;">时间：<?=Html::encode($model->news_date)?><br/></h3>
            </div>
        </div>

    </body>

    </html>
  ```
  ##### 			Part Ⅶ 嘉宾展示：
  ​		        这是一个很直接的带url的页面，但是子页面使用了很多的js函数，所以我们将其作为一个分支
  代码更改：
  M：无<br>
  C：无<br>
  V: 直接作为页面跳转所制作的网页
  嘉宾主页设计得较为简单直接，由于不需要制作大规模实际应用网页，我们只精心为三位嘉宾制作任务详情介绍页。嘉宾主页中也只有这三位嘉宾的照片。
  ```
    <body>

      <br><br><br>
      <h3>&nbsp</h3>
      <div class="introduction">
          <span style="color:#fff">南开校庆嘉宾介绍<br/></span><br/>
      </div>
      <p1>&nbsp</p1>



      <!-- 第一行四张照片 -->
      <div class="row" style="text-align: center">
          <div class="col-md-1" style="text-align: center">
          </div>
          <div class="col-md-2" style="text-align: center">
          <a href="index.php?r=guest%2Fcaoxuetao" style="color:blueviolet">
              <img src="images2/cxt3.jpg" alt="" class="img-100man"><br />
              <h4>曹雪涛<br /></h4>
              <p1>南开大学校长</p1>
          </a>
          </div>
          <div class="col-md-2" style="text-align: center">
          <a href="index.php?r=guest%2Fyuanxiaojie"style="color:blueviolet">
              <img src="images2/yxj1.png" alt="" class="img-100man"><br />
              <h4>袁晓洁<br /></h4>
              <p1>计算机学院院长</p1>
          </a>
          </div>
          <div class="col-md-2" style="text-align: center">
                  <a href="index.php?r=guest%2Fcaoxuetao" style="color:blueviolet">
              <img src="images2/cxt2.jpg" alt="" class="img-100man"><br />
              <h4>曹雪涛<br /></h4>
              <p1>南开大学校长</p1>
          </a>
          </div>
          <div class="col-md-2" style="text-align: center">
                  <a href="index.php?r=guest%2Fcaoxuetao" style="color:blueviolet">
                  <img src="images2/yjy1.jpg" alt="" class="img-100man"><br />
                  <h4>叶嘉莹<br /></h4>
                  <p1>知名校友</p1>
              </a>
          </div>
      </div> 
      <p1>&nbsp</p1>

          <!-- 第二行四张照片 -->
          <div class="row" style="text-align: center">
                  <div class="col-md-1" style="text-align: center">
                  </div>
                  <div class="col-md-2" style="text-align: center">
                          <a href="blog-single.html" style="color:blueviolet">
                      <img src="images2/cxt3.jpg" alt="" class="img-100man"><br />
                      <h4>曹雪涛<br /></h4>
                      <p1>南开大学校长</p1>
                  </a>
                  </div>
                  <div class="col-md-2" style="text-align: center">
                          <a href="blog-single.html" style="color:blueviolet">
                      <img src="images2/yxj1.png" alt="" class="img-100man"><br />
                      <h4>曹雪涛<br /></h4>
                      <p1>南开大学校长</p1>
                  </a>
                  </div>
                  <div class="col-md-2" style="text-align: center">
                          <a href="blog-single.html" style="color:blueviolet">
                      <img src="images2/cxt2.jpg" alt="" class="img-100man"><br />
                      <h4>曹雪涛<br /></h4>
                      <p1>南开大学校长</p1>
                  </a>
                  </div>
                  <div class="col-md-2" style="text-align: center">
                          <a href="blog-single.html" style="color:blueviolet">
                          <img src="images2/yjy1.jpg" alt="" class="img-100man"><br />
                          <h4>曹雪涛<br /></h4>
                          <p1>南开大学校长</p1>
                      </a>
                  </div>
          </div>
  </body>
  ```
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

  

  
