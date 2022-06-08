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

$this->setFrameMode(true);
//dd( count($arResult["ITEMS"]));
$slideCount=  ceil( count($arResult["ITEMS"]) / 4);
$slideCount=intval($slideCount);
?>
<div class="well well-small">
    <h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
    <div class="row-fluid">
        <div id="featured" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <ul class="thumbnails">
                            <li class="span3">
                                <div class="thumbnail">
                                    <i class="tag"></i>
                                    <a href="<?=$arResult["ITEMS"][0]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][0]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                    <div class="caption">
                                        <h5><?=$arResult["ITEMS"][0]["NAME"]?></h5>
                                        <h4><a class="btn" href="<?=$arResult["ITEMS"][0]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                            <span class="pull-right"><?=$arResult["ITEMS"][0]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <i class="tag"></i>
                                    <a href="<?=$arResult["ITEMS"][1]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][1]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                    <div class="caption">
                                        <h5><?=$arResult["ITEMS"][1]["NAME"]?></h5>
                                        <h4><a class="btn" href="<?=$arResult["ITEMS"][1]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                            <span class="pull-right"><?=$arResult["ITEMS"][1]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <i class="tag"></i>
                                    <a href="<?=$arResult["ITEMS"][2]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][2]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                    <div class="caption">
                                        <h5><?=$arResult["ITEMS"][2]["NAME"]?></h5>
                                        <h4><a class="btn" href="<?=$arResult["ITEMS"][2]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                            <span class="pull-right"><?=$arResult["ITEMS"][1]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                            <div class="thumbnail">
                                <i class="tag"></i>
                                <a href="<?=$arResult["ITEMS"][3]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][3]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                <div class="caption">
                                    <h5><?=$arResult["ITEMS"][3]["NAME"]?></h5>
                                    <h4><a class="btn" href="<?=$arResult["ITEMS"][3]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                        <span class="pull-right"><?=$arResult["ITEMS"][3]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnail">
                                <i class="tag"></i>
                                <a href="<?=$arResult["ITEMS"][4]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][4]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                <div class="caption">
                                    <h5><?=$arResult["ITEMS"][4]["NAME"]?></h5>
                                    <h4><a class="btn" href="<?=$arResult["ITEMS"][4]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                        <span class="pull-right"><?=$arResult["ITEMS"][4]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <i class="tag"></i>
                                <a href="<?=$arResult["ITEMS"][5]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][5]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                <div class="caption">
                                    <h5><?=TruncateText($arResult["ITEMS"][5]["NAME"], 16);?></h5>
                                    <h4><a class="btn" href="<?=$arResult["ITEMS"][5]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                        <span class="pull-right"><?=$arResult["ITEMS"][5]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <i class="tag"></i>
                                <a href="<?=$arResult["ITEMS"][6]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][6]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                <div class="caption">
                                    <h5><?=TruncateText($arResult["ITEMS"][6]["NAME"], 16);?></h5>
                                    <h4><a class="btn" href="<?=$arResult["ITEMS"][6]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                        <span class="pull-right"><?=$arResult["ITEMS"][6]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <i class="tag"></i>
                                <a href="<?=$arResult["ITEMS"][7]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][7]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                <div class="caption">
                                    <h5><?=TruncateText($arResult["ITEMS"][7]["NAME"], 16);?></h5>
                                    <h4><a class="btn" href="<?=$arResult["ITEMS"][7]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                        <span class="pull-right"><?=$arResult["ITEMS"][7]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnail">
                                <i class="tag"></i>
                                <a href="<?=$arResult["ITEMS"][8]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][8]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                <div class="caption">
                                    <h5><?=TruncateText($arResult["ITEMS"][8]["NAME"], 16);?></h5>
                                    <h4><a class="btn" href="<?=$arResult["ITEMS"][8]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                        <span class="pull-right"><?=$arResult["ITEMS"][8]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <i class="tag"></i>
                                <a href="<?=$arResult["ITEMS"][9]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][9]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                <div class="caption">
                                    <h5><?=TruncateText($arResult["ITEMS"][9]["NAME"], 16);?></h5>
                                    <h4><a class="btn" href="<?=$arResult["ITEMS"][9]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                        <span class="pull-right"><?=$arResult["ITEMS"][9]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <i class="tag"></i>
                                <a href="<?=$arResult["ITEMS"][10]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][10]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                <div class="caption">
                                    <h5><?=TruncateText($arResult["ITEMS"][10]["NAME"], 16);?></h5>
                                    <h4><a class="btn" href="<?=$arResult["ITEMS"][10]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                        <span class="pull-right"><?=$arResult["ITEMS"][10]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <i class="tag"></i>
                                <a href="<?=$arResult["ITEMS"][11]["DETAIL_PAGE_URL"]?>"><img src="<?=$arResult["ITEMS"][11]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
                                <div class="caption">
                                    <h5><?=TruncateText($arResult["ITEMS"][11]["NAME"], 16);?></h5>
                                    <h4><a class="btn" href="<?=$arResult["ITEMS"][11]["DETAIL_PAGE_URL"]?>">VIEW</a>
                                        <span class="pull-right"><?=$arResult["ITEMS"][11]["PRICES"]["BASE"]["PRINT_VALUE"]?>.00</span></h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#featured" data-bs-slide="prev">
                <span class="carousel-control" aria-hidden="true"><</span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#featured" data-bs-slide="next">
                <span class="carousel-control" aria-hidden="true"> ></span>
                <span class="visually-hidden">Next</span>
            </button>
<!--            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>-->
<!--            <a class="right carousel-control" href="#featured" data-slide="next">›</a>-->
        </div>
    </div>
</div>