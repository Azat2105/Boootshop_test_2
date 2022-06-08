<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</div>
</div>
<footer>
    <div id="footerSection">
        <div class="container">
            <div class="row">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "bootom_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "bottom",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
                <div id="socialMedia" class="col pull-right">
                    <h5>SOCIAL MEDIA </h5>
                    <a href="#"><img width="60" height="60" src="<?=DEFAULT_TEMPLATE_PATH?>/img/facebook.png" title="facebook" alt="facebook"></a>
                    <a href="#"><img width="60" height="60" src="<?=DEFAULT_TEMPLATE_PATH?>/img/twitter.png" title="twitter" alt="twitter"></a>
                    <a href="#"><img width="60" height="60" src="<?=DEFAULT_TEMPLATE_PATH?>/img/youtube.png" title="youtube" alt="youtube"></a>
                </div>
            </div>
            <p class="pull-right">© Bootshop</p>
        </div>
    </div>
</footer>

</body>
</html>
