<?php
/*
Template Name: Корзина
*/
?>

<?php get_header(); ?>

        <div class="basket">
            <div class="container">
                <h1 class="group--card__title">Корзина</h1>
                <div class="js-cart-wrapper">
                        <div class="cart-empty">
                            Нет товаров
                        </div>

                    <!-- <form  class="basket-wrapper form-send"> -->
                    <form  class="basket-wrapper form-send">
                        
                        <div class="basket-group--card js-cart"></div>

                        <div class="order-form">
                            
                            <!-- <label for="date">Дата доставки</label>
                            <input class="order-form__input mask-date" id="date" type="text" name="date" placeholder="2023-12-31" required> -->
    
                            <label for="date">Укажите имя</label>
                            <input class="order-form__input" id="name" type="text" name="clientid" placeholder="Иванов Иван Иванович" required>
    
                            <label for="date">Номер телефона</label>
                            <input class="order-form__input mask-phone" id="phone" type="tel" name="client_phone" placeholder="+7 (999) 999-99-99" required>
                            
                            <label for="date">Ваш e-mail</label>
                            <input class="order-form__input" id="email" type="email" name="client_email" placeholder="ivanov@mail.ru" required>
                               
                            <label for="adress" name="service_name">Доставка курьером</label>
                            <input class="order-form__input" type="text" id="adress" name="adress" placeholder="Город, Улица, Дом, Квартира" required>

                            <label for="promotional_code" name="promotional_code">Промокод</label>
                            <input class="order-form__input" type="text" id="promotional_code" name="promotional_code" placeholder="promotional code">

                            <p class="delivery-text" for="delivery">Доставка осуществляется компанией СДЕК. Срок доставки составляет 3-10 дней </p>
                            <div class="order-total__title">

                                <div class="order-total__subtitle">Итого: <span class="card__bold"><span class="js-cart-total-price"></span></span>
                                    <!-- ,00 руб --> руб
                                </div>

                            </div>
                            <input class="js-cart-total-price-input" type="hidden" name="sum">
                            <button class="order-form__btn form__btn" type="submit">Заказать</button>
                            
                            <div class="order-form__checkbox-group">
                                <input class="order-form__checkbox" id="order-form__checkbox" name="politic" type="checkbox" required>
                                <label for="order-form__checkbox"><a href="javascript:PopUpShow()">Соглашаюсь с политикой конфиденциальности</a></label>
                            </div>
                        </div>
                    </form>
                    <!-- <form  class="basket-wrapper form-send" method="POST">
                        
                        <div class="basket-group--card js-cart"></div>

                        <div class="order-form">
                            <label for="adress">Доставка курьером</label>
                            <input class="order-form__input" type="text" id="adress" name="Адрес" placeholder="Город, Улица, Дом, Квартира" required>
                            
                            <label for="date">Дата доставки</label>
                            <input class="order-form__input" id="date" type="text" name="Дата" placeholder="01.01.2001" required>
    
                            <label for="date">Укажите имя</label>
                            <input class="order-form__input" id="name" type="text" name="Имя" placeholder="Иванов Иван Иванович" required>
    
                            <label for="date">Номер телефона</label>
                            <input class="order-form__input mask-phone" id="phone" type="tel" name="Телефон" placeholder="+7 (999) 999-99-99" required>
                            
                            <label for="date">Ваш e-mail</label>
                            <input class="order-form__input" id="email" type="email" name="E-mail" placeholder="pulsar@sipport.ru" required>
                            
                            <div class="order-total__title">

                                <div class="order-total__subtitle">Итого: <span class="card__bold"><span class="js-cart-total-price"></span></span>
                                    ,00 руб
                                </div>

                            </div>
                            <input class="js-cart-total-price-input" type="hidden" name="Общая сумма">
    
                            <button class="order-form__btn form__btn" type="submit">Заказать</button>
                            
                            <div class="order-form__checkbox-group">
                                <input class="order-form__checkbox" id="order-form__checkbox" name="Согласие на обработку" type="checkbox" required>
                                <label for="order-form__checkbox"><a href="javascript:PopUpShow()">Соглашаюсь с политикой конфиденциальности</a></label>
                            </div>

                        </div>

                    </form> -->
                    
                </div>
                
            </div>

            <div class="popup popup-thanks">
                <div class="popup__wrapper">
                    <div class="popup__inner">
                        <div class="popup__content">
                            <button class="btn-close popup__btn-close"></button>
                            <h2 class="page-title popup__title">Успешно отправлена</h2>
                            <p class="popup__subtitle">Заказ в обработке</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="popup popup-error">
                <div class="popup__wrapper">
                    <div class="popup__inner">
                        <div class="popup__content">
                            <button class="btn-close popup__btn-close"></button>
                            <h2 class="page-title popup__title">Произошла ошибка</h2>
                            <p class="popup__subtitle">Пожалуйста, позвоните или напишите нам на почту</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>




<?php get_footer(); ?>