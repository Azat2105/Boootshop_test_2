<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div id="logoArea" class="navbar">
        <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-inner w-100">
            <a class="brand" href="/"><img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo.png" alt="Bootsshop"></a>

            <?$APPLICATION->IncludeComponent("bitrix:search.title", "template_search", Array(
                "CATEGORY_0" => array(	// Ограничение области поиска
                    0 => "no",
                ),
                "CATEGORY_0_TITLE" => "",	// Название категории
                "CHECK_DATES" => "N",	// Искать только в активных по дате документах
                "CONTAINER_ID" => "title-search",	// ID контейнера, по ширине которого будут выводиться результаты
                "INPUT_ID" => "title-search-input",	// ID строки ввода поискового запроса
                "NUM_CATEGORIES" => "1",	// Количество категорий поиска
                "ORDER" => "date",	// Сортировка результатов
                "PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                "SHOW_INPUT" => "Y",	// Показывать форму ввода поискового запроса
                "SHOW_OTHERS" => "N",	// Показывать категорию "прочее"
                "TOP_COUNT" => "5",	// Количество результатов в каждой категории
                "USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
            ),
                false
            );?>
<!--            <form class="form-inline navbar-search" method="post" action="products.html">-->
<!--                <input id="srchFld" class="srchTxt" type="text">-->
<!--                <select class="srchTxt">-->
<!--                    <option>All</option>-->
<!--                    <option>CLOTHES </option>-->
<!--                    <option>FOOD AND BEVERAGES </option>-->
<!--                    <option>HEALTH &amp; BEAUTY </option>-->
<!--                    <option>SPORTS &amp; LEISURE </option>-->
<!--                    <option>BOOKS &amp; ENTERTAINMENTS </option>-->
<!--                </select>-->
<!--                <button type="submit" id="submitButton" class="btn btn-primary">Go</button>-->
<!--            </form>-->
            <ul id="topMenu" class="nav pull-right">
                <li class="">
                    <a href="<?=$arResult[1]["LINK"]?>" class="nav-link" title="<?=$arResult[1]["TEXT"]?>"><?= $arResult[1]["TEXT"];?></a>
                </li>
                <li class="">
                    <a href="<?=$arResult[2]["LINK"]?>" class="nav-link" title="<?=$arResult[2]["TEXT"]?>"><?= $arResult[2]["TEXT"];?></a>
                </li>
                <li class="">
                    <a href="<?=$arResult[3]["LINK"]?>" class="nav-link" title="<?=$arResult[3]["TEXT"]?>"><?= $arResult[3]["TEXT"];?></a>
                </li>
                <li class="">
                    <a href="<?=$arResult[4]["LINK"]?>" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding-right:0">
                        <span class="btn btn-large btn-success"><?= $arResult[4]["TEXT"];?></span></a>
                </li>
            </ul>
        </div>
    </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal loginFrm">
                                    <div class="control-group">
                                        <input type="text" id="inputEmail" placeholder="Email">
                                    </div>
                                    <div class="control-group">
                                        <input type="password" id="inputPassword" placeholder="Password">
                                    </div>
                                    <div class="control-group">
                                        <label class="checkbox">
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </form>
                                <button type="submit" class="btn btn-success">Sign in</button>
                                <button class="btn" data-bs-dismiss="modal" aria-label="Close">Close</button>
                            </div>
                                </div>
                            </div>
                        </div>

<?endif?>

