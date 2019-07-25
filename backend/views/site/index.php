
<?php
/*author 1711447*/
use yii\helpers\Html;
use yii\bootstrap\Carousel;
?>
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


<div class="contentwrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        主页
        <small>仪表盘</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li class="active">仪表盘</li>
      </ol>
    </section>    
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>活动日程</h3>
            </div>
            <div class="icon">
              <i class="ion ion-calendar"></i>
            </div>
            <a href="./nku-activity" class="small-box-footer">详情 <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <!-- <sup style="font-size: 20px"></sup> -->
              <h3>人员管理</h3>

            </div>
            <div class="icon">
              <i class="ion ion-ios-body"></i>
            </div>
            <!-- href="./persons" -->
            <a href='./nku-admin' class="small-box-footer">详情 <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>新闻管理</h3>

            </div>
            <div class="icon">
              <i class="ion ion-ios-paper"></i>
            </div>
            <a href="./nku-news" class="small-box-footer">详情 <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>学校简史</h3>

            </div>
            <div class="icon">
              <i class="ion ion-heart"></i>
            </div>
            <a href="./events" class="small-box-footer">详情 <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <?php echo Carousel::widget([
          'items' => [
              [
                  'content' => '<img src="http://ww3.sinaimg.cn/large/006tNc79ly1g4xncep7oij31o20u0b2b.jpg"/>',
                  'caption' => '<h4>热烈庆祝南开大学100周年</h4><p>庆祝庆祝庆祝</p>',
                  //'options' => [...],       //配置对应的样式
              ],
              [
                  'content' => '<img src="http://ww3.sinaimg.cn/large/006tNc79ly1g4xncv4d7ij31pt0u0e83.jpg"/>',
                  'caption' => '<h4>今天也在生产垃圾代码</h4><p>计算机学院</p>',
              ],
              [
                  'content' => '<img src="http://ww1.sinaimg.cn/large/006tNc79ly1g4xndblbu3j31oy0u07wk.jpg"/>',
                  'caption' => '<h4>允公允能日新月异</h4><p>日薪月亿</p>',
              ],
          ]
      ]);
      ?>
      <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">邮件</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="收件人：">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="建议：">
                </div>
                <div>
                  <textarea class="textarea" placeholder="百年校庆"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">发送
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>

        </section>
        <div class="control-sidebar-bg"></div>
</div>
