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
    <?php if($this->id == 'shop'){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/shop.css" />
    <?php }?>

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
    <?php if($this->id == 'shop' && in_array($this->action->id, array('bf','index', 'static','detail'))){
        $this->renderPartial('//layouts/shop_sub_header');
    }?>
	<?php echo $content; ?>
	<div class="clear"></div>

    <?php $this->renderPartial('//layouts/common_footer');?>
</body>
</html>
