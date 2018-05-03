<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jehne
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('main'); ?>>

    <!-- .entry-content -->
    <section class="main-slider">
        <div class="main-slider__top">
            <div class="main-slider__top--slide">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_1.png" alt="slide">
                <h3 class="main-slider__top--title">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/top-slide-title.png">
                </h3>
            </div>
        </div>
        <div class="main-slider__for">
            <div class="main-slider__for--slide">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_1_big.png" alt="slide"></div>
        </div>
    </section>
    <section id="about" class="about">
        <h3 class="section-title">O nás</h3>
        <div class="about__text-box">
            <?php echo get_field('about_main');?>
        </div>
        <div class="about__wrapper">
            <div class="about__left">
                <?php echo get_field('about_left');?>
            </div>
            <div class="about__right">
                <?php echo get_field('about_right');?>
            </div>
            <div class="about__slider-top">
                <div class="about__slider-top--slide"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/img/slide_2.png" alt="slide">
                    <h3 class="about__slider-top--title">Být klientem naší advokátní kanceláře,<br>znamená respekt
                        vašich obchodních partnerů.</h3>
                </div>
            </div>
            <div class="about__slider-for">
                <div class="about__slider-for--slide"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/img/slide_2_big.png" alt="slide"></div>

            </div>
        </div>
    </section>
    <section id="team" class="team">
        <h3 class="section-title">Náš tým</h3>
        <div class="team__wrapper">
            <div class="team__wrapper--element">
                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_1.png"
                                        alt="photo"></div>
                <div class="descr">
                    <div class="triangle"></div>
                    <h3>JUDr. Pavel Novák</h3>
                    <p>mail@jehnevodak.cz</p>
                    <p>+420 732 123 456</p>
                </div>
            </div>
            <div class="team__wrapper--element bg">
                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_2.png"
                                        alt="photo"></div>
                <div class="descr">
                    <div class="triangle"></div>
                    <h3>JUDr. Pavel Novák</h3>
                    <p>mail@jehnevodak.cz</p>
                    <p>+420 732 123 456</p>
                </div>
            </div>
            <div class="team__wrapper--element bg">
                <div class="descr">
                    <div class="triangle--right"></div>
                    <h3>JUDr. Pavel Novák</h3>
                    <p>mail@jehnevodak.cz</p>
                    <p>+420 732 123 456</p>
                </div>
                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_3.png"
                                        alt="photo"></div>
            </div>
            <div class="team__wrapper--element">
                <div class="descr">
                    <div class="triangle--right"></div>
                    <h3>JUDr. Pavel Novák</h3>
                    <p>mail@jehnevodak.cz</p>
                    <p>+420 732 123 456</p>
                </div>
                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_4.png"
                                        alt="photo"></div>
            </div>
            <div class="team__wrapper--element">
                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_5.png"
                                        alt="photo"></div>
                <div class="descr">
                    <div class="triangle"></div>
                    <h3>JUDr. Pavel Novák</h3>
                    <p>mail@jehnevodak.cz</p>
                    <p>+420 732 123 456</p>
                </div>
            </div>
            <div class="team__wrapper--element bg">
                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_6.png"
                                        alt="photo"></div>
                <div class="descr">
                    <div class="triangle"></div>
                    <h3>JUDr. Pavel Novák</h3>
                    <p>mail@jehnevodak.cz</p>
                    <p>+420 732 123 456</p>
                </div>
            </div>
            <div class="team__wrapper--element bg">
                <div class="descr">
                    <div class="triangle--right"></div>
                    <h3>JUDr. Pavel Novák</h3>
                    <p>mail@jehnevodak.cz</p>
                    <p>+420 732 123 456</p>
                </div>
                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_7.png"
                                        alt="photo"></div>
            </div>
            <div class="team__wrapper--element">
                <div class="descr">
                    <div class="triangle--right"></div>
                    <h3>JUDr. Pavel Novák</h3>
                    <p>mail@jehnevodak.cz</p>
                    <p>+420 732 123 456</p>
                </div>
                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_8.png"
                                        alt="photo"></div>
            </div>
            <div class="team__wrapper--element">
                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_9.png"
                                        alt="photo"></div>
                <div class="descr">
                    <div class="triangle"></div>
                    <h3>JUDr. Pavel Novák</h3>
                    <p>mail@jehnevodak.cz</p>
                    <p>+420 732 123 456</p>
                </div>
            </div>
            <div class="team__wrapper--element bg">
                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_10.png"
                                        alt="photo"></div>
                <div class="descr">
                    <div class="triangle"></div>
                    <h3>JUDr. Pavel Novák</h3>
                    <p>mail@jehnevodak.cz</p>
                    <p>+420 732 123 456</p>
                </div>
            </div>
            <div class="team__wrapper--element bg">
                <div class="descr">
                    <div class="triangle--right"></div>
                    <h3>JUDr. Pavel Novák</h3>
                    <p>mail@jehnevodak.cz</p>
                    <p>+420 732 123 456</p>
                </div>
                <div class="photo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_11.png"
                                        alt="photo"></div>
            </div>
            <div class="team__wrapper--element">
                <div class="descr--full">
                    <h3>Rádi Vás poznáme osobně.</h3>
                </div>
            </div>
            <div class="team__slider-top">
                <div class="team__slider-top--slide"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/img/slide_3.png" alt="slide">
                    <h3 class="team__slider-top--title">Spolehlivost, efektivita a profesionalita...<br>...to jsou
                        vlastnosti, které vždy ctíme.</h3>
                </div>

            </div>
            <div class="team__slider-for">
                <div class="team__slider-for--slide"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/img/slide_3_big.png" alt="slide"></div>

            </div>
        </div>
    </section>
    <section id="attent" class="attent">
        <h3 class="section-title">Naše zaměření</h3>
        <div class="attent__element">
             <div class="photo">
                 <img src="<?php echo get_field('attent_photo_1');?>" alt="photo">
            </div>
            <div class="descr">
                <div class="triangle"></div>
                <h3><?php echo get_field('attent_title_1');?></h3>

                <?php echo get_field('attent_text_1'); ?>

            </div>
        </div>
        <div class="attent__element">
            <div class="descr">
                <div class="triangle"></div>
                <h3><?php echo get_field('attent_title_2');?></h3>
                <?php echo get_field('attent_text_2'); ?>
            </div>
            <div class="photo">
                <img src="<?php echo get_field('attent_photo_2');?>" alt="photo">
            </div>
        </div>
        <div class="attent__element">
            <div class="photo">
                <img src="<?php echo get_field('attent_photo_3');?>" alt="photo">
            </div>
            <div class="descr">
                <div class="triangle"></div>
                <h3><?php echo get_field('attent_title_3');?></h3>
                <?php echo get_field('attent_text_3');?>
            </div>
        </div>
        <div class="attent__element">
            <div class="descr">
                <div class="triangle"></div>
                <h3><?php echo get_field('attent_title_4');?></h3>
                <?php echo get_field('attent_text_4');?>
            </div>
            <div class="photo">
                <img src="<?php echo get_field('attent_photo_4');?>" alt="photo">
            </div>
        </div>
        <div class="attent__element">
            <div class="photo">
                <img src="<?php echo get_field('attent_photo_5');?>" alt="photo">
            </div>
            <div class="descr">
                <div class="triangle"></div>
                <h3><?php echo get_field('attent_title_5');?></h3>
                <?php echo get_field('attent_text_5');?>
            </div>
        </div>
        <div class="attent__element">
            <div class="descr">
                <div class="triangle"></div>
                <h3><?php echo get_field('attent_title_6');?></h3>
                <?php echo get_field('attent_text_6');?>
            </div>
            <div class="photo">
                <img src="<?php echo get_field('attent_photo_6');?>" alt="photo">
            </div>
        </div>
        <div class="attent__element">
            <div class="photo">
                <img src="<?php echo get_field('attent_photo_7');?>" alt="photo">
            </div>
            <div class="descr">
                <div class="triangle"></div>
                <h3><?php echo get_field('attent_title_7');?></h3>
                <?php echo get_field('attent_text_7');?>
            </div>
        </div>
        <div class="attent__element">
            <div class="descr">
                <div class="triangle"></div>
                <h3><?php echo get_field('attent_title_8');?></h3>
                <?php echo get_field('attent_text_8');?>
            </div>
            <div class="photo">
                <img src="<?php echo get_field('attent_photo_8');?>" alt="photo">
            </div>
        </div>
    </section>
    <section id="media" class="media">
        <h3 class="section-title">Média o nás</h3>
        <div id="media-slider" class="media__slider">
            <div class="media__slider--slide">
                <h3>BŘEZEN 2017</h3>
                <p>Advokátní kancelář dokončila pro klienta koupi podílů ve společnosti podnikající v oblasti
                    kovoprůmyslu s dlouholetou tradicí na českém trhu.</p>
            </div>
            <div class="media__slider--slide">
                <h3>BŘEZEN 2017</h3>
                <p>Advokátní kancelář dokončila pro klienta koupi podílů ve společnosti podnikající v oblasti
                    kovoprůmyslu s dlouholetou tradicí na českém trhu.</p>
            </div>
            <div class="media__slider--slide">
                <h3>BŘEZEN 2017</h3>
                <p>Advokátní kancelář dokončila pro klienta koupi podílů ve společnosti podnikající v oblasti
                    kovoprůmyslu s dlouholetou tradicí na českém trhu.</p>
            </div>
            <div class="media__slider--slide">
                <h3>BŘEZEN 2017</h3>
                <p>Advokátní kancelář dokončila pro klienta koupi podílů ve společnosti podnikající v oblasti
                    kovoprůmyslu s dlouholetou tradicí na českém trhu.</p>
            </div>
        </div>
        <div class="media__slider-top">
            <div class="media__slider-top--slide"><img
                        src="<?php bloginfo('template_directory'); ?>/assets/img/slide_4.png" alt="slide">
                <h3 class="media__slider-top--title">Těší nás zájem médií o naši práci.<br>Pravidelně konzultujeme
                    významné<br>právní kauzy ve sdělovacích prostředcích.</h3>
            </div>
            <div class="media__slider-top--slide"><img
                        src="<?php bloginfo('template_directory'); ?>/assets/img/slide_1.png" alt="slide">
                <h3 class="media__slider-top--title">Těší nás zájem médií o naši práci.<br>Pravidelně konzultujeme
                    významné<br>právní kauzy ve sdělovacích prostředcích.</h3>
            </div>
            <div class="media__slider-top--slide"><img
                        src="<?php bloginfo('template_directory'); ?>/assets/img/slide_2.png" alt="slide">
                <h3 class="media__slider-top--title">Těší nás zájem médií o naši práci.<br>Pravidelně konzultujeme
                    významné<br>právní kauzy ve sdělovacích prostředcích.</h3>
            </div>
            <div class="media__slider-top--slide"><img
                        src="<?php bloginfo('template_directory'); ?>/assets/img/slide_3.png" alt="slide">
                <h3 class="media__slider-top--title">Těší nás zájem médií o naši práci.<br>Pravidelně konzultujeme
                    významné<br>právní kauzy ve sdělovacích prostředcích.</h3>
            </div>
        </div>
        <div class="media__slider-for">
            <div class="media__slider-for--slide"><img
                        src="<?php bloginfo('template_directory'); ?>/assets/img/slide_4_big.png" alt="slide"></div>

        </div>
    </section>
    <section id="contacts" class="contacts">
        <h3 class="section-title">Kontaktujte nás</h3>
        <div class="contacts__wrapper">
            <div class="contacts__wrapper--element">
                <h3>ADRESA</h3>
                <p>Washingtonova 1567/25</p>
                <p>Praha 1, 110 00</p>
            </div>
            <div class="contacts__wrapper--element">
                <h3>TELEFON</h3><a href="tel:+420 222 232 061-2">+420 222 232 061-2</a><a href="tel:+420 222 232 661">+420
                    222 232 661</a><a href="tel:+420 222 232 276">+420 222 232 276</a>
            </div>
            <div class="contacts__wrapper--element">
                <h3>E-MAIL</h3><a href="mailto:jehne@jehnevodak.cz">jehne@jehnevodak.cz</a><a
                        href="mailto:vodak@jehnevodak.cz">vodak@jehnevodak.cz</a>
            </div>
            <div class="contacts__wrapper--element">
                <h3>BANKOVNÍ SPOJENÍ</h3>
                <p>GE Money Bank, a.s.</p>
                <p>4124438504/0600</p>
            </div>
            <div class="contacts__wrapper--element">
                <h3>FAX</h3>
                <p>+420 222 230 052</p>
            </div>
            <div class="contacts__wrapper--element">
                <h3>POVINNÉ ÚDAJE</h3>
                <p>IČ: 66219094</p>
                <p>DIČ: CZ6709151977</p>
            </div>
        </div>
        <form id="contact-form" class="contacts__form">
            <h3>Napište nám</h3>
            <input id="contact-name" type="text" name="name" placeholder="Jméno a příjmení" minlength="2" maxlength="20"
                   required class="contacts__form--field">
            <input id="contact-email" type="text" name="email" placeholder="E-mail" minlength="5" maxlength="20"
                   required class="contacts__form--field">
            <input id="contact-phone" type="text" name="phone" placeholder="Telefon" minlength="5" maxlength="20"
                   required class="contacts__form--field">
            <textarea id="contact-text" name="message" minlength="2" maxlength="250" placeholder="Text Vaší zprávy"
                      required class="contacts__form--text"></textarea>
            <input id="contact-submit" type="submit" value="ODESLAT" class="contacts__form--submit">
        </form>
    </section>


</article><!-- #post-<?php the_ID(); ?> -->
