<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $elementEdit
 * @var string $elementDelete
 * @var string $elementDeleteParams
 */

global $APPLICATION;
$discountPositionClass = '';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION'])) {
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos) {
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = '';
if (!empty($arParams['LABEL_PROP_POSITION'])) {
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos) {
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$arParams['~MESS_BTN_BUY'] = $arParams['~MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCT_TPL_MESS_BTN_BUY');
$arParams['~MESS_BTN_DETAIL'] = $arParams['~MESS_BTN_DETAIL'] ?: Loc::getMessage('CT_BCT_TPL_MESS_BTN_DETAIL');
$arParams['~MESS_BTN_COMPARE'] = $arParams['~MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCT_TPL_MESS_BTN_COMPARE');
$arParams['~MESS_BTN_SUBSCRIBE'] = $arParams['~MESS_BTN_SUBSCRIBE'] ?: Loc::getMessage('CT_BCT_TPL_MESS_BTN_SUBSCRIBE');
$arParams['~MESS_BTN_ADD_TO_BASKET'] = $arParams['~MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCT_TPL_MESS_BTN_ADD_TO_BASKET');
$arParams['~MESS_NOT_AVAILABLE'] = $arParams['~MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCT_TPL_MESS_PRODUCT_NOT_AVAILABLE');
$arParams['~MESS_SHOW_MAX_QUANTITY'] = $arParams['~MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCT_CATALOG_SHOW_MAX_QUANTITY');
$arParams['~MESS_RELATIVE_QUANTITY_MANY'] = $arParams['~MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCT_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['~MESS_RELATIVE_QUANTITY_FEW'] = $arParams['~MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCT_CATALOG_RELATIVE_QUANTITY_FEW');

$generalParams = array(
	'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
	'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
	'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
	'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
	'MESS_SHOW_MAX_QUANTITY' => $arParams['~MESS_SHOW_MAX_QUANTITY'],
	'MESS_RELATIVE_QUANTITY_MANY' => $arParams['~MESS_RELATIVE_QUANTITY_MANY'],
	'MESS_RELATIVE_QUANTITY_FEW' => $arParams['~MESS_RELATIVE_QUANTITY_FEW'],
	'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
	'USE_PRODUCT_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
	'PRODUCT_QUANTITY_VARIABLE' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
	'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
	'ADD_PROPERTIES_TO_BASKET' => $arParams['ADD_PROPERTIES_TO_BASKET'],
	'PRODUCT_PROPS_VARIABLE' => $arParams['PRODUCT_PROPS_VARIABLE'],
	'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'],
	'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
	'COMPARE_PATH' => $arParams['COMPARE_PATH'],
	'COMPARE_NAME' => $arParams['COMPARE_NAME'],
	'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
	'PRODUCT_BLOCKS_ORDER' => $arParams['PRODUCT_BLOCKS_ORDER'],
	'LABEL_POSITION_CLASS' => $labelPositionClass,
	'DISCOUNT_POSITION_CLASS' => $discountPositionClass,
	'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
	'SLIDER_PROGRESS' => $arParams['SLIDER_PROGRESS'],
	'~BASKET_URL' => $arParams['~BASKET_URL'],
	'~ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
	'~BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE'],
	'~COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
	'~COMPARE_DELETE_URL_TEMPLATE' => $arResult['~COMPARE_DELETE_URL_TEMPLATE'],
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
	'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
	'BRAND_PROPERTY' => $arParams['BRAND_PROPERTY'],
	'MESS_BTN_BUY' => $arParams['~MESS_BTN_BUY'],
	'MESS_BTN_DETAIL' => $arParams['~MESS_BTN_DETAIL'],
	'MESS_BTN_COMPARE' => $arParams['~MESS_BTN_COMPARE'],
	'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
	'MESS_BTN_ADD_TO_BASKET' => $arParams['~MESS_BTN_ADD_TO_BASKET'],
	'MESS_NOT_AVAILABLE' => $arParams['~MESS_NOT_AVAILABLE']
);

$obName = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $this->GetEditAreaId($this->randString()));
$containerName = 'catalog-top-container';
?>
<div class="offset-3 col">
    <div class="span9 w-100">
<!--        <div class="">-->
            <h3> Products Name <small class="pull-right"> 40 products are available </small></h3>
            <hr class="soft">
            <p>
                Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.
            </p>
            <hr class="soft">
            <form class="form-horizontal span6">
                <div class="control-group">
                    <label class="control-label alignL">Sort By </label>
                    <select>
                        <option>Priduct name A - Z</option>
                        <option>Priduct name Z - A</option>
                        <option>Priduct Stoke</option>
                        <option>Price Lowest first</option>
                    </select>
                </div>
            </form>
<!--        </div>-->
        <div id="myTab" class="pull-right w-100">
            <ul style="float: right">
                <li><a href="#tab_3" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a></li>
                <li><a href="#tab_4" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a></li>
            </ul>
            <br class="clr">
            <div class="tab-content" id="#tabs">
                <div class="tab-pane" id="tab_3">
                    <?foreach ($arResult["ITEMS"] as $arItem):?>
                    <div class="row">
                        <div class="col span2"">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                    </div>
                    <div class="col span4">
                        <h3>New | Available</h3>
                        <hr class="soft">
                        <h5><?=$arItem["NAME"]?></h5>
                        <p><?=$arItem["PREVIEW_TEXT"]?></p>
                        <a class="btn btn-small pull-right" href="<?=$arItem["DETAIL_PAGE_URL"]?>">View Details</a>
                        <br class="clr">
                    </div>
                    <div class="col span3 alignR">
                        <form class="form-horizontal qtyFrm">
                            <h3> <?=$arItem["PRICES"]["BASE"]["PRINT_VALUE"]?></h3>
                            <!--                            <label class="checkbox">-->
                            <!--                                <input type="checkbox" onchange="--><?//=$arItem["COMPARE_URL"]?><!--" style="margin: 4px 0px 0 5px !important;">Adds product to compair-->
                            <!--                            </label><br>-->
                            <a href="<?=$arItem["COMPARE_URL"]?>">Add to compair</a>
                            <a href="<?=$arItem["ADD_URL"]?>" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="btn btn-large"><i class="icon-zoom-in"></i></a>

                        </form>
                    </div>
                </div>
                <hr class="soft">
                <?endforeach;?>
            </div>

            <div class="tab-pane" id="tab_4">
                <ul class="thumbnails">
                    <?foreach ($arResult["ITEMS"] as $arItem):?>
                        <li style="width: 30%">
                            <div class="thumbnail">
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                <div class="caption">
                                    <h5><?=$arItem["NAME"]?></h5>
                                    <p><?=$arItem["PREVIEW_TEXT"]?></p>
                                    <h4 style="text-align:center"><a class="btn" href="<?=$arItem["DETAIL_PAGE_URL"]?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="<?=$arItem["ADD_URL"]?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="<?=$arItem["ADD_URL"]?>"> <?=$arItem["PRICES"]["BASE"]["PRINT_VALUE"]?></a></h4>
                                </div>
                            </div>
                        </li>

                    <?endforeach;?>
                </ul>
                <hr class="soft">
            </div>
        </div>
    </div>
    <a href="/compair/" class="btn btn-large pull-right">Compair Product</a>
    <br class="clr">
</div>
<script>
    $( function() {
        $( "#myTab" ).tabs();
    } );
</script>
</div>
