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

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<? if (!empty($arResult['SECTIONS'])) : ?>

    <div class="alert alert-secondary my-3 py-2 text-center fs-5" role="alert">
        <?= GetMessage('TITLE'); ?>
    </div>
    <div class="px-0 mb-5">
        <div class="sections-block">

            <? foreach ($arResult['SECTIONS'] as $section) : ?>
                <?
                if ($section['ELEMENT_CNT'] == 0) continue;
                $this->AddEditAction($section['ID'], $section['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($section['ID'], $section['DELETE_LINK'], $strSectionDelete, $sectionDeleteParams);
                ?>

                <div class="sections-block-item">
                    <div class="img-block" style="background-image:url('<?= $section['PICTURE']['SRC'] ?>')"></div>

                    <div class="wrap_tizer  left_blocks light_text">
                        <div class="wrapper_inner_tizer">
<span class="sections-block-item-title"> 
<a class="sections-block-item-text" href="<?= $section['SECTION_PAGE_URL'] ?>">
	<span class="sections-block-item-inner-text"><?= $section['NAME'] ?></span>
</a>
 </span>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>

        </div>
    </div>
<? endif; ?>

