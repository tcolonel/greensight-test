		<div class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="clearfix">
						<div class="f-menu clearfix pull-left">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
								"ROOT_MENU_TYPE" => "bottom",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_CACHE_GET_VARS" => array(""),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "N",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N"
							));?>
						</div>
						<div class="f-phone pull-right">
							<div class="phone">+7 (495) 705 93 38</div>
							<div class="submit">
								<a data-dialog="feedback" href="javascript:void(0);">Обратная связь</a>
							</div>
						</div>
					</div>
					<div class="logo text-center"><a href="/"><img src="<?=SITE_TEMPLATE_PATH;?>/img/logo-footer.png" alt=""/></a></div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="fb-l pull-left">
						<div>
							<span class="copyright">© ЗАО «МФК ДжамильКо» 2014.</span>
						</div>
					</div>
					<div class="fb-c pull-left">
						<a class="fb" href="#"></a>
						<a class="ins" href="#"></a>
						<a class="tw" href="#"></a>
					</div>
					<div class="fb-r text-right pull-right">
						Дизайн сайта — <a href="#" target="blank">Greensight</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "authorization", array(
			"COMPONENT_TEMPLATE" => "authorization",
			"REGISTER_URL" => "",
			"FORGOT_PASSWORD_URL" => "",
			"PROFILE_URL" => "",
			"SHOW_ERRORS" => "Y"
		));?>
		<div id="feedback" class="dialog">
			<div class="dialog__overlay"></div>
			<div class="dialog__content">
				<div><button class="action" data-dialog-close></button></div>
				<div class="auth-form-wrap">
					<div class="title">Написать нам</div>
					<form action="" method="get" id="auth-form1" class="form-horizontal">
						<div class="form-group" style="">
							<label for="form_ext_author_name13" class="control-label">Имя</label>
							<input style="" type="text" placeholder="Константин" id="form_ext_author_name13" class="form-control" value="" name="author_name">
						</div>
						<div class="form-group" style="">
							<label for="form_ext_author_name12" class="control-label">Эл. почта</label>
							<input style="" type="text" id="form_ext_author_name12" class="form-control" value="" name="author_name">
						</div>
						<div class="form-group" style="">
							<label for="form_ext_author_name123" class="control-label">Телефон</label>
							<input style="" type="text" id="form_ext_author_name123" class="form-control" value="" name="author_name">
						</div>
						<div class="form-group" style="">
							<label for="form_ext_author_name123" class="control-label">Сообщение</label>
							<textarea class="form-control" name="text" id="qwerty"></textarea>
						</div>
						<div class="submit">
							<input type="submit" name="submit" id="" value="Войти">
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="<?=SITE_TEMPLATE_PATH;?>/js/bootstrap.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/js/classie.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/js/modernizr.custom.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/js/dialogFx.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/owl/owl.carousel.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/textarea/autoresize.jquery.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/textarea/jquery.mousewheel.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/textarea/jquery-ui.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/textarea/cutext.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/js/main.js"></script>
	</body>
</html>