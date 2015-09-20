<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="page">

	<div id="header">
        <div class="wp">
            <a href="/index.php" class="logo_link"><div class="logo"></div></a>
<?php $this->renderPartial('//layouts/menu_list');?>
        </div>
	</div><!-- header -->
	<?php echo $content; ?>
	<div class="clear"></div>

	<div id="footer">
		<div class="footer-service wp">
            <ul>
                <li><a><i></i><span>全场商品包邮服务</span></a></li>
                <li><a><i></i><span>1000+平台设计师保证</span></a></li>
                <li><a><i></i><span>24小时设计班服</span></a></li>
                <li><a><i></i><span>品牌T恤供应商代工</span></a></li>
                <li><a><i></i><span>支付托管担保</span></a></li>
            </ul>
        </div>
        <div class="wp clearfix hr"></div>
        <div class="footer-links wp clearfix">
            <dl>
            <dt>关于我们</dt>
            <dd><a href="">了解我们</a></dd>
            <dd><a href="">加入我们</a></dd>
            <dd><a href="">联系我们</a></dd>
        </dl>
            <dl>
            <dt>服务支持</dt>
            <dd><a href="">售后申请</a></dd>
            <dd><a href="">自助服务</a></dd>
            <dd><a href="">素材下载</a></dd>
        </dl>
            <dl>
            <dt>帮助中心</dt>
            <dd><a href="">购物指南</a></dd>
            <dd><a href="">支付指南</a></dd>
            <dd><a href="">快递方式</a></dd>
        </dl>
            <dl>
            <dt>关注我们</dt>
            <dd><a href="">新浪微博</a></dd>
            <dd><a href="">官方微信</a></dd>
            <dd><a href="">QQ空间</a></dd>
        </dl>
            <div class="col-contact">
                <p class="phone">010-62934180</p>
                <p>周一至周日 8:00-18:00<br />
                （仅收市话费）</p>
                <a> 24小时在线客服</a>
            </div>
        </div>
	</div><!-- footer -->

    <div class="site-info">
        <div class="wp">
            <div class="ir"><div class="logo"></div></div>
            <div class="info-text">
                <p class="sites"><span href="">北京梦想好青年科技有限责任公司</span><span class="sep">|</span><span href="">北京市海淀区后屯南路26号专家国际公馆661室</span><span class="sep">|</span><span>bingoshang@163.com</span></p>
                <p>©<a href="http://www.hoyouth.com/" title="hoyouth.com">hoyouth.com</a> 京备案号00123-123123号 京备案号00123-123123号 京备案号00123-123123号</p>
            </div>
        </div>
    </div>

</div><!-- page -->

</body>
</html>
