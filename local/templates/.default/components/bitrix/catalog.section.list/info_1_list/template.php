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
$cnt=0;
?>
<h6 style="font-size: 12px !important;" class="ui-accordion-header ui-corner-top ui-state-default ui-accordion-icons ui-accordion-header-active ui-state-active" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="true" aria-expanded="true" tabindex="0">
<!--    <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>-->
    <?=$arParams["IBLOCK_TYPE"]?> [<?=$cnt?>]</h6>
<div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content p-0" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="height: auto !important; display: none;">
    <ul class="m-0 p-0" style="list-style: none">
<?php foreach ($arResult["SECTIONS"] as $sections=>$section):?>
    <?
    $this->AddEditAction($section['ID'], $section['EDIT_LINK'], CIBlock::GetArrayByID($section["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($section['ID'], $section['DELETE_LINK'], CIBlock::GetArrayByID($section["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
            <li style="font-size: 14px;padding: 3px 0"><i class="icon-chevron-right"></i>
                <a href="<?=$section["SECTION_PAGE_URL"];?>">
                    <?=$section["NAME"]?>(<?=$section["ELEMENT_CNT"]?>)
                </a>
            </li>
   <?php
    $cnt+=$section["ELEMENT_CNT"];
    ?>
<?php endforeach;?>
    </ul>
</div>





