<?

foreach ($arResult as $key => $arItem) :
    $arResult[$key]['LINK'] = substr(SITE_DIR, 0, -1) . $arItem['LINK'];
    if (strpos($_SERVER['REQUEST_URI'], $arItem['LINK']) !== false) $arResult[$key]['SELECTED'] = true;
endforeach;
