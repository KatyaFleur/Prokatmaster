<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
?>
<? if (!empty($arResult)) : ?>

	<?
	foreach ($arResult as $arItem) :
		if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
			continue;
	?>
		<li class="nav-item"><a href="<?= $arItem["LINK"] ?>" class="nav-link px-2 text-muted"><?= $arItem["TEXT"] ?></a></li>
	<? endforeach ?>


<? endif ?>