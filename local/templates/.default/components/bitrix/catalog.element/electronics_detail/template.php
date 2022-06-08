<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');

$templateLibrary = array('popup', 'fx');
$currencyList = '';
?>
<?
CModule::IncludeModule('iblock');
$arFilter = Array("IBLOCK_ID"=>$arResult["IBLOCK_ID"], "ID"=>$arResult["ID"]);
$res = CIBlockElement::GetList(Array(), $arFilter);
if ($ob = $res->GetNextElement()) {
    $arProps = $ob->GetProperties();
    $photo = $arProps['ATT_MORE_POTHO']['VALUE'];
}
?>
    <div class="row">
        <div id="gallery" class="col-4 span3">
            <a href="<?=CFile::GetPath($photo[0])?>" title="<?=$arResult["NAME"]?>">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" style="width:100%" alt="<?=$arResult["NAME"]?>">
            </a>
            <div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
<!--                    <div id="dialog" title="--><?//=$arResult["NAME"]?><!--">-->
                    <div class="item active d-flex " >
                        <a href="<?=CFile::GetPath($photo[0])?>"> <img  src="<?=CFile::GetPath($photo[0])?>" alt=""></a>
                        <a href="<?=CFile::GetPath($photo[1])?>"> <img  src="<?=CFile::GetPath($photo[1])?>" alt=""></a>
                        <a href="<?=CFile::GetPath($photo[2])?>"> <img  src="<?=CFile::GetPath($photo[2])?>" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="<?=CFile::GetPath($photo[2])?>"> <img style="width:40%" src="<?=CFile::GetPath($photo[2])?>" alt=""></a>
                        <a href="<?=CFile::GetPath($photo[0])?>"> <img style="width:40%" src="<?=CFile::GetPath($photo[0])?>" alt=""></a>
                        <a href="<?=CFile::GetPath($photo[1])?>"> <img style="width:40%" src="<?=CFile::GetPath($photo[1])?>" alt=""></a>
                    </div>
                </div>
                <!--
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                -->
            </div>

            <div class="btn-toolbar">
                <div class="btn-group">
                    <span class="btn"><i class="icon-envelope"></i></span>
                    <span class="btn"><i class="icon-print"></i></span>
                    <span class="btn"><i class="icon-zoom-in"></i></span>
                    <span class="btn"><i class="icon-star"></i></span>
                    <span class="btn"><i class=" icon-thumbs-up"></i></span>
                    <span class="btn"><i class="icon-thumbs-down"></i></span>
                </div>
            </div>
        </div>
        <div class="col span6">
            <h3><?=$arResult["NAME"]?>  </h3>
            <small>- <?=$arResult["PREVIEW_TEXT"]?></small>
            <hr class="soft">
            <form class="form-horizontal qtyFrm">
                <div class="control-group">
                    <label class="control-label"><span><?=$arResult["PRICES"]["BASE"]["PRINT_VALUE"]?></span></label>
                    <div class="controls">
                        <input type="number" class="span1" placeholder="Qty.">
                        <a href="<?=$arResult["ADD_URL"]?>" type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></a>
                    </div>
                </div>
            </form>

            <hr class="soft">
            <h4>100 items in stock</h4>
            <form class="form-horizontal qtyFrm pull-right">
                <div class="control-group">
                    <label class="control-label"><span>Color</span></label>
                    <div class="controls">
                        <select class="span2">
                            <option>Black</option>
                            <option>Red</option>
                            <option>Blue</option>
                            <option>Brown</option>
                        </select>
                    </div>
                </div>
            </form>
            <hr class="soft clr">
            <p><?=$arResult["DETAIL_TEXT"]?></p>
            <a class="btn btn-small pull-right" href="#detail">More Details</a>
            <br class="clr">
            <a href="#" name="detail"></a>
            <hr class="soft">
        </div>

        <div class="span9" id="tabs">
            <ul id="productDetail" class="nav nav-tabs" style="justify-content: flex-end;">
                <li><a href="#tab_1" data-toggle="tab">Product Details</a></li>
                <li><a href="#tab_2" data-toggle="tab">Related Products</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane" id="tab_1" >
                    <h4>Product Information</h4>
                    <table class="table table-bordered">
                        <tbody>
                        <tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1"><?=$arResult["PROPERTIES"]["ATT_PROD_BREND"]["NAME"]?> </td><td class="techSpecTD2"><?=$arResult["PROPERTIES"]["ATT_PROD_BREND"]["VALUE"]?></td></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1"><?=$arResult["PROPERTIES"]["ATT_PROD_MODEL"]["NAME"]?></td><td class="techSpecTD2"><?=$arResult["PROPERTIES"]["ATT_PROD_MODEL"]["VALUE"]?></td></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1"><?=$arResult["PROPERTIES"]["ATT_PROD_DATA"]["NAME"]?></td><td class="techSpecTD2"> <?=$arResult["PROPERTIES"]["ATT_PROD_DATA"]["VALUE"]?></td></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1"><?=$arResult["PROPERTIES"]["ATT_PROD_DEMI"]["NAME"]?></td><td class="techSpecTD2"><?=$arResult["PROPERTIES"]["ATT_PROD_DEMI"]["VALUE"]?></td></tr>
                        <tr class="techSpecRow"><td class="techSpecTD1"><?=$arResult["PROPERTIES"]["ATT_PROD_D_SIZE"]["NAME"]?></td><td class="techSpecTD2"><?=$arResult["PROPERTIES"]["ATT_PROD_D_SIZE"]["VALUE"]?></td></tr>
                        </tbody>
                    </table>

                    <h5><?=$arResult["PROPERTIES"]["ATT_PROD_FET"]["NAME"]?></h5>
                    <p><?=$arResult["PROPERTIES"]["ATT_PROD_FET"]["VALUE"]?></p>

                    <h4>Editorial Reviews</h4>
                    <h5><?=$arResult["PROPERTIES"]["ATT_PROD_DESCR"]["NAME"]?></h5>
                    <p><?=$arResult["PROPERTIES"]["ATT_PROD_DESCR"]["VALUE"]?></p>

                    <h5><?=$arResult["PROPERTIES"]["ATT_PROD_ZOOM"]["NAME"]?></h5>
                    <p><?=$arResult["PROPERTIES"]["ATT_PROD_ZOOM"]["VALUE"]?></p>

                    <h5><?=$arResult["PROPERTIES"]["ATT_PROD_IMP"]["NAME"]?></h5>
                    <p><?=$arResult["PROPERTIES"]["ATT_PROD_IMP"]["VALUE"]?></p>

                    <h5><?=$arResult["PROPERTIES"]["ATT_PROD_SHARP"]["NAME"]?></h5>
                    <p><?=$arResult["PROPERTIES"]["ATT_PROD_SHARP"]["VALUE"]?></p>
                </div>
                <div class="tab-pane" id="tab_2" >
