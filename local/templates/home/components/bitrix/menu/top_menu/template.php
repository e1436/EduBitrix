<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul id="horizontal-multilevel-men" class="site-menu js-clone-nav d-none d-lg-block">

	<?
	$previousLevel = 0;
	foreach($arResult as $arItem):?>

		<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
			<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
		<?endif?>

	<?if($arItem["PERMISSION"] > "D"): ?>

		<?if ($arItem["IS_PARENT"]):?>
	
				<li class="has-children <?if ($arItem["SELECTED"]):?> active <?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
					<ul class="dropdown">
	
		<?else:?>
	
				<li <?if ($arItem["SELECTED"]):?>class="active"<?endif?>><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
	
		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

	<?endforeach?>

	<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
	<?endif?>

</ul>

<?endif?>