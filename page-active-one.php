<?php
/*
Template Name: Poolsar #1
*/
?>

<?php get_header(); ?>

    <main>
        <div class="activet-content">
            <div class="container">
                <div class="activet-conten__wrapper">
                    <div class="activet-conten__video">
                        <div class="video__wrapper">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/mask-group.jpg" alt="">
                            <p>Шаг #1</p>
                            <p>Посмотреть ролик про активацию.</p>
                            <div id="play" class="input__wrapper">
                                <input class="play-start-video" type="button">
                                <a href="<?php bloginfo('template_url'); ?>/assets/video/activete_video.mp4" data-fancybox="gallery-video" data-caption="Шаг #1">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/play.svg" alt="play">
                                </a>                            
                            </div>
                        </div>
                    </div>

                    <div class="instruction-video">
                        <div class="instruction-video__title">
                            <h1>Поздравляем</h1>
                        </div>
                        <div class="instruction-video__subtitle">
                            <span>Вы стали обладателем уникального пульсара.
                                Теперь ваше желание точно исполнится.
                                Осталось всего 6 простых шагов для его активации. </span>
                        </div>
                        <!-- <div class="instruction-video__list">
                            <ol>
                                <li> Посмотреть ролик про активацию.</li>
                                <li> Загадать желание по правилам пульсара.</li>
                                <li> Включить звук на аудио файле с медитацией.</li>
                                <li> Приложить изделие в область солнечного сплетения и активировать его.</li>
                                <li> Надеть изделие на руку.</li>
                                <li> Написать желание в форму</li>
                            </ol>
                        </div> -->
                         
                    </div>
                </div>
                
                <div class="audio-content">
                    <div class="audio-content__group">
                        <a class="musicstart_one" href="<?php bloginfo('template_url'); ?>/assets/img/product/poolsar-2_1.jpg" data-fancybox="step-one" data-caption="Шаг #2">
                            <div class="audio-cart">
                                <div class="audio-cart__img-wrapper">
                                    <video class="music music_one" src="<?php bloginfo('template_url'); ?>/assets/video/activete_2.mp4" muted="muted" autoplay="autoplay" loop></video>                           
                                    <img class="img-okey img-okey_one" src="<?php bloginfo('template_url'); ?>/assets/img/audio/okey.svg" alt="#">
                                </div>
                                <p>Шаг #2</p>
                                <p>Загадать желание по правилам пульсара</p>
                            </div>
                        </a> 

                        <a class="musicstart_three">
                            <div class="audio-cart">
                                <div class="audio-cart__img-wrapper">
                                    <video class="music music_one" src="<?php bloginfo('template_url'); ?>/assets/video/activete_3.mp4" muted="muted" autoplay="autoplay" loop></video>
                                    <img class="img-okey img-okey_three" src="<?php bloginfo('template_url'); ?>/assets/img/audio/okey.svg" alt="#">
                                </div>
                                <p>Шаг #3</p>
                                <p>Включить звук на аудио файле с медитацией</p>
                                <audio class="music_three" preload="auto" loop="loop" controls>
                                    <source src="<?php bloginfo('template_url'); ?>/assets/audio/poolsar_1.wav" controls autobuffer="" />
                                </audio>
                            </div>
                        </a>

                        <a class="musicstart_two" href="<?php bloginfo('template_url'); ?>/assets/img/product/poolsar-4_1.jpg" data-fancybox="step-four" data-caption="Шаг #4">
                            <div class="audio-cart">
                                <div class="audio-cart__img-wrapper">
                                    <video class="music music_one" src="<?php bloginfo('template_url'); ?>/assets/video/activete_4.mp4" muted="muted" autoplay="autoplay" loop></video>
                                    <img class="img-okey img-okey_two" src="<?php bloginfo('template_url'); ?>/assets/img/audio/okey.svg" alt="#">                          
                                </div>
                                <p>Шаг #4</p>                            
                                <p>Приложить изделие в область солнечного сплетения и активировать его</p>
                            </div>
                        </a>

                        <a class="musicstart_four" href="<?php bloginfo('template_url'); ?>/assets/img/product/poolsar-5_1.jpg" data-fancybox="step-four" data-caption="Шаг #5">
                            <div class="audio-cart">
                                <div class="audio-cart__img-wrapper">
                                    <video class="music music_one" src="<?php bloginfo('template_url'); ?>/assets/video/activete_5.mp4" muted="muted" autoplay="autoplay" loop></video>
                                    <img class="img-okey img-okey_four" src="<?php bloginfo('template_url'); ?>/assets/img/audio/okey.svg" alt="#">
                                </div>
                                <p>Шаг #5</p>
                                <p>Надеть изделие на руку</p>
                            </div>
                        </a>
                        <a class="musicstart_five" href="#form-desire">
                            <div class="audio-cart">
                                <div class="audio-cart__img-wrapper">
                                    <video class="music music_one music-dop" src="<?php bloginfo('template_url'); ?>/assets/video/activete_6.mp4" muted="muted" autoplay="autoplay" loop></video>
                                    <img class="img-okey img-okey_five" src="<?php bloginfo('template_url'); ?>/assets/img/audio/okey.svg" alt="#">
                                </div>
                                <p>Шаг #6</p>
                                <p>Написать желание в форму</p>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="author_music">
                        <p>Перед вами представлена авторская музыка</p>
                    </div> -->
                </div>

                <div class="author_music" id="form-desire">
                        <form class="form-desire" action="https://poolsar.live/aktivacija/aktivacija-brasleta-po-vyboru/aktivacija-brasleta-po-vyboru-zavershennaja/pulsar-aktivirovan/" method="get">
                            <input class="searchProduct" type="text" placeholder="Форма желаний">
                        </form>
                        <p>Форма является анонимной, ваши желания  отправляются прямо во Вселенную</p>
                    </div>
            </div>
        </div>
    </main>
 
<?php get_footer(); ?>