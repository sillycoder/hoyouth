<script type="text/javascript" src="/js/jquery.1.7.1.min.js"></script>
<!--<script type="text/javascript" src="/js/jquery.fullPage.min.js"></script>-->

<script type="text/javascript">
    $(document).scroll(function(){
        var nv_fixed = $('.shop-sub-header');
        var scrollHeight = parseInt(document.body.getBoundingClientRect().top);

        if(scrollHeight < -40){
            nv_fixed.css({'position':'fixed','top':'0px','opacity':'0.7','background-color':'#fff'});
        }else{
            nv_fixed.css('position','');
        }
    });
</script>

<style>
    /*#header, .shop-sub-header{position: fixed;z-index: 10;}*/
    /*.shop-sub-header{top: 40px;}*/
    #section0{background: url(http://attach.bbs.miui.com/album/201510/16/164320h6g3141z84rmvnqg.png) center 0 no-repeat transparent;height: 748px;}
    #section1{background: url(http://attach.bbs.miui.com/album/201510/16/164321p0vrrzlvjv37swff.png) center 0 no-repeat transparent;height: 750px;}
    #section2{background: url(http://attach.bbs.miui.com/album/201510/16/164321mwwolsibi9ihtaam.png) center 0 no-repeat transparent;height: 750px;}
    #section3{background: url(http://attach.bbs.miui.com/album/201510/16/164321qmvaavsytwasvqwk.png) center 0 no-repeat transparent;height: 376px;}
    #section4{background: url(http://attach.bbs.miui.com/album/201510/16/164321usxs3krrzvxrgkre.png) center 0 no-repeat transparent;height: 374px;}
    #section5{background: url(http://attach.bbs.miui.com/album/201510/16/164322qzd6uy9gvl43gtxy.png) center 0 no-repeat transparent;height: 375px;}
    #section6{background: url(http://attach.bbs.miui.com/album/201510/16/164322ukz0uhmu2md0rbfr.jpg) center 0 no-repeat transparent;height: 376px;}
    #section7{background: url(http://hoyouth.com/images/bf_detail_13.jpg) center 0 no-repeat transparent;height: 749px;}
</style>
<div id="fullpage">
    <div class="section" id="section0"></div>
    <div class="section" id="section1"></div>
    <div class="section" id="section2"></div>
    <div class="section" id="section3"></div>
    <div class="section" id="section4"></div>
    <div class="section" id="section5"></div>
    <div class="section" id="section6"></div>
    <div class="section" id="section7"></div>
</div>
