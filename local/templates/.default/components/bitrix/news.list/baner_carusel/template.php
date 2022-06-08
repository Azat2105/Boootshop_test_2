<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);
//dd($arResult["ITEMS"][0]["PREVIEW_PICTURE"]["SRC"]);
?>
<div class="position-relative">
<div class="container">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
<?foreach($arResult["ITEMS"] as $i=> $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<?if($i===0):?>
       <div class="carousel-item active" data-bs-interval="2000">
        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="d-block w-100" alt="<?=$arItem["NAME"]?>">
    </div>
        <?else:?>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="d-block w-100" alt="<?=$arItem["NAME"]?>">
        </div>
        <?endif;?>
<?endforeach;?>
    </div>

</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control" aria-hidden="true"><</span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control" aria-hidden="true"> ></span>
    <span class="visually-hidden">Next</span>
</button>
</div>
