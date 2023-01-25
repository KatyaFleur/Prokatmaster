<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
?>
<div id="carouselElement" class="carousel carousel-dark slide  flex-shrink-0 p-0 col-12 col-lg-7 mb-3" data-bs-ride="carousel">
    <? if ($arResult['PROPERTIES']['PHOTO']['VALUE']) : ?>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselElement" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <? foreach ((array)$arResult['PROPERTIES']['PHOTO']['VALUE'] as $k => $v) : ?>
                <button type="button" data-bs-target="#carouselElement" data-bs-slide-to="<?= $k + 1 ?>" aria-label="Slide <?= $k + 2 ?>"></button>
            <? endforeach ?>
        </div>
    <? endif; ?>
    <div class="carousel-inner carousel-inner-detail">
        <div class="carousel-item h-100 active " data-bs-interval="2000">
            <img data-fancybox="gallery" src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>" class="d-block w-100 h-100 img-fluid rounded-1 cursor-pointer">
        </div>
        <? if ($arResult['PROPERTIES']['PHOTO']['VALUE']) : ?>
            <? foreach ((array)$arResult['PROPERTIES']['PHOTO']['VALUE'] as $photoID) : ?>
                <div class="carousel-item h-100" data-bs-interval="2000">
                    <img data-fancybox="gallery" src="<?= CFile::GetPath($photoID) ?>" class="d-block w-100 h-100 img-fluid rounded-1 cursor-pointer">
                </div>
            <? endforeach ?>
        <? endif; ?>
    </div>
    <? if ($arResult['PROPERTIES']['PHOTO']['VALUE']) : ?>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselElement" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"><?= GetMessage('PREV') ?></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselElement" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"><?= GetMessage('NEXT') ?></span>
        </button>
    <? endif; ?>
</div>
<div class="description-section px-0 mt-4 col-12 col-lg-4 ms-lg-5">
    <?= $arResult['~DETAIL_TEXT'] ?>
</div>
<div class="col-12 mt-3 ps-0 d-flex flex-column align-items-lg-end">
    <h3 style="color: red;"><?= $arResult['~PREVIEW_TEXT'] ?></h3>
    <p><?= GetMessage('TEXT_ARENDA'); ?></p>
    <?= A1expert::ShowPhone(true) ?>
    <?= A1expert::ShowSocials('MOBILE_HEADER') ?>
</div>