<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
//dd($arResult);
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>
<div id="welcomeLine" class="row" style="align-items: center;">
<?if (!$compositeStub && $arParams['SHOW_AUTHOR'] == 'Y'):?>
		<?if ($USER->IsAuthorized()):
			$name = trim($USER->GetFullName());
			if (! $name)
				$name = "User";
			?>
            <div class="span6 col-3">Welcome! <strong><a href="<?=$arParams['PATH_TO_PROFILE']?>"></a><?= htmlspecialcharsbx($name)?> </strong></div>
		<?endif?>
<?endif?>
<div class="span6 offset-4 col-5 text-right d-flex" style="width: 40%">
		<?
		if (!$arResult["DISABLE_USE_BASKET"]) {
			?>
                <div>
                    <a href="#"><span class="">Fr</span></a>
                    <a href="#"><span class="">Es</span></a>
                    <a href="/"><span class="btn btn-mini">En</span></a>
                </div>
                <div>
            <span class="btn btn-mini"><?=$arResult['TOTAL_PRICE']?></span>
            <a href="<?=$arParams['PATH_TO_BASKET']?>">
                <span class="btn btn-mini btn-primary">
                    <i class="icon-shopping-cart icon-white"></i>
                    <?=$arResult["PRODUCTS"]?> </span> </a>
                </div>
			<?
		}
        ?>
	</div>
</div>