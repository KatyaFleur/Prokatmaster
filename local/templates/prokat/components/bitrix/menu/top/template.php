<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
$padding = $arParams['IS_MOBILE'] == 'Y' ? 0 : 2;
?>
<? if (!empty($arResult)) : ?>
	<? if ($APPLICATION->GetCurPage() != SITE_DIR) : ?>
		<li><a href="<?=SITE_DIR?>" class="nav-link ps-0 link-danger font-weight-bold"><strong><?= GetMessage('CATALOG') ?></strong></a></li>
	<? endif ?>
	<?
	foreach ($arResult as $arItem) :
		if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
			continue;
	?>
		<? if ($arItem["SELECTED"]) : ?>
			<li><a href="<?= $arItem["LINK"] ?>" class="nav-link <?= $arParams['IS_MOBILE'] != 'Y' ? 'text-center' : '' ?> px-<?= $padding ?> link-secondary"><?= $arItem["TEXT"] ?></a></li>
		<? else : ?>
			<li><a href="<?= $arItem["LINK"] ?>" class="nav-link <?= $arParams['IS_MOBILE'] != 'Y' ? 'text-center' : '' ?> px-<?= $padding ?> link-dark"><?= $arItem["TEXT"] ?></a></li>
		<? endif ?>

	<? endforeach ?>


<? endif ?>