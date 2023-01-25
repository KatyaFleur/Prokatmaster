<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |    Attention!
 * |    The following comments are for system use
 * |    and are required for the component to work correctly in ajax mode:
 * |    <!-- items-container -->
 * |    <!-- pagination-container -->
 * |    <!-- component-end -->
 */
$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$elementDeleteParams = array('CONFIRM' => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));
$this->setFrameMode(true);
?>
<div class="px-0 cards mb-5">
    <? foreach ($arResult['ITEMS'] as $arItem) : ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $elementEdit);
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $elementDelete, $elementDeleteParams);
        ?>
        <a id="<?= $this->GetEditAreaId($arItem['ID']); ?>" href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="card">
            <div class="stickers">
                <? if ($arItem["DISPLAY_PROPERTIES"]['NEW']) { ?>
                    <div class="sticker-new">Новинка</div>
                <? } ?>
                <? if ($arItem["DISPLAY_PROPERTIES"]['EXPERT']) { ?>
                    <div class="sticker-expert">Выбор эксперта</div>
                <? } ?>
                <? if ($arItem["DISPLAY_PROPERTIES"]['LIDER']) { ?>
                    <div class="sticker-lider">Лидер продаж</div>
                <? } ?>
            </div>

            <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="card-img-top">
            <? if ($arItem["DISPLAY_PROPERTIES"]['DEPOSIT']) { ?>
                <div class="deposit"><span class="deposit-info">
<?= $arItem["DISPLAY_PROPERTIES"]['DEPOSIT']['NAME'] ?>: <?= $arItem["DISPLAY_PROPERTIES"]['DEPOSIT']['VALUE'] ?>
				</span>
                </div>
            <? } ?>
            <div class="card-body">
                <h6 class="card-title"><?= $arItem['NAME'] ?></h6>
                <div class="card-text">
                    <? if ($arItem["DISPLAY_PROPERTIES"]['PREVIEW_INFO']) { ?>
                        <div class="preview-info">
                            <?= $arItem["DISPLAY_PROPERTIES"]['PREVIEW_INFO']['VALUE'] ?>

                        </div>
                    <? } ?>
                    <? //= $arItem['~PREVIEW_TEXT'] ?>
                    <div class="price">
						<span class="values_wrapper">
							<span class="price_value"><?= $arItem["PROPERTIES"]["PRICE"]["VALUE"] ?></span>
							<span class="price_currency">₽</span>
							<span class="price_measure">/сутки</span>
						</span>

                    </div>
                </div>
            </div>
        </a>
    <? endforeach; ?>
</div>
<div class="description-section px-0">
    <?= $arResult['DESCRIPTION'] ?>
</div>