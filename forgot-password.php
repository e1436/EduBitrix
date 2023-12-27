<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Восстановление пароля");
$APPLICATION->SetTitle("Восстановление пароля");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.forgotpasswd", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AUTH_AUTH_URL" => "login.php",
		"AUTH_REGISTER_URL" => "registration.php"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>