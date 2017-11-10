<?php
// Heading
$_['heading_title']                         = 'Массовое изменение цен';

// Text
// edit_prise start
$_['text_etap0']                            = 'Для изменения цены на сайте выполните следующие шаги:';
$_['text_etap1m']                           = '1. Выберите производителя из списка';
$_['text_etap1c']                           = '1. Выберите категорию из списка';
$_['text_etap2']                            = '2. Ведите наценку';
$_['text_etap3']                            = '3. Примените наценку товаров';
$_['text_procent']                          = 'Введите процент накрутки';
$_['text_cheslo']                           = 'Введите добавочное число';
$_['text_no_data']                          = 'Нет данных';

$_['button_prim']                           = 'Применить';
$_['button_del']                            = 'Отменить';

// Table
$_['table_header']                          = 'Таблица наценок которые уже применены на сайте';
$_['table_id']                              = 'id';
$_['table_name']                            = 'Наименование';
$_['table_procent']                         = 'Процент наценки';
$_['table_cheslo']                          = 'Добавочное число';
$_['table_del']                             = 'Удалить наценку';
$_['table_up']                              = 'Редактировать наценку';
$_['table_prin']                            = 'Применить изменения';
// edit_prise end
$_['text_success']                          = 'Поздравляем: Вы успешно ипортировали ваши данные!';
$_['text_success_settings']                 = 'Поздравляем: Вы успешно сохранили настройки модуля Экспорт / Импорт!';
$_['text_export_type_category']             = 'Категории (в том числе описания категорий и фильтры)';
$_['text_export_type_category_old']         = 'Категории';
$_['text_export_type_product']              = 'Товары (в том числе описания товаров, опции, акции, скидки, бонусные баллы, атрибуты и фильтры)';
$_['text_export_type_product_old']          = 'Товары (включая данные товара: опции, акции, скидки, бонусные баллы и атрибуты)';
$_['text_export_type_option']               = 'Опции';
$_['text_export_type_attribute']            = 'Атрибуты';
$_['text_export_type_filter']               = 'Фильтры';
$_['text_export_type_customer']             = 'Покупатели';
$_['text_yes']                              = 'Да';
$_['text_no']                               = 'Нет';
$_['text_nochange']                         = 'Никакие данные не были изменены.';
$_['text_log_details']                      = 'Проверьте \'Система &gt; Инструмены &gt; Журнал ошибок\' более детально.';
$_['text_log_details_2_0_x']                = 'Проверьте \'Система &gt; Инструмены &gt; Журнал ошибок\' более детально.';
$_['text_log_details_2_1_x']                = 'Проверьте \'Система &gt; Инструмены &gt; Журнал ошибок\' более детально.';
$_['text_loading_notifications']            = 'Получение сообщений';
$_['text_retry']                            = 'Повторить попытку';

// Entry
$_['entry_import']                          = 'Импорт из XLS, XLSX или ODS файла';
$_['entry_export']                          = 'Экспорт данных в XLSX файл.';
$_['entry_export_type']                     = 'Выберите, какие данные вы хотите экспортировать:';
$_['entry_range_type']                      = 'Пожалуйста, выберите диапазон данных, который вы хотите экспортировать:';
$_['entry_start_id']                        = 'Начальный id:';
$_['entry_start_index']                     = 'Количество частей:';
$_['entry_end_id']                          = 'Завершающий id:';
$_['entry_end_index']                       = 'Номер части(партии):';
$_['entry_incremental']                     = 'Использовать ступенчатый импорт';
$_['entry_upload']                          = 'Загружаемый файл';
$_['entry_settings_use_option_id']          = 'Использовать <em>option_id</em> вместо <em>option name</em> в файлах \'Опции товара(ProductOptions)\' и \'Значения опций товара(ProductOptionValues)\'';
$_['entry_settings_use_option_value_id']    = 'Использовать <em>option_value_id</em> вместо <em>option_value name</em> в файле \'Значения опций товара(ProductOptionValues)\'';
$_['entry_settings_use_attribute_group_id'] = 'Использовать <em>attribute_group_id</em> вместо <em>attribute_group name</em> в файле \'Атрибут товара(ProductAttributes)\'';
$_['entry_settings_use_attribute_id']       = 'Использовать <em>attribute_id</em> вместо <em>attribute name</em> в файле \'Атрибут товара(ProductAttributes)\'';
$_['entry_settings_use_filter_group_id']    = 'Использовать <em>filter_group_id</em> вместо <em>filter_group name</em> в файлах \'ProductFilters\' и \'CategoryFilters\'';
$_['entry_settings_use_filter_id']          = 'Использовать <em>filter_id</em> вместо <em>filter name</em> в файлах \'ProductFilters\' и \'CategoryFilters\'';
$_['entry_settings_use_export_cache']       = 'Использовать phpTemp cache для импорта больших файлов (более медленный процесс импорта)';
$_['entry_settings_use_import_cache']       = 'Использовать phpTemp cache для импорта больших файлов (более медленный процесс импорта)';

