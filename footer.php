<div class="basket basket-hodden">
    <div class="container">
        <h1 class="group--card__title">Корзина</h1>
        <div class="js-cart-wrapper">

                    <!-- <form  class="basket-wrapper form-send"> -->
                    <form  class="basket-wrapper form-send">
                        
                        <div class="basket-group--card js-cart"></div>

                        <div class="order-form">
                            <label for="adress">Доставка курьером</label>
                            <input class="order-form__input" type="text" id="adress" name="field1" placeholder="Город, Улица, Дом, Квартира" required>
                            
                            <label for="date">Дата доставки</label>
                            <input class="order-form__input" id="date" type="text" name="field2" placeholder="01.01.2001" required>
    
                            <label for="date">Укажите имя</label>
                            <input class="order-form__input" id="name" type="text" name="clientid" placeholder="Иванов Иван Иванович" required>
    
                            <label for="date">Номер телефона</label>
                            <input class="order-form__input mask-phone" id="phone" type="tel" name="client_phone" placeholder="+7 (999) 999-99-99" required>
                            
                            <label for="date">Ваш e-mail</label>
                            <input class="order-form__input" id="email" type="email" name="client_email" placeholder="pulsar@sipport.ru" required>
                            
                            <div class="order-total__title">

                                <div class="order-total__subtitle">Итого: <span class="card__bold"><span class="js-cart-total-price"></span></span>
                                    ,00 руб
                                </div>

                            </div>
                            <input class="js-cart-total-price-input" type="hidden" name="sum">
    
                            <button class="order-form__btn form__btn" type="submit">Заказать</button>
                            
                            <div class="order-form__checkbox-group">
                                <input class="order-form__checkbox" id="order-form__checkbox" name="Согласие на обработку" type="checkbox" required>
                                <label for="order-form__checkbox"><a href="javascript:PopUpShow()">Соглашаюсь с политикой конфиденциальности</a></label>
                            </div>
                        </div>                    


                    </form>
            
        </div>
        
    </div>
</div>

<footer class="footer">
            <div class="container">
                <div class="footer-wrapper">
                    <div class="footer-logo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-footer.png" alt="poolsar">
                    </div>
                    <div class="footer-list">
                        <div class="footer-list__nav">
                            <ul>
                                <li><a href="https://poolsar.live/vybrat-izdelie/">Выбрать изделия</a></li>
                                <li><a href="https://poolsar.live/o-pulsarah/">О пульсаре</a></li>
                                <li><a href="https://poolsar.live/korzina/">Корзина</a></li>
                            </ul>
                            <ul>
                                <li><a href="https://poolsar.live/aktivacija/">Активация</a></li>
                                <li><a href="https://poolsar.live/o-pulsarah/#about-modifications">Сферы</a></li>
                            </ul>

                            <ul>
                                <li><a href="javascript:PopUpShow()">Политика конфиденциальности</a></li>
                                <li><a href="javascript:PopUpShowTwo()">Доставка и оплата</a></li>
                                <li><a href="javascript:PopUpShowThree()">Реквизиты</a></li>
                            </ul>
                            <ul>  
                                <li class="footer__teg-title">Техническая поддержка:</li> 
                                <li><a href="mailto:krasulinatop@yandex.ru">krasulinatop@yandex.ru</a></li>
                                <div class="contacts-phone__ul">
                                    <li class="social whatsapp"><a href="https://api.whatsapp.com/send/?phone=79037272673" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a></li>
                                    <li class="social telegram"><a href="https://t.me/+79037272673" target="_blank"><i class="fa fa-paper-plane fa-2x"></i></a></li>
                                </div>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
</footer>

    <button class="cart-btn">
        <span class="cart-btn__counter js-cart-total-count-items">0</span>
        <a class="basket-link-footer" href="https://poolsar.live/korzina/">
            <svg class="cart-btn__icon" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5625 6.71132V5.86257C6.5625 3.89382 8.14625 1.96007 10.115 1.77632C12.46 1.54882 14.4375 3.39507 14.4375 5.69632V6.90382" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.87497 19.25H13.125C16.6425 19.25 17.2725 17.8413 17.4562 16.1263L18.1125 10.8763C18.3487 8.74125 17.7362 7 14 7H6.99997C3.26372 7 2.65122 8.74125 2.88747 10.8763L3.54372 16.1263C3.72747 17.8413 4.35747 19.25 7.87497 19.25Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13.5584 10.5H13.5663" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.43269 10.5H7.44055" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </button>
