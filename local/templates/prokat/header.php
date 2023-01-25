<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Loader;

Loader::includeModule("a1expert.prokat");
$asset = Asset::getInstance();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><? $APPLICATION->ShowTitle() ?></title>
	<?
	$asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.min.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/jquery.fancybox.min.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');

	$APPLICATION->ShowHead(); ?>
</head>

<body>
	<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<header class="container d-none d-xl-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-1 px-0">
<a href="/" class="d-flex align-items-center col-md-auto mb-2 mb-md-0 text-dark text-decoration-none">
<? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        'PATH' => SITE_DIR . 'include/logo.php'
                    )
                ); ?>
                            <div class="ms-3">
                                <h4 class="mb-1">Делай с нами!</h4>
                                <p class="mb-0">Делай мастерски!</p>
                            </div>
	</a>
		<?//= A1expert::ShowLogo('DESKTOP'); ?>

		<div class="col-md-auto">
			<ul class="nav col-12  mb-2 justify-content-center flex-nowrap mb-md-0">
				<? $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"top",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N"
					)
				); ?>
			</ul>

			<? $APPLICATION->IncludeComponent(
				"bitrix:search.form",
				"search",
				array(
					"PAGE" => "#SITE_DIR#search/",
					"USE_SUGGEST" => "N"
				)
			); ?>
		</div>


		<div class="col-md-auto text-end">
			<?= A1expert::ShowPhone() ?>
			<?= A1expert::ShowAddress() ?>
			<?= A1expert::ShowEmail() ?>
			<?= A1expert::ShowSocials('DESKTOP_HEADER') ?>
		</div>

	</header>

	<div class="header-mobile container d-xl-none">
		<nav class="navbar navbar-expand-xl rounded" aria-label="Eleventh navbar example">
			<div class="container-fluid px-0">
				<?= A1expert::ShowLogo('MOBILE'); ?>
				<? $APPLICATION->IncludeComponent(
					"bitrix:search.form",
					"search-mobile",
					array(
						"PAGE" => "#SITE_DIR#search/",
						"USE_SUGGEST" => "N"
					)
				); ?>
				<button class="navbar-toggler collapsed px-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="navbar-collapse collapse" id="navbarsExample09" style="">
					<ul class="nav flex-column col-12 col-md-auto mb-2 justify-content-center mb-md-0">
						<? $APPLICATION->IncludeComponent(
							"bitrix:menu",
							"top",
							array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "left",
								"DELAY" => "N",
								"MAX_LEVEL" => "1",
								"MENU_CACHE_GET_VARS" => array(""),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "top",
								"USE_EXT" => "N",
								'IS_MOBILE' => 'Y'
							)
						); ?>
					</ul>

					<div>
						<?= A1expert::ShowPhone() ?>
						<?= A1expert::ShowAddress() ?>
						<?= A1expert::ShowEmail() ?>
						<?= A1expert::ShowSocials('MOBILE_HEADER') ?>
					</div>
				</div>
			</div>
		</nav>
	</div>

	<div class="container mb-4">
		<h1 class="mx-auto col-12 mt-1 text-center"><? $APPLICATION->ShowTitle(false); ?></h1>
		<hr>
	</div>
	<main class="container">