// Error
$_['error_permission']                      = 'У вас нет прав для внесения изменений модуля Export/Import!';
$_['error_upload']                          = 'Загружаемый файл импорта имеет ошибки валидации!';
$_['error_categories_header']               = 'Недопустимый заголовок в Категории(Category) файла импорта';
$_['error_category_filters_header']         = 'Недопустимый заголовок в Фильтрах Категории(CategoryFilters) файла импорта';
$_['error_products_header']                 = 'Недопустимый заголовок в Товаре(Product) файла импорта';
$_['error_additional_images_header']        = 'Недопустимый заголовок в Дополнительных изображениях(AdditionalImages) товара файла импорта';
$_['error_specials_header']                 = 'Недопустимый заголовок в Акциях(Specials) файла импорта';
$_['error_discounts_header']                = 'Недопустимый заголовок в Скидках(Discounts) файла импорта';
$_['error_rewards_header']                  = 'Недопустимый заголовок в Бонусных Баллах(Rewards) файла импорта';
$_['error_product_options_header']          = 'Недопустимый заголовок в Опциях Товара(ProductOptions) файла импорта';
$_['error_product_option_values_header']    = 'Недопустимый заголовок в Значениях Опций Товара(ProductOptionValues) файла импорта';
$_['error_product_attributes_header']       = 'Недопустимый заголовок в Атрибутах товара (ProductAttributes) файла импорта';
$_['error_product_filters_header']          = 'Недопустимый заголовок в фильтрах Товаров (ProductFilters) файла импорта';
$_['error_options_header']                  = 'Недопустимый заголовок в Опциях(Options) файла импорта';
$_['error_option_values_header']            = 'Недопустимый заголовок в Значениях Опций(OptionValues) файла импорта';
$_['error_attribute_groups_header']         = 'Недопустимый заголовок в Группах Атрибутов(AttributeGroups) файла импорта';
$_['error_attributes_header']               = 'Недопустимый заголовок в Атрибутах(Attributes) файла импорта';
$_['error_filter_groups_header']            = 'Недопустимый заголовок в Группах фильтра(FilterGroups) файла импорта';
$_['error_filters_header']                  = 'Недопустимый заголовок в Фильтрах(Filters) файла импорта';
$_['error_customers_header']                = 'Недопустимый заголовок в Покупатели(Customers) файла импорта';
$_['error_addresses_header']                = 'Недопустимый заголовок в Адреса (Addresses) файла импорта';
$_['error_product_options']                 = 'Export/Import: Отсутствуют товары в файле импорта или в списке товаров нет значения Опции Товара(ProductOptions)';
$_['error_product_option_values']           = 'Export/Import: Отсутствуют товары в файле импорта или в списке товаров нет Значений Опции Товара (ProductOptionValues)';
$_['error_product_option_values_2']         = 'Export/Import: Отсутствуют опции товара в файле импорта или в списке товаров нет Значений опций товара(ProductOptionValues)';
$_['error_product_option_values_3']         = 'Export/Import: В значениях опций товаров файла импорта ожидается наличие Опций товара данного файла импорта';
$_['error_additional_images']               = 'Export/Import: Отсутствуют товары в файле импорта или в списке товаров нет Значений для Дополнительных изображений товара(AdditionalImages)';
$_['error_specials']                        = 'Export/Import: Отсутствуют товары в файле импорта или в списке товаров нет Значений для Акций(Specials)';
$_['error_discounts']                       = 'Export/Import: Отсутствуют товары в файле импорта или в списке товаров нет Значений для Скидок(Discounts)';
$_['error_rewards']                         = 'Export/Import: Отсутствуют товары в файле импорта или в списке товаров нет Значений для Бонусных баллов(Rewards)';
$_['error_product_attributes']              = 'Export/Import: Отсутствуют товары в файле импорта или в списке товаров нет Значений для Атрибутов товара(ProductAttributes)';
$_['error_attributes']                      = 'Export/Import: Отсутствуют Группы атрибутов(AttributeGroups)в файле импорта или в списке атрибутов нет значения (AttributeGroups)';
$_['error_attributes_2']                    = 'Export/Import: В значении атрибутов в файле импорта так же ожидаются Группы атрибутов (AttributeGroups)в файле импорта';
$_['error_category_filters']                = 'Export/Import: Отсутствуют Категории в файле импорта или в списке категорий нет значения для Категорий фильтра (CategoryFilters)';
$_['error_product_filters']                 = 'Export/Import: Отсутствуют товары в файле импорта или в списке товаров нет Значений для Фильтр товаров (ProductFilters)';
$_['error_filters']                         = 'Export/Import: Отсутствуют Группы фильтров(FilterGroups)в файле импорта или их нет в списке фильтров (Filters)';
$_['error_filters_2']                       = 'Export/Import: Фильтры(Filters) файла импорта так же ожидаются значения Групп фильтра (FilterGroups)в файле импорта';
$_['error_option_values']                   = 'Export/Import: Отсутствуют Опции(Options)в файле импорта или опций нет в списке Значений опций(OptionValues)';
$_['error_option_values_2']                 = 'Export/Import: Значения опций(OptionValues)в файле импорта так же ожидаются сами Опции (Options)в файле импорта';
$_['error_post_max_size']                   = 'Размер файла больше,чем %1 (проверьте настройки PHP \'post_max_size\')';
$_['error_upload_max_filesize']             = 'Размер файла больше,чем %1 (проверьте настройки PHP \'upload_max_filesize\')';
$_['error_select_file']                     = 'Выберите файл кликнув на \'Import\'';
$_['error_id_no_data']                      = 'Не выбраны данные для  Начальный id и Завершающий id.';
$_['error_page_no_data']                    = 'Больше нет данных.';
$_['error_param_not_number']                = 'Диапазон значений данных должен быть целыми числами.';
$_['error_upload_name']                     = 'Не указан файл для загрузки';
$_['error_upload_ext']                      = 'Загруженный файл не является одним из  \'.xls\', \'.xlsx\' or \'.ods\' файлов, другие типы файлов не поддерживаются!';
$_['error_notifications']                   = 'Не возможно зарузить сообщение с MHCCORP.COM.';
$_['error_no_news']                         = 'Нет сообщений';
$_['error_batch_number']                    = 'Batch number must be greater than 0';
$_['error_min_item_id']                     = 'Начальный id должен быть больше 0';
$_['error_option_name']                     = 'Опция \'%1\' указана несколько раз!<br />';
$_['error_option_name']                    .= 'Во вкладке Настройки активируйте значение:<br />';
$_['error_option_name']                    .= "Использовать <em>option_id</em> вместо <em>option name</em> в файлах 'ProductOptions' и 'ProductOptionValues'";
$_['error_option_value_name']               = 'Значения опций \'%1\' is defined multiple times within its option!<br />';
$_['error_option_value_name']              .= 'Во вкладке Настройки активируйте значение:<br />';
$_['error_option_value_name']              .= "Использовать <em>option_value_id</em> вместо <em>option_value name</em> в файле 'ProductOptionValues'";
$_['error_attribute_group_name']            = 'Группы атрибутов(AttributeGroup) \'%1\' указаны несколько раз!<br />';
$_['error_attribute_group_name']           .= 'Во вкладке Настройки активируйте значение:<br />';
$_['error_attribute_group_name']           .= "Использовать <em>attribute_group_id</em> вместо <em>attribute_group name</em> в файлах 'ProductAttributes'";
$_['error_attribute_name']                  = 'Attribute \'%1\' is defined multiple times within its attribute group!<br />';
$_['error_attribute_name']                 .= 'Во вкладке Настройки активируйте значение:<br />';
$_['error_attribute_name']                 .= "Использовать <em>attribute_id</em> вместо <em>attribute name</em> в файле 'ProductAttributes'";
$_['error_filter_group_name']               = 'Группы фильтров(FilterGroup) \'%1\' указаны несколько раз!<br />';
$_['error_filter_group_name']              .= 'Во вкладке Настройки активируйте значение:<br />';
$_['error_filter_group_name']              .= "Использовать <em>filter_group_id</em> вместо <em>filter_group name</em> в файлах 'ProductFilters'";
$_['error_filter_name']                     = 'Фильтр(Filter) \'%1\' указан несколько раз,без указания Группы фильтра (filter group)!<br />';
$_['error_filter_name']                    .= 'Во вкладке Настройки активируйте значение:<br />';
$_['error_filter_name']                    .= "Использовать <em>filter_id</em> вместо <em>filter name</em> в файле 'ProductFilters'";

