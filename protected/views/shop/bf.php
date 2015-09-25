<!--<h1>--><?php //echo $this->id . '/' . $this->action->id; ?><!--</h1>-->
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<div class="bf-order wp clearfix">
    <div class="model">
        <div class="img-big"><img src="http://attach.bbs.miui.com/album/201509/21/200309cvgg94vlhm0rg99l.jpg"></div>
        <div class="img-small-div">
            <div class="img-small"><img src="http://attach.bbs.miui.com/album/201509/21/200309cvgg94vlhm0rg99l.jpg"></div>
            <div class="img-small"><img src="http://attach.bbs.miui.com/album/201509/21/202101tm03i3hhcbaazhzo.jpg"></div>
            <div class="img-small"><img src="http://attach.bbs.miui.com/album/201509/21/202101lthsr0ernriptcsi.jpg"></div>
            <div class="img-small"><img src="http://attach.bbs.miui.com/album/201509/21/202101j94naawrj9zx97lo.jpg"></div>
        </div>
    </div>

    <div class="parameter">
        <div class="p-block p-color">
            <h5>颜色</h5>
            <div class="color-zone">
                <div class="color-select">
                    <span class="c-b c-white"></span>
                    <span>白色</span>
                </div>
                <div class="color-select">
                    <span class="c-b c-gray"></span>
                    <span>灰色</span>
                </div>
                <div class="color-select">
                    <span class="c-b c-black"></span>
                    <span>黑色</span>
                </div>
                <div class="color-select">
                    <span class="c-b c-red"></span>
                    <span>红色</span>
                </div>
            </div>
        </div>
        <div class="p-block p-position">
            <h5>定制位置</h5>
            <div class="position-zone">
                <div class="p-select" value="2">
                    <span>正面大图</span>
                </div>
                <div class="p-select" value="1">
                    <span>正面小图</span>
                </div>
                <div class="p-select" value="2">
                    <span>背面大图</span>
                </div>
                <div class="p-select" value="1">
                    <span>背面小图</span>
                </div>
            </div>
            <p class="p-position-p">您所要定制的班服  单件售价为 <span class="p-position-span">RMB  <span class="order-each-price">39</span></span></p>
        </div>
        <div class="p-block p-num">
            <h5>订购数量</h5>
            <div class="num-zone">
                <div>
                    <div class="n-select">
                        <span class="n-s-title">S</span>(155-160)
                        <div class="num-control">
                            <span class="num-dec"></span><input class="num-input" type="text" value="0"/><span class="num-inc"></span>
                        </div>
                    </div>
                    <div class="n-select">
                        <span class="n-s-title">M</span>(160-165)
                        <div class="num-control">
                            <span class="num-dec"></span><input class="num-input" type="text" value="0"/><span class="num-inc"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="n-select">
                        <span class="n-s-title">L</span>(165-170)
                        <div class="num-control">
                            <span class="num-dec"></span><input class="num-input" type="text" value="0"/><span class="num-inc"></span>
                        </div>
                    </div>
                    <div class="n-select">
                        <span class="n-s-title">XL</span>(170-175)
                        <div class="num-control">
                            <span class="num-dec"></span><input class="num-input" type="text" value="0"/><span class="num-inc"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="n-select">
                        <span class="n-s-title">XXL</span>(175-180)
                        <div class="num-control">
                            <span class="num-dec"></span><input class="num-input" type="text" value="0"/><span class="num-inc"></span>
                        </div>
                    </div>
                    <div class="n-select">
                        <span class="n-s-title">XXXL</span>(180-185)
                        <div class="num-control">
                            <span class="num-dec"></span><input class="num-input" type="text" value="0"/><span class="num-inc"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        <div class="p-block p-design">-->
<!--            <h5>设计需求</h5>-->
<!--            <div class="design-zone">-->
<!--                <div class="d-select">-->
<!--                    <span>设计风格</span>-->
<!--                </div>-->
<!--                <div class="d-select">-->
<!--                    <span>图案颜色</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="p-block p-desc">
            <h5>图案需求</h5>
            <div class="desc-zone">
                <input type="text" name="" class="desc-input" placeholder="（例）经济管理系国贸1班班服设计">
                <textarea name="" class="desc-ta" placeholder="（例）设计需求：希望图案设计能体现国贸专业相关属性，并且带有“1”的数字设计，图案设计风格希望是卡通的或者手绘的。"></textarea>
            </div>
        </div>


        <div class="account">
            <p class="p-cash-count">RMB&nbsp;&nbsp;<span id="order-rmb">0</span></p>
            <p class="p-cash-e-p">您选择了<span id="order-design">单图</span>定制，每件单价RMB <span class="order-each-price">39</span></p>
            <p class="p-cash-o-s">您订购班服的数量为 <span id="order-sum">0</span> 件</p>
            <?php if(Yii::app()->user->isGuest){ ?>
            <input class="submit_btn btn" type="submit" name="" value="登录后提交">
            <?php }else{ ?>
            <input class="submit_btn btn" type="submit" name="" value="立即订购">
            <?php }?>
        </div>
    </div>
