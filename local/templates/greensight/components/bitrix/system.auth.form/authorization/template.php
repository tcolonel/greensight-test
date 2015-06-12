<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="authorization" class="dialog">
	<div class="dialog__overlay"></div>
	<div class="dialog__content">
		<div><button class="action" data-dialog-close></button></div>
		<div class="auth-form-wrap">
			<div class="title">личный кабинет</div>
			<div class="result" style="display:none; margin-bottom:40px;"></div>
		<?if($arResult["FORM_TYPE"] == "login"):?>
			<form name="auth-form" id="auth-form" class="form-horizontal">
				<div class="form-group">
					<label for="form_ext_author_name" class="control-label">№ карты</label>
					<input type="text" name="login" id="login" placeholder="12345" class="form-control">
				</div>
				<div class="form-group">
					<label for="form_ext_author_name1" class="control-label">PIN</label>
					<input type="text" name="pass" id="pass" placeholder="12345" class="form-control">
				</div>
				<div class="submit">
					<input type="button" name="sign-in" id="sign-in" value="Войти">
				</div>
			</form>
		<?else:?>
			<form action="<?=$arResult["AUTH_URL"]?>" name="auth-form" id="auth-form" class="form-horizontal">
			<?foreach ($arResult["GET"] as $key=>$value):?>
				<input type="hidden" name="<?=$key;?>" value="<?=$value;?>" />
			<?endforeach;?>
				<input type="hidden" name="logout" value="yes" />
				<p><?=$arResult["USER_NAME"];?>, Вы успешно авторизованы.</p>
				<div class="submit">
					<input type="submit" name="logout-butt" value="выйти" style="margin-top:32px;" />
				</div>
			</form>
		<?endif;?>
		</div>
	</div>
</div>