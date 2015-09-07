<script>
function close_login(){
	document.getElementById("login-form").style.display = "none";
}
function showLogin(){
	$('#login-form').slideDown(200);
}

</script>

<!-- begin header -->
    <header>
        <div id="top">
            <span>Hotline CSKH: <a class="link" href="">0982 191 375</a> | <a class="link" href="">Hệ thống cửa hàng</a></span>
		<?php
			if(isset($data['user']) && !empty($data['user'])){
				?>
				
				<?php
				echo '<label><p>Xin Chào,<a href="frontend/user/info">'.$data['user']['email'].'</a></p><a href="frontend/user/logout">Thoát</a><label>';
			}
			else{
		?>
            <ul>
                <li>
					<i class="fa fa-user"></i>
					<a href="javascript:avoid()"  onClick="showLogin();" title="Đăng nhập" >Đăng nhập</a>
				</li>
				
                <li><i class="fa fa-key"></i> <a href="frontend/account/register" title="">Đăng ký</a></li>
            </ul>
		<?php } ?>	
        </div>
		
        <div id="bottom">
            <a title="Trang chủ" href=""><div id="logo"></div></a>
            <a class="link" href=""><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
			<div class="wrap_form_login" id="login-form" style="display: none;">
				<h2 class="title_login">Đăng nhập <i onclick="close_login()" class="fa fa-times close-pop"></i></h2>
				<div class="top_form">


					<div class="login_fb" style="text-align: center;">
						<fb:login-button size="xlarge" data-height="270" scope="public_profile,email" onlogin="checkLoginState();" login_text="
							Sign in with Facebook
						" class=" fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1530251800583481&amp;container_width=0&amp;height=270&amp;locale=en_US&amp;login_text=%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Sign%20in%20with%20Facebook%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20&amp;scope=public_profile%2Cemail&amp;sdk=joey&amp;size=xlarge"><span style="vertical-align: bottom; width: 305px; height: 39px;"><iframe name="f3108037cc" width="1000px" height="270px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:login_button Facebook Social Plugin" src="http://www.facebook.com/v2.2/plugins/login_button.php?app_id=1530251800583481&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F44OwK74u0Ie.js%3Fversion%3D41%23cb%3Df163911d9%26domain%3Dfirst-viec-lam.com%26origin%3Dhttp%253A%252F%252Ffirst-viec-lam.com%252Ff9b8cc3e8%26relation%3Dparent.parent&amp;container_width=0&amp;height=270&amp;locale=en_US&amp;login_text=%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Sign%20in%20with%20Facebook%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20&amp;scope=public_profile%2Cemail&amp;sdk=joey&amp;size=xlarge" class="" style="border: none; visibility: visible; width: 305px; height: 39px;"></iframe></span></fb:login-button>
					</div>
					<div class="or">
						<span>HOẶC</span>
					</div>
					<form action="frontend/user/login" method="post" id="formLogin">
						<div class="form-group">
							<label for="email">Email</label>
							<input id="txtUsernameLoginForm" name="email" type="text" class="input-text f-mail form-control">
						</div>
						<div class="form-group">
							<label for="password">Mật khẩu</label>
							<input id="txtPasswordLoginForm" name="pass" type="password" class="input-text f-pass form-control">
						</div>
						<div class="text-danger" id="div-login-fail" ></div>
						<div class="form-group row-submit">
							<input type="button" onclick="loadform_login();" class="btn-login" value="Đăng nhập">
							<a href="frontend/user/forgot" class="forget_password">Quên mật khẩu?</a>
						</div>
						<input type="hidden" value="" id="txtActionRedirect">
					</form>
				</div>
				<div class="bottom_form">
					<div class="signup">
						
					</div>
				</div>
			</div>
        </div>

        <!-- begin navigation -->
        <nav>
			
            <?php
				echo frontend_menu(array(
						'article_category' => frontend_menu_getdata('article_category'),
					));
			?>
        </nav>
    </header>