</div>
<form id="dataform" action="/shop/bf" method="POST">
    <input type="hidden" name="color" value="">
    <input type="hidden" name="position" value="">
    <input type="hidden" name="amount" value="">
    <input type="hidden" name="descTitle" value="">
    <input type="hidden" name="descDetail" value="">
</form>
<script>
//  left small click
    $('.img-small').click(function(){
        var targetSrc = $(this).find('img').attr('src');
        $('.img-big img').attr('src',targetSrc);
    });
//  select color
    $('.color-select').click(function(){
        $('.color-select').removeClass('p-selected');
        $(this).addClass('p-selected');
    });
//  select position
    $('.p-select').click(function(){
        if($(this).hasClass('p-selected')){
            $(this).removeClass('p-selected');
            displayX();
            return 0;
        }
        var index = $(this).index();
        switch(index){
            case 0:
            case 1:
                $('.p-select').eq(0).removeClass('p-selected');
                $('.p-select').eq(1).removeClass('p-selected');
                break;
            case 2:
            case 3:
                $('.p-select').eq(2).removeClass('p-selected');
                $('.p-select').eq(3).removeClass('p-selected');
                break;
        }
        $(this).addClass('p-selected');
        displayX();
    });
//  input num of amount
    $('.num-input').keyup(function(){
        var currentNum = $(this).val();
        if(currentNum.length == 0){
            return;
        }
        var validNum = parseInt(currentNum);
        if(isNaN(validNum)){
            validNum = 0;
        }else if(validNum < 0){
            validNum = 0
        }
        $(this).val(validNum);
        displayX();
    });
//  click inc of amount
    $('.num-inc').click(function(){
        var input = $(this).prev('input');
        var currentNum = input.val();
        var validNum = parseInt(currentNum);
        if(currentNum.length == 0){
            validNum = 0;
        }

        if(isNaN(validNum)){
            validNum = 0;
        }
        input.val(validNum+1);
        displayX();
    });
//  click dec of amount
    $('.num-dec').click(function(){
        var input = $(this).next('input');
        var currentNum = input.val();
        var validNum = parseInt(currentNum);
        if(currentNum.length == 0){
            validNum = 0;
        }

        if(isNaN(validNum)){
            validNum = 0;
        }else if(validNum > 0){
            validNum -= 1;
        }
        input.val(validNum);
        displayX();
    });
//  点击提交
    $('.submit_btn').click(function(){
        if(!validInput()) {
            return false;
        }
        $('#dataform').submit();
    });
//  count price
    function countPrice(){
        var price = 39;
        var selected = $('.position-zone .p-selected');
        if(selected.length <= 1){
            price = 39;
        }else{
            var val = parseInt(selected.eq(0).attr('value')) + parseInt(selected.eq(1).attr('value'));
            if(val == 4){
                price = 45;
            }else{
                price = 43;
            }
        }
        $('.order-each-price').html(price);
        return selected.length == 0 ? 0 : price;
    }
//  count amount
    function countAmount(){
        var inputs = $('.num-input');
        var amount = 0;
        for(var i=0; i<inputs.length;i++){
            amount += parseInt(inputs.eq(i).val());
        }
        return amount;
    }
//  单价与总价显示
    function displayX(){
        var price = countPrice();
        var amount = countAmount();
        var total = amount * price;
        $('#order-rmb').html(total);
        $('#order-sum').html(amount);
    }
//  验证是否完善
    function validInput(){
        if($('.color-zone .p-selected').length == 0){
            alert('请选择颜色');
            return false;
        }
        if(countPrice() == 0){
            alert('请选择定制位置');
            return false;
        }
        if(countAmount() == 0){
            alert('请选择订购数量');
            return false;
        }
        if($('.desc-input').val() == '' || $('.desc-ta').val() == ''){
            alert('需要填写图案需求');
            return false;
        }
        setForm();
        return true;
    }
    function setForm(){
        var color = $('.color-select');
        for(var i=0;i<color.length;i++){
            if(color.eq(i).hasClass('p-selected')){
                $('#dataform input[name="color"]').val(i);
                break;
            }
        }
        var position = $('.p-select');
        var p_val = '';
        for(var i=0;i<position.length;i++){
            if(position.eq(i).hasClass('p-selected')){
                p_val += '1';
            }else{
                p_val += '0';
            }
        }
        $('#dataform input[name="position"]').val(p_val);
        var n_select = $('.n-select');
        var num_val = commar = '';
        for(var i=0;i<n_select.length;i++){
            var num = n_select.eq(i).find('.num-input').eq(0).val();console.log(num);
            if(num > 0){
                num_val += commar + n_select.eq(i).find('.n-s-title').eq(0).html() + ':' + num;
                commar = '|';
            }
        }
        $('#dataform input[name="amount"]').val(num_val);

        var descTitle = $('.desc-input').val();
        var descDetail = $('.desc-ta').val();
        $('#dataform input[name="descTitle"]').val(descTitle);
        $('#dataform input[name="descDetail"]').val(descDetail);


    }
</script>









































