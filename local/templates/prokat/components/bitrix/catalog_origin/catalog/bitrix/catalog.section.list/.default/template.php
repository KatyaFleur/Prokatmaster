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
	<div class="px-0 cards mb-5">

		<? foreach ($arResult['SECTIONS'] as $section) : ?>
			<?
			if ($section['ELEMENT_CNT'] == 0) continue;
			$this->AddEditAction($section['ID'], $section['EDIT_LINK'], $strSectionEdit);
			$this->AddDeleteAction($section['ID'], $section['DELETE_LINK'], $strSectionDelete, $sectionDeleteParams);
			?>
			<a id="<?= $this->GetEditAreaId($section['ID']); ?>" href="<?= $section['SECTION_PAGE_URL'] ?>" class="card ">
				<img src="<?= $section['PICTURE']['SRC'] ?>" class="card-img-top">
				<div class="card-body">
					<h6 class="card-title"><?= $section['NAME'] ?></h6>
				</div>
			</a>
		<? endforeach; ?>

	</div>
<? endif; ?>