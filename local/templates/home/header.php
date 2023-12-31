<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID ?>">

<head>
  <title><?$APPLICATION->ShowTitle()?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?$APPLICATION->ShowHead();?>
  <? 
     use Bitrix\Main\Page\Asset;
     
     Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");

     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");

     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");

  ?>


</head>

<body>

  <div class="site-loader"></div>
  
  <?$APPLICATION->ShowPanel();?>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">

              	<? $APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => "/include/phone.php"
					),
					false
				); ?>

				<?  $APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => "/include/email.php"
					),
					false
				); ?>
          
          </div>
			
				<?  $APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => "/include/social.php"
					),
					false
				); ?>
        </div>
      </div>
    
    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
				<?  $APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => "/include/company_name.php"
					),
					false
				); ?>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

				<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MAX_LEVEL" => "3",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"MENU_CACHE_TYPE" => "Y",	// Тип кеширования
		"MENU_CACHE_TIME" => "604800",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"MENU_THEME" => "site"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
			
            </nav>
          </div>

        </div>
      </div>
    </div>
<?
use Bitrix\Main\Application, Bitrix\Main\Web\Uri;
$request = Application::getInstance()->getContext()->getRequest();
$uriString = $request->getRequestUri();
$uri = new Uri($uriString);
$url = $uri->GetPath();

if($url != "/") {
		$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
			"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
				"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
				"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
			),
			false
		);
}

?>

 </div>
