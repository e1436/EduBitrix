<?
$eventManager = \Bitrix\Main\EventManager::getInstance();

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/afterRegistration.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/afterRegistration.php';
}
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/updateAgentsHLBlockCache.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/updateAgentsHLBlockCache.php';
}

AddEventHandler("main", "OnAfterUserRegister", Array("AfterRegister", "UserGroupAdd"));
$eventManager->AddEventHandler("", "AgenciesOnAfterUpdate", Array("updateAgentsHLBlockCache","clearCache"));
$eventManager->addEventHandler('', 'AgenciesOnAfterAdd', Array("updateAgentsHLBlockCache","clearCache"));
$eventManager->addEventHandler('', 'AgenciesOnAfterDelete', Array("updateAgentsHLBlockCache","clearCache"));
?>