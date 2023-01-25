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
<? if (!empty($arResult['ITEMS'])) : ?>
    <div id="carouselSlider" class="carousel carousel-white slide  flex-shrink-0 p-0" data-bs-ride="carousel">
        <? if (count((array)$arResult['ITEMS']) > 1) : ?>
            <div class="carousel-indicators">
                <? foreach ($arResult["ITEMS"] as $k => $v) : ?>
                    <button type="button" data-bs-target="#carouselSlider"
                            data-bs-slide-to="<?= $k ?>" <?= $k == 0 ? 'class="active"  aria-current="true"' : '' ?>
                            aria-label="Slide <?= $k + 1 ?>"></button>
                <? endforeach ?>
            </div>
        <? endif ?>
        <div class="carousel-inner">
            <? foreach ($arResult["ITEMS"] as $k => $arItem) : ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="carousel-item h-100 <?= $k == 0 ? 'active' : '' ?>" data-bs-interval="2000">
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="d-block w-100 h-100 img-fluid rounded-1">
                    <div class="carousel-caption d-block ">
                        <h3><?= $arItem['NAME'] ?></h3>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
        <? if (count((array)$arResult['ITEMS']) > 1) : ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?= GetMessage('PREV'); ?></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?= GetMessage('NEXT'); ?></span>
            </button>
        <? endif; ?>
    </div>
<? endif; ?>