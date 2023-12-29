<?
use Bitrix\Main\Loader; 

Loader::includeModule("highloadblock"); 

class updateAgentsHLBlockCache
{
	public static function clearCache(\Bitrix\Main\Entity\Event $event)
	{
		/* $event->getEntity()->cleanCache(); */

			$entity = $event->getEntity();
			$tableName = $entity->getDBTableName();
			$taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
			$taggedCache->clearByTag('hlblock_table_name_' . $tableName);

	}
}
?>

