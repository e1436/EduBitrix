<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.register", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"SHOW_FIELDS" => array(
		),
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
		),
		"AUTH" => "Y",
		"USE_BACKURL" => "Y",
		"SUCCESS_PAGE" => "",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(
		),
		"USER_PROPERTY_NAME" => ""
	),
	false
);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>