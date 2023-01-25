<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?

use \Bitrix\Main\Config\Option;

IncludeTemplateLangFile(__FILE__);
?>
</main>
<?
$iframe = Option::get('a1expert.prokat', 'IFRAME');
if ($APPLICATION->GetProperty('show_map') == 'Y' && $iframe) : ?>
    <div class="container">
        <div class="px-0 pt-5 my-5 text-center">
            <h2 class="fw-bold">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        'PATH' => SITE_DIR . 'include/footer_map.php'
                    )
                ); ?>
            </h2>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4"><?= Option::get('a1expert.prokat', 'ADDRESS') ?></p>
            </div>
            <div class="map">
                <?= $iframe ?>
            </div>
        </div>
    </div>
<? endif; ?>

<div class="container">
    <footer class="py-3 my-4 border-top">

        <div class="d-flex flex-column flex-md-row justify-content-center justify-content-sm-between align-items-center flex-wrap">
            <div class="col-auto d-flex align-items-center">
                <span class="mb-0 text-muted">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            'PATH' => SITE_DIR . 'include/copyright.php'
                        )
                    ); ?>
                </span>
            </div>
            <ul class="nav col-auto justify-content-center pb-0 mb-0">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "bottom",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "bottom",
                        "USE_EXT" => "N",
                        'IS_MOBILE' => 'Y'
                    )
                ); ?>
            </ul>

            <?= A1expert::ShowSocials('FOOTER') ?>
        </div>
    </footer>
    <div class="creators mx-auto mb-5 mx-lg-0 ms-lg-auto" style="width: max-content;">
       <!-- <a href="https://a1-reklama.ru/" class="d-flex flex-column align-items-center" target="_blank">
            <p><?= GetMessage('DEV') ?></p>
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/a1_logo.png" alt="a1" width="112" height="41">
        </a>-->
    </div>
</div>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/jquery.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/jquery.fancybox.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/main.js"></script>
</body>

</html>