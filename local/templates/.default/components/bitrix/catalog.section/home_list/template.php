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
?>
<h4>Latest Products </h4>
<ul class="thumbnails">
    <?foreach ($arResult["ITEMS"] as $arItem):?>

    <li class="span3" style="width: 30% !important;">
        <div class="thumbnail" style="margin-bottom: 50px">
            <a href="<?=strtolower( $arItem["DETAIL_PAGE_URL"])?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
            <div class="caption">
                <h5><?=TruncateText($arItem["NAME"],16)?></h5>
                <p>
                    <?=TruncateText($arItem["PREVIEW_TEXT"],22)?>
                </p>

                <h4 style="text-align:center">
                    <a class="btn" href="<?=strtolower( $arItem["DETAIL_PAGE_URL"])?>"> <i class="icon-zoom-in"></i></a>
                    <a class="btn" href="<?=$arItem["ADD_URL"]?>">Add to <i class="icon-shopping-cart"></i>
                    </a> <a class="btn btn-primary" href="<?=$arItem["ADD_URL"]?>"><?=$arItem["PRICES"]["BASE"]["PRINT_VALUE"]?></a></h4>
            </div>
        </div>
    </li>
   <?endforeach;?>
</ul>
