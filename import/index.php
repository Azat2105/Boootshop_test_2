<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
?>
<?
$dir=$_SERVER['DOCUMENT_ROOT']."/import/tmp/";
$file=scandir($_SERVER['DOCUMENT_ROOT']."/import/tmp/",1);
$file=$file[0];
if ($file==="" || $file==="." || $file===".."){
return false;
}else{
    $handle = fopen($dir.$file, "r");
    if ($handle) {
        $counter = 0;
        $keys = array();
        $data = array();
        while (($buffer = fgets($handle)) !== false) {
            $counter++;
            //удаляем из прочитанной строки все символы переноса
            $buffer = str_replace(array("\r\n", "\r", "\n"), '', $buffer);
            $str =explode(";", $buffer);
            if ($counter===1){
                $keys = $str;
            }
            else{
                $el = array();
                foreach ($str as $key=>$item){
                    $el[$keys[$key]] = $item;
                }
                $data[] = $el;
            }
        }
        if (!feof($handle)) {
            echo "Error: unexpected fgets() fail\n";
        }
        fclose($handle);
        CModule::IncludeModule("iblock");
        foreach ($data as $key=>$el){
            $arSelect = array('ID', 'NAME'=>$el["IC_GROUP0"]);
            $arFilter = Array('IBLOCK_ID'=>7, 'GLOBAL_ACTIVE'=>'Y');
            $rsSection = CIBlockSection::GetList($arFilter, $arSelect);
            $rsSection=$rsSection->Fetch();
            $section_id=intval($rsSection["ID"]);

            $bs = new CIBlockElement;
            $PROP = array();
            $PROP['ATT_MORE_POTHO'] = $el["IP_PROP30"];
            $PROP['ATT_PROD_BREND'] = $el["IP_PROP31"];
            $PROP['ATT_PROD_MODEL'] = $el['IP_PROP32'];
            $PROP['ATT_PROD_DATA'] = $el['IP_PROP33'];
            $PROP['ATT_PROD_DEMI'] = $el['IP_PROP34'];
            $PROP['ATT_PROD_D_SIZE'] = $el['IP_PROP35'];
            $PROP['ATT_PROD_FET'] = $el['IP_PROP36'];
            $PROP['ATT_PROD_DESCR'] = $el['IP_PROP37'];
            $PROP['ATT_PROD_ZOOM'] = $el['IP_PROP38'];
            $PROP['ATT_PROD_IMP'] = $el['IP_PROP39'];
            $PROP['ATT_PROD_SHARP'] = $el['IP_PROP40'];
            $arFields = Array(
                "ACTIVE"          => $el["IE_ACTIVE"],
                "IBLOCK_ID"       => 7,
                "IBLOCK_SECTION_ID"  =>$section_id,
//                "CODE"            =>$el["IE_CODE"],
                "NAME"            => $el["IE_NAME"],
                "XML_ID"          => $el['IE_XML_ID'],
                "PROPERTY_VALUES" => $PROP,
                "PREVIEW_TEXT"    => $el["IE_PREVIEW_TEXT"],
                "DETAIL_TEXT"     => $el["IE_DETAIL_TEXT"],
                "PREVIEW_PICTURE" => CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"].$el["IE_PREVIEW_PICTURE"]),
                "DETAIL_PICTURE"  => CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"].$el["IE_DETAIL_PICTURE"])
            );
            if($PRODUCT_ID = $bs->Update($el["IE_ID"],$arFields)){
                unlink($dir.$file);
            }
            else{
                echo $key.'.Error: '.$bs->LAST_ERROR.'<br>';
            }
        }
    }

}
?>
