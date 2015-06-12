<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?
$APPLICATION->SetTitle("JAMILCO");
?> 
<div class="slider-main">
	<div class="slider">
		<div class="sl-item">
			<div class="img-wrap">
				<img src="<?=SITE_TEMPLATE_PATH;?>/img/sl1.jpg" alt=""/>
			</div>
			<div class="text">
				<div class="title">title1</div>
				<div class="preview">preview1</div>
				<div class="more"><a href="#">Подробнее</a></div>
			</div>
		</div>
		<div class="sl-item">
			<div class="img-wrap">
				<img src="<?=SITE_TEMPLATE_PATH;?>/img/sl2.jpg" alt=""/>
			</div>
			<div class="text">
				<div class="title">title2</div>
				<div class="preview">preview2</div>
				<div class="more"><a href="#">Подробнее</a></div>
			</div>
		</div>
		<div class="sl-item">
			<div class="img-wrap">
				<img src="<?=SITE_TEMPLATE_PATH;?>/img/sl1.jpg" alt=""/>
			</div>
			<div class="text">
				<div class="title">Совершай покупки в NAF NAF и получай подарки!</div>
				<div class="preview">При покупке 2-х изделий мы рады подарить вам изящную бижутерию, при покупке трех – яркий лак для ногтей, а при покупке 4-х и более – чехол для смартфона!</div>
				<div class="more"><a href="#">Подробнее</a></div>
			</div>
		</div>
		<div class="sl-item">
			<div class="img-wrap">
				<img src="<?=SITE_TEMPLATE_PATH;?>/img/sl2.jpg" alt=""/>
			</div>
			<div class="text">
				<div class="title">title4</div>
				<div class="preview">preview4</div>
				<div class="more"><a href="#">Подробнее</a></div>
			</div>
		</div>
		<div class="sl-item">
			<div class="img-wrap">
				<img src="<?=SITE_TEMPLATE_PATH;?>/img/sl1.jpg" alt=""/>
			</div>
			<div class="text">
				<div class="title">title5</div>
				<div class="preview">preview5</div>
				<div class="more"><a href="#">Подробнее</a></div>
			</div>
		</div>
		<div class="sl-item">
			<div class="img-wrap">
				<img src="<?=SITE_TEMPLATE_PATH;?>/img/sl2.jpg" alt=""/>
			</div>
			<div class="text">
				<div class="title">title6</div>
				<div class="preview">preview6</div>
				<div class="more"><a href="#">Подробнее</a></div>
			</div>
		</div>
		<div class="sl-item">
			<div class="img-wrap">
				<img src="<?=SITE_TEMPLATE_PATH;?>/img/sl1.jpg" alt=""/>
			</div>
			<div class="text">
				<div class="title">title7</div>
				<div class="preview">preview7</div>
				<div class="more"><a href="#">Подробнее</a></div>
			</div>
		</div>
	</div>
	<div class="slider-bottom">
		<?
		$arSliderFilterL = array('PROPERTY_SLIDER_TYPE_VALUE'=>'L');
		?>
		<?$APPLICATION->IncludeComponent("bitrix:news.list", "sliders", array(
			"SLIDER_TYPE" => 'L',
			"COMPONENT_TEMPLATE" => "sliders",
			"IBLOCK_TYPE" => "sliders",
			"IBLOCK_ID" => "31",
			"NEWS_COUNT" => "7",
			"SORT_BY1" => "RAND",
			"SORT_ORDER1" => "DESC",
			"SORT_BY2" => "SORT",
			"SORT_ORDER2" => "ASC",
			"FILTER_NAME" => "arSliderFilterL",
			"FIELD_CODE" => array(
				0 => "ID",
				1 => "CODE",
				2 => "NAME",
			),
			"PROPERTY_CODE" => array(
				0 => "SLIDER_TYPE",
			),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"SET_TITLE" => "N",
			"SET_BROWSER_TITLE" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_STATUS_404" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "Новости",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N"
		), false);?>
		<div class="sl-nav"></div>
		<?
		$arSliderFilterR = array('PROPERTY_SLIDER_TYPE_VALUE'=>'R');
		?>
		<?$APPLICATION->IncludeComponent("bitrix:news.list", "sliders", array(
			"SLIDER_TYPE" => 'R',
			"COMPONENT_TEMPLATE" => "sliders",
			"IBLOCK_TYPE" => "sliders",
			"IBLOCK_ID" => "31",
			"NEWS_COUNT" => "7",
			"SORT_BY1" => "RAND",
			"SORT_ORDER1" => "DESC",
			"SORT_BY2" => "SORT",
			"SORT_ORDER2" => "ASC",
			"FILTER_NAME" => "arSliderFilterR",
			"FIELD_CODE" => array(
				0 => "ID",
				1 => "CODE",
				2 => "NAME",
			),
			"PROPERTY_CODE" => array(
				0 => "SLIDER_TYPE",
			),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"SET_TITLE" => "N",
			"SET_BROWSER_TITLE" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_STATUS_404" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "Новости",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N"
		), false);?>
	</div>
