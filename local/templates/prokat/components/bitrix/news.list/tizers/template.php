<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="tizers-block">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>


        <div class="tizer-item">
            <div class="tizer-header">
                <div class="img">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<? echo $arItem["NAME"] ?>"
                         title="<? echo $arItem["NAME"] ?>">
                </div>
                <h3 class="tizer-title">
                    <? echo $arItem["NAME"] ?>
                </h3>
            </div>
            <h4 class="tizer-text">
                <? echo $arItem["PREVIEW_TEXT"]; ?>
            </h4>
        </div>


    <? endforeach; ?>
</div>

