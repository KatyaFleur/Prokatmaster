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
<div id="carouselElement" class="carousel carousel-dark slide  flex-shrink-0 p-0 col-12 col-lg-7 mb-3"
     data-bs-ride="carousel">
    <div class="stickers">
        <? if ($arResult["DISPLAY_PROPERTIES"]['NEW']) { ?>
            <div class="sticker-new">Новинка</div>
        <? } ?>
        <? if ($arResult["DISPLAY_PROPERTIES"]['EXPERT']) { ?>
            <div class="sticker-expert">Выбор эксперта</div>
        <? } ?>
        <? if ($arResult["DISPLAY_PROPERTIES"]['LIDER']) { ?>
            <div class="sticker-lider">Лидер продаж</div>
        <? } ?>
        <? if ($arResult["DISPLAY_PROPERTIES"]['DEPOSIT']) { ?>
            <div class="deposit-detail"><span class="deposit-info-detail">
<?= $arResult["DISPLAY_PROPERTIES"]['DEPOSIT']['NAME'] ?>: <?= $arResult["DISPLAY_PROPERTIES"]['DEPOSIT']['VALUE'] ?>
				</span>
            </div>
        <? } ?>
    </div>
    <? if ($arResult['PROPERTIES']['PHOTO']['VALUE']) : ?>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselElement" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <? foreach ((array)$arResult['PROPERTIES']['PHOTO']['VALUE'] as $k => $v) : ?>
                <button type="button" data-bs-target="#carouselElement" data-bs-slide-to="<?= $k + 1 ?>"
                        aria-label="Slide <?= $k + 2 ?>"></button>
            <? endforeach ?>
        </div>
    <? endif; ?>
    <div class="carousel-inner carousel-inner-detail">
        <div class="carousel-item h-100 active " data-bs-interval="2000">
            <img data-fancybox="gallery" src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>"
                 class="d-block w-100 h-100 img-fluid rounded-1 cursor-pointer">
        </div>
        <? if ($arResult['PROPERTIES']['PHOTO']['VALUE']) : ?>
            <? foreach ((array)$arResult['PROPERTIES']['PHOTO']['VALUE'] as $photoID) : ?>
                <div class="carousel-item h-100" data-bs-interval="2000">
                    <img data-fancybox="gallery" src="<?= CFile::GetPath($photoID) ?>"
                         class="d-block w-100 h-100 img-fluid rounded-1 cursor-pointer">
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
    <span class="brand"><?= $arResult['PROPERTIES']['BRAND']['VALUE'] ?></span>
    <div class="card-price">
        <span class="price_value"><?= $arResult['PROPERTIES']['PRICE']['VALUE'] ?></span>
        <span class="price_currency">₽</span>
        <span class="price_measure">/сутки</span>
    </div>

    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js" charset="utf-8"></script>

    <div class="share_wrapp">

        <button id="showContent" class="share-button"><i class="icon_share"></i>Поделиться</button>

        <div id="content" style="display:none;" class="ya-share2 yashare-auto-init shares"
             data-services="vkontakte,facebook,odnoklassniki,moimir,twitter,viber,whatsapp,skype,telegram"></div>
    </div>

    <div class="prev-text">

        <?= $arResult['PREVIEW_TEXT'] ?>

    </div>
</div>
<div class="detail-text">
    <?= $arResult['DETAIL_TEXT'] ?>
</div>
<div class="col-12 mt-3 ps-0 d-flex flex-column align-items-lg-end">

    <p><?= GetMessage('TEXT_ARENDA'); ?></p>
    <?= A1expert::ShowPhone(true) ?>
    <?= A1expert::ShowSocials('MOBILE_HEADER') ?>
</div><br>

<h3>С этим инструментом также берут:</h3>
<div class="recomend-block">
    <? foreach ($arResult["PROPERTIES"]["DOP"]["VALUE"] as $analog): ?>
        <? $res = CIBlockElement::GetByID($analog); ?>
        <? if ($ar_res = $res->GetNext()) ?>
            <div class="recomend-card">
            <a href='<?= $ar_res["DETAIL_PAGE_URL"]; ?>'>
        <div class="image_wrapper_block">
            <img src="<?= CFile::GetPath($ar_res["PREVIEW_PICTURE"]) ?>">
        </div>
        <div class="recomend-card-title">
            <?= $ar_res["NAME"]; ?>
        </div>
        </a>
        </div>
    <? endforeach; ?>

</div>


<script>
    let content = document.getElementById("content")
    let show = document.getElementById("showContent")

    show.addEventListener("click", () => {
        if (content.style.display === "block") {
            content.style.display = "none"
        } else {
            content.style.display = "block"
        }
    })
</script>
