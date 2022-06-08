<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Page\Asset;
?>
<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <?php $APPLICATION->ShowHead();?>
        <title><?php $APPLICATION->ShowTitle();?></title>
        <?$APPLICATION->ShowMeta("keywords")?>
        <?$APPLICATION->ShowMeta("description")?>
    <?php
    Asset::getInstance()->addString('<meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">');
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
//    CJSCore::Init(['jquery']);
    Asset::getInstance()->addString('<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">');
    Asset::getInstance()->addString('<script src="https://code.jquery.com/jquery-3.6.0.js"></script>');
    Asset::getInstance()->addString('<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>');

    Asset::getInstance()->addString('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">');
//    Asset::getInstance()->addString('<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>');
    Asset::getInstance()->addString(' <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>');

    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH .'/fontawesome/css/all.css');
//    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH .'//css/owl.carousel.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH .'/css/style.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH .'/css/media.css');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH .'/fontawesome/js/script.js');
//    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH .'/js/jquery.js');
//    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH .'/js/owl.carousel.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH .'/js/bootstrap.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH .'/js/script.js');
    ?>
    </head>
    <body>
    <div id="panel"><?php $APPLICATION->ShowPanel(); ?> </div>
    <div id="header">
        <div class="container">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => DEFAULT_TEMPLATE_PATH."/includes/sale.php"
                )
            );?>
            <!-- Navbar ================================================== -->

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => DEFAULT_TEMPLATE_PATH."/includes/menu.php"
                )
            );?>

            <div class="col-4">
                <div id="sidebar"  class="span3" style="
                <?
                if($_SERVER["REQUEST_URI"]==="/" || $_SERVER["REQUEST_URI"]==="/?".$_SERVER["QUERY_STRING"]) echo "position: absolute; top: 725px; left: 280px;";
                if($_SERVER["REQUEST_URI"]==="/contact/") echo "display:none";
                ?>">
                    <div class="well well-small">
                        <a id="myCart" href="/personal/cart/">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>img/ico-cart.png" alt="cart">3 Items in your cart
                            <span class="badge badge-warning pull-right">$155.00</span>
                        </a>
                    </div>
                    <div id="accordion" class="ui-accordion ui-widget ui-helper-reset" role="tablist">
<!--#1111111111111-->
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"info_1_list", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "ELECTRONICS",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "/electronics/#SECTION_CODE_PATH#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LIST",
		"COMPONENT_TEMPLATE" => "info_1_list"
	),
	false
);?>
<!--#22222222222222-->
                       <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"info_1_list", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "CLOTHES",
        "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "/electronics/#SECTION_CODE_PATH#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "TEXT",
		"COMPONENT_TEMPLATE" => "info_1_list",
		"HIDE_SECTION_NAME" => "N"
	),
	false
);?>
<!--#3333333333333333 -->
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:catalog.section.list",
                            "info_1_list",
                            Array(
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "COUNT_ELEMENTS" => "Y",
                                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                                "FILTER_NAME" => "sectionsFilter",
                                "IBLOCK_ID" => "14",
                                "IBLOCK_TYPE" => "FOOD_AND_BEVERAGES",
                                "SECTION_CODE" => "",
                                "SECTION_FIELDS" => array("", ""),
                                "SECTION_ID" => $_REQUEST["SECTION_CODE"],
                                "SECTION_URL" => "/electronics/#SECTION_CODE_PATH#/",
                                "SECTION_USER_FIELDS" => array("", ""),
                                "SHOW_PARENT_NAME" => "Y",
                                "TOP_DEPTH" => "2",
                                "VIEW_MODE" => "TEXT"
                            )
                        );?>
 <!--#4444444444444444 -->
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:catalog.section.list",
                            "info_1_list",
                            Array(
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "COUNT_ELEMENTS" => "Y",
                                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                                "FILTER_NAME" => "sectionsFilter",
                                "IBLOCK_ID" => "9",
                                "IBLOCK_TYPE" => "HEALTH_BEAUTY",
                                "SECTION_CODE" => "",
                                "SECTION_FIELDS" => array("",""),
                                "SECTION_ID" => $_REQUEST["SECTION_CODE"],
                                "SECTION_URL" => "/electronics/#SECTION_CODE_PATH#/",
                                "SECTION_USER_FIELDS" => array("",""),
                                "SHOW_PARENT_NAME" => "Y",
                                "TOP_DEPTH" => "2",
                                "VIEW_MODE" => "TEXT"
                            )
                        );?>
