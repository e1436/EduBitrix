<?php

namespace Sprint\Migration;


class Agents20231222211917 extends Version
{
    protected $description = "";

    protected $moduleVersion = "4.6.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
		$hlblockId = $helper->Hlblock()->saveHlblock(array (
	  'NAME' => 'Agencies',
	  'TABLE_NAME' => 'estate_agencies',
	  'LANG' => 
	  array (
		'ru' => 
		array (
		  'NAME' => 'Агентов по недвижимости',
		),
	  ),
	));
        $helper->Hlblock()->saveField($hlblockId, array (
		  'FIELD_NAME' => 'UF_NAME',
		  'USER_TYPE_ID' => 'string',
		  'XML_ID' => '',
		  'SORT' => '100',
		  'MULTIPLE' => 'N',
		  'MANDATORY' => 'N',
		  'SHOW_FILTER' => 'N',
		  'SHOW_IN_LIST' => 'Y',
		  'EDIT_IN_LIST' => 'Y',
		  'IS_SEARCHABLE' => 'N',
		  'SETTINGS' => 
		  array (
			'SIZE' => 20,
			'ROWS' => 1,
			'REGEXP' => '',
			'MIN_LENGTH' => 0,
			'MAX_LENGTH' => 0,
			'DEFAULT_VALUE' => '',
		  ),
		  'EDIT_FORM_LABEL' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => 'ФИО',
			'ua' => '',
		  ),
		  'LIST_COLUMN_LABEL' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => 'ФИО',
			'ua' => '',
		  ),
		  'LIST_FILTER_LABEL' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => 'ФИО',
			'ua' => '',
		  ),
		  'ERROR_MESSAGE' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => '',
			'ua' => '',
		  ),
		  'HELP_MESSAGE' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => '',
			'ua' => '',
		  ),
		));
            $helper->Hlblock()->saveField($hlblockId, array (
		  'FIELD_NAME' => 'UF_EMAIL',
		  'USER_TYPE_ID' => 'string',
		  'XML_ID' => '',
		  'SORT' => '100',
		  'MULTIPLE' => 'N',
		  'MANDATORY' => 'N',
		  'SHOW_FILTER' => 'N',
		  'SHOW_IN_LIST' => 'Y',
		  'EDIT_IN_LIST' => 'Y',
		  'IS_SEARCHABLE' => 'N',
		  'SETTINGS' => 
		  array (
			'SIZE' => 20,
			'ROWS' => 1,
			'REGEXP' => '',
			'MIN_LENGTH' => 0,
			'MAX_LENGTH' => 0,
			'DEFAULT_VALUE' => '',
		  ),
		  'EDIT_FORM_LABEL' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => 'Email',
			'ua' => '',
		  ),
		  'LIST_COLUMN_LABEL' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => 'Email',
			'ua' => '',
		  ),
		  'LIST_FILTER_LABEL' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => 'Email',
			'ua' => '',
		  ),
		  'ERROR_MESSAGE' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => '',
			'ua' => '',
		  ),
		  'HELP_MESSAGE' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => '',
			'ua' => '',
		  ),
		));
            $helper->Hlblock()->saveField($hlblockId, array (
		  'FIELD_NAME' => 'UF_PHONE',
		  'USER_TYPE_ID' => 'string',
		  'XML_ID' => '',
		  'SORT' => '100',
		  'MULTIPLE' => 'N',
		  'MANDATORY' => 'N',
		  'SHOW_FILTER' => 'N',
		  'SHOW_IN_LIST' => 'Y',
		  'EDIT_IN_LIST' => 'Y',
		  'IS_SEARCHABLE' => 'N',
		  'SETTINGS' => 
		  array (
			'SIZE' => 20,
			'ROWS' => 1,
			'REGEXP' => '',
			'MIN_LENGTH' => 0,
			'MAX_LENGTH' => 0,
			'DEFAULT_VALUE' => '',
		  ),
		  'EDIT_FORM_LABEL' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => 'Телефон',
			'ua' => '',
		  ),
		  'LIST_COLUMN_LABEL' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => 'Телефон',
			'ua' => '',
		  ),
		  'LIST_FILTER_LABEL' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => 'Телефон',
			'ua' => '',
		  ),
		  'ERROR_MESSAGE' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => '',
			'ua' => '',
		  ),
		  'HELP_MESSAGE' => 
		  array (
			'br' => '',
			'en' => '',
			'fr' => '',
			'it' => '',
			'la' => '',
			'pl' => '',
			'ru' => '',
			'ua' => '',
		  ),
		));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_ACTIVITY',
  'USER_TYPE_ID' => 'boolean',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DEFAULT_VALUE' => 0,
    'DISPLAY' => 'CHECKBOX',
    'LABEL' => 
    array (
      0 => '',
      1 => '',
    ),
    'LABEL_CHECKBOX' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Активность',
    'ua' => '',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Активность',
    'ua' => '',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Активность',
    'ua' => '',
  ),
  'ERROR_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_ACTIVITY_TYPE',
  'USER_TYPE_ID' => 'enumeration',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DISPLAY' => 'LIST',
    'LIST_HEIGHT' => 1,
    'CAPTION_NO_VALUE' => '',
    'SHOW_NO_VALUE' => 'N',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Вид деятельности ',
    'ua' => '',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Вид деятельности ',
    'ua' => '',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Вид деятельности ',
    'ua' => '',
  ),
  'ERROR_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'ENUM_VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Брокер',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1',
    ),
    1 => 
    array (
      'VALUE' => 'Агент по продаже',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2',
    ),
    2 => 
    array (
      'VALUE' => 'Агент по покупке',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3',
    ),
    3 => 
    array (
      'VALUE' => 'Риэлтор',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4',
    ),
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_PHOTO',
  'USER_TYPE_ID' => 'file',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'LIST_WIDTH' => 0,
    'LIST_HEIGHT' => 0,
    'MAX_SHOW_SIZE' => 0,
    'MAX_ALLOWED_SIZE' => 0,
    'EXTENSIONS' => 
    array (
    ),
    'TARGET_BLANK' => 'Y',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Фото',
    'ua' => '',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Фото',
    'ua' => '',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => 'Фото',
    'ua' => '',
  ),
  'ERROR_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'br' => '',
    'en' => '',
    'fr' => '',
    'it' => '',
    'la' => '',
    'pl' => '',
    'ru' => '',
    'ua' => '',
  ),
));
        }

    public function down()
    {
        $helper = $this->getHelperManager();
		$hlblockId = $helper->Hlblock()->getHlblockIdIfExists('Agencies');
		$helper->Hlblock()->deleteHlblock($hlblockId);
    }
}