</div>
<div class="content-wrap">
	<?/*$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "/include/about.php"
	), false);//*/?>
	<?$APPLICATION->IncludeFile('/include/about.php', array(), array("MODE"=>"html"));?>
	<div class="slider-why">
		<div class="container">
			<div class="sl-top clearfix">
				<div class="sw-item">
					<a class="active" data-slw-num="0" href="#">
						<div class="sw-img-wrap">
							<img class="cur" src="<?=SITE_TEMPLATE_PATH;?>/img/sw1.png" alt=""/>
							<img class="hover" src="<?=SITE_TEMPLATE_PATH;?>/img/swh1.png" alt=""/>
						</div>
						<div class="sw-text">20 лет <br/> опыта</div>
					</a>
				</div>
				<div class="sw-item">
					<a data-slw-num="1" href="#">
						<div class="sw-img-wrap">
							<img class="cur" src="<?=SITE_TEMPLATE_PATH;?>/img/sw2.png" alt=""/>
							<img class="hover" src="<?=SITE_TEMPLATE_PATH;?>/img/swh2.png" alt=""/>
						</div>
						<div class="sw-text">экслюзивные бренды</div>
					</a>
				</div>
				<div class="sw-item">
					<a data-slw-num="2" href="#">
						<div class="sw-img-wrap">
							<img class="cur" src="<?=SITE_TEMPLATE_PATH;?>/img/sw3.png" alt=""/>
							<img class="hover" src="<?=SITE_TEMPLATE_PATH;?>/img/swh3.png" alt=""/>
						</div>
						<div class="sw-text">140 магазинов</div>
					</a>
				</div>
				<div class="sw-item">
					<a data-slw-num="3" href="#">
						<div class="sw-img-wrap">
							<img class="cur" src="<?=SITE_TEMPLATE_PATH;?>/img/sw4.png" alt=""/>
							<img class="hover" src="<?=SITE_TEMPLATE_PATH;?>/img/swh4.png" alt=""/>
						</div>
						<div class="sw-text">награды и премии</div>
					</a>
				</div>
			</div>
			<div class="sl-num"><span id="slw-cur">1</span> / <span class="sl-all">4</span></div>
			<div class="sl-bottom">
				<div class="swb-item">Группа компаний «ДжамильКо» <br/> основана и вышла на российский рынок товаров класса «люкс» в 1993 году</div>
				<div class="swb-item">Компания работает с такими брендами, как BURBERRY, CHAUMET, De Beers, JAEGER, John Lobb, PAULE KA, Salvatore Ferragamo, SONIA RYKIEL, SONIA by SONIA RYKIEL, Vilebrequin, Wolford и многие другие.</div>
				<div class="swb-item">3</div>
				<div class="swb-item">В конце 2012 года компания «ЛВБ» была признана «Дистрибьютором года» в рамках ежегодной профессиональной премии в области модной индустрии PROFashion Awards 2012.</div>
			</div>
			<div class="why-more"><a href="#">Узнать больше о нас</a></div>
		</div>
	</div>
	<?$APPLICATION->IncludeComponent("bitrix:news.list", "brands", array(
		"COMPONENT_TEMPLATE" => "brands",
		"IBLOCK_TYPE" => "brands",
		"IBLOCK_ID" => "29",
		"NEWS_COUNT" => "12",
		"SORT_BY1" => "RAND",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "NAME",
		),
		"PROPERTY_CODE" => array(
			0 => "LOGO",
			1 => "LOGO_ACTIVE",
			2 => "LOGO_HOVER",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N"
	),false);?>
	<?/*$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "/include/career.php"
	), false);//*/?>
	<?$APPLICATION->IncludeFile('/include/career.php', array(), array("MODE"=>"html"));?>
	<?$APPLICATION->IncludeComponent("bitrix:news.list", "news", array(
		"COMPONENT_TEMPLATE" => "news",
		"IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "3",	// Код информационного блока
		"NEWS_COUNT" => "999",	// Количество новостей на странице
		"SORT_BY1" => "ID",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "CODE",
			2 => "NAME",
			3 => "PREVIEW_TEXT",
			4 => "PREVIEW_PICTURE",
			5 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	), false);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>