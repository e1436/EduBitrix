<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

/** @var PageNavigationComponent $component */
$component = $this->getComponent();

$this->setFrameMode(true);

$colorSchemes = array(
	"green" => "bx-green",
	"yellow" => "bx-yellow",
	"red" => "bx-red",
	"blue" => "bx-blue",
);
if(isset($arParams["TEMPLATE_THEME"]) && isset($colorSchemes[$arParams["TEMPLATE_THEME"]]))
{
	$colorScheme = $colorSchemes[$arParams["TEMPLATE_THEME"]];
}
else
{
	$colorScheme = "";
}
?>
<!--
<div class="bx-pagination <?=$colorScheme?>">
	<div class="bx-pagination-container">
		<ul>
-->
<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-pagination">
<?if($arResult["REVERSED_PAGES"] === true):?>

	<?if ($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"]):?>
		<?if (($arResult["CURRENT_PAGE"]+1) == $arResult["PAGE_COUNT"]):?>
		<!--	 <a href="<?=htmlspecialcharsbx($arResult["URL"])?>"><span><?echo GetMessage("round_nav_back")?></span></a> -->
		<?else:?>
		<!-- <a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["CURRENT_PAGE"]+1))?>"><span><?echo GetMessage("round_nav_back")?></span></a> -->
		<?endif?>
			<a href="<?=htmlspecialcharsbx($arResult["URL"])?>"><span>1</span></a>
	<?else:?>
		<!--	<li class="bx-pag-prev"><span><?echo GetMessage("round_nav_back")?></span></li> -->
			<a class="active"><span>1</span></a>
	<?endif?>

	<?
	$page = $arResult["START_PAGE"] - 1;
	while($page >= $arResult["END_PAGE"] + 1):
	?>
		<?if ($page == $arResult["CURRENT_PAGE"]):?>
			<a class="active"><span><?=($arResult["PAGE_COUNT"] - $page + 1)?></span></a>
		<?else:?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($page))?>"><span><?=($arResult["PAGE_COUNT"] - $page + 1)?></span></a>
		<?endif?>

		<?$page--?>
	<?endwhile?>

	<?if ($arResult["CURRENT_PAGE"] > 1):?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate(1))?>"><span><?=$arResult["PAGE_COUNT"]?></span></a>
		<?endif?>
	<!--		<li class="bx-pag-next"><a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["CURRENT_PAGE"]-1))?>"><span><?echo GetMessage("round_nav_forward")?></span></a></li> -->
	<?else:?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
			<a class="active"><span><?=$arResult["PAGE_COUNT"]?></span></a>
		<?endif?>
		<!--	<a class=""><span><?echo GetMessage("round_nav_forward")?></span></a> -->
	<?endif?>

<?else:?>

	<?if ($arResult["CURRENT_PAGE"] > 1):?>
		<?if ($arResult["CURRENT_PAGE"] > 2):?>
		<!--	<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["CURRENT_PAGE"]-1))?>"><span><?echo GetMessage("round_nav_back")?></span></a> -->
		<?else:?>
		<!--	<a href="<?=htmlspecialcharsbx($arResult["URL"])?>"><span><?echo GetMessage("round_nav_back")?></span></a> -->
		<?endif?>
			<a href="<?=htmlspecialcharsbx($arResult["URL"])?>"><span>1</span></a>
	<?else:?>
		<!--	<a class="bx-pag-prev"><span><?echo GetMessage("round_nav_back")?></span></a> -->
			<a class="active"><span>1</span></a>
	<?endif?>

	<?
	$page = $arResult["START_PAGE"] + 1;
	while($page <= $arResult["END_PAGE"]-1):
	?>
		<?if ($page == $arResult["CURRENT_PAGE"]):?>
			<a class="active"><span><?=$page?></span></a>
		<?else:?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($page))?>"><span><?=$page?></span></a>
		<?endif?>
		<?$page++?>
	<?endwhile?>

	<?if($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"]):?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["PAGE_COUNT"]))?>"><span><?=$arResult["PAGE_COUNT"]?></span></a>
		<?endif?>
		<!--	<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["CURRENT_PAGE"]+1))?>"><span><?echo GetMessage("round_nav_forward")?></span></a> -->
	<?else:?>
		<?if($arResult["PAGE_COUNT"] > 1):?>
			<a class="active"><span><?=$arResult["PAGE_COUNT"]?></span></a>
		<?endif?>
		<!--	<a class="bx-pag-next"><span><?echo GetMessage("round_nav_forward")?></span></a> -->
	<?endif?>
<?endif?>

<!--
<?if ($arResult["SHOW_ALL"]):?>
	<?if ($arResult["ALL_RECORDS"]):?>
			<a href="<?=htmlspecialcharsbx($arResult["URL"])?>" rel="nofollow"><span><?echo GetMessage("round_nav_pages")?></span></a>
	<?else:?>
			<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate("all"))?>" rel="nofollow"><span><?echo GetMessage("round_nav_all")?></span></a>
	<?endif?>
<?endif?>
-->

		<div style="clear:both"></div>
		</div>
	</div>
</div>
