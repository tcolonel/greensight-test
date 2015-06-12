<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?
$APPLICATION->SetTitle("Добавление брендов");

$addBrands = ((isset($_GET['add_brands']) && $_GET['add_brands'] == 'Y') ? true : false);

if($addBrands)
{
	$arBrands = array(
		array(
			'NAME'	=> 'DKNY',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/2.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/2.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/2.png')
			)
		),
		array(
			'NAME'	=> 'JAEGER',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/3.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/3.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/3.png')
			)
		),
		array(
			'NAME'	=> 'ESCADA',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/4.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/4.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/4.png')
			)
		),

		
		
		
		array(
			'NAME'	=> 'BARBERRY',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/6.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/6.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/6.png')
			)
		),
		array(
			'NAME'	=> 'CHAUMET',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/7.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/7.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/7.png')
			)
		),
		array(
			'NAME'	=> 'CHEVIGNON',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/8.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/8.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/8.png')
			)
		),
		array(
			'NAME'	=> 'De Beers',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/9.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/9.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/9.png')
			)
		),
		array(
			'NAME'	=> 'Desigual',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/10.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/10.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/10.png')
			)
		),
		array(
			'NAME'	=> 'John Lobb',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/11.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/11.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/11.png')
			)
		),
		array(
			'NAME'	=> 'Juicr Couture',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/12.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/12.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/12.png')
			)
		),
		array(
			'NAME'	=> 'Lee Cooper',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/13.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/13.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/13.png')
			)
		),
		array(
			'NAME'	=> "Marc O'Polo",
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/14.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/14.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/14.png')
			)
		),
		array(
			'NAME'	=> 'Модный подвал',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/15.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/15.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/15.png')
			)
		),
		array(
			'NAME'	=> 'Naf Naf',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/16.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/16.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/16.png')
			)
		),
		array(
			'NAME'	=> 'New Balance',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/17.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/17.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/17.png')
			)
		),
		array(
			'NAME'	=> 'Salvatore Ferragamo',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/18.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/18.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/18.png')
			)
		),
		array(
			'NAME'	=> 'Sonia Rykiel',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/19.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/19.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/19.png')
			)
		),
		array(
			'NAME'	=> 'SONIA',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/20.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/20.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/20.png')
			)
		),
		array(
			'NAME'	=> 'St-James',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/21.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/21.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/21.png')
			)
		),
		array(
			'NAME'	=> 'Timberland',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/22.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/22.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/22.png')
			)
		),
		array(
			'NAME'	=> 'VILEBREQUIN',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/23.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/23.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/23.png')
			)
		),
		array(
			'NAME'	=> 'Wolford',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/24.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/24.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/24.png')
			)
		),
		array(
			'NAME'	=> 'ZADIC&VALTAIRE',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/25.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/25.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/25.png')
			)
		),
		array(
			'NAME'	=> 'ALDO',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/26.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/26.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/26.png')
			)
		),
		array(
			'NAME'	=> 'CYAN',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/27.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/27.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/27.png')
			)
		),
		array(
			'NAME'	=> 'DKNY JEANS',
			'PROP'	=> array(
				'LOGO'			=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/gray_brands_logos/28.png'),
				'LOGO_ACTIVE'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/white_brands_logos/28.png'),
				'LOGO_HOVER'	=> CFile::MakeFileArray(SITE_TEMPLATE_PATH . '/img/brands_hovers/27.png')
			)
		),
	);

	CModule::IncludeModule('iblock');

	$el = new CIBlockElement;

	echo '
		<h1>Добавление брендов</h1>
		<div style="width:1024px; margin:0 auto; margin-top:50px; margin-bottom:100px;">
	';
	
	foreach($arBrands as $arBrand)
	{
		$arBrandFields = array(
			'MODIFIED_BY'    	=> $USER->GetID(),
			'IBLOCK_SECTION_ID' => false,
			'IBLOCK_ID'      	=> 29,
			'ACTIVE'         	=> 'Y',
			'NAME'           	=> $arBrand[NAME],
			'PROPERTY_VALUES'	=> $arBrand[PROP],
		);
		
		#echo '<p>$arBrandFields</p><pre>'; print_r($arBrandFields); echo '</pre>';
		
		//*
		if($brandID = $el->Add($arBrandFields))
			echo '<p>Бренд "' . $arBrand[NAME] . '" успешно добавлен.</p>';
		else
			echo '<p>При добавлении бренда "' . $arBrand[NAME] . '" произошла ошибка: ' . $el->LAST_ERROR . '.</p>';
		//*/
	}
	
	echo '</div>';
}
else
{
?>
	<h1>Добавление брендов</h1>
	<div style="width:1024px; margin:0 auto; margin-top:50px; margin-bottom:100px;">
		<p>
			На даной странице происходит добавление брендов в ИБ 
			"<a href="/bitrix/admin/iblock_list_admin.php?PAGEN_1=&SIZEN_1=20&IBLOCK_ID=29&type=brands&lang=ru&find_section_section=0&by=name&order=asc" title="Открыть ИБ">Бренды компании</a>".
		</p>
		<p>
			Обращаю Ваше внимание на то, что никаких проверок не производится, и, при обновлении страницы бренды опять добавятся.
		</p>
		<p>
			Добавить бренды Вы можете с помощью передачи параметра "add_brands" в строку запроса (URL) со значением "Y", либо нажав на ссылку ниже.
		</p>
		<p align="center" style="margin-top:32px;"><a href="?add_brands=Y" title="Добавить бренды в ИБ">добавить бренды</a></p>
	</div>
<?	
}
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>