<div class="b-popup popup-delivery" id="popup1">
            <div class="b-popup-content">
                <a class="popup-content__close" href="javascript:PopUpHide()">&#10006;</a>
                <h3 class="popup-delivery_title">Политика конфиденциальности</h3>
                <span>Интернет-магазин не изменяет и не редактирует информацию о Покупателе при оформлении заказа на сайте Интернет-магазина. После завершения процесса оформления заказа на сайте Интернет-магазина данные о заказе и Покупателе регистрируются в базе данных Продавца.</span>
                <span>Интернет-магазин осуществляет обработку персональных данных на принципах, установленных Федеральным законом «О персональных данных», в том числе на таком принципе, как обработка персональных данных ограничивается достижением конкретных, заранее определенных и законных целей, не допускается обработка персональных данных, несовместимая с целями сбора персональных данных. Так, Интернет-магазин осуществляет обработку персональных данных с целью выполнения своих обязательств перед Покупателем.</span>
                <span>Интернет-магазин обязуется не разглашать персональные данные, полученные от Покупателя. Не считается нарушением конфиденциальности персональных данных предоставление Интернет-магазин информации агентам и третьим лицам, действующим на основании договора с Интернет-магазином, для исполнения обязательств перед Покупателем.</span>
                <span>Информация о посетителях сайта (IP-адрес, имя домена, тип браузера и операционная система, дата и время посещения и т. п.) собирается и сохраняется в целях ведения статистики посещений для оценки и анализа работы сайта. Эта информация является общедоступной, таким образом, Интернет-магазин не несет ответственности за ее разглашение.</span>
                <span>Интернет-магазин принимает необходимые и достаточные организационные и технические меры для защиты персональной информации Покупателей от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий с ней третьих лиц в соответствии с требованиями, установленными Федеральным законом «О персональных данных».</span>
                <span>Интернет-магазин имеет право вносить изменения в настоящую Политику конфиденциальности. При внесении изменений в актуальной редакции указывается дата последнего обновления. Новая редакция Политики вступает в силу с момента ее размещения, если иное не предусмотрено новой редакцией Политики.</span>
                <span class="span-decoration"></span>
            </div>
</div>
<div class="b-popup popup-delivery" id="popup2">
            <div class="b-popup-content">
                <a class="popup-content__close" href="javascript:PopUpHideTwo()">&#10006;</a>
                <h3 class="popup-delivery_title">Доставка и оплата</h3>
                <span class="popup-delivery_subtitle">Бесплатная доставка по москве и московской области</span>
                <span>Доставка осуществляется транспортной службой СДЕК. При этом заказ необходимо заранее оплатить через сайт. Стоимость доставки составляет 500 рублей.</span>
                <span class="popup-delivery_subtitle">ПОЛНЫЙ ИЛИ ЧАСТИЧНЫЙ ОТКАЗ ОТ ЗАКАЗА ПОСЛЕ ДОСТАВКИ ПО МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ</span>
                <span>Если заказанный Вами товар не подошел по фасону, цвету, размеру или любой другой причине, Вы вправе отказаться от конкретных товаров или всего заказа полностью, при этом сумма за доставку не возвращается.</span>
                <span class="popup-delivery_subtitle">ОБМЕН И ВОЗВРАТ</span>
                <span>Обменять или вернуть вещи, которые по каким-либо причинам Вам не подошли, можно оформив заявку на возврат/обмен по телефону. При этом курьеру Вы должны предоставить квитанцию об оплате, а также сохранить товарный вид изделия. При оплате заказа картой деньги будут возвращены на карту в срок от 1 до 5 рабочих дней после возврата и проверки товара. Срок заявки на возврат товара — 14 дней с момента покупки.</span>
                <span class="popup-delivery_subtitle">БЕСПЛАТНАЯ ДОСТАВКА В РЕГИОНЫ РОССИИ</span>
                <span>Отправка заказа транспортной компанией СДЕК, срок доставки 3-8 рабочих дней. Заказ необходимо заранее оплатить через сайт.</span>
                <span class="popup-delivery_subtitle">ПОЛНЫЙ ИЛИ ЧАСТИЧНЫЙ ОТКАЗ ИЛИ ОБМЕН ПОСЛЕ ДОСТАВКИ В РЕГИОНЫ РОССИИ</span>
                <span>Если заказанный Вами товар не подошел по какой-либо причине, Вы можете оставить заявку на возврат/обмен вещей, которые не подошли, по телефону. Заявку на возврат/обмен необходимо сделать в срок до 14 дней с момента получения Вашего заказа на почту <a href="mailto:krasulinatop@yandex.ru">krasulinatop@yandex.ru</a></span>
                <span class="span-decoration"></span>
            </div>
