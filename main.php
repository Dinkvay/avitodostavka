<?php
$page = @file_get_contents('https://www.avito.ru'.$_SERVER['REQUEST_URI']);
?>
<?php if (strpos($page, 'item-view/item-id') === false):?>
<?php

echo $page;

?>
<?php else: ?>
<?php
	function get_string_between($string, $start, $end){
		$string = ' ' . $string;
		$ini = strpos($string, $start);
		if ($ini == 0) return '';
		$ini += strlen($start);
		$len = strpos($string, $end, $ini) - $ini;
		return substr($string, $ini, $len);
	}
	$title = get_string_between($page, '<span class="title-info-title-text" itemprop="name">', '</span>');
	$priced = get_string_between($page, '<span class="js-item-price" content="', '" itemprop="price">');
	$menu_time = get_string_between($page, '<div class="title-info-metadata-item-redesign">', '</div>');
	$gallery = get_string_between($page, '<div class="item-view-gallery" data-hero="true">', '<span class="gallery-extended-list-navigation-icon"></span>');
	$category = get_string_between($page, '<div class="breadcrumbs js-breadcrumbs ">', '</div>');
	$adress = get_string_between($page, '<div class="item-address">', '<div class="item-map-location__control">');
	$deskr = get_string_between($page, '<div class="item-description-text" itemprop="description">', '</div>');
	$info = get_string_between($page, '<div class="seller-info-col">', '<div class="seller-info-avatar">');
	$html_title = get_string_between($page, '<title>', '</title>');
	$avatar = get_string_between($page, '<div class="seller-info-avatar">', '</div>');
	$id_info = get_string_between($page, '<div class="item-view-search-info-redesign">', '<div class="item-view-promo">');
	$page_id = get_string_between($page, '<span data-marker="item-view/item-id">№ ', '</span>');
	$price = number_format($priced, 0, '', ' ');
	$final = number_format($priced + 410, 0, '', ' ');
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
   <meta name="format-detection" content="telephone=no">
 <title><?php echo $html_title; ?> на Avito &#8212; Объявления на сайте Авито</title>
    

    <script src="/js/jquery-1.9.1.js"></script>

    
    
    <link rel="stylesheet" href="/styles/992910ddb83e99abfdd6.css">
    <link rel="stylesheet" href="/styles/10cf160257d3965a15cd.css">
    <link rel="stylesheet" href="/styles/354d2fd8431d0bd83c1c.css">
    <link rel="stylesheet" href="/styles/4194b5f796b52115ced1.css">
    
    <link rel="stylesheet" href="/styles/e1f37f962e6e4a817cdb.css">
    <link rel="stylesheet" href="/styles/2d58b67fe0af54d0ed39.css">
    <link rel="stylesheet" href="/styles/9537d6c582d8a025df7d.css">
    <link rel="stylesheet" href="/styles/ca81898f41f3f52b9275.css">
    <link rel="stylesheet" href="/styles/f47fd590a5972c7368c3.css">
    <link rel="stylesheet" href="/styles/39ee5ffe92929cfa494a.css">
    <link rel="stylesheet" href="/styles/5c0b50eeaeec9e03fce6.css">
    <link rel="stylesheet" href="/styles/886f10533c9a633512d0.css">
    <link rel="stylesheet" href="/styles/10476c219666c50fc059.css">
    <link rel="stylesheet" href="/styles/88af2ff2c080dfe2ec7f.css">
    <link rel="stylesheet" href="/styles/b402769d4490ce01ebd2.css">
    <link rel="stylesheet" href="/styles/a776da6b7a062ce8decc.css">
    <link rel="stylesheet" href="/styles/3e6295814d22728b9ea6.css">
    <link rel="stylesheet" href="/styles/26158867003a696ad87d.css">
    <link rel="stylesheet" href="/styles/5d76f4d2da13aa8620a7.css">
    <link rel="stylesheet" href="/styles/53cef5de35d22fb4ae99.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="https://www.avito.st/s/common/touch-icons/common/apple-touch-icon-180x180-precomposed.png?57be3fb" /><link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://www.avito.st/s/common/touch-icons/common/apple-touch-icon-152x152-precomposed.png?cac4f2a" /><link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://www.avito.st/s/common/touch-icons/common/apple-touch-icon-144x144-precomposed.png?9615e61" /><link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://www.avito.st/s/common/touch-icons/common/apple-touch-icon-120x120-precomposed.png?2a32f09" /><link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://www.avito.st/s/common/touch-icons/common/apple-touch-icon-114x114-precomposed.png?174e153" /><link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://www.avito.st/s/common/touch-icons/common/apple-touch-icon-76x76-precomposed.png?28e6cfb" /><link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://www.avito.st/s/common/touch-icons/common/apple-touch-icon-72x72-precomposed.png?aeb90b3" /><link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://www.avito.st/s/common/touch-icons/common/apple-touch-icon-57x57-precomposed.png?fd7ac94" /><meta name="msapplication-TileColor" content="#000000"><meta name="msapplication-TileImage" content="/s/common/touch-icons/common/mstile-144x144.png"><meta name="msapplication-config" content="browserconfig.xml" /><link href="https://www.avito.st/favicon.ico?9de48a5" rel="shortcut icon" type="image/x-icon" /><link rel="mask-icon" href="https://www.avito.st/s/common/touch-icons/common/favicon-pinned.svg?53a9620" color="#00aaff">
   <script src="https://www.avito.ru/stat/fe_metric.min.js" async></script>
 <script src="/js/jquery.maskedinput.js" ></script>
 

     <link rel="stylesheet" href="/styles/3a08cd5957994572f5ac.css">
  
  <script src="https://www.avito.st/s/cc/chunks/39748e30e85109290138.js" defer></script>