$_['error_missing_customer_group']                      = 'Export/Import: Отсутствуют customer_groups в файле \'%1\'!';
$_['error_invalid_customer_group']                      = 'Export/Import: Неизвестное значение customer_group \'%2\' в файле импорта \'%1\'!';
$_['error_missing_product_id']                          = 'Export/Import: Отсутствуют product_ids в файле \'%1\'!';
$_['error_missing_option_id']                           = 'Export/Import: Отсутствуют option_ids в файле \'%1\'!';
$_['error_invalid_option_id']                           = 'Export/Import: Неизвестное значение option_id \'%2\' в файле импорта \'%1\'!';
$_['error_missing_option_name']                         = 'Export/Import: Отсутствуют option_names в файле \'%1\'!';
$_['error_invalid_product_id_option_id']                = 'Export/Import: Option_id \'%3\' не указывается для product_id \'%2\' в файле \'%4\', но присутствует в файле импорта \'%1\'!';
$_['error_missing_option_value_id']                     = 'Export/Import: Отсутствуют option_value_ids в файле \'%1\'!';
$_['error_invalid_option_id_option_value_id']           = 'Export/Import: Неизвестное значение option_value_id \'%3\' для option_id \'%2\' в файле импорта \'%1\'!';
$_['error_missing_option_value_name']                   = 'Export/Import: Отсутствуют option_value_names в файле \'%1\'!';
$_['error_invalid_option_id_option_value_name']         = 'Export/Import: Неизвестное значение option_value_name \'%3\' для optiion_id \'%2\' в файле импорта \'%1\'!';
$_['error_invalid_option_name']                         = 'Export/Import: Неизвестное значение option_name \'%2\' в файле импорта \'%1\'!';
$_['error_invalid_product_id_option_name']              = 'Export/Import: Option_name \'%3\' не указывается для product_id \'%2\' в файле \'%4\', но присутствует в файле импорта \'%1\'!';
$_['error_invalid_option_name_option_value_id']         = 'Export/Import: Неизвестное значение option_value_id \'%3\' для option_name \'%2\' в файле импорта \'%1\'!';
$_['error_invalid_option_name_option_value_name']       = 'Export/Import: Неизвестное значение option_value_name \'%3\' для option_name \'%2\' в файле импорта \'%1\'!';
$_['error_missing_attribute_group_id']                  = 'Export/Import: Отсутствуют attribute_group_ids в файле \'%1\'!';
$_['error_invalid_attribute_group_id']                  = 'Export/Import: Неизвестное значение attribute_group_id \'%2\' в файле импорта \'%1\'!';
$_['error_missing_attribute_group_name']                = 'Export/Import: Отсутствуют attribute_group_names в файле \'%1\'!';
$_['error_missing_attribute_id']                        = 'Export/Import: Отсутствуют attribute_ids в файле \'%1\'!';
$_['error_invalid_attribute_group_id_attribute_id']     = 'Export/Import: Неизвестное значение attribute_id \'%3\' для attribute_group_id \'%2\' в файле импорта \'%1\'!';
$_['error_missing_attribute_name']                      = 'Export/Import: Отсутствуют attribute_names в файле \'%1\'!';
$_['error_invalid_attribute_group_id_attribute_name']   = 'Export/Import: Неизвестное значение attribute_name \'%3\' для optiion_id \'%2\' в файле импорта \'%1\'!';
$_['error_invalid_attribute_group_name']                = 'Export/Import: Неизвестное значение attribute_group_name \'%2\' в файле импорта \'%1\'!';
$_['error_invalid_attribute_group_name_attribute_id']   = 'Export/Import: Неизвестное значение attribute_id \'%3\' для attribute_group_name \'%2\' в файле импорта \'%1\'!';
$_['error_invalid_attribute_group_name_attribute_name'] = 'Export/Import: Неизвестное значение attribute_name \'%3\' для attribute_group_name \'%2\' в файле импорта \'%1\'!';
$_['error_missing_filter_group_id']                     = 'Export/Import: Отсутствуют filter_group_ids в файле \'%1\'!';
$_['error_invalid_filter_group_id']                     = 'Export/Import: Неизвестное значение filter_group_id \'%2\' в файле импорта \'%1\'!';
$_['error_missing_filter_group_name']                   = 'Export/Import: Отсутствуют filter_group_names в файле \'%1\'!';
$_['error_missing_filter_id']                           = 'Export/Import: Отсутствуют filter_ids в файле \'%1\'!';
$_['error_invalid_filter_group_id_filter_id']           = 'Export/Import: Неизвестное значение filter_id \'%3\' для filter_group_id \'%2\' в файле импорта \'%1\'!';
$_['error_missing_filter_name']                         = 'Export/Import: Отсутствуют filter_names в файле \'%1\'!';
$_['error_invalid_filter_group_id_filter_name']         = 'Export/Import: Неизвестное значение filter_name \'%3\' для optiion_id \'%2\' в файле импорта \'%1\'!';
$_['error_invalid_filter_group_name']                   = 'Export/Import: Неизвестное значение filter_group_name \'%2\' в файле импорта \'%1\'!';
$_['error_invalid_filter_group_name_filter_id']         = 'Export/Import: Неизвестное значение filter_id \'%3\' для filter_group_name \'%2\' в файле импорта \'%1\'!';
$_['error_invalid_filter_group_name_filter_name']       = 'Export/Import: Неизвестное значение filter_name \'%3\' для filter_group_name \'%2\' в файле импорта \'%1\'!';
$_['error_invalid_product_id']                          = 'Export/Import: Неверный product_id \'%2\' в используемом файле импорта \'%1\'!';
$_['error_duplicate_product_id']                        = 'Export/Import: Дублирование product_id \'%2\' в используемом файле импорта \'%1\'!';
$_['error_unlisted_product_id']                         = 'Export/Import: файл импорта \'%1\' не может использовать значение product_id \'%2\' потому что товар отстутствует в списке \'Каталог-Товары\'!';
$_['error_filter_not_supported']                        = 'Export/Import: Ваша версия Ocstore/Opencart не поддеживает встроенный Фильтр!';
$_['error_wrong_order_product_id']                      = 'Export/Import: Файл импорта \'%1\' использует product_id \'%2\' в неверном порядке.';
$_['error_missing_category_id']                         = 'Export/Import: Отсутствует category_ids в файле импорта \'%1\'!';
$_['error_invalid_category_id']                         = 'Export/Import: Неверное значение category_id \'%2\' используемое в файле импорта \'%1\'!';
$_['error_duplicate_category_id']                       = 'Export/Import: Повторяющийся category_id \'%2\' используемое в файле импорта \'%1\'!';
$_['error_wrong_order_category_id']                     = 'Export/Import: Файл импорта \'%1\' использует category_id \'%2\' в неверном порядке.';
$_['error_unlisted_category_id']                        = 'Export/Import: Файл импорта \'%1\' не может использовать category_id \'%2\' потому,что его нет в списке Файла импорта \'Categories\'!';
$_['error_addresses']                                   = 'Export/Import: Пропущены Покупатели(Cutomers ) в файле импорта, или Покупатели(Cutomers ) в файле импорта находятся в списке перед значением Адреса(Addresses)!';
$_['error_addresses_2']                                 = 'Export/Import: Адреса(Addresses) в файле импорта ожидаются перед значением Покупатели(Customers) в файле импорта';
$_['error_invalid_store_id']                            = 'Export/Import: Неверное значение store_id=\'%1\' используется в файле импорта \'%2\'!';
$_['error_missing_customer_id']                         = 'Export/Import: Отсутствует значение customer_ids в Файле импорта \'%1\'!';
$_['error_invalid_customer_id']                         = 'Export/Import: Неверное значение customer_id \'%2\' используется в Файле импорта \'%1\'!';
$_['error_duplicate_customer_id']                       = 'Export/Import: Повторяющийся customer_id \'%2\' используется в файле импорта \'%1\'!';
$_['error_wrong_order_customer_id']                     = 'Export/Import: Файл импорта \'%1\' использует значение customer_id \'%2\' в неверном порядке.';
$_['error_unlisted_customer_id']                        = 'Export/Import: Файл импорта \'%1\' не может использовать значение customer_id \'%2\' потому,что его нет в списке файла импорта импорта \'Customers\'!';
$_['error_missing_country_col']                         = 'Export/Import: В файле импорта \'%1\' отсутствует заголовок \'country\' в колонке!';
$_['error_missing_zone_col']                            = 'Export/Import: В файле импорта \'%1\' отсутствует заголовок \'zone\' в колонке!';
$_['error_undefined_country']                           = 'Export/Import: Неопределённое значение страна \'%1\' используется в Файле импорта \'%2\'!';
$_['error_undefined_zone']                              = 'Export/Import: Неопределённое значение регион \'%2\' для страны \'%1\' используется в Файле импорта \'%3\'!';
$_['error_incremental_only']                            = 'Export/Import: Файл импорта \'%1\' может быть импортирован только в пошаговом режиме в данный момент!';

// Tabs
$_['tab_manufacture']                            = 'Наценка по производителям';
$_['tab_category']                               = 'Наценка по категория';
// $_['tab_settings']                            = 'Настройки';

// Button labels
$_['button_import']                         = 'Импорт';
$_['button_export']                         = 'Экспорт';
$_['button_settings']                       = 'Сохранить настройки';
$_['button_export_id']                      = 'По значению id';
$_['button_export_page']                    = 'С разбиением на части(партии)';


// Help
$_['help_range_type']                       = '(Не обязательно, оставьте пустым если не нужно)';
$_['help_incremental_yes']                  = '(Только обновить и/или добавить данные)';
$_['help_incremental_no']                   = '(Удалить все старые данные перед импортом)';
$_['help_import']                           = 'Файл импорта/экспорта может содержать категории, товары, значения атрибутов, значения опций или значения фильтров. ';
$_['help_import_old']                       = 'Файл импорта/экспорта может содержать категории, товары, значения атрибутов или значения опций. ';
$_['help_format']                           = 'Перед импортом убедитесь,что вы загружаете поддерживаемый модулем формат файла импорта!';
?>