<!--                    <div id="myTab" class="pull-right">-->
<!--                        <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>-->
<!--                        <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>-->
<!--                    </div>-->
<!--                    <br class="clr">-->
<!--                    <hr class="soft">-->
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.section",
                        "section_defolt",
                        array(
                            "ACTION_VARIABLE" => "action",
                            "ADD_PICT_PROP" => "-",
                            "ADD_PROPERTIES_TO_BASKET" => "Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "ADD_TO_BASKET_ACTION" => "ADD",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "BACKGROUND_IMAGE" => "-",
                            "BASKET_URL" => "/personal/cart/",
                            "BROWSER_TITLE" => "-",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COMPATIBLE_MODE" => "Y",
                            "CONVERT_CURRENCY" => "N",
                            "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                            "DETAIL_URL" => "/electronics/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                            "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_COMPARE" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "ELEMENT_SORT_FIELD" => "sort",
                            "ELEMENT_SORT_FIELD2" => "id",
                            "ELEMENT_SORT_ORDER" => "asc",
                            "ELEMENT_SORT_ORDER2" => "desc",
                            "ENLARGE_PRODUCT" => "STRICT",
                            "FILTER_NAME" => "arrFilter",
                            "HIDE_NOT_AVAILABLE" => "N",
                            "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                            "IBLOCK_ID" => "7",
                            "IBLOCK_TYPE" => "ELECTRONICS",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "LABEL_PROP" => array(
                            ),
                            "LAZY_LOAD" => "N",
                            "LINE_ELEMENT_COUNT" => "3",
                            "LOAD_ON_SCROLL" => "N",
                            "MESSAGE_404" => "",
                            "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                            "MESS_BTN_BUY" => "Купить",
                            "MESS_BTN_DETAIL" => "Подробнее",
                            "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                            "MESS_BTN_SUBSCRIBE" => "Подписаться",
                            "MESS_NOT_AVAILABLE" => "Нет в наличии",
                            "META_DESCRIPTION" => "-",
                            "META_KEYWORDS" => "-",
                            "OFFERS_FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "OFFERS_LIMIT" => "5",
                            "OFFERS_SORT_FIELD" => "sort",
                            "OFFERS_SORT_FIELD2" => "id",
                            "OFFERS_SORT_ORDER" => "asc",
                            "OFFERS_SORT_ORDER2" => "desc",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Товары",
                            "PAGE_ELEMENT_COUNT" => "6",
                            "PARTIAL_PRODUCT_PROPERTIES" => "N",
                            "PRICE_CODE" => array(
                                0 => "BASE",
                            ),
                            "PRICE_VAT_INCLUDE" => "Y",
                            "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                            "PRODUCT_DISPLAY_MODE" => "N",
                            "PRODUCT_ID_VARIABLE" => "id",
                            "PRODUCT_PROPS_VARIABLE" => "prop",
                            "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                            "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                            "PRODUCT_SUBSCRIPTION" => "Y",
                            "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                            "RCM_TYPE" => "personal",
                            "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
                            "SECTION_ID" => "",
                            "SECTION_ID_VARIABLE" => "SECTION_ID",
                            "SECTION_URL" => "/electronics/#SECTION_CODE_PATH#/",
                            "SECTION_USER_FIELDS" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SEF_MODE" => "Y",
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "N",
                            "SHOW_ALL_WO_SECTION" => "N",
                            "SHOW_CLOSE_POPUP" => "N",
                            "SHOW_DISCOUNT_PERCENT" => "N",
                            "SHOW_FROM_SECTION" => "N",
                            "SHOW_MAX_QUANTITY" => "N",
                            "SHOW_OLD_PRICE" => "N",
                            "SHOW_PRICE_COUNT" => "1",
                            "SHOW_SLIDER" => "Y",
                            "SLIDER_INTERVAL" => "3000",
                            "SLIDER_PROGRESS" => "N",
                            "TEMPLATE_THEME" => "blue",
                            "USE_ENHANCED_ECOMMERCE" => "N",
                            "USE_MAIN_ELEMENT_SECTION" => "N",
                            "USE_PRICE_COUNT" => "N",
                            "USE_PRODUCT_QUANTITY" => "N",
                            "COMPONENT_TEMPLATE" => "home_list",
                            "SEF_RULE" => "electronics/index.php",
                            "SECTION_CODE_PATH" => ""
                        ),
                        false
                    );?>
                    <br class="clr">
                </div>
            </div>
        </div>

    </div>
<script>
$( function() {
$( "#tabs").tabs();
} );
</script>
