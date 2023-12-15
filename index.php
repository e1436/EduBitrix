<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "вакансии, работа");
$APPLICATION->SetTitle("Биржа недвижимости");
?><p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?>
</p>
<p>Компонент ленты новостей (bitrix:news.list) с фильтрацией "Приоритетная"</p>
<?
$GLOBALS["arrFilter"] = array("PROPERTY_PRIORITY_DEAL_VALUE" => "Да");
$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "announcements",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_FILTER" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<div class="slide-one-item home-slider owl-carousel">

	<div class="site-blocks-cover" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_1.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">

      <div class="text">
        <h2>853 S Lucerne Blvd</h2>
        <p class="location"><span class="property-icon icon-room"></span> Los Angeles, CA 90005</p>
        <p class="mb-2"><strong>$2,250,500</strong></p>


        <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>

      </div>
    </div>

	<div class="site-blocks-cover" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_3.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">

      <div class="text">
        <h2>625 S. Berendo St</h2>
        <p class="location"><span class="property-icon icon-room"></span>607 Los Angeles, CA 90005</p>
        <p class="mb-2"><strong>$2,250,500</strong></p>


        <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>

      </div>

    </div>

  </div>
<!--
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
</p> -->
  <div class="py-5">
    <div class="container">
      <div class="row">
			<?  $APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => "/include/description-1.php"
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
						"PATH" => "/include/description-2.php"
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
						"PATH" => "/include/description-3.php"
					),
					false
			); ?>

      </div>
    </div>
  </div>
<b><span style="font-size: 13pt;">Компонент ленты новостей (bitrix:news.line) (должны выводиться 9 последних объявлений) :</span></b>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "600",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "announcements",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
</p>
  <div class="site-section site-section-sm bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <div class="site-section-title">
            <h2>New Properties for You</h2>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="property-details.html" class="prop-entry d-block">
            <figure>
              <img src="<?=SITE_TEMPLATE_PATH?>/images/img_1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded">$1,930,000</span>
                <h3 class="title">853 S Lucerne Blvd</h3>
                <p class="location">Los Angeles, CA 90005</p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span>Area:</span>
                    <strong>240m<sup>2</sup></strong>
                  </div>
                  <div class="col">
                    <span>Beds:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Baths:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Garages:</span>
                    <strong>1</strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="property-details.html" class="prop-entry d-block">
            <figure>
              <img src="<?=SITE_TEMPLATE_PATH?>/images/img_2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded">$2,438,000</span>
                <h3 class="title">853 S Lucerne Blvd</h3>
                <p class="location">Los Angeles, CA 90005</p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span>Area:</span>
                    <strong>240m<sup>2</sup></strong>
                  </div>
                  <div class="col">
                    <span>Beds:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Baths:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Garages:</span>
                    <strong>1</strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="property-details.html" class="prop-entry d-block">
            <figure>
              <img src="<?=SITE_TEMPLATE_PATH?>/images/img_3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded">$5,320,000</span>
                <h3 class="title">853 S Lucerne Blvd</h3>
                <p class="location">Los Angeles, CA 90005</p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span>Area:</span>
                    <strong>240m<sup>2</sup></strong>
                  </div>
                  <div class="col">
                    <span>Beds:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Baths:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Garages:</span>
                    <strong>1</strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <a href="property-details.html" class="prop-entry d-block">
            <figure>
              <img src="<?=SITE_TEMPLATE_PATH?>/images/img_4.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded">$2,350,000</span>
                <h3 class="title">853 S Lucerne Blvd</h3>
                <p class="location">Los Angeles, CA 90005</p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span>Area:</span>
                    <strong>240m<sup>2</sup></strong>
                  </div>
                  <div class="col">
                    <span>Beds:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Baths:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Garages:</span>
                    <strong>1</strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="property-details.html" class="prop-entry d-block">
            <figure>
			<img src="<?=SITE_TEMPLATE_PATH?>/images/img_5.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded">$1,550,000</span>
                <h3 class="title">853 S Lucerne Blvd</h3>
                <p class="location">Los Angeles, CA 90005</p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span>Area:</span>
                    <strong>240m<sup>2</sup></strong>
                  </div>
                  <div class="col">
                    <span>Beds:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Baths:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Garages:</span>
                    <strong>1</strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="property-details.html" class="prop-entry d-block">
            <figure>
              <img src="<?=SITE_TEMPLATE_PATH?>/images/img_6.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded">$4,291,000</span>
                <h3 class="title">853 S Lucerne Blvd</h3>
                <p class="location">Los Angeles, CA 90005</p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span>Area:</span>
                    <strong>240m<sup>2</sup></strong>
                  </div>
                  <div class="col">
                    <span>Beds:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Baths:</span>
                    <strong>2</strong>
                  </div>
                  <div class="col">
                    <span>Garages:</span>
                    <strong>1</strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>

    </div>
  </div>


<b><span style="font-size: 13pt;">Компонент ленты новостей (bitrix:news.line) (Должны выводиться 6 сервисов) :</span></b>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "6",
		),
		"IBLOCK_TYPE" => "services",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 text-center mb-5">
          <div class="site-section-title">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="#" class="service text-center border rounded">
            <span class="icon flaticon-house"></span>
            <h2 class="service-heading">Research Subburbs</h2>
            <p><span class="read-more">Learn More</span></p>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="#" class="service text-center border rounded">
            <span class="icon flaticon-sold"></span>
            <h2 class="service-heading">Sold Houses</h2>
            <p><span class="read-more">Learn More</span></p>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="#" class="service text-center border rounded">
            <span class="icon flaticon-camera"></span>
            <h2 class="service-heading">Security Priority</h2>
            <p><span class="read-more">Learn More</span></p>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <a href="#" class="service text-center border rounded">
            <span class="icon flaticon-house"></span>
            <h2 class="service-heading">Research Subburbs</h2>
            <p><span class="read-more">Learn More</span></p>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="#" class="service text-center border rounded">
            <span class="icon flaticon-sold"></span>
            <h2 class="service-heading">Sold Houses</h2>
            <p><span class="read-more">Learn More</span></p>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <a href="#" class="service text-center border rounded">
            <span class="icon flaticon-camera"></span>
            <h2 class="service-heading">Security Priority</h2>
            <p><span class="read-more">Learn More</span></p>
          </a>
        </div>
      </div>
    </div>
  </div>

<b><span style="font-size: 13pt;">Компонент ленты новостей (bitrix:news.line) (должны выводиться 3 последних новости) :</span></b>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "1300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "1",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <div class="site-section-title">
            <h2>Our Blog</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
          <a href="#"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae
              sunt.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
          <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae
              sunt.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae
              sunt.</p>
          </div>
        </div>

      </div>

    </div>
  </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>