<!--#555555555555555555555-->
                    <?$APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "info_1_list",
    Array(
        "ADD_SECTIONS_CHAIN" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COUNT_ELEMENTS" => "Y",
        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
        "FILTER_NAME" => "sectionsFilter",
        "IBLOCK_ID" => "9",
        "IBLOCK_TYPE" => "SPORTS_LEISURE",
        "SECTION_CODE" => "",
        "SECTION_FIELDS" => array("", ""),
        "SECTION_ID" => $_REQUEST["SECTION_CODE"],
        "SECTION_URL" => "/electronics/#SECTION_CODE_PATH#/",
        "SECTION_USER_FIELDS" => array("", ""),
        "SHOW_PARENT_NAME" => "Y",
        "TOP_DEPTH" => "2",
        "VIEW_MODE" => "TEXT"
    )
);?>
<!--#66666666666-->
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:catalog.section.list",
                            "info_1_list",
                            Array(
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "COUNT_ELEMENTS" => "Y",
                                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                                "FILTER_NAME" => "sectionsFilter",
                                "IBLOCK_ID" => "12",
                                "IBLOCK_TYPE" => "BOOKS_ENTERTAINMENTS",
                                "SECTION_CODE" => "",
                                "SECTION_FIELDS" => array("", ""),
                                "SECTION_ID" => $_REQUEST["SECTION_CODE"],
                                "SECTION_URL" => "/electronics/#SECTION_CODE_PATH#/",
                                "SECTION_USER_FIELDS" => array("", ""),
                                "SHOW_PARENT_NAME" => "Y",
                                "TOP_DEPTH" => "2",
                                "VIEW_MODE" => "TEXT"
                            )
                        );?>

                    </div>
                    <script>
                        $( function() {
                            $( "#accordion" ).accordion({
                                collapsible: true
                            });
                        } );
                    </script>
                    <div class="thumbnail">
                        <img src="/upload/iblock/fe0/47108wugmvxrglx7reydgww19d6odlr9.jpg" alt="Bootshop panasonoc New camera">
                        <div class="caption">
                            <h5>Panasonic</h5>
                            <h4 style="text-align:center"><a class="btn" href="electronics/cameras/fujifilm-finepix-s2950-digital-camera6/">
                                    <i class="icon-zoom-in"></i></a> <a class="btn" href="/?action=ADD2BASKET&id=329">Add to <i class="icon-shopping-cart"></i></a>
                                <a class="btn btn-primary" href="/?action=ADD2BASKET&id=329">$222.00</a></h4>
                        </div>
                    </div><br>
                    <div class="thumbnail">
                        <img src="/upload/iblock/3e4/gr81wvazs907vxnw40qvrhf9ba68aot3.jpg" title="Bootshop New Kindel" alt="Bootshop Kindel">
                        <div class="caption">
                            <h5>Kindle</h5>
                            <h4 style="text-align:center"><a class="btn" href="electronics/sound-vision/san-desk/"> <i class="icon-zoom-in"></i></a>
                                <a class="btn" href="/?action=ADD2BASKET&id=330">Add to <i class="icon-shopping-cart"></i></a>
                                <a class="btn btn-primary" href="/?action=ADD2BASKET&id=330">$222.00</a></h4>
                        </div>
                    </div><br>
                    <div class="thumbnail">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>img/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
                        <div class="caption">
                            <h5>Payment Methods</h5>
                        </div>
                    </div>
                </div>
            </div>

<div class="offset-3 col" style="<?if($_SERVER["REQUEST_URI"]==="/")echo "display:none;";?>">
    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "",
        Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );?>
</div>


<!--    #################-->
