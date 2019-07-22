<?php
// 1711447
use yii\helpers\Html;
use yii\db\Query;
use yii\widgets\ActiveForm;
use frontend\models\Danmus;
use yii\web\View;
?>
<!-- 
create table danmus( id int primary key auto_increment, words text ) 
INSERT INTO danmus (words) VALUES ("祝nku100周年快乐！")
INSERT INTO danmus (words) VALUES ("20191017")
INSERT INTO danmus (words) VALUES ("允公允能日新月异！")
INSERT INTO danmus (words) VALUES ("我要发弹幕(≧▽≦)")
INSERT INTO danmus (words) VALUES ("预祝南开大学百年校庆圆满成功～")
-->

<?=Html::cssFile('@web/danmu/danmu.css')?>
<?=Html::jsFile('@web/danmu/jquery.js')?>
<?=Html::jsFile('@web/danmu/swiper.min.js')?>

<body>
    <div class="swiper-container">
        <div id="conts">
            <div class="dm">
                <div class="d_screen">
                    <div class="d_show">
                        <div style="color:#fff;font-size:30px;">弹幕即将来袭！</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 输入框 -->
    <div style="position:fixed;left:0%;bottom:0px;height:100px;width:100%;background-color:#905aab;z-index:99999;opacity:0.9">
        <p style="color:#fff;padding:0px;text-align:left;margin:0px;padding:0px;padding: 7px 0px 3px 5%; font-size: 20px">快来为百年南开送上你的祝福吧( ゜- ゜)つロ~
        </p>

        <form id="reply-form2" action="<?= Yii::$app->urlManager->createAbsoluteUrl(['index.php/danmu/create']);?>" method="post" style="padding-top:8px;padding-bottom:30px;">
	        <?php $form=ActiveForm::begin();?>
			<div class="input" style="width:65%;float:left;margin-left:5%;">
		        <input id="reply-write" name="content" type="text" placeholder="输入文字">
		    </div>
			<div class='send-btn'>
				<button style="background-color:#ce96e5;color:#fff;width: 8em;height: 3.3em;display: inline-block;text-align: center;line-height: 2.5em;cursor:pointer" onClick="send_reply()">发射祝福</button>
			</div>
			<?php ActiveForm::end();?>

        </form>
    </div>
    <script>
    // 发送
    function send_reply() {
        var content = $("#reply-write").val();
        if ($.trim(content) == "") {
            alert("先输入你的祝福再发送哦！");
            return false;
        }
        var ransize=getRandomSize();
        var rancolor=getRandomColor();
        var div="<div style='font-size:"+ransize+"px;color:"+rancolor+";'><p>" + content + "</p></div>";
        $(".d_show").append(div);
        // $("#reply-write").val("");
        init_screen();	
    }
    window.onload = function() {
        setTimeout(show, 1000);
    }
    function show() {
        // document.getElementById('showmeg').style.display = "block";
        $("#showmeg").animate({ top: '40%' }, 1800);
        $("#showmeg").animate({ top: '20%' }, 1800);
        $("#showmeg").animate({ left: '10%' }, 1800);
        setTimeout(hide, 5000);
    }
    function hide() {
        // document.getElementById('showmeg').style.display = "none";
        setTimeout(show, 10000);
    }
    $(function() {
        init_screen();
    });
    //请求数据库
    $(document).ready(function() {
        setInterval("startRequest()", 5000);
    });
    function startRequest() {
    	html="";
    	var rancolor=getRandomColor();
		var ransize=getRandomSize();
		var text = "";
		<?php foreach ($danmus as $dd): ?>
			rancolor=getRandomColor();
			ransize=getRandomSize();
			text=<?php echo "\"".$dd->words."\""; ?>;
			html+="<div style='font-size:"+ransize+"px;color:"+rancolor+";'><p>" + text + "</p></div>";
		<?php endforeach ?>
        $(".d_show").append(html);
        init_screen();
    }
    function init_screen() {
        var _top = 0;
        $(".d_show").find("div").show().each(function() {
            var _left = $(window).width() - $(this).width()+500;
            var _height = $(window).height()-100;
            _top = _top + 36;
            if (_top >= _height - 120) {
                _top = 40;
            }
            $(this).css({ left: _left, top: _top });
            var time = 10000;
            if ($(this).index() % 2 == 0) {
                time = 12000;
            }
            if ($(this).index() % 3 == 0) {
                time = 14000;
            }
            if ($(this).index() % 4 == 0) {
                time = 16000;
            }
            if ($(this).index() % 5 == 0) {
                time = 18000;
            }
            if ($(this).index() % 7 == 0) {
                time = 20000;
            }
            if ($(this).index() % 8 == 0) {
                time = 23000;
            }
            $(this).animate({ left: "-" + _left + "px" }, time, function() {});
        });
    }
    //随机
    function getRandomColor() {
        return '#' + (function(h) {
            return new Array(7 - h.length).join("0") + h
        })((Math.random() * 0x1000000 << 0).toString(16))
    }
    function getRandomSize() {
        return (Math.random()*14+16);
    }
    </script>
</body>