<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?><div class="site-section">
	<div class="container">
		<div class="row">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"feedback", 
	array(
		"COMPONENT_TEMPLATE" => "feedback",
		"USE_CAPTCHA" => "N",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "elikomov@yandex.ru",
		"REQUIRED_FIELDS" => array(
			0 => "NONE",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		)
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
	Array(),
	false
);?>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>