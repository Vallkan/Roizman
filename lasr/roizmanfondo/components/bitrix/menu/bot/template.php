<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="bot__menu">
        <!--<li><a href="*">О ФОНДЕ</a></li>
        <li><a href="*">СРОЧНАЯ ПОМОЩЬ</a></li>
        <li><a href="*">ВОЛОНТЕРАМ</a></li>
        <li><a href="*">ПРОЕКТЫ</a></li> --!>

        <?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="current"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>