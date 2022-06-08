<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

?>
<h4 class="mx-3">Search Result </h4>
<hr class="soft">
<?php if (empty($arResult['SEARCH'])):?>
    <h5>Nothing not definition!!!</h5>
<?php else:?>
<div class="tab-pane" id="tab_3">
    <?foreach ($arResult["SEARCH"] as $arItem):?>
        <div class="row">
        <div class="col span4">
            <h5><?=$arItem["TITLE_FORMATED"]?></h5>
            <p><?=$arItem["BODY_FORMATED"]?></p>
            <a class="btn btn-small pull-right" href="<?=strtolower($arItem["URL_WO_PARAMS"])?>">View Details</a>
            <br class="clr">
        </div>
        </div>
        <hr class="soft">
    <?endforeach;?>
</div>
<?php endif;?>