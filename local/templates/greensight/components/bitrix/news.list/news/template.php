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
	<div class="news">
		<div class="container">
			<p class="h1">Новости</p>
			<div class="news-wrap">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="news-item-wrap">
					<div class="news-item" id="<?=$this->GetEditAreaID($arItem['ID']);?>">
						<a href="#">
						<?if($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])):?>
							<div class="news-img">
								<img
									src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
									width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
									height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
									alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
									title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
								/>
							</div>
						<?endif;?>
						<?if(($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]) || ($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"])):?>
							<div class="news-text">
							<?if($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]):?>
								<div class="news-title"><?=$arItem["NAME"];?></div>
							<?endif;?>
							<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
								<div class="news-preview"><?=$arItem["PREVIEW_TEXT"];?></div>
							<?endif;?>
							</div>
						<?endif;?>
						</a>
					</div>
				</div>
			<?endforeach;?>
			</div>
			<div class="submit">
				<a href="#">Все новости</a>
			</div>
		</div>
	</div>
<?endif;?>