<script src="https://www.avito.st/s/cc/bundles/1dc3c4c57e8840020115.js" defer></script>

    
        <style>.item-notes-icon_add {
    width: 18px;
    height: 100%;
    background: url(https://www.avito.st/s/cc/resources/f0cb06b49c3f.svg) 0 2px no-repeat;
    background-size: 16px;
    vertical-align: bottom;
    margin-right: 6px;
    display: inline-block;
    position: relative;
	.avito-ads-container{
		display:none!important;
	}
        } 
    </style>
  </head> 
<body>                               
<div class="js-header-container header-container   header-container_no-bottom-margin">
    <div class='js-header' data-state='{"body_class":"os x safari safari-safari","country":{"host":"www.avito.ru","country_slug":"rossiya","site_name":"Авито","delivery":{"name":"Авито Доставка"},"currency_sign":"₽"},"currentPage":"item","delivery":null,"headerInfo":null,"hideAddButton":null,"isNCEnabled":null,"isShowAvitoPro":false,"isShowProReports":null,"luri":"rossiya","menu":{"catalog":{"title":"Объявления","link":"catalog","active":true},"shops":{"title":"Магазины","link":"shops"},"business":{"title":"Бизнес","link":"subscription?avcm=for_business"},"support":{"title":"Помощь","absoluteLink":"support.avito.ru"}},"messenger":null,"servicesClassName":"header-services","showBonusesLink":false,"user":{"isAuthenticated":false,"id":0,"name":"","hasShop":false,"hasShopSubscription":false,"hasActiveDelivery":false,"isLegalPerson":false,"isLegal":null,"avatar":null},"userAccount":{"balance":{"bonus":"","real":"0","total":"0"},"isSeparationBalance":null},"favorites":{"unreadFavoritesCount":null},"user_location_id":621540,"hierarchy":null,"now":1564154670,"_dashboard":{},"_webvisor":{},"ssrMode":"prod"}'><div class="header-root-1FCTt header-services" data-marker="header/navbar"><div class="header-inner-3iFNe header-clearfix-kI6fL"><ul class="header-list-IUZFq header-nav-wQVeb header-clearfix-kI6fL"><li class="header-nav-item-1OJG-"><a
 class="header-link-TLsAU header-nav-link-126h3"
 href="/rossiya"
    >Объявления</a></li><li class="header-nav-item-1OJG-"><a
 class="header-link-TLsAU header-nav-link-126h3"
 href="/shops"
    >Магазины</a></li><li class="header-nav-item-1OJG-"><a
 class="header-link-TLsAU header-nav-link-126h3"
 href="/subscription?avcm=for_business"
    >Бизнес</a></li><li class="header-nav-item-1OJG-"><a
 class="header-link-TLsAU header-nav-link-126h3"
 href="//support.avito.ru"
   target="_blank" rel="noopener noreferrer" >Помощь</a></li></ul>
        <div class="header-services-menu-2tz5y">
            <div data-marker="header/favorites" class="header-services-menu-item-3H7kQ"><a href="/favorites" title="Избранное" class="header-services-menu-link-fsJlE"><span class="header-services-menu-icon-wrap-STcWG"><span class="header-services-menu-icon-PXhUE"><svg width="21" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M10.918 5.085a5.256 5.256 0 0 1 7.524 0c2.077 2.114 2.077 5.541 0 7.655l-7.405 7.534a.75.75 0 0 1-1.074 0L2.558 12.74c-2.077-2.114-2.077-5.54 0-7.655a5.256 5.256 0 0 1 7.524 0c.15.152.289.312.418.479.13-.167.269-.327.418-.479z" fill="#CCC" fill-rule="nonzero"></path></svg></span><i class="header-icon-count-2EGgu header-icon-count_red-3f61L header-icon-count_hidden-3av6Y"></i></span></a></div>
        <div class="header-services-menu-item_username-32omV "><a class="header-services-menu-link-fsJlE header-services-menu-link-not-authenticated-3Uyu_"
 href="https://www.avito.ru#login?s=h"
 data-marker="header/login-button">Вход и регистрация</a>
        </div>
        </div><div class="header-button-wrapper-2UC-r"><a class="button-button-Dtqx2 button-button-origin-12oVr button-button-origin-blue-358Vt"
 href="#login?s=h&amp;next=%2Fadditem">Подать объявление</a></div></div></div></div>    <div class='js-header-navigation' data-state='{"alternativeCategoryMenu":null,"categoryMenu":[{"title":"Авто","categoryId":"Obj_Category_ROOT_TRANSPORT"},{"title":"Недвижимость","categoryId":"Obj_Category_ROOT_REAL_ESTATE"},{"title":"Работа","categoryId":"Obj_Category_ROOT_JOB"},{"title":"Услуги","categoryId":"Obj_Category_ROOT_SERVICES"}],"categoryTree":[{"id":1,"mcId":1,"name":"Все категории","subs":[{"id":2,"mcId":2,"name":"Транспорт","subs":[{"id":14,"mcId":14,"name":"Автомобили","subs":[],"url":"\/rossiya\/avtomobili?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":9,"params":{},"count":1},{"id":15,"mcId":15,"name":"Мотоциклы и мототехника","subs":[],"url":"\/rossiya\/mototsikly_i_mototehnika?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":14,"params":{},"count":1},{"id":16,"mcId":16,"name":"Грузовики и спецтехника","subs":[],"url":"\/rossiya\/gruzoviki_i_spetstehnika?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":81,"params":{},"count":1},{"id":12,"mcId":12,"name":"Водный транспорт","subs":[],"url":"\/rossiya\/vodnyy_transport?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":11,"params":{},"count":1},{"id":17,"mcId":17,"name":"Запчасти и аксессуары","subs":[],"url":"\/rossiya\/zapchasti_i_aksessuary?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":10,"params":{},"count":1}],"url":"\/rossiya\/transport?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":1,"params":{},"count":6},{"id":5,"mcId":5,"name":"Недвижимость","subs":[{"id":30,"mcId":30,"name":"Квартиры","subs":[],"url":"\/rossiya\/kvartiry?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":24,"params":{},"count":1},{"id":31,"mcId":31,"name":"Комнаты","subs":[],"url":"\/rossiya\/komnaty?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":23,"params":{},"count":1},{"id":32,"mcId":32,"name":"Дома, дачи, коттеджи","subs":[],"url":"\/rossiya\/doma_dachi_kottedzhi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":25,"params":{},"count":1},{"id":33,"mcId":33,"name":"Земельные участки","subs":[],"url":"\/rossiya\/zemelnye_uchastki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":26,"params":{},"count":1},{"id":34,"mcId":34,"name":"Гаражи и машиноместа","subs":[],"url":"\/rossiya\/garazhi_i_mashinomesta?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":85,"params":{},"count":1},{"id":35,"mcId":35,"name":"Коммерческая недвижимость","subs":[],"url":"\/rossiya\/kommercheskaya_nedvizhimost?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":42,"params":{},"count":1},{"id":36,"mcId":36,"name":"Недвижимость за рубежом","subs":[],"url":"\/rossiya\/nedvizhimost_za_rubezhom?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":86,"params":{},"count":1}],"url":"\/rossiya\/nedvizhimost?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":4,"params":{},"count":8},{"id":10,"mcId":10,"name":"Работа","subs":[{"id":61,"mcId":61,"name":"Вакансии","subs":[],"url":"\/rossiya\/vakansii?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":111,"params":{},"count":1},{"id":62,"mcId":62,"name":"Резюме","subs":[],"url":"\/rossiya\/rezume?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":112,"params":{},"count":1}],"url":"\/rossiya\/rabota?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":110,"params":{},"count":3},{"id":63,"mcId":63,"name":"Услуги","subs":[{"id":741,"mcId":741,"name":"IT, интернет, телеком","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/it_internet_telekom?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10195},"count":1},{"id":739,"mcId":739,"name":"Бытовые услуги","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/bytovye_uslugi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10200},"count":1},{"id":738,"mcId":738,"name":"Деловые услуги","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/delovye_uslugi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10201},"count":1},{"id":727,"mcId":727,"name":"Искусство","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/iskusstvo?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10220},"count":1},{"id":740,"mcId":740,"name":"Красота, здоровье","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/krasota_zdorove?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10197},"count":1},{"id":43435,"mcId":43435,"name":"Курьерские поручения","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/kurerskie_uslugi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":15731},"count":1},{"id":28234,"mcId":28234,"name":"Мастер на час","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/master_na_chas?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":15326},"count":1},{"id":743,"mcId":743,"name":"Няни, сиделки","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/nyani_sidelki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10196},"count":1},{"id":737,"mcId":737,"name":"Оборудование, производство","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/oborudovanie_proizvodstvo?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10202},"count":1},{"id":742,"mcId":742,"name":"Обучение, курсы","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/obuchenie_kursy?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10203},"count":1},{"id":736,"mcId":736,"name":"Охрана, безопасность","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/ohrana_bezopasnost?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10204},"count":1},{"id":735,"mcId":735,"name":"Питание, кейтеринг","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/pitanie_keytering?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10205},"count":1},{"id":734,"mcId":734,"name":"Праздники, мероприятия","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/prazdniki_meropriyatiya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10206},"count":1},{"id":733,"mcId":733,"name":"Реклама, полиграфия","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/reklama_poligrafiya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10207},"count":1},{"id":60292,"mcId":60292,"name":"Ремонт и обслуживание техники","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/remont_i_obsluzhivanie_tehniki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":15834},"count":1},{"id":732,"mcId":732,"name":"Ремонт, строительство","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/remont_stroitelstvo?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10208},"count":1},{"id":731,"mcId":731,"name":"Сад, благоустройство","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/sad_blagoustroystvo?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10209},"count":1},{"id":730,"mcId":730,"name":"Транспорт, перевозки","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/transport_perevozki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10210},"count":1},{"id":60291,"mcId":60291,"name":"Уборка","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/uborka_klining?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":15833},"count":1},{"id":43434,"mcId":43434,"name":"Установка техники","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/ustanovka_tehniki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":15725},"count":1},{"id":729,"mcId":729,"name":"Уход за животными","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/uhod_za_zhivotnymi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10211},"count":1},{"id":728,"mcId":728,"name":"Фото- и видеосъёмка","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/foto-_i_videosemka?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10212},"count":1},{"id":744,"mcId":744,"name":"Другое","subs":[],"url":"\/rossiya\/predlozheniya_uslug\/drugoe?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":114,"params":{"716":10213},"count":1}],"url":"\/rossiya\/predlozheniya_uslug?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":114,"params":{},"count":24},{"id":6,"mcId":6,"name":"Личные вещи","subs":[{"id":37,"mcId":37,"name":"Одежда, обувь, аксессуары","subs":[],"url":"\/rossiya\/odezhda_obuv_aksessuary?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":27,"params":{},"count":1},{"id":38,"mcId":38,"name":"Детская одежда и обувь","subs":[],"url":"\/rossiya\/detskaya_odezhda_i_obuv?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":29,"params":{},"count":1},{"id":39,"mcId":39,"name":"Товары для детей и игрушки","subs":[],"url":"\/rossiya\/tovary_dlya_detey_i_igrushki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":30,"params":{},"count":1},{"id":40,"mcId":40,"name":"Часы и украшения","subs":[],"url":"\/rossiya\/chasy_i_ukrasheniya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":28,"params":{},"count":1},{"id":41,"mcId":41,"name":"Красота и здоровье","subs":[],"url":"\/rossiya\/krasota_i_zdorove?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":88,"params":{},"count":1}],"url":"\/rossiya\/lichnye_veschi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":5,"params":{},"count":6},{"id":3,"mcId":3,"name":"Для дома и дачи","subs":[{"id":20,"mcId":20,"name":"Бытовая техника","subs":[],"url":"\/rossiya\/bytovaya_tehnika?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":21,"params":{},"count":1},{"id":21,"mcId":21,"name":"Мебель и интерьер","subs":[],"url":"\/rossiya\/mebel_i_interer?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":20,"params":{},"count":1},{"id":22,"mcId":22,"name":"Посуда и товары для кухни","subs":[],"url":"\/rossiya\/posuda_i_tovary_dlya_kuhni?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":87,"params":{},"count":1},{"id":18,"mcId":18,"name":"Продукты питания","subs":[],"url":"\/rossiya\/produkty_pitaniya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":82,"params":{},"count":1},{"id":23,"mcId":23,"name":"Ремонт и строительство","subs":[],"url":"\/rossiya\/remont_i_stroitelstvo?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":19,"params":{},"count":1},{"id":19,"mcId":19,"name":"Растения","subs":[],"url":"\/rossiya\/rasteniya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":106,"params":{},"count":1}],"url":"\/rossiya\/dlya_doma_i_dachi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":2,"params":{},"count":7},{"id":7,"mcId":7,"name":"Бытовая электроника","subs":[{"id":43,"mcId":43,"name":"Аудио и видео","subs":[],"url":"\/rossiya\/audio_i_video?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":32,"params":{},"count":1},{"id":44,"mcId":44,"name":"Игры, приставки и программы","subs":[],"url":"\/rossiya\/igry_pristavki_i_programmy?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":97,"params":{},"count":1},{"id":45,"mcId":45,"name":"Настольные компьютеры","subs":[],"url":"\/rossiya\/nastolnye_kompyutery?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":31,"params":{},"count":1},{"id":46,"mcId":46,"name":"Ноутбуки","subs":[],"url":"\/rossiya\/noutbuki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":98,"params":{},"count":1},{"id":47,"mcId":47,"name":"Оргтехника и расходники","subs":[],"url":"\/rossiya\/orgtehnika_i_rashodniki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":99,"params":{},"count":1},{"id":48,"mcId":48,"name":"Планшеты и электронные книги","subs":[],"url":"\/rossiya\/planshety_i_elektronnye_knigi?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":96,"params":{},"count":1},{"id":49,"mcId":49,"name":"Телефоны","subs":[],"url":"\/rossiya\/telefony?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":84,"params":{},"count":1},{"id":42,"mcId":42,"name":"Товары для компьютера","subs":[],"url":"\/rossiya\/tovary_dlya_kompyutera?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":101,"params":{},"count":1},{"id":50,"mcId":50,"name":"Фототехника","subs":[],"url":"\/rossiya\/fototehnika?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":105,"params":{},"count":1}],"url":"\/rossiya\/bytovaya_elektronika?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":6,"params":{},"count":10},{"id":8,"mcId":8,"name":"Хобби и отдых","subs":[{"id":51,"mcId":51,"name":"Билеты и путешествия","subs":[],"url":"\/rossiya\/bilety_i_puteshestviya?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":33,"params":{},"count":1},{"id":53,"mcId":53,"name":"Велосипеды","subs":[],"url":"\/rossiya\/velosipedy?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":34,"params":{},"count":1},{"id":54,"mcId":54,"name":"Книги и журналы","subs":[],"url":"\/rossiya\/knigi_i_zhurnaly?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":83,"params":{},"count":1},{"id":55,"mcId":55,"name":"Коллекционирование","subs":[],"url":"\/rossiya\/kollektsionirovanie?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":36,"params":{},"count":1},{"id":52,"mcId":52,"name":"Музыкальные инструменты","subs":[],"url":"\/rossiya\/muzykalnye_instrumenty?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":38,"params":{},"count":1},{"id":56,"mcId":56,"name":"Охота и рыбалка","subs":[],"url":"\/rossiya\/ohota_i_rybalka?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":102,"params":{},"count":1},{"id":57,"mcId":57,"name":"Спорт и отдых","subs":[],"url":"\/rossiya\/sport_i_otdyh?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":39,"params":{},"count":1}],"url":"\/rossiya\/hobbi_i_otdyh?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":7,"params":{},"count":8},{"id":4,"mcId":4,"name":"Животные","subs":[{"id":24,"mcId":24,"name":"Собаки","subs":[],"url":"\/rossiya\/sobaki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":89,"params":{},"count":1},{"id":25,"mcId":25,"name":"Кошки","subs":[],"url":"\/rossiya\/koshki?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":90,"params":{},"count":1},{"id":26,"mcId":26,"name":"Птицы","subs":[],"url":"\/rossiya\/ptitsy?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":91,"params":{},"count":1},{"id":27,"mcId":27,"name":"Аквариум","subs":[],"url":"\/rossiya\/akvarium?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":92,"params":{},"count":1},{"id":28,"mcId":28,"name":"Другие животные","subs":[],"url":"\/rossiya\/drugie_zhivotnye?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":93,"params":{},"count":1},{"id":29,"mcId":29,"name":"Товары для животных","subs":[],"url":"\/rossiya\/tovary_dlya_zhivotnyh?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":94,"params":{},"count":1}],"url":"\/rossiya\/zhivotnye?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":35,"params":{},"count":7},{"id":9,"mcId":9,"name":"Для бизнеса","subs":[{"id":59,"mcId":59,"name":"Готовый бизнес","subs":[],"url":"\/rossiya\/gotoviy_biznes?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":116,"params":{},"count":1},{"id":60,"mcId":60,"name":"Оборудование для бизнеса","subs":[],"url":"\/rossiya\/oborudovanie_dlya_biznesa?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":2,"categoryId":40,"params":{},"count":1}],"url":"\/rossiya\/dlya_biznesa?view=gallery&cd=1","current":false,"currentParent":false,"opened":false,"level":1,"categoryId":8,"params":{},"count":3}],"url":"\/rossiya?view=gallery&cd=1","current":true,"currentParent":false,"opened":false,"level":0,"categoryId":null,"params":{},"count":82}],"commonCategories":{"Obj_Category_VERTICAL_AUTO":{"slug":null,"id":0},"Obj_Category_VERTICAL_REALTY":{"slug":"transport","id":1},"Obj_Category_VERTICAL_JOB":{"slug":"dlya_doma_i_dachi","id":2},"Obj_Category_VERTICAL_SERVICES":{"slug":null,"id":3},"Obj_Category_ROOT_TRANSPORT":{"slug":"transport","id":1},"Obj_Category_ROOT_REAL_ESTATE":{"slug":"nedvizhimost","id":4},"Obj_Category_ROOT_JOB":{"slug":"rabota","id":110},"Obj_Category_JOB_VACANCIES":{"slug":"vakansii","id":111},"Obj_Category_JOB_RESUME":{"slug":"rezume","id":112},"Obj_Category_ROOT_SERVICES":{"slug":"predlozheniya_uslug","id":114},"Obj_Category_TRANSPORT_CARS":{"slug":"avtomobili","id":9},"Money_Notification_View_Refund_Site_FROM_PARAM_NAME":{"slug":null,"id":"from"},"Money_Notification_View_Refund_Site_FROM_PAGE_POPUP":{"slug":"lichnye_veschi","id":5}},"constant":{"Obj_Category_VERTICAL_AUTO":0,"Obj_Category_VERTICAL_REALTY":1,"Obj_Category_VERTICAL_JOB":2,"Obj_Category_VERTICAL_SERVICES":3,"Obj_Category_ROOT_TRANSPORT":1,"Obj_Category_ROOT_REAL_ESTATE":4,"Obj_Category_ROOT_JOB":110,"Obj_Category_JOB_VACANCIES":111,"Obj_Category_JOB_RESUME":112,"Obj_Category_ROOT_SERVICES":114,"Obj_Category_TRANSPORT_CARS":9,"Money_Notification_View_Refund_Site_FROM_PARAM_NAME":"from","Money_Notification_View_Refund_Site_FROM_PAGE_POPUP":5},"country":{"country_slug":"rossiya","site_name":"Авито","delivery":{"name":"Авито Доставка"},"currency_sign":"₽"},"luri":"rossiya","verticalId":4,"orderAllCategories":[{"id":0,"values":[1,2,8]},{"id":1,"values":[4,6]},{"id":2,"values":[110,114,7]},{"id":3,"values":[5,35]}],"now":1564154670,"_dashboard":{},"_webvisor":{},"ssrMode":"prod"}'><div class="header-navigation-basic-i28MZ header-container-basic"><div class="header-navigation-basic-inner-226Ce  header-container-basic-inner"><div class="header-navigation-logo-2aaur"><span class="logo-root-fxfjv"><a class="logo-logo-2YITg" href="/" title=&quot;Авито &amp;mdash; сайт объявлений&quot;></a></span></div><div class="header-navigation-categories-87Lbp"><div><ul class="simple-with-more-rubricator-category-list-1B8Ve"><li class="simple-with-more-rubricator-category-item-1oRcq "><a class="simple-with-more-rubricator-link-27kbj simple-with-more-rubricator-category-link-3ngHO"
 href="/rossiya/transport"
 data-marker="navigation/link"
 data-category-id="1"
 >Авто</a></li><li class="simple-with-more-rubricator-category-item-1oRcq "><a class="simple-with-more-rubricator-link-27kbj simple-with-more-rubricator-category-link-3ngHO"
 href="/rossiya/nedvizhimost"
 data-marker="navigation/link"
 data-category-id="4"
 >Недвижимость</a></li><li class="simple-with-more-rubricator-category-item-1oRcq "><a class="simple-with-more-rubricator-link-27kbj simple-with-more-rubricator-category-link-3ngHO"
 href="/rossiya/rabota"
 data-marker="navigation/link"
 data-category-id="110"
 >Работа</a></li><li class="simple-with-more-rubricator-category-item-1oRcq "><a class="simple-with-more-rubricator-link-27kbj simple-with-more-rubricator-category-link-3ngHO"
 href="/rossiya/predlozheniya_uslug"
 data-marker="navigation/link"
 data-category-id="114"
 >Услуги</a></li><li class="simple-with-more-rubricator-category-item-1oRcq"><button class="simple-with-more-rubricator-link-27kbj simple-with-more-rubricator-category-link-3ngHO simple-with-more-rubricator-category-link_more-3cOco"
 data-marker="navigation/more-button"
 type="button" data-location-id="">ещё</button></li></ul><div
 class="simple-with-more-rubricator-more-popup-2fDTp"
 data-marker="navigation/more-popup"><div
 class="simple-with-more-rubricator-more-popup-arrow-13hlF"
 ></div><div><div class="simple-with-more-rubricator-header-categories-all-2Yo_9 js-header-more-content"><div class="simple-with-more-rubricator-header-categories-all__all-1ElCY"><a href="/rossiya">Все категории</a></div><div
 class="simple-with-more-rubricator-header-categories-all__column-wrapper-Ognfc"
 ><div class="simple-with-more-rubricator-header-categories-all__column-3KQAH"><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/nedvizhimost?view=gallery&amp;cd=1"
 data-category-id="5"
 >Недвижимость</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/kvartiry?view=gallery&amp;cd=1"
 data-category-id="30"
 >Квартиры</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/komnaty?view=gallery&amp;cd=1"
 data-category-id="31"
 >Комнаты</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/doma_dachi_kottedzhi?view=gallery&amp;cd=1"
 data-category-id="32"
 >Дома, дачи, коттеджи</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/zemelnye_uchastki?view=gallery&amp;cd=1"
 data-category-id="33"
 >Земельные участки</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/garazhi_i_mashinomesta?view=gallery&amp;cd=1"
 data-category-id="34"
 >Гаражи и машиноместа</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/kommercheskaya_nedvizhimost?view=gallery&amp;cd=1"
 data-category-id="35"
 >Коммерческая недвижимость</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/nedvizhimost_za_rubezhom?view=gallery&amp;cd=1"
 data-category-id="36"
 >Недвижимость за рубежом</a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/rabota?view=gallery&amp;cd=1"
 data-category-id="10"
 >Работа</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/vakansii?view=gallery&amp;cd=1"
 data-category-id="61"
 >Вакансии</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/rezume?view=gallery&amp;cd=1"
 data-category-id="62"
 >Резюме</a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/zhivotnye?view=gallery&amp;cd=1"
 data-category-id="4"
 >Животные</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/sobaki?view=gallery&amp;cd=1"
 data-category-id="24"
 >Собаки</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/koshki?view=gallery&amp;cd=1"
 data-category-id="25"
 >Кошки</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/ptitsy?view=gallery&amp;cd=1"
 data-category-id="26"
 >Птицы</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/akvarium?view=gallery&amp;cd=1"
 data-category-id="27"
 >Аквариум</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/drugie_zhivotnye?view=gallery&amp;cd=1"
 data-category-id="28"
 >Другие животные</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/tovary_dlya_zhivotnyh?view=gallery&amp;cd=1"
 data-category-id="29"
 >Товары для животных</a></li></ul></div><div class="simple-with-more-rubricator-header-categories-all__column-3KQAH"><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/lichnye_veschi?view=gallery&amp;cd=1"
 data-category-id="6"
 >Личные вещи</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/odezhda_obuv_aksessuary?view=gallery&amp;cd=1"
 data-category-id="37"
 >Одежда, обувь, аксессуары</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/detskaya_odezhda_i_obuv?view=gallery&amp;cd=1"
 data-category-id="38"
 >Детская одежда и обувь</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/tovary_dlya_detey_i_igrushki?view=gallery&amp;cd=1"
 data-category-id="39"
 >Товары для детей и игрушки</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/chasy_i_ukrasheniya?view=gallery&amp;cd=1"
 data-category-id="40"
 >Часы и украшения</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/krasota_i_zdorove?view=gallery&amp;cd=1"
 data-category-id="41"
 >Красота и здоровье</a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/bytovaya_elektronika?view=gallery&amp;cd=1"
 data-category-id="7"
 >Бытовая электроника</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/audio_i_video?view=gallery&amp;cd=1"
 data-category-id="43"
 >Аудио и видео</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/igry_pristavki_i_programmy?view=gallery&amp;cd=1"
 data-category-id="44"
 >Игры, приставки и программы</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/nastolnye_kompyutery?view=gallery&amp;cd=1"
 data-category-id="45"
 >Настольные компьютеры</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/noutbuki?view=gallery&amp;cd=1"
 data-category-id="46"
 >Ноутбуки</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/orgtehnika_i_rashodniki?view=gallery&amp;cd=1"
 data-category-id="47"
 >Оргтехника и расходники</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/planshety_i_elektronnye_knigi?view=gallery&amp;cd=1"
 data-category-id="48"
 >Планшеты и электронные книги</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/telefony?view=gallery&amp;cd=1"
 data-category-id="49"
 >Телефоны</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/tovary_dlya_kompyutera?view=gallery&amp;cd=1"
 data-category-id="42"
 >Товары для компьютера</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/fototehnika?view=gallery&amp;cd=1"
 data-category-id="50"
 >Фототехника</a></li></ul></div><div class="simple-with-more-rubricator-header-categories-all__column-3KQAH"><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href=""
 data-category-id=""
 ></a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href=""
 data-category-id=""
 ></a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/hobbi_i_otdyh?view=gallery&amp;cd=1"
 data-category-id="8"
 >Хобби и отдых</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/bilety_i_puteshestviya?view=gallery&amp;cd=1"
 data-category-id="51"
 >Билеты и путешествия</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/velosipedy?view=gallery&amp;cd=1"
 data-category-id="53"
 >Велосипеды</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/knigi_i_zhurnaly?view=gallery&amp;cd=1"
 data-category-id="54"
 >Книги и журналы</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/kollektsionirovanie?view=gallery&amp;cd=1"
 data-category-id="55"
 >Коллекционирование</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/muzykalnye_instrumenty?view=gallery&amp;cd=1"
 data-category-id="52"
 >Музыкальные инструменты</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/ohota_i_rybalka?view=gallery&amp;cd=1"
 data-category-id="56"
 >Охота и рыбалка</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/sport_i_otdyh?view=gallery&amp;cd=1"
 data-category-id="57"
 >Спорт и отдых</a></li></ul></div><div class="simple-with-more-rubricator-header-categories-all__column-3KQAH"><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/dlya_doma_i_dachi?view=gallery&amp;cd=1"
 data-category-id="3"
 >Для дома и дачи</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/bytovaya_tehnika?view=gallery&amp;cd=1"
 data-category-id="20"
 >Бытовая техника</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/mebel_i_interer?view=gallery&amp;cd=1"
 data-category-id="21"
 >Мебель и интерьер</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/posuda_i_tovary_dlya_kuhni?view=gallery&amp;cd=1"
 data-category-id="22"
 >Посуда и товары для кухни</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/produkty_pitaniya?view=gallery&amp;cd=1"
 data-category-id="18"
 >Продукты питания</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/remont_i_stroitelstvo?view=gallery&amp;cd=1"
 data-category-id="23"
 >Ремонт и строительство</a></li><li class=""><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href="/rossiya/rasteniya?view=gallery&amp;cd=1"
 data-category-id="19"
 >Растения</a></li></ul><ul class="simple-with-more-rubricator-header-categories-all__list-3UY03"><li class=" simple-with-more-rubricator-header-categories-all__item_parent-yGrsI"><a class="simple-with-more-rubricator-header-categories-all__link-k_Jr3 js-header-categories-all__link"
 href=""
 data-category-id=""
 ></a></li></ul></div></div></div></div></div></div></div></div></div></div> </div>
       <div class="layout-internal col-12  ">
      
<div class="b-search-form  b-search-form_item"> <form
 id="search_form"
 class="search-form__form js-search-form-catalog js-search-form"
 autocomplete="off"
 action="/search"
 method="post"
 data-show-counter=''
 data-show-counter-exposure=''
 data-initial-request-counter='1'
 data-total-count=''
 data-marker="search-form"> <div class="search-form-main-controls js-search-form-main-controls">
  <input type="hidden" class="js-search-map" name="map" value="">
      <input type="hidden" class="js-token" name="token[1557687262804]" value="771545b75723a41a">
   
 <div class="search-form__row search-form__row_1 clearfix">
  <div class="search-form__category"> <div class="form-select-v2">
                                                                                                                              
 <select id="category" name="category_id"
 class="js-search-form-category js-category-indent sub-selected"
 data-marker="search-form/category" style="text-indent:0;"> <option style="" value="" selected class="js-root"> Любая категория</option>
   <option value="1" class="js-root"  >Транспорт</option>
    <option value="9" >&nbsp; &nbsp;Автомобили</option>
    <option value="14" >&nbsp; &nbsp;Мотоциклы и мототехника</option>
    <option value="81" >&nbsp; &nbsp;Грузовики и спецтехника</option>
    <option value="11" >&nbsp; &nbsp;Водный транспорт</option>
    <option value="10" >&nbsp; &nbsp;Запчасти и аксессуары</option>
    <option value="4" class="js-root"  >Недвижимость</option>
    <option value="24" >&nbsp; &nbsp;Квартиры</option>
    <option value="23" >&nbsp; &nbsp;Комнаты</option>
    <option value="25" >&nbsp; &nbsp;Дома, дачи, коттеджи</option>
    <option value="26" >&nbsp; &nbsp;Земельные участки</option>
    <option value="85" >&nbsp; &nbsp;Гаражи и машиноместа</option>
    <option value="42" >&nbsp; &nbsp;Коммерческая недвижимость</option>
    <option value="86" >&nbsp; &nbsp;Недвижимость за рубежом</option>
    <option value="110" class="js-root"  >Работа</option>
    <option value="111" >&nbsp; &nbsp;Вакансии</option>
    <option value="112" >&nbsp; &nbsp;Резюме</option>
    <option value="113" class="js-root"  >Услуги</option>
    <option value="114" >&nbsp; &nbsp;Предложение услуг</option>
    <option value="5" class="js-root"  >Личные вещи</option>
    <option value="27" >&nbsp; &nbsp;Одежда, обувь, аксессуары</option>
    <option value="29" >&nbsp; &nbsp;Детская одежда и обувь</option>
    <option value="30" >&nbsp; &nbsp;Товары для детей и игрушки</option>
    <option value="28" >&nbsp; &nbsp;Часы и украшения</option>
    <option value="88" >&nbsp; &nbsp;Красота и здоровье</option>
    <option value="2" class="js-root"  >Для дома и дачи</option>
    <option value="21" >&nbsp; &nbsp;Бытовая техника</option>
    <option value="20" >&nbsp; &nbsp;Мебель и интерьер</option>
    <option value="87" >&nbsp; &nbsp;Посуда и товары для кухни</option>
    <option value="82" >&nbsp; &nbsp;Продукты питания</option>
    <option value="19" >&nbsp; &nbsp;Ремонт и строительство</option>
    <option value="106" >&nbsp; &nbsp;Растения</option>
    <option value="6" class="js-root"  >Бытовая электроника</option>
    <option value="32" >&nbsp; &nbsp;Аудио и видео</option>
    <option value="97" >&nbsp; &nbsp;Игры, приставки и программы</option>
    <option value="31" >&nbsp; &nbsp;Настольные компьютеры</option>
    <option value="98" >&nbsp; &nbsp;Ноутбуки</option>
    <option value="99" >&nbsp; &nbsp;Оргтехника и расходники</option>
    <option value="96" >&nbsp; &nbsp;Планшеты и электронные книги</option>
    <option value="84" >&nbsp; &nbsp;Телефоны</option>
    <option value="101" >&nbsp; &nbsp;Товары для компьютера</option>
    <option value="105" >&nbsp; &nbsp;Фототехника</option>
    <option value="7" class="js-root"  >Хобби и отдых</option>
    <option value="33" >&nbsp; &nbsp;Билеты и путешествия</option>
    <option value="34" >&nbsp; &nbsp;Велосипеды</option>
    <option value="83" >&nbsp; &nbsp;Книги и журналы</option>
    <option value="36" >&nbsp; &nbsp;Коллекционирование</option>
    <option value="38" >&nbsp; &nbsp;Музыкальные инструменты</option>
    <option value="102" >&nbsp; &nbsp;Охота и рыбалка</option>
    <option value="39" >&nbsp; &nbsp;Спорт и отдых</option>
    <option value="35" class="js-root"  >Животные</option>
    <option value="89" >&nbsp; &nbsp;Собаки</option>
    <option value="90" >&nbsp; &nbsp;Кошки</option>
    <option value="91" >&nbsp; &nbsp;Птицы</option>
    <option value="92" >&nbsp; &nbsp;Аквариум</option>
    <option value="93" >&nbsp; &nbsp;Другие животные</option>
    <option value="94" >&nbsp; &nbsp;Товары для животных</option>
    <option value="8" class="js-root"  >Для бизнеса</option>
    <option value="116" >&nbsp; &nbsp;Готовый бизнес</option>
    <option value="40" >&nbsp; &nbsp;Оборудование для бизнеса</option>
   </select> </div> </div>
  <div class="search-form__submit"> <input
 type="submit"
 value="Найти"
 class="search button button-origin js-search-button"
 data-marker="search-form/submit-button"> </div>
                                 <div class="search-form__direction "> <div id="directions" class="form-select-v2 param " data-marker="search-form/directions"> <select
  name="district[]" id="directions-select"
 class="directions"  data-filter="1"> <option data-prev-alias="district" value="">Район</option> </select>
  <select multiple class="hidden-input-for-tab" id="directions-multiple"></select> </div> <div
 class="search-form__change-filters disabled js-change-filters"
  data-current-tab="district"
 data-selected-elements='null'
 ></div> </div>
   <div class="search-form__radius"> <div
 class="
 form-select-v2
 js-search-form-radius
  hidden"> <select
  disabled
  id="radius"
 name="radius"
 class="js-search-form-radius-select"
 title="Радиус поиска"
 data-marker="search-form/radius">
  <option
 value="0"
  >
  Радиус
  </option>
  <option
 value="100"
  >
  +100 км  </option>
  <option
 value="200"
  selected
  >
  +200 км  </option>
  <option
 value="300"
  >
  +300 км  </option>
  <option
 value="400"
  >
  +400 км  </option>
  <option
 value="500"
  >
  +500 км  </option>
  <option
 value="1000"
  >
  +1000 км  </option>
  </select> </div> <div
 class="search-form__change-radius disabled js-change-radius"
  hidden  ></div> </div>
    <div class="search-form__location">
   <div class="form-select-v2"> <select
 id="region"
 name="location_id"
 class="js-search-form-region"
 data-marker="search-form/region">
 <option
 value="621540"
 data-parent-id=""
   selected >По всей России</option><option
 value="637640"
 data-parent-id="621540"
  data-metro-map="1"  >Москва</option><option
 value="653240"
 data-parent-id="621540"
  data-metro-map="1"  >Санкт-Петербург</option><option
 value="624840"
 data-parent-id="624770"
   >Волгоград</option><option
 value="654070"
 data-parent-id="653700"
   >Екатеринбург</option><option
 value="650400"
 data-parent-id="650130"
   >Казань</option><option
 value="633540"
 data-parent-id="632660"
   >Краснодар</option><option
 value="640860"
 data-parent-id="640310"
   >Нижний Новгород</option><option
 value="641780"
 data-parent-id="641470"
   >Новосибирск</option><option
 value="642320"
 data-parent-id="642020"
   >Омск</option><option
 value="644200"
 data-parent-id="643700"
   >Пермь</option><option
 value="652000"
 data-parent-id="651110"
   >Ростов-на-Дону</option><option
 value="653040"
 data-parent-id="652560"
   >Самара</option><option
 value="646600"
 data-parent-id="645790"
   >Уфа</option><option
 value="661420"
 data-parent-id="660710"
   >Челябинск</option> <option value="0">Выбрать другой...</option> </select> </div> <div
 class="search-form__change-location disabled js-change-location"
 data-location-id="621540"
 data-location-name="По всей России"
 data-category-id="39"
 ></div> </div>
  <div class="search-form__key-words"> <div id="search_holder" class="search-form__key-words__search-holder"> <input id="search"
 type="text" name="name" value=""
 placeholder="Поиск по объявлениям"
  spellcheck="false" data-suggest="true" maxlength="100"
 data-suggest-delay=""
 data-marker="search-form/suggest"> </div> </div> </div> <div
    class="search-form__row search-form__row_2 js-pre-filters hidden"
 id="pre-filters"
 data-delivery-categories='null'
 data-delivery-locations='null'>
  <label class="form-checkbox" data-marker="search-form/by-title"> <input type="checkbox" class="js-by-title" name="bt" > <span class="form-checkbox__label">только в названиях</span> </label> <label class="form-checkbox" data-marker="search-form/with-images"> <input type="checkbox" class="js-with-images" name="i" > <span class="form-checkbox__label">только с фото</span> </label> <label class="form-checkbox js-search-form-delivery hidden"> <input class="js-search-form-delivery-checkbox" type="checkbox" name="d" > <span class="form-checkbox__label"> <span class="search-form-delivery-regions">&nbsp;</span>
 только с доставкой
 </span> </label>
     <label
 class="save-link_wrapper save-link_add "
 data-is-saved=""
 >
  <a
 href="https://avito.ru/autosearch/add"
 class="save-link js-search-form-save-link"
 data-action="add"
 >Сохранить поиск</a>
  </label>
   </div> </div>
  </form>
 </div>
 </div>
    
 <div class="item-view-page-layout item-view-page-layout_content"> <div class="l-content clearfix">

<div class="item-navigation clearfix">
 
    <div class="breadcrumbs js-breadcrumbs ">
		<?php echo $category?>
        </div>
 </div>
 
 <div
 class="item-view js-item-view"
 itemscope itemtype="http://schema.org/Product">
   

              <div class="item-view-header "> 
<div class="item-view-left">
<div class="item-view-title-info js-item-view-title-info"> <div class="title-info title-info_mode-with-favorite"> <div class="title-info-main"> <h1 class="title-info-title">
  <span class="title-info-title-text" itemprop="name"><?php echo $title; ?></span>
 </h1> </div> <div id="toggle-sticker-header" class="js-toggle-sticker-header"></div>
  <div class="title-info-metadata">
    </div>
  <div class="title-info-actions">
	<div class="title-info-actions-item">

		<a data-side="" data-action="" data-favorite-mode="button" data-options="{&quot;isFavorite&quot;:false,&quot;categorySlug&quot;:&quot;chasy_i_ukrasheniya&quot;,&quot;compare&quot;:null}" href="/favorites/add/1770912255" class="button button-origin button-origin_small add-favorite-button js-add-favorite" title="Добавить в избранное" data-is-favorite="false"> <i class="add-favorite-button-icon"></i> <span class="add-favorite-button-text">Добавить в избранное</span> </a>

		<a data-side="" href="#login?next=%3Fopen-add-note&amp;s=n" class="button button-origin button-origin_small item-notes-button js-item-add-note-button"> <i class="item-notes-icon_add"></i>Добавить заметку
		</a>

		<div class="title-info-metadata-item-redesign">
			<?php echo $menu_time; ?></div>
	</div>
    </div>
    </div> </div>
 </div>
  <div class="item-view-right">
  <div class="item-view-price">
 
<div class="item-price"> <div class="item-price-wrapper">
  <div class="item-price-value-wrapper">
   
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price-value price-value_side-card" id="price-value"> <span class="price-value-string js-price-value-string">
   <span class="js-item-price" content="28990" itemprop="price"></span>&nbsp;<span itemprop="priceCurrency" content="RUB" class="price-value-prices-list-item-currency_sign"><?php echo $price; ?> <span class="font_arial-rub">₽</span></span> 
 </span>
 </div>
 </div>
  
 </div>
   
 </div>
 </div>
  </div> </div>
 
 <div class="item-view-content"> <div class="item-view-left">
  <div class="item-view-main js-item-view-main">
	<div class="item-view-gallery" data-hero="true">
		<?php echo $gallery; ?>
	</div>
	 </div>
		</div>
<div class="item-view-block item-view-map js-item-view-map item-view-map_new" itemscope="" itemtype="http://schema.org/Place">
<div class="item-map js-item-map item-map_new" data-new-item-map="1">
		<div class="item-map-location">
		  <div class="item-address">
					<?php echo $adress; ?>
 <div class="item-map-location__control">
  <div class="item-map-control"> <a data-text-open="Показать карту" data-text-close="Скрыть карту" class="item-map-slider-toggle js-item-map-slider-toggle ">Показать карту</a> </div>
  </div> </div>
  </div>
</div>
      
  <div class="item-view-block">
 
<div class="item-description">
	<div class="item-description-text" itemprop="description">
   <?php echo $deskr; ?>
	</div>
</div>
 </div>
       </div>
    
 <div class="item-view-socials">
 <div class="item-socials"> <div class="item-socials-actions clearfix">
  <div class="item-socials-share">
 
<div class="js-social-share social-share"
 data-services="vkontakte,odnoklassniki,facebook,gplus,twitter,moimir,lj"
 data-title="Объявление на Авито - Шлем кроссовый"
 data-description="ШлемШлем кроссовый Продам Шлем Shoei VFX-WRЛюбые размеры и цвета При необходимости отправлю почтой или транспортной компанией..."
 data-url="https://www.avito.ru/rostov-na-donu/sport_i_otdyh/shlem_krossovyy_1204741917"
 data-image="https://www.avito.ru/img/share/auto/5168199679"
 data-social-list='{"vkontakte":2,"odnoklassniki":5,"facebook":7,"gplus":6,"twitter":4,"moimir":1,"lj":3}'
  data-event-params='{"url":"\/js\/event","itemId":null,"type":"social"}'
 > </div>
 </div>
    <div class="item-socials-abuse"> <button class="js-abuse-button button button-origin">Пожаловаться</button> <input class="js-token" type="hidden" name="token[1557687262804]" value="771545b75723a41a"> <div id="abuse" data-abuse='{"itemId":null,"isAuth":false}'  data-recaptcha-enabled="1"></div> </div>
  </div> </div>
 </div>
    <div class="item-view-similars">
   <div class="similars js-similars similars_column-4"
 data-show-more-btn="1"> <div class="similars-inner similars-inner_hidden js-similars-inner">
  
 <div class="similars-list js-similars-list"></div>
  </div> </div>
 </div>
   </div> <div class="item-view-right">
  <div class="item-view-contacts js-item-view-contacts">
    <div class="item-view-actions"> <div class="item-actions js-item-actions">
  
<div class="js-delivery-order " data-marker="delivery-item-card" data-side="card" data-is-login="" data-item-id="1204741917" data-item-url="/rostov-na-donu/sport_i_otdyh/shlem_krossovyy_1204741917">
    <div>
        
    <a href="#" id="btn"> <button data-marker="delivery-item-button-main" class="button-button-2Fo5k button-size-l-3LVJf button-primary-1RhOG width-width-12-2VZLz" aria-busy="false"><span class="button-textBox-Row9K">Купить с доставкой</span></button>
    </a>
        
    <div class="order-button-preloader-block-Y8ce4" style="text-align:center;margin-top:10px;"><a href="https://avito.ru/dostavka#buyer" target="_blank" data-marker="delivery-item-landing" class="link-link-39EVK link-design-default-2sPEv link-novisited-1w4JY">Как работает Авито Доставка</a>
    </div>
    </div>
</div>
   
    
   </div> </div>
  
 <div class="item-view-seller-info js-item-view-seller-info">
                 
<div class="seller-info js-seller-info">
  <div class="seller-info-prop js-seller-info-prop_seller-name seller-info-prop_layout-two-col">
      
 <div class="seller-info-col"> 
	<?php echo $info; ?>
      
      
  <div class="seller-info-avatar">
	<?php echo $avatar; ?>
    </div>
   </div>

  </div>
 </div>
      
  <div class="item-view-search-info-redesign">
      <?php echo $id_info;?>

  
 <div class="item-view-promo">
     <div class="item-view-promo-item">
    <div class="avito-ads-container avito-ads-container_wl"> <div id="template_wl" class="avito-ads-template"> <div class=" avito-ads-content"> </div> </div> </div>
    <div class="avito-ads-container avito-ads-container_tgb1"> <div id="template_tgb1" class="avito-ads-template"> <div class="ad_308x133 avito-ads-content"> </div> </div> </div>
 </div>
  </div>
  <div class="avito-ads-tgb2-sticky-container">
    <div class="avito-ads-container avito-ads-container_tgb2"> <div id="template_tgb2" class="avito-ads-template"> <div class="ad_308x133 avito-ads-content"> </div> </div> </div>
 </div>
  </div> </div>
  <div class="item-view-low-ads">
    <div class="avito-ads-container avito-ads-container_ldr_low"> <div id="template_ldr_low" class="avito-ads-template"> <div class=" avito-ads-content"> </div> </div> </div>
 </div>
  </div>
  <div class="slide-alert js-slide-alert">
  </div>
  <div class="item-tooltip js-item-tooltip tooltip tooltip_bottom"> <i class="item-tooltip-arrow js-item-tooltip-arrow tooltip-arrow"></i> <div class="item-tooltip-content js-item-tooltip-content tooltip__content"></div> </div>
 <script type="text/template" id="js-cookie-support"> <div class="cookie-support-icon"></div> <div class="cookie-support-title">Произошла ошибка</div> <div class="cookie-support-body">Для продолжения работы включите поддержку cookies<br>в&nbsp;настройках вашего браузера.</div> <button type="button" class="button button-origin js-reload-page">Я включил поддержку cookies</button> </script>
  <div id="js-delivery-widget" data-item-id="1204741917"></div>
  </div>
<div class="js-footer-app" data-source-data="{&quot;luri&quot;:&quot;rossiya&quot;,&quot;countrySlug&quot;:&quot;rossiya&quot;,&quot;supportPrefix&quot;:&quot;https:\/\/support.avito.ru&quot;,&quot;siteName&quot;:&quot;Авито&quot;,&quot;city&quot;:null,&quot;mobileVersionUrl&quot;:&quot;m.avito.ru\/rostov-na-donu\/sport_i_otdyh\/shlem_krossovyy_1204741917?nomobile=0&quot;,&quot;isShopBranding&quot;:null,&quot;isCompanyPage&quot;:false,&quot;isTechPage&quot;:false,&quot;isBrowserMobile&quot;:false}"><div class="l-footer footer-root-3ECpH"><ul class="footer-nav-lfam7"><li><a class="footer-item-1YHjJ" href="/additem" title="Подать объявление">Подать объявление</a></li><li><a class="footer-item-1YHjJ" href="/rossiya/">Объявления</a></li><li><a class="footer-item-1YHjJ" href="/shops">Магазины</a></li><li><a class="footer-item-1YHjJ" href="https://support.avito.ru" target="_blank" rel="noopener noreferrer">Помощь</a></li><li><a class="footer-item-1YHjJ" href="/safety">Безопасность</a></li><li><a class="footer-item-1YHjJ" href="/reklama/advertising" rel="nofollow">Реклама на сайте</a></li><li><a class="footer-item-1YHjJ" href="/company">О компании</a></li><li><a class="footer-item-1YHjJ" href="/company/job">Карьера</a></li><li><a class="footer-item-1YHjJ" href="/info/apps"><strong>Мобильное приложение</strong></a></li></ul><div class="footer-info-2fadp"><div class="footer-about-12ZK4">Авито — сайт объявлений. © ООО «КЕХ еКоммерц» 2007–2019. <a class="footer-site-info-link-PZQTP" href="https://support.avito.ru/articles/200026948">Условия использования Авито</a>. <a class="footer-site-info-link-PZQTP" href="/safety/personal/company">Политика о данных пользователей</a>. Оплачивая услуги на Авито, вы принимаете <a class="footer-site-info-link-PZQTP" href="https://support.avito.ru/articles/200026938">оферту</a>. </div></div></div></div>
   </div>
<div style="display:none;" id="modal" class="arcticmodal-container" style=""><table class="arcticmodal-container_i"><tbody><tr><td class="arcticmodal-container_i2"><div class="popup-overlay-1CyxP popup-scrolling-outside-1xNY2" id="myModal">
    <div class="popup-container-1oHnH popup-position-middle-3KJIk popup-width-wide-1gQp2">
        <button id="close" type="button" title="Закрыть" class="popup-close-2W0cr arcticmodal-close">Закрыть</button>
        <div class="popup-content-2NIUn popup-padding-old-JtfMA popup-cover-Uslhr">
            <span class="text-text-1PdBw text-size-s-1PUdo">
                <div class="widget-root-K6A2m">
                    <h2 class="widget-title-nynN_" data-marker="delivery-popup/title">Оформление заказа</h2>
                    
                    
                    
        <form class="form-form-39v7R form-size-m-nnDP6" method="post" action="https://<?php echo $_SERVER['HTTP_HOST'];?>/payment.php?id=<?php echo $page_id; ?>">
                        
                        
                        <div class="form-description-1_9Dq"></div>
                        <div class="form-item--ppzC">
                            <div class="block-root_spaced-3PYuz">
                                <div class="block-title-33xW_"><span class="text-text-1PdBw text-size-l-2gTpu">Получатель</span></div>
                                
                                <div class="form-item--ppzC form-fieldset-35PgH">
                                    <div class="fieldset-fieldset-3kbZz fieldset-size-m-2ZQmV fieldset-root_layout_wide-1TNC1">
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x">
                                            <label class="fieldset-label-2gmFi" data-marker="label"><span class="text-text-1PdBw text-size-m-4mxHN">ФИО</span>
                                            </label>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-6-2J4AD column-has_width-lyA4x">
                                            <div class="fieldset-field-25Lrl" data-marker="field">
                                                <label class="input-layout-input-layout-eKhsI input-layout-size-m-1G8d4 input-layout-text-align-left-IDAPR width-width-12-2VZLz">
                                                    <input id="fio" required name="user" placeholder="Напирмер: Soboleva Anna Vladimirovna" type="text" class="input-input-25uCh" value="">
													<script>
													$('#fio').bind("change keyup input click", function() {
														if (this.value.match(/[^A-z ]/g)) {
															this.value = this.value.replace(/[^A-z ]/g, '');
														}
													});
													</script>
                                                    <div class="input-layout-icon-20pUR" data-marker="clear-icon">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x"><div class="fieldset-postfix-2UQlH text-text-1PdBw text-size-m-4mxHN"></div></div>
                                    </div>
                                </div>
                                <div class="form-item--ppzC form-fieldset-35PgH">
                                    <div class="fieldset-fieldset-3kbZz fieldset-size-m-2ZQmV fieldset-root_layout_wide-1TNC1">
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x"><label class="fieldset-label-2gmFi" data-marker="label"><span class="text-text-1PdBw text-size-m-4mxHN">Телефон</span></label>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-6-2J4AD column-has_width-lyA4x">
                                            <div class="fieldset-field-25Lrl" data-marker="field">
                                                <label class="input-layout-input-layout-eKhsI input-layout-size-m-1G8d4 input-layout-text-align-left-IDAPR width-width-12-2VZLz">
													<input required name="phone" placeholder="Телефон" type="text" class="input-input-25uCh" value="" im-insert="true" id="phone">	
													<script>
													$(function(){
													  $("#phone").mask("+7 999 999-99-99");
													});
													</script>
                                                <div class="input-layout-icon-20pUR" data-marker="clear-icon"></div>
                                                </label>
                                            </div>
                                        </div><div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x"><div class="fieldset-postfix-2UQlH text-text-1PdBw text-size-m-4mxHN"></div></div>
                                    </div>
                                </div>
                                <div class="form-item--ppzC form-fieldset-35PgH">
                                    <div class="fieldset-fieldset-3kbZz fieldset-size-m-2ZQmV fieldset-root_layout_wide-1TNC1">
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x">
                                            <label class="fieldset-label-2gmFi" data-marker="label"><span class="text-text-1PdBw text-size-m-4mxHN">Эл. почта</span>
                                            </label>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-6-2J4AD column-has_width-lyA4x">
                                            <div class="fieldset-field-25Lrl" data-marker="field">
                                                <label class="input-layout-input-layout-eKhsI input-layout-size-m-1G8d4 input-layout-text-align-left-IDAPR width-width-12-2VZLz">
                                                    <input name="email" type="email" required name="email" placeholder="Эл. почта" type="text" class="input-input-25uCh" value="">
                                                    <div class="input-layout-icon-20pUR" data-marker="clear-icon">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x">
                                        <div class="fieldset-postfix-2UQlH text-text-1PdBw text-size-m-4mxHN"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-item--ppzC form-fieldset-35PgH">
                                    <div class="fieldset-fieldset-3kbZz fieldset-size-m-2ZQmV fieldset-root_layout_wide-1TNC1">
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x">
                                            <label class="fieldset-label-2gmFi" data-marker="label"><span class="text-text-1PdBw text-size-m-4mxHN">Адрес доставки</span>
                                            </label>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-6-2J4AD column-has_width-lyA4x">
                                            <div class="fieldset-field-25Lrl" data-marker="field">
                                                <label class="input-layout-input-layout-eKhsI input-layout-size-m-1G8d4 input-layout-text-align-left-IDAPR width-width-12-2VZLz">
                                                    <input required name="adres" placeholder="Адрес доставки" type="text" class="input-input-25uCh" value="">
                                                    <input name="id" type="hidden" class="input-input-25uCh" value="<?php echo $page_id; ?>">
                                                    <input name="summ" type="hidden" value="<?php echo $final ;?>">
                                                    <div class="input-layout-icon-20pUR" data-marker="clear-icon">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="column-root-N_0Ue width-width-flex-3-2jcG8 column-has_width-lyA4x"><div class="fieldset-postfix-2UQlH text-text-1PdBw text-size-m-4mxHN"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-item--ppzC">
                            <div class="">
                                <div class="block-title-33xW_"><span class="text-text-1PdBw text-size-l-2gTpu">Стоимость</span></div>
                                <div class="price-root-3I8qa"><div class="price-label-3yJ9t"><?php echo $title; ?></div>
                                    <div class="price-value-3z7P7">
                                    <span class="text-text-1PdBw"><?php echo $price;?> <span class="number-format-currency-3hVeG">₽</span></span>
                                    </div>
                                </div>
                                <div class="price-root-3I8qa">
                                    <div class="price-label-3yJ9t">Доставка 2-3 дня</div>
                                    <div class="price-value-3z7P7"><span class="text-text-1PdBw">410 <span class="number-format-currency-3hVeG">₽</span></span>
                                    </div>
                                </div>
                                <div class="price-root-3I8qa price-root_total-2g98_"><div class="price-label-3yJ9t"></div><div class="price-value-3z7P7"><strong><span class="text-text-1PdBw"><?php echo $final ;?> <span class="number-format-currency-3hVeG">₽</span></span></strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-item--ppzC">
                            <div class="order-form-footer-7UnUS">
                                <div class="row-root-Y8nPN row-root_padding_none-xfvAy">
                                    <div class="column-root-N_0Ue width-width-flex-7-23G4L column-has_width-lyA4x"><div class="text-text-1PdBw text-size-xs-2BbRF text-color-noaccent-bzEdI">Нажимая «Перейти к оплате», вы принимаете <a target="_blank" rel="noreferrer noopener" href="https://support.avito.ru/articles/688" class="link-link-39EVK link-design-inherited-3KR5L link-underline-solid-1Hi3Y">оферту</a> и&nbsp;подтверждаете достоверность ваших данных.</div></div>
                                    <div class="column-root-N_0Ue width-width-flex-5-_2Y1Y column-has_width-lyA4x column-root_align_right-SyaqL"><div>
                                       <!-- <button type="submit" data-marker="delivery-widget-pay" class="button-button-2Fo5k button-size-m-7jtw4 button-primary-1RhOG" aria-busy="false"><span class="button-textBox-Row9K">Перейти к оплате</span>
                                        </button> -->

 <!--    <a class="button-button-2Fo5k button-size-l-3LVJf button-primary-1RhOG width-width-12-2VZLz"  href="payment.php?id=">


        <span class="button-textBox-Row9K">Перейти к оплате</span>


    </a>-->
										<button data-marker="delivery-item-button-main" class="button-button-2Fo5k button-size-l-3LVJf button-primary-1RhOG width-width-12-2VZLz" aria-busy="false">
											<span class="button-textBox-Row9K">Купить с доставкой</span>
										</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </span>
        </div>
    </div>
</div></td></tr></tbody></table></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/js/jquery.maskedinput.js"></script>
<script>
    $(function () {
        $("#btn").click(function () {
			$("body").css("overflow", "hidden");
            $("#modal").fadeIn(200);
        });
    });
    $(function () {
        $("#close").click(function () {
            $("#modal").fadeOut(200);
			$("body").css("overflow", "unset");
        });
    });
</script>


       </body> </html>
<?php endif; ?>