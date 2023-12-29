<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */
// "ICON" => "/images/news_list.gif",

$arComponentDescription = array(
	"NAME" => GetMessage("COMPONENT_NAME"),
	"DESCRIPTION" => GetMessage("COMPONENT_DESCRIPTION"),
	"SORT" => 20,
	"PATH" => array(
      "ID" => GetMessage("COMPANY_NAME"),
      "CHILD" => array(
         "ID" => "Agents",
         "NAME" => GetMessage("COMPONENT_SECTION"),
		 "SORT" => 10
      )
   ),
);
