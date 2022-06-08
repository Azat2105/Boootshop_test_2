<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */
//["COMPARE_DELETE_URL"]
//["COMPARE_URL"]
//dd($arResult["ITEMS"]);
$this->setFrameMode(true);

if (!empty($arResult['NAV_RESULT'])) {
	$navParams =  array(
		'NavPageCount' => $arResult['NAV_RESULT']->NavPageCount,
		'NavPageNomer' => $arResult['NAV_RESULT']->NavPageNomer,
		'NavNum' => $arResult['NAV_RESULT']->NavNum
	);
} else {
	$navParams = array(
		'NavPageCount' => 1,
		'NavPageNomer' => 1,
		'NavNum' => $this->randString()
	);
}

$showTopPager = false;
$showBottomPager = false;
$showLazyLoad = false;

if ($arParams['PAGE_ELEMENT_COUNT'] > 0 && $navParams['NavPageCount'] > 1) {
	$showTopPager = $arParams['DISPLAY_TOP_PAGER'];
	$showBottomPager = $arParams['DISPLAY_BOTTOM_PAGER'];
	$showLazyLoad = $arParams['LAZY_LOAD'] === 'Y' && $navParams['NavPageNomer'] != $navParams['NavPageCount'];
}
$templateLibrary = array('popup', 'ajax', 'fx');
$currencyList = '';
//phpinfo();
//dd( trim($_SERVER['QUERY_STRING'],"&"));
?>
<div class="<?if($_SERVER["REQUEST_URI"]==="/specials-offer/" || $_SERVER["REQUEST_URI"]==="/specials-offer/"."?".$_SERVER["QUERY_STRING"])echo "offset-3 col";?>">
    <div class="span9 w-100 ">
        <div class="<?if($_SERVER["REQUEST_URI"]==="/electronics/" || $_SERVER["REQUEST_URI"]==="/electronics/". trim($_SERVER['QUERY_STRING'],"&"))echo "d-none";?>">
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
        </div>
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
        <a href="/compair/" class="btn btn-large pull-right <?if($_SERVER["REQUEST_URI"]==="/electronics/". trim($_SERVER['QUERY_STRING'],"&"))echo "d-none";?>">Compair Product</a>
        <br class="clr">
    </div>
   <script>
    $( function() {
    $( "#myTab" ).tabs();
    } );
    </script>
<?php
if ($showBottomPager){
	?>
        <div class="<?if($_SERVER["REQUEST_URI"]==="/electronics/" || $_SERVER["REQUEST_URI"]==="/electronics/". trim($_SERVER['QUERY_STRING'],"&"))echo "d-none";?>">
	<div  data-pagination-num="<?=$navParams['NavNum']?>">
		<!-- pagination-container -->
		<?=$arResult['NAV_STRING']?>
		<!-- pagination-container -->
	</div>
        </div>
	<?
}
?>
</div>
