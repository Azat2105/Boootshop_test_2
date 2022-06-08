<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="col">
    <h5>ACCOUNT</h5>
    <a href="<?=$arResult[0]["LINK"]?>"><?=$arResult[0]["TEXT"]?></a>
    <a href="<?=$arResult[1]["LINK"]?>"><?=$arResult[1]["TEXT"]?></a>
    <a href="<?=$arResult[2]["LINK"]?>"><?=$arResult[2]["TEXT"]?></a>
    <a href="<?=$arResult[3]["LINK"]?>"><?=$arResult[3]["TEXT"]?></a>
    <a href="<?=$arResult[4]["LINK"]?>"><?=$arResult[4]["TEXT"]?></a>

</div>
<div class="col">
    <h5>INFORMATION</h5>
    <a href="/contact/">CONTACT</a>
    <a href="<?=$arResult[5]["LINK"]?>"><?=$arResult[5]["TEXT"]?></a>
    <a href="<?=$arResult[6]["LINK"]?>"><?=$arResult[6]["TEXT"]?></a>
    <a href="<?=$arResult[7]["LINK"]?>"><?=$arResult[7]["TEXT"]?></a>
    <a href="<?=$arResult[8]["LINK"]?>"><?=$arResult[8]["TEXT"]?></a>
</div>
<div class="col">
    <h5>OUR OFFERS</h5>
    <a href="<?=$arResult[9]["LINK"]?>"><?=$arResult[9]["TEXT"]?></a>
    <a href="<?=$arResult[10]["LINK"]?>"><?=$arResult[10]["TEXT"]?></a>
    <a href="/special-offer/">SPECIAL OFFERS</a>
    <a href="<?=$arResult[11]["LINK"]?>"><?=$arResult[11]["TEXT"]?></a>
    <a href="<?=$arResult[12]["LINK"]?>"><?=$arResult[12]["TEXT"]?></a>
</div>
<?endif?>