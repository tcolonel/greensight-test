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
		<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "feedback", array(
			"COMPONENT_TEMPLATE" => "feedback",
			"WEB_FORM_ID" => "2",
			"IGNORE_CUSTOM_TEMPLATE" => "N",
			"USE_EXTENDED_ERRORS" => "Y",
			"SEF_MODE" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600",
			"LIST_URL" => "",
			"EDIT_URL" => "",
			"SUCCESS_URL" => "",
			"CHAIN_ITEM_TEXT" => "",
			"CHAIN_ITEM_LINK" => "",
			"VARIABLE_ALIASES" => array(
				"WEB_FORM_ID" => "WEB_FORM_ID",
				"RESULT_ID" => "RESULT_ID",
			)
		), false);?>
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