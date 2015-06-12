<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="feedback" class="dialog">
	<div class="dialog__overlay"></div>
	<div class="dialog__content">
		<div><button class="action" data-dialog-close></button></div>
		<div class="auth-form-wrap">
			<div class="title">Написать нам</div>
			<?#echo '<p>$arResult</p><pre>'; print_r($arResult); echo '</pre>';?>
			<form method="POST" name="SIMPLE_FORM_<?=$arParams['WEB_FORM_ID'];?>" id="SIMPLE_FORM_<?=$arParams['WEB_FORM_ID'];?>" class="form-horizontal" enctype="multipart/form-data">
				<?=bitrix_sessid_post();?>
				<input type="hidden" name="WEB_FORM_ID" value="<?=$arParams['WEB_FORM_ID'];?>">
			<?foreach($arResult["QUESTIONS"] as $code=>$arQuestion):?>
				<div class="form-group">
					<label for="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE'] . '_' . $arQuestion['STRUCTURE'][0]['ID'];?>" class="control-label"><?=$arQuestion['CAPTION'];?></label>
				<?if($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'textarea'):?>
					<textarea name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE'] . '_' . $arQuestion['STRUCTURE'][0]['ID'];?>" id="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE'] . '_' . $arQuestion['STRUCTURE'][0]['ID'];?>" class="form-control" placeholder="<?=$arQuestion['CAPTION'];?>"></textarea>
				<?else:?>
					<input type="text" name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE'] . '_' . $arQuestion['STRUCTURE'][0]['ID'];?>" id="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE'] . '_' . $arQuestion['STRUCTURE'][0]['ID'];?>" class="form-control" placeholder="<?=$arQuestion['CAPTION'];?>">
				<?endif;?>
				</div>
			<?endforeach;?>
				<div class="submit">
					<input type="submit" name="web_form_submit" id="send" value="отправить">
				</div>
			</form>
		</div>
	</div>
</div>