<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list", 
	".default", 
	array(
		"AGENTS_COUNT" => "20",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"HLBLOCK_TNAME" => "estate_agencies",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>