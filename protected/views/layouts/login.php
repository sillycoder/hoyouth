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

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="page">

    <div id="header">
        <div class="wp-sub">
            <a href="/index.php" class="logo_link"><div class="logo"></div></a>
        </div>
    </div><!-- header -->




    <?php echo $content; ?>




    <div class="clear"></div>

    <div id="footer">
	    <div class="wp-sub">
		<a>常见问题</a>
		<p>梦想好青年科技公司版权所有-京ICP备15049457</p>
	    </div>
    </div><!-- footer -->


</div><!-- page -->
<div class="hidden">
    <script src="http://s95.cnzz.com/z_stat.php?id=1256400905&web_id=1256400905" language="JavaScript"></script>
</div>
</body>
</html>
