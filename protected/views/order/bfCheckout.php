<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<div id="order" class="wp">
    <div class="order-block">
        <h4>收件信息</h4>
        <br />
        <div class="order-address add_address">
            <p class="address-add-icon"></p>
            <p class="address-add-text">添加收件信息</p>
        </div>
    </div>
    <div class="order-block">
        <h4>支付方式</h4><span class="order-static-span">在线支付（支持支付宝、微信支付）</span>
    </div>
    <div class="order-block">
        <h4>配送方式</h4><span class="order-static-span">圆通快递配送（运费 0 RMB）</span>
    </div>
    <div class="order-block">
        <h4>发票</h4><span class="invoices-e invoices-selected invoices-btn">电子发票（非纸质）</span><span class="invoices-p invoices-btn">纸质发票</span>
        <p class="invoices-e-p">电子发票是环保发票类型，目前仅对个人用户开具，不随商品寄送。</p>
        <div><span class="invoices-privacy invoices-btn">个人</span><span class="invoices-company invoices-btn">单位</span></div>
        <input type="text" class="invoices-company-title" placeholder="请输入发票抬头"/>
        <p class="invoices-company-title-p">内容：购买商品明细</p>

    </div>
    <p class="goods">商品信息</p>
    <div class="goods-info order-block clearfix">
        <div class="col col-img"><img src="http://attach.bbs.miui.com/album/201509/24/203927nmm9jh9pfp29h398.png" /></div>
        <div class="col col-name">好青年班服</div>
        <div class="col col-type">
            <?php
            foreach($cart['amount'] as $k => $v){
                echo '<p>'.$cart['color'].'/'.$k.'  X  '.$v.'</p>';
            }
            ?>
        </div>
        <div class="col col-price">
            <p><?php echo $cart['count'].'（件）X'.$cart['price']; ?></p>
        </div>
        <div class="col col-total">
            <?php echo $cart['total'].'RMB'; ?>
        </div>
    </div>
    <div class="order-block order-finally clearfix">
        <p>商品件数：<span><?=$cart['count']?>件</span></p>
        <p>单价：<span><?=$cart['price']?>元</span></p>
        <p>金额合计：<span><?=$cart['total']?>元</span></p>
        <p>活动优惠：<span>-0元</span></p>
        <p>运费：<span>0元</span></p>
        <p>应付总额：<span><?=$cart['total']?>元</span></p>
    </div>
    <input class="submit_btn btn" type="submit" name="" value="立即结算">
</div>
<form id="dataform" action="/order/bfCheckout" method="POST">
    <input type="hidden" name="address" value="1">
</form>
<script>
    $('.invoices-e').click(function(){
        $(this).addClass('invoices-selected');
        $('.invoices-p').removeClass('invoices-selected');
        $('.invoices-privacy').hide().removeClass('invoices-selected');
        $('.invoices-company').hide().removeClass('invoices-selected');
        $('.invoices-company-title').hide();
        $('.invoices-company-title-p').hide();
    });
    $('.invoices-p').click(function(){
        $(this).addClass('invoices-selected');
        $('.invoices-e').removeClass('invoices-selected');
        $('.invoices-privacy').css('display', 'inline-block').addClass('invoices-selected');
        $('.invoices-company').css('display', 'inline-block');
        $('.invoices-company-title').hide();
        $('.invoices-company-title-p').hide();
    });
    $('.invoices-company').click(function(){
        $(this).addClass('invoices-selected');
        $('.invoices-privacy').removeClass('invoices-selected');
        $('.invoices-company-title').show();
        $('.invoices-company-title-p').show();
    });
    $('.invoices-privacy').click(function(){
        $(this).addClass('invoices-selected');
        $('.invoices-company').removeClass('invoices-selected');
        $('.invoices-company-title').hide();
        $('.invoices-company-title-p').hide();
    });
    function valid(){
        return true;
    }
    $('.submit_btn').click(function(){
        if(!valid()){
            return false;
        }
        $('#dataform').submit();
    });
</script>