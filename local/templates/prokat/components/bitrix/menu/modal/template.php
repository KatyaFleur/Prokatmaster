<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
?>
<? if (!empty($arResult)) : ?>
    <!-- Mobile Catalog -->
    <button type="button" class="btn btn-primary d-lg-none w-100" data-bs-toggle="modal" data-bs-target="#catalog">
        <?=GetMessage("CATALOG")?></button>
    <div class="modal fade" tabindex="-1" id="catalog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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

            </div>
        </div>
    </div>
<? endif ?>