</div>
<div class="b-popup popup-delivery" id="popup3">
            <div class="b-popup-content">
                <div class="requisites">
                <a class="popup-content__close" href="javascript:PopUpHideThree()">&#10006;</a>
                    <div class="contact-requisites__title">
                            <h3 class="popup-delivery_title">Реквизиты</h3>
                    </div>
                    <div class="requisites-wrapper">
                        <table class="table-requisites">
                            <tr class="table-requisites__string">
                                <td class="table-requisites__left">ИНН:</td>
                                <td class="table-requisites__rigth">773613624470</td>
                            </tr>
                            <!-- <tr class="table-requisites__string">
                                <td class="table-requisites__left">КПП:</td>
                                <td class="table-requisites__rigth">000000000</td>
                            </tr>
                            <tr class="table-requisites__string">
                                <td class="table-requisites__left">ОГРН:</td>
                                <td class="table-requisites__rigth">0000000000000</td>
                            </tr> -->
                            <tr class="table-requisites__string">
                                <td class="table-requisites__left">Р/С:</td>
                                <td class="table-requisites__rigth">40802810220000040176</td>
                            </tr>
                            <tr class="table-requisites__string">
                                <td class="table-requisites__left">БАНК:</td>
                                <td class="table-requisites__rigth">ООО "Банк Точка"</td>
                            </tr>
                            <tr class="table-requisites__string">
                                <td class="table-requisites__left">К/С:</td>
                                <td class="table-requisites__rigth">30101810745374525104</td>
                            </tr>
                            <tr class="table-requisites__string">
                                <td class="table-requisites__left">БИК:</td>
                                <td class="table-requisites__rigth">044525104</td>
                            </tr>
                            <tr class="table-requisites__string">
                                <td class="table-requisites__left">Наименование:</td>
                                <td class="table-requisites__rigth">Индивидуальный предприниматель Красулина Анна Владимировна</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
</div>
<?php wp_footer (); ?>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">indian old sex com <a href="https://rajwap.biz/" rel="dofollow">rajwap.biz</a> indin sex move</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">revenge hentai <a href="https://www.clipxhentai.com/" rel="dofollow" target="_self" title="clipxhentai.com hentai manga netorare">clipxhentai.com</a> raven hentsi</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">www.xxxindianvideos.com <a href="https://www.xshaker.net/" target="_blank" title="xshaker.net">xshaker.net</a> indianxxvideo</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">patna sex video <a href="https://originalhindiporn.mobi/" rel="dofollow" title="originalhindiporn.mobi">originalhindiporn.mobi</a> wordfree4u.ws</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">sentai hentai <a href="https://www.allhentai.net/" target="_blank" title="allhentai.net highschool dxd hentai comics">allhentai.net</a> nibun no yuudou</div>

<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">ぷるるん巨乳で早漏息子を徹底射精管理するフェロモン母のおっぱい激揺れ騎乗位 春菜はな <a href="https://javvideos.net/" target="_self">javvideos.net</a> 家まで送ってイイですか？ case.66</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">سكس غاني <a href="https://boafoda.info/" target="_self" title="boafoda.info">boafoda.info</a> فيلم سكس مجانى</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">goblin slayer priestess hentai <a href="https://www.hentaidown.com/" rel="dofollow" target="_blank" title="hentaidown.com pregnancy hentai manga">hentaidown.com</a> hentai newest</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">shin chan father name <a href="https://2beeg.me/" rel="dofollow" target="_blank" title="2beeg.me">2beeg.me</a> anupama xnxx</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">سيكس خادمات <a href="https://www.uedajk.net/" rel="dofollow">uedajk.net</a> فيلم سكس اوروبي</div>

<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">xnxx goa <a href="https://desisexy.org/" target="_self" title="desisexy.org">desisexy.org</a> xnxx sexy video</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">xnxx indian baby <a href="https://www.pakistanipornx.net/" title="pakistanipornx.net hd young porn">pakistanipornx.net</a> beeg brazzers</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">moka akashiya hentai <a href="https://www.hentaizahd.com/" rel="dofollow" title="hentaizahd.com">hentaizahd.com</a> pollonic girls attack</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">xvides.cm <a href="https://indiansexbar.mobi/" rel="dofollow" target="_blank" title="indiansexbar.mobi hq porn galleries">indiansexbar.mobi</a> telugusex stoties</div>
<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">indian sex free <a href="https://bustytube.info" rel="dofollow" target="_blank" title="bustytube.info vr porn hd">bustytube.info</a> www malayalam xxx videos</div>

</body>
</html>
