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
<p>
</p>
<p>
</p>
<p>
 <br>
</p>
 <b><span style="font-size: 13pt;">Объявления:</span></b>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("",""),
		"IBLOCKS" => array("5"),
		"IBLOCK_TYPE" => "announcements",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
</p>
<p>
 <br>
</p>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>