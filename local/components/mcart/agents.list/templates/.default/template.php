<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?><?
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs("script.js");
?>
<div class="site-section site-section-sm bg-light">
   <div class="container agents-list">
      <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
              <h2><?=GetMessage("AGENTS_TITLE")?></h2>
            </div>
          </div>
        </div>
    <div class="mb-5">
	<?
		$favouriteAgents = [];

		if($USER->GetID() > 0){
			$category = "agents";
			$name = "user_favourite_agents";
			$user_id = false;

			$favouriteAgents = CUserOptions::GetOption($category, $name, false, $user_id);
			if(!$favouriteAgents){
				CUserOptions::SetOption($category, $name, array(), false, $user_id);
				$favouriteAgents = [];
			} 
		}
	
	?>
	<?foreach($arResult["AGENTS"]["ITEMS"] as $arItem):?>
		<div class="agent__card">
                <div class="small-info">
                    <div class="avatar" style="background-image: url(<?=$arItem["UF_PHOTO"]?>);"></div>
                    <div class="info">
                        <div class="name"><?=$arItem["UF_NAME"]?></div>
                    </div>
                </div>
                <div class="agent__card_item">
                    <div class="agent__card_info">
                        <div class="card__info_item">
                            <div class="position"><?=GetMessage("EMAIL")?>:</div>
                            <div class="name"><?=$arItem["UF_EMAIL"]?></div>
                        </div>
                        <div class="card__info_item">
                            <div class="position"><?=GetMessage("PHONE")?>: </div>
                            <div class="name"><?=$arItem["UF_PHONE"]?></div>
                        </div>
                        <div class="card__info_item">
                            <div class="position"><?=GetMessage("ACTIVITY_TYPE")?>:</div>
                            <div class="name"><?=$arItem["UF_ACTIVITY_TYPE"]?></div>
                        </div>
                    </div>
                </div>
			<a data-agent="<?=$arItem["ID"]?>" class="star <?if(array_search($arItem["ID"], $favouriteAgents) !== false):?>active<?endif?>">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4L14.472 9.26604L20 10.1157L16 14.2124L16.944 20L12 17.266L7.056 20L8 14.2124L4 10.1157L9.528 9.26604L12 4Z" stroke="#95929A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
		<?endforeach?>
	</div>
	<?
		$APPLICATION->IncludeComponent(
			"bitrix:main.pagenavigation",
			"agents_list",
			array(
				"NAV_OBJECT" => $arResult["AGENTS"]["NAV_OBJECT"],
				 'SHOW_ALWAYS' => true  
			),
			false
		);
	?>
  </div>
</div>
<!--
/*
 * Для постраничной навигации использовать компонент bitrix:main.pagenavigation
 */
-->