<?php 
    // Отключение лишних тегов WP 
    add_filter('show_admin_bar', '__return_false');

    remove_action('wp_head',             'print_emoji_detection_script', 7 );
    remove_action('admin_print_scripts', 'print_emoji_detection_script' );
    remove_action('wp_print_styles',     'print_emoji_styles' );
    remove_action('admin_print_styles',  'print_emoji_styles' );

    remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
    remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
    remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
    remove_action('wp_head', 'rsd_link'); // remove EditURI
    remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
    remove_action('wp_head', 'rel_canonical'); //remove canonical
    remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
    remove_action('wp_head', 'wp_oembed_add_discovery_links'); 

    // Функция для подключения стилей и скриптов 
    add_action('wp_enqueue_scripts', 'site_scripts'); 
        function site_scripts() {
            // Переменная для версии иначе '0.0.0.0'
            $version = '0.0.0.0';

            // Отключение стандартных стилей WP
            wp_dequeue_style( 'wp-block-library' );
            wp_deregister_script( 'wp-embed' );

            // Подклбчение файлов стилей
            wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,regular,500,&display=swap', [], $version);
            wp_enqueue_style('fancybox-css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', [], $version);
            wp_enqueue_style('main-style', get_stylesheet_uri(), [], $version);
            wp_enqueue_style('icon', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', [], $version);

            // Перерегистрация Jquery
            wp_deregister_script( 'jquery' );
            wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.4.js');
            wp_enqueue_script( 'jquery' );

            // Подключение скриптов
            wp_enqueue_script( 'fancybox-js', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js', ['jquery'], '1.3.4', true);
            wp_enqueue_script( 'fancybox-jq', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', ['jquery'], '1.3.4', true);
            wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], $version, true);
            wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], $version, true);


            wp_localize_script('main-js', 'WPJS', [
                'siteUrl' => get_template_directory_uri(),
                'ajaxUrl' => admin_url('admin-ajax.php'),
            ]); 
        }

        // Подключение меню
        add_action( 'after_setup_theme', 'theme_support' );
        function theme_support() {
        register_nav_menu( 'menu_main_header', 'Меню в шапке' );
        }

        // Подключение кабон Филд, для полей и меню в WP    
        add_action( 'after_setup_theme', 'crb_load' );
        function crb_load() {
        require_once( 'includes/carbon-fields/vendor/autoload.php' );
        \Carbon_Fields\Carbon_Fields::boot();
        }

        add_action('carbon_fields_register_fields', 'register_carbon_fields');
        function register_carbon_fields() {
        require_once( 'includes/carbon-fields-options/theme-options.php' );
        } 

        




            add_action('wp_ajax_generate_sdek', 'generate_sdek');
            add_action('wp_ajax_nopriv_generate_sdek', 'generate_sdek');
            
            function generate_sdek() {
                $response = array();
                $data = json_decode(file_get_contents('php://input'), true);
            
                if ($data) {
                    $address = array();
                    $client_email = array();
                    $client_phone = array();
                    $client_id = array();
                    $name_product = array();
                    $quantity = array();
            
                    foreach ($data as $index => $item) {
                        $address[] = $item['adress'];
                        $client_email[] = $item['client_email'];
                        $client_phone[] = $item['client_phone'];
                        $client_id[] = $item['clientid'];
                        $name_product[] = $item['name_product'];
                        $quantity[] = $item['quantity'];
                    }
            
                    // Создание массива с информацией о заказе

                        $orders = [
                            'type' => 2,
                            'tariff_code' => 139,
                            'comment' => 'Новый заказ',
                            'sender' => [
                                'company' => 'Компания',
                                'name' => 'Красулина Анна Владимировна',
                                'email' => 'krasulinatop@yandex.ru',
                                'phones' => [
                                    ['number' => '+79037272673']
                                ]
                            ],
                            'recipient' => [
                                'company' => $client_id[$index],
                                'name' => $client_id[$index],
                                'email' => $client_email[$index],
                                'phones' => [
                                    ['number' => $client_phone[$index]]
                                ]
                            ],
                            'from_location' => [
                                'city' => 'Москва',
                                'address' => 'ул. Гарибальди, д.8, кв.132'
                            ],
                            'to_location' => [
                                'address' => $address[$index]
                            ],
                            'packages' => [
                                [
                                    'number' => $client_id[$index],
                                    'weight' => 200,
                                    'comment' => 'Упаковка'
                                ]
                            ]
                        ];

                        $authorizationUrl = 'https://api.cdek.ru/v2/orders';
                        $accessTokenUrl = 'https://api.cdek.ru/v2/oauth/token';
                        $grantType = 'client_credentials';
                        $clientId = 'vLS5IAjHvrg2weokQifvWqocGNclWyKL';
                        $clientSecret = 'piipeFjvftDdtAfiUnUHdP7X9qDgu2jw';
                        
                        $tokenData = array(
                            'grant_type' => $grantType,
                            'client_id' => $clientId,
                            'client_secret' => $clientSecret
                        );
                        
                        $tokenCh = curl_init();
                        curl_setopt($tokenCh, CURLOPT_URL, $accessTokenUrl);
                        curl_setopt($tokenCh, CURLOPT_POST, 1);
                        curl_setopt($tokenCh, CURLOPT_POSTFIELDS, http_build_query($tokenData));
                        curl_setopt($tokenCh, CURLOPT_RETURNTRANSFER, true);
                        
                        $tokenResponse = curl_exec($tokenCh);
                        
                        if (curl_errno($tokenCh)) {
                            echo 'Error: ' . curl_error($tokenCh);
                        } else {
                            $tokenResponseData = json_decode($tokenResponse, true);
                            $accessToken = $tokenResponseData['access_token'];
                        
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $authorizationUrl);
                            curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($orders));
                            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                'Content-Type: application/json',
                                'Authorization: Bearer ' . $accessToken
                            ));
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        
                            $response = curl_exec($ch);
                        
                            if (curl_errno($ch)) {
                                echo 'Error: ' . curl_error($ch);
                            } else {
                                $responseData = json_decode($response, true);
                                generate_link();
                                if (isset($responseData['errors'])) {
                                    $result = array(
                                        'status' => 'error',
                                        'message' => 'Ошибка при создании заказа: ' . $responseData['errors'][0]['message']
                                    );
                                } else {
                                    $result = array(
                                        'status' => 'success',
                                        'message' => 'Заказ успешно создан',
                                        'order' => $responseData
                                    );
                        
                                }
                        
                                echo json_encode($result);
                                wp_die();
                            }}}}

                            function generate_link() {
                                $response = array();
                                
                                $data = json_decode(file_get_contents('php://input'), true);
                                
                                if ($data) {
                                    $adress = array();
                                    $client_email = array();
                                    $client_phone = array();
                                    $clientid = array();
                                    $sum = array();
                                    $name_product = array();
                                    $quantity = array();
                                    $price_one_name = array();
                            
                                    foreach ($data as $index => $item) {
                                        $adress = $item['adress'];
                                        $client_email = $item['client_email'];
                                        $client_phone = $item['client_phone'];
                                        $clientid = $item['clientid'];
                                        $promo_code = strtolower($item['promotional_code']); // Приводим значение к нижнему регистру для сравнения                                        $sum[] = $item['sum'];
                                        $name_product[] = $item['name_product'];
                                        $quantity[] = $item['quantity'];
                                    }
                                    
                            
                                    $server = 'https://poolsar.server.paykeeper.ru';
                                    $user = 'admin';
                                    $password = '65bd29494088';
                            
                                    /* Данные клиента */
                                    $email = $client_email; // Используется только первое значение из массива
                                    $phone = $client_phone; // Используется только первое значение из массива
                                    $names = $clientid; // Используется только первое значение из массива
                                        
                                    /* Номер заказа */
                                    $order_id = $adress; 
                                            
                                    /* Массив товаров в заказе */
                                    $basket = array();

                                    // Проверяем, является ли значение $promo_code равным 'venera'
                                    if ($promo_code === 'venera') {
                                        $price = strval(1926 * 0.9); // Если значение равно 'venera', устанавливаем удвоенную цену
                                    } else {
                                        $price = '1926'; // В противном случае, приводим значение цены к типу integer
                                    }
                                    
                                    foreach ($data as $index => $item) {
                                        $basket[] = array(
                                            'name'  => $item['name_product'],
                                            'count' => $item['quantity'],
                                            'price' => $price,                                        );
                                    }
                                    /* Собираем массив товаров для paykeeper */
                                    /* https://docs.paykeeper.ru/onlain-kassa-54-fz/tovary-v-cheke-54-fz-full/ */
                                    $total = 0;
                                    $prods  = array();
                                    
                                    foreach ($basket as $row) {
                                        $prods[] = array(
                                            'name'      => $row['name'],
                                            'price'     => $row['price'],
                                            'quantity'  => $row['count'],
                                            'sum'       => $row['price'] * $row['count'],
                                            'tax'       => 'none',
                                            'item_type' => 'goods',
                                        );
                                        
                                        $total += $row['price'] * $row['count'];
                                    }
                                    
                                    /* Доставка */
                                    $prods[] = array(
                                        'name'      => $adress,
                                        'price'     => 0,
                                        'quantity'  => 0,
                                        'sum'       => 0,
                                        'tax'       => 'none',
                                        'item_type' => 'service',
                                    );
                                    
                                    $total += 0;
                                    
                                    
                                    /* Авторизация в Paykeeper */
                                    $base64 = base64_encode($user . ':' . $password);
                                    $headers = array(); 
                                    array_push($headers, 'Content-Type: application/x-www-form-urlencoded');
                                    array_push($headers, 'Authorization: Basic ' . $base64);
                                    
                                    $curl = curl_init($server . '/info/settings/token/'); 
                                    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                                    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
                                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                    curl_setopt($curl, CURLOPT_HEADER, false);
                                    $response = curl_exec($curl);
                                    $response = json_decode($response, true);
                                    
                                    /* В ответе должен быть token, иначе ошибка */
                                    if (isset($response['token'])) {
                                        $token = $response['token'];
                                        
                                        $pstype = 'sbp_default';
                                        
                                        /* Готовим запрос 3.4 JSON API на получение счёта */
                                        $payment_data = array (
                                            'pay_amount'   => $total,
                                            'clientid'     => $names,
                                            'orderid'      => $order_id,
                                            'service_name' => ';PKC|' . json_encode($prods) . '|',
                                            'client_email' => $email,
                                            'client_phone' => $phone,
                                            'pstype' => $pstype,  // Установка способа оплаты в 'any'
                                            'json' => true,
                                        );
                                    
                                        $request = http_build_query(array_merge($payment_data, array('token' => $token)));
                                    
                                        curl_setopt($curl, CURLOPT_URL, $server . '/change/invoice/preview/');
                                        curl_setopt($curl, CURLOPT_HTTPHEADER , $headers);
                                        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
                                        curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
                                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                        curl_setopt($curl, CURLOPT_HEADER, false);
                                        $response = curl_exec($curl);
                                        curl_close($curl);
                                        $response = json_decode($response, true);
                                
                                            /* В ответе должен быть invoice_id */
                                            if (isset($response['invoice_id'])) {
                                                $invoice_id = $response['invoice_id']; 
                                        
                                                // /* Сохранение invoice_id в заказе (PDO)  */
                                                // $sth = $dbh->prepare("UPDATE `orders` SET `invoice_id` = ? WHERE `id` = ?");
                                                // $sth->execute(array($invoice_id, $order_id));
                                        
                                                /* Редирект на форму оплаты */
                                                $link = $server . '/bill/' . $invoice_id . '/';
                    
                                            }
                                        }
                                    
                                        $response['success'] = true;
                                        $response['link'] = $link;
                                    } else {
                                        $response['success'] = false;
                                        $response['error'] = 'Данные не были переданы';
                                    }
                                
                                    echo json_encode($response);
                                    wp_die();
                                }

                    




