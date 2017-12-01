<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>

<div class="wrapper second">
    <div class="container news">
        <div class="row rownews">
            <h3 class="hidden_header">Новости фонда</h3>

            <?foreach ($arResult["ITEMS"] as $arItem) :
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

            <div class="col-lg-3">
                <a href="*">
                    <p class="data"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></p>
                    <p class="ftext"><?=$arItem["NAME"]?></p>
                </a>
            </div>

            <? endforeach;?>

            <div class="col-lg-3">
                <button class="rect"><p class="ftext">показать еще новости</p></button>
            </div>

        </div>
    </div>
</div>