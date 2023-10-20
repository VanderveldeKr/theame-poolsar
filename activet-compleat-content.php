<?php
/*
Template Name: Активация Браслета по выбору Завершенная
*/
?>

<?php get_header(); ?>

    <main>
        <div class="activet-content">
            <div class="container">
                <div class="activet-conten__wrapper">
                    <div class="activet-conten__video">
                        <div class="video__wrapper">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/video-poster.jpg" alt="">
                            <p>Видео инструкция по активации</p>
                            <div id="play" class="input__wrapper">
                                <input class="play-start-video" type="button">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/play.svg" alt="play">
                            </div>
                        </div>
                        <video class="play-video" id="video" src="<?php bloginfo('template_url'); ?>/assets/video/exlu.mp4" muted></video>
                    </div>

                    <div class="instruction-video">
                        <div class="instruction-video__title">
                            <h1>Поздравляем</h1>
                        </div>
                        <div class="instruction-video__subtitle">
                            <span>Правила использования ПУЛЬСАРА.</span>
                        </div>
                        <div class="instruction-video__list">
                            <ol>
                                <li> Нельзя дарить активированный пульсар потому что он уже энергетически связан с владельцем. Можно дарить только новое не активированное и не ношеное изделие.</li>
                                <li> Как писать желание. 
                                    Пишем о себе только в настоящем времени, не употребляя частичку «не», 
                                    пишем только желание за себя, где вы главный герой. Не загадывать
                                    желание за других. Не загадывать желание именные.</li>
                                    <p class="no-prav">(НЕ)Правильно:</p>
                                    <p>«Я больше не болею!»</p>
                                    <p class="prav-text">Правильно:</p>
                                    <p class="prav-text">«Я здоров и с благодарностью принимаю ресурсное состояние».</p>
                                <li> После осуществления желание пульсар необходимо снять.</li>
                                <li> Не дарить пульсар после того как желание сбылось, его необходимо
                                    сохранить в надежном месте.</li>
                                <li> Пульсар активируется только на одно желание. Повторно активировать
                                    на другое желание не получится.</li>
                                <li> Когда ваше желание будет исполнено, желательно перейти на изделие,
                                    которое окажет поддерживающие и усиливающие действие данной сфере.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="audio-content">
                    <div class="audio-content__group">
                        <div class="audio-cart">
                            <div class="audio-cart__img-wrapper">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/audio/1.jpg" alt="#">
                                <img class="img-okey img-okey_one img-okey-js" src="<?php bloginfo('template_url'); ?>/assets/img/audio/okey.svg" alt="#">
                            </div>
                            <button class="musicstart musicstart_one" id="audio-one">Прослушать<br>музыку</button>
                            <audio class="music music_one" preload="auto" loop="loop" controls>
                            <source src="<?php bloginfo('template_url'); ?>/assets/audio/audio_1.mp3" controls autobuffer="" />
                            </audio>
                        </div>
                        <div class="audio-cart">
                            <div class="audio-cart__img-wrapper">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/audio/2.jpg" alt="#">
                                <img class="img-okey img-okey_two img-okey-js" src="<?php bloginfo('template_url'); ?>/assets/img/audio/okey.svg" alt="#">
                            </div>
                            <button class="musicstart musicstart_two" id="audio-one">Прослушать<br>музыку</button>
                            <audio class="music music_two" preload="auto" loop="loop" controls>
                            <source src="<?php bloginfo('template_url'); ?>/assets/audio/audio_1.mp3" controls autobuffer="" />
                            </audio>
                        </div>
                        <div class="audio-cart">
                            <div class="audio-cart__img-wrapper">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/audio/3.jpg" alt="#">
                                <img class="img-okey img-okey_three img-okey-js" src="<?php bloginfo('template_url'); ?>/assets/img/audio/okey.svg" alt="#">
                            </div>
                            <button class="musicstart musicstart_three" id="audio-one">Прослушать<br>музыку</button>
                            <audio class="music music_three" preload="auto" loop="loop" controls>
                            <source src="<?php bloginfo('template_url'); ?>/assets/audio/audio_1.mp3" controls autobuffer="" />
                            </audio>
                        </div>
                        <div class="audio-cart">
                            <div class="audio-cart__img-wrapper">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/audio/4.jpg" alt="#">
                                <img class="img-okey img-okey_four img-okey-js" src="<?php bloginfo('template_url'); ?>/assets/img/audio/okey.svg" alt="#">
                            </div>
                            <button class="musicstart musicstart_four" id="audio-one">Прослушать<br>музыку</button>
                            <audio class="music music_four" preload="auto" loop="loop" controls>
                            <source src="<?php bloginfo('template_url'); ?>/assets/audio/audio_1.mp3" controls autobuffer="" />
                            </audio>
                        </div>
                        <div class="audio-cart">
                            <div class="audio-cart__img-wrapper">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/audio/5.jpg" alt="#">
                                <img class="img-okey img-okey_five img-okey-js" src="<?php bloginfo('template_url'); ?>/assets/img/audio/okey.svg" alt="#">
                            </div>
                            <button class="musicstart musicstart_five" id="audio-one">Прослушать<br>музыку</button>
                            <audio class="music music_five" preload="auto" loop="loop" controls>
                            <source src="<?php bloginfo('template_url'); ?>/assets/audio/audio_1.mp3" controls autobuffer="" />
                            </audio>
                        </div>
                    </div>
    
                    <div class="author_music">
                        <p>Перед вами представлена авторская музыка</p>
                        <form class="form-desire">
                            <input class="searchProduct" type="text" placeholder="Форма желаний">
                        </form>
                        <p>Форма является анонимной, ваши желания  отправляются прямо во Вселенную</p>
                        <a href="https://poolsar.live/aktivacija/aktivacija-brasleta-po-vyboru/aktivacija-brasleta-po-vyboru-zavershennaja/pulsar-aktivirovan/">Готово</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>