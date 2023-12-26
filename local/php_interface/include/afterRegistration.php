<?
class AfterRegister
{
	public static function UserGroupAdd(&$arFields)
	{

		$arGroups = CUser::GetUserGroup($arFields['USER_ID']);

		if($arFields["UF_ROLE"] == 7) { // Пользователь зарегистрировался как Покупатель
				$arGroups[] = 6;
				CUser::SetUserGroup($arFields['USER_ID'], $arGroups);
				return true;

		} else if ($arFields["UF_ROLE"] == 8) { // Пользователь зарегистрировался как Продавец
				$arGroups[] = 7;
				CUser::SetUserGroup($arFields['USER_ID'], $arGroups);
				return true;

		}
		
	}
}
?>

