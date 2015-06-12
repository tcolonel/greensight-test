<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
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
				<div class="mini-slider-l">
					<div><a data-num="0" class="sl-mini-btn" href="#1">Распродажа в Timberland1</a></div>
					<div><a data-num="1" class="sl-mini-btn" href="#2">Черный всегда в моде!2</a></div>
					<div><a data-num="2" class="sl-mini-btn" href="#3">Коллекция SPORT от Juicy Couture3</a></div>
					<div><a data-num="3" class="sl-mini-btn" href="#4">Скидки от NAF NAF4</a></div>
					<div><a data-num="4" class="sl-mini-btn" href="#5">Спецпредоложение в Lee Cooper5</a></div>
					<div><a data-num="5" class="sl-mini-btn" href="#6">Скидка 20% в New Balance6</a></div>
					<div><a data-num="6" class="sl-mini-btn" href="#7">Открылись два магазина ALDO!7</a></div>
				</div>
				<div class="sl-nav"></div>
				<div class="mini-slider-r">
					<div><a data-num="0" class="sl-mini-btn" href="#1">Распродажа в Timberland1</a></div>
					<div><a data-num="1" class="sl-mini-btn" href="#2">Черный всегда в моде!2</a></div>
					<div><a data-num="2" class="sl-mini-btn" href="#3">Коллекция SPORT от Juicy Couture3</a></div>
					<div><a data-num="3" class="sl-mini-btn" href="#4">Скидки от NAF NAF4</a></div>
					<div><a data-num="4" class="sl-mini-btn" href="#5">Спецпредоложение в Lee Cooper5</a></div>
					<div><a data-num="5" class="sl-mini-btn" href="#6">Скидка 20% в New Balance6</a></div>
					<div><a data-num="6" class="sl-mini-btn" href="#7">Открылись два магазина ALDO!7</a></div>
				</div>
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
			<div class="brands">
				<div class="container">
					<p class="h1">Бренды</p>
					<div class="brands-wrap">
						<div class="row brand-images">
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/1.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/1.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/1.png" alt=""/>
									</a>
								</div>
							</div>
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/2.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/2.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/2.png" alt=""/>
									</a>
								</div>
							</div>
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/3.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/3.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/3.png" alt=""/>
									</a>
								</div>
							</div>
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/4.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/4.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/4.png" alt=""/>
									</a>
								</div>
							</div>
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/5.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/5.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/5.png" alt=""/>
									</a>
								</div>
							</div>
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/6.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/6.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/6.png" alt=""/>
									</a>
								</div>
							</div>
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/7.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/7.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/7.png" alt=""/>
									</a>
								</div>
							</div>
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/8.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/8.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/8.png" alt=""/>
									</a>
								</div>
							</div>
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/9.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/9.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/9.png" alt=""/>
									</a>
								</div>
							</div>
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/10.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/10.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/10.png" alt=""/>
									</a>
								</div>
							</div>
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/11.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/11.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/11.png" alt=""/>
									</a>
								</div>
							</div>
							<div class="col-xs-3 p0">
								<div class="brand-item">
									<a href="#">
										<img class="brand-logo" src="<?=SITE_TEMPLATE_PATH;?>/img/gray_brands_logos/12.png" alt=""/>
										<img class="brand-logo-white" src="<?=SITE_TEMPLATE_PATH;?>/img/white_brands_logos/12.png" alt=""/>
										<img class="brand-hover" src="<?=SITE_TEMPLATE_PATH;?>/img/brands_hovers/12.png" alt=""/>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="submit">
						<a href="#">Все бренды</a>
					</div>
				</div>
			</div>
			<?/*$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "standard.php",
				"PATH" => "/include/career.php"
			), false);//*/?>
			<?$APPLICATION->IncludeFile('/include/career.php', array(), array("MODE"=>"html"));?>
			<div class="news">
				<div class="container">
					<p class="h1">Новости</p>
					<div class="news-wrap">
						<div class="news-item-wrap">
							<div class="news-item">
								<a href="#">
									<div class="news-img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/n1.jpg" alt=""/></div>
									<div class="news-text">
										<div class="news-title">разве СЕЗОН ЮБОК КОНЧИЛСЯ?</div>
										<div class="news-preview">Пора узнать, какие юбки будут в моде этой осенью!</div>
									</div>
								</a>
							</div>
						</div>
						<div class="news-item-wrap">
							<div class="news-item">
								<a href="#">
									<div class="news-img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/n2.jpg" alt=""/></div>
									<div class="news-text">
										<div class="news-title">ЦВЕТА ОСЕННЕГО СЕЗОНА!</div>
										<div class="news-preview">Еще не знаете осенние тенденции? Мы подскажем!</div>
									</div>
								</a>
							</div>
						</div>
						<div class="news-item-wrap">
							<div class="news-item">
								<a href="#">
									<div class="news-img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/n3.jpg" alt=""/></div>
									<div class="news-text">
										<div class="news-title">ВСТРЕЧАЕМ ОСЕНЬ 2014 МОДНО!</div>
										<div class="news-preview">Какие тенденции наблюдаются этой осенью?</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="submit">
						<a href="#">Все новости</a>
					</div>
				</div>
			</div>
		</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>