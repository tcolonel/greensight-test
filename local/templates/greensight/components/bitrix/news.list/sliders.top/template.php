<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if(!empty($arResult["ITEMS"])):?>
	<?foreach($arResult["ITEMS"] as $k=>$arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="sl-item" id="<?=$this->GetEditAreaID($arItem['ID']);?>">
			<div class="img-wrap">
				<img
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"];?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"];?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"];?>"
				/>
			</div>
			<div class="text">
				<div class="title"><?=$arItem["NAME"];?></div>
				<div class="preview"><?=$arItem["PREVIEW_TEXT"];?></div>
				<div class="more"><a href="#">Подробнее</a></div>
			</div>
		</div>
	<?endforeach;?>
<?endif;?>