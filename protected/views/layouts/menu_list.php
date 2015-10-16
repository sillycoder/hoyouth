 <div class="menu_list">
	 <?php if(!Yii::app()->user->isGuest) {?>	 
	 <!--<span class="h-profile"></span>-->
	<a href="/weixinbuy.html" class="h-banfu"></a>
	<span class="h-cart"></span>
	<span class="h-my islogin">
		<div class='sub-menu'>
			<ul>
				<li><a><i></i>我的订单</a></li>
				<li><a><i></i>我的消息</a></li>
				<li><a href='/site/logout'><i></i>注销登录</a></li>
			</ul>
		</div>
	</span>
	 <?php }else{ ?>
		<a href="/weixinbuy.html" class="h-banfu"></a>
		<span class="h-cart"></span>
		<span class="h-my">
			<div class='sub-menu'>
				<ul>
					<li><a href='/site/login'><i></i>登录</a></li>
					<li><a href='/site/register'><i></i>注册</a></li>
				</ul>
			</div>
		</span>
	 <?php }?>
</div>
