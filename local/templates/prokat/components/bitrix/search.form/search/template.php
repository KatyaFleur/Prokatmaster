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
$this->setFrameMode(true); ?>
<form action="<?= $arResult["FORM_ACTION"] ?>" class="col-12  mb-3 mb-lg-0 me-lg-3" role="search">
	<input type="search" class="form-control  text-center" placeholder="<?=GetMessage("A1EXPERT_PROKAT_POISK_PO_SAYTU")?>" aria-label="Search" name="q" value="">
	<input class="d-none" name="s" type="submit" value="<?= GetMessage("BSF_T_SEARCH_BUTTON"); ?>" />
</form>