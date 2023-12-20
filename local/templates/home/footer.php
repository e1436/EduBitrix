<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
IncludeTemplateLangFile(__FILE__);
?>  
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
			<?  $APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => "/include/about.php"
					),
					false
			); ?>
          </div>
        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">

          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4"><?=GetMessage("NAVIGATION"); ?></h3>
            </div>

				<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
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

        </div>
	</div>
        <div class="col-lg-4 mb-5 mb-lg-0">
			<?  $APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => "/include/follow.php"
					),
					false
			); ?>
        </div>
		</div>

      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
         <?  $APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => "/include/copyright.php"
					),
					false
			); ?>
        </div>

		  </div>
      </div>
  </footer>


  <?
     use Bitrix\Main\Page\Asset;

     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js", true);
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js", true);
  ?>

</body>

</html>