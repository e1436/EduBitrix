<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>

<?
if($USER->GetID()){
	$user_groups = array();
	$res = CUser::GetUserGroupList($USER->GetID());
	while ($arGroup = $res->Fetch()){

		if($arGroup['GROUP_ID'] == 6){ // Покупатель

			LocalRedirect('/lichnyy-kabinet-pokupatelya/');
	
		} else if($arGroup['GROUP_ID'] == 7){ // Продавец

			LocalRedirect('/lichnyy-kabinet-prodavtsa/');
		}
	}

	echo "Вы не относитесь ни к группе Продавцов, ни к группе Покупателей. Редирект не выполнен.";
}
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"REGISTER_URL" => "registration.php",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "login.php",
		"SHOW_ERRORS" => "Y"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>