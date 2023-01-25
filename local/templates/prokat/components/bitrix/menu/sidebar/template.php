<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
?>
<? if (!empty($arResult)) : ?>
    <div class="d-none d-lg-flex flex-column flex-shrink-0 p-3 bg-light col-3">
        <ul class="nav nav-pills flex-column mb-auto">
            <?
            foreach ($arResult as $arItem) :
                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
            ?>

                <li>
                    <a href="<?= $arItem["LINK"] ?>" class="nav-link <?= $arItem['SELECTED'] ? 'active' : 'link-dark' ?>">
                        <?= $arItem['TEXT'] ?>
                    </a>
                </li>

            <? endforeach ?>

        </ul>
    </div>

<? endif ?>