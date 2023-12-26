<?
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/afterRegistration.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/afterRegistration.php';
}
AddEventHandler("main", "OnAfterUserRegister", Array("AfterRegister", "UserGroupAdd"));

?>