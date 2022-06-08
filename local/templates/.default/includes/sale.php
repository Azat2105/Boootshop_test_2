<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "cart_items", Array(
    "PATH_TO_BASKET" => SITE_DIR."personal/cart/",	// Страница корзины
    "PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Страница персонального раздела
    "SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
    "SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
    "SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
    "SHOW_PRODUCTS" => "N",	// Показывать список товаров
    "POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
    "SHOW_AUTHOR" => "Y",	// Добавить возможность авторизации
    "PATH_TO_REGISTER" => SITE_DIR."login/",	// Страница регистрации
    "PATH_TO_PROFILE" => SITE_DIR."personal/",	// Страница профиля
),
    false
);?>