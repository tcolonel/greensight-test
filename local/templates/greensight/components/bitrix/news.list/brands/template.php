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
	<div class="brands">
		<div class="container">
			<p class="h1">Бренды</p>
			<div class="brands-wrap">
				<div class="row brand-images">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					
					$arProp = $arItem['DISPLAY_PROPERTIES'];
					?>
					<div class="col-xs-3 p0">
						<div class="brand-item" id="<?=$this->GetEditAreaID($arItem['ID']);?>">
							<a href="#">
								<img
									class="brand-logo"
									src="<?=$arProp['LOGO']['FILE_VALUE']['SRC'];?>"
									width="<?=$arProp['LOGO']['FILE_VALUE']['WIDTH'];?>"
									height="<?=$arProp['LOGO']['FILE_VALUE']['HEIGHT'];?>"
									alt="<?=$arItem['NAME'];?>"
									title="<?=$arItem['NAME'];?>"
								/>
								<img
									class="brand-logo-white"
									src="<?=$arProp['LOGO_ACTIVE']['FILE_VALUE']['SRC'];?>"
									width="<?=$arProp['LOGO_ACTIVE']['FILE_VALUE']['WIDTH'];?>"
									height="<?=$arProp['LOGO_ACTIVE']['FILE_VALUE']['HEIGHT'];?>"
									alt="<?=$arItem['NAME'];?>"
									title="<?=$arItem['NAME'];?>"
								/>
								<img
									class="brand-hover"
									src="<?=$arProp['LOGO_HOVER']['FILE_VALUE']['SRC'];?>"
									width="<?=$arProp['LOGO_HOVER']['FILE_VALUE']['WIDTH'];?>"
									height="<?=$arProp['LOGO_HOVER']['FILE_VALUE']['HEIGHT'];?>"
									alt="<?=$arItem['NAME'];?>"
									title="<?=$arItem['NAME'];?>"
								/>
							</a>
						</div>
					</div>
				<?endforeach;?>
				</div>
			</div>
			<div class="submit">
				<a href="#">Все бренды</a>
			</div>
		</div>
	</div>
<?endif;?>