<?php if (!defined('FW')) {
    die('Forbidden');
}
?>
<section class="main-slider">

    <div class="main-slider__top">

        <?php foreach ( $atts['top_slider_top'] as $att ) {?>
            <div class="main-slider__top--slide">
                <img src="<?= $att['photo']['url'] ?>" alt="slide">
                <h3 class="main-slider__top--title"><?= $att['title'] ?></h3>
            </div>
        <?php }?>
    </div>

    <div class="main-slider__for">

        <?php foreach ( $atts['top_slider_for'] as $att ) {?>
            <div class="main-slider__for--slide">
                <img src="<?= $att['photo']['url'] ?>" alt="slide">
            </div>
        <?php };?>
    </div>

</section>

<section id="about" class="about">

    <h3 class="section-title"><?= $atts['about_title']?></h3>

    <div class="about__text-box">

        <?php foreach ( $atts['about_textbox'] as $att) {?>
            <p><?= $att['textblock']?></p>
        <? };?>
    </div>
    <div class="about__wrapper">

        <div class="about__left">
            <?php foreach ($atts['about_left'] as $att) {?>
                <h3><?= $att['title']?></h3>
                <p><?= $att['textblock']?></p>
            <? };?>
        </div>
        
        <div class="about__right">
            <?php foreach ( $atts['about_right'] as $att ) {?>
                <h3><?= $att['title']?></h3>
                <p><?= $att['textblock']?></p>
            <? };?>           
        </div>
        
        <div class="about__slider-top">
            
            <?php foreach ( $atts['about_slider_top'] as $att ) {?>
                <div class="about__slider-top--slide">
                    <img src="<?= $att['photo']['url']?>" alt="slide">
                    <h3 class="about__slider-top--title"><?= $att['title']?></h3>
                </div>
            <? };?>

        </div>

        <div class="about__slider-for">
            
            <?php foreach ( $atts['about_slider_for'] as $att ){?>
                <div class="about__slider-for--slide">
                    <img src="<?= $att['photo']['url']?>" alt="slide">
                </div>
            <? };?>

        </div>

    </div>
</section>

<section id="team" class="team">
    <h3 class="section-title"><?= $atts['team_title'] ?></h3>
    <div class="team__wrapper">
        <div class="team__wrapper--element">
            <div class="photo">
                <img src="<?= $atts['team_member_photo1']['url'] ?>" alt="photo">
            </div>
            <div class="descr">
                <div class="triangle"></div>
                <?php foreach ( $atts['team_member_descr1'] as $att) {?>
                    <h3><?= $att['name']?></h3>
                    <p><?= $att['email']?></p>
                    <p><?= $att['phone']?></p>
                <? };?>
            </div>
        </div>
        <div class="team__wrapper--element bg">
            <div class="photo">
                <img src="<?= $atts['team_member_photo2']['url'] ?>" alt="photo">
            </div>
            <div class="descr">
                <div class="triangle"></div>
                <?php foreach ( $atts['team_member_descr2'] as $att) {?>
                    <h3><?= $att['name']?></h3>
                    <p><?= $att['email']?></p>
                    <p><?= $att['phone']?></p>
                <? };?>
            </div>
        </div>
        <div class="team__wrapper--element bg">
            <div class="descr">
                <div class="triangle--right"></div>
                <?php foreach ( $atts['team_member_descr3'] as $att ) {?>
                    <h3><?= $att['name']?></h3>
                    <p><?= $att['email']?></p>
                    <p><?= $att['phone']?></p>
                <? };?>
            </div>
            <div class="photo">
                <img src="<?= $atts['team_member_photo3']['url']?>" alt="photo">
            </div>
        </div>
        <div class="team__wrapper--element">
            <div class="descr">
                <div class="triangle--right"></div>
                <?php foreach ( $atts['team_member_descr4'] as $att) {?>
                    <h3><?= $att['name'] ?></h3>
                    <p><?= $att['email'] ?></p>
                    <p><?= $att['phone']?></p>
                <?php };?>
            </div>
            <div class="photo">
                <img src="<?= $atts['team_member_photo4']['url']?>" alt="photo">
            </div>
        </div>
        <div class="team__wrapper--element">
            <div class="photo">
                <img src="<?= $atts['team_member_photo5']['url']?>" alt="photo">
            </div>
            <div class="descr">
                <div class="triangle"></div>
                <?php foreach ( $atts['team_member_descr5'] as $att) {?>
                    <h3><?= $att['name']?></h3>
                    <p><?= $att['email']?></p>
                    <p><?= $att['phone']?></p>
                <?php };?>
            </div>
        </div>
        <div class="team__wrapper--element bg">
            <div class="photo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_6.png" alt="photo">
            </div>
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
            <div class="photo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_7.png" alt="photo">
            </div>
        </div>
        <div class="team__wrapper--element">
            <div class="descr">
                <div class="triangle--right"></div>
                <h3>JUDr. Pavel Novák</h3>
                <p>mail@jehnevodak.cz</p>
                <p>+420 732 123 456</p>
            </div>
            <div class="photo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_8.png" alt="photo">
            </div>
        </div>
        <div class="team__wrapper--element">
            <div class="photo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_9.png" alt="photo">
            </div>
            <div class="descr">
                <div class="triangle"></div>
                <h3>JUDr. Pavel Novák</h3>
                <p>mail@jehnevodak.cz</p>
                <p>+420 732 123 456</p>
            </div>
        </div>
        <div class="team__wrapper--element bg">
            <div class="photo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_10.png" alt="photo">
            </div>
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
            <div class="photo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/lawyer_11.png" alt="photo">
            </div>
        </div>
        <div class="team__wrapper--element">
            <div class="descr--full">
                <h3>Rádi Vás poznáme osobně.</h3>
            </div>
        </div>
        <div class="team__slider-top">
            <div class="team__slider-top--slide">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_3.png" alt="slide">
                <h3 class="team__slider-top--title">Spolehlivost, efektivita a profesionalita...<br>...to jsou
                    vlastnosti, které vždy ctíme.</h3>
            </div>
        </div>
        <div class="team__slider-for">
            <div class="team__slider-for--slide">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_3.png" alt="slide">
            </div>
            <div class="team__slider-for--slide">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_4.png" alt="slide">
            </div>
            <div class="team__slider-for--slide">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_1.png" alt="slide">
            </div>
            <div class="team__slider-for--slide">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_2.png" alt="slide">
            </div>
        </div>
    </div>
</section>

<section id="attent" class="attent">
    <h3 class="section-title">Naše zaměření</h3>
    <div class="attent__element">
        <div class="photo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/att-1.png" alt="photo">
        </div>
        <div class="descr">
            <div class="triangle"></div>
            <h3>Právo obchodních korporací, fúze a akvizice</h3>
            <p>Advokátní kancelář Jehne, Vodák a partneří je již více než 15 let spolehlivým partnerem klientům z řad
                středních a středně velkých podnikatelských subjektů, osobám fyzickým i právnickým, a to ve všech
                zásadních oblastech práva. Na rozdíl od některých jiných advokátních kanceláří partneři a vlastníci
                kanceláře advokacii aktivně vykonávají a přebírají tak za služby, poskytované kanceláří, plnou
                odpovědnost. Všichni právníci naší advokátní kanceláře mají vysokoškolské vzdělání právnického směru a
                jsou řádně registrováni u České advokátní komory.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
        </div>
    </div>
    <div class="attent__element">
        <div class="descr">
            <div class="triangle-right"></div>
            <h3>GDPR</h3>
            <p>Advokátní kancelář Jehne, Vodák a partneří je již více než 15 let spolehlivým partnerem klientům z řad
                středních a středně velkých podnikatelských subjektů, osobám fyzickým i právnickým, a to ve všech
                zásadních oblastech práva. Na rozdíl od některých jiných advokátních kanceláří partneři a vlastníci
                kanceláře advokacii aktivně vykonávají a přebírají tak za služby, poskytované kanceláří, plnou
                odpovědnost. Všichni právníci naší advokátní kanceláře mají vysokoškolské vzdělání právnického směru a
                jsou řádně registrováni u České advokátní komory.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
        </div>
        <div class="photo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/att-2.png" alt="photo">
        </div>
    </div>
    <div class="attent__element">
        <div class="photo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/att-3.png" alt="photo"></div>
        <div class="descr">
            <div class="triangle"></div>
            <h3>Práva cestujících v letecké dopravě</h3>
            <p>Advokátní kancelář Jehne, Vodák a partneří je již více než 15 let spolehlivým partnerem klientům z řad
                středních a středně velkých podnikatelských subjektů, osobám fyzickým i právnickým, a to ve všech
                zásadních oblastech práva. Na rozdíl od některých jiných advokátních kanceláří partneři a vlastníci
                kanceláře advokacii aktivně vykonávají a přebírají tak za služby, poskytované kanceláří, plnou
                odpovědnost. Všichni právníci naší advokátní kanceláře mají vysokoškolské vzdělání právnického směru a
                jsou řádně registrováni u České advokátní komory.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
        </div>
    </div>
    <div class="attent__element">
        <div class="descr">
            <div class="triangle-right"></div>
            <h3>Nekalá soutěž</h3>
            <p>Advokátní kancelář Jehne, Vodák a partneří je již více než 15 let spolehlivým partnerem klientům z řad
                středních a středně velkých podnikatelských subjektů, osobám fyzickým i právnickým, a to ve všech
                zásadních oblastech práva. Na rozdíl od některých jiných advokátních kanceláří partneři a vlastníci
                kanceláře advokacii aktivně vykonávají a přebírají tak za služby, poskytované kanceláří, plnou
                odpovědnost. Všichni právníci naší advokátní kanceláře mají vysokoškolské vzdělání právnického směru a
                jsou řádně registrováni u České advokátní komory.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
        </div>
        <div class="photo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/att-4.png" alt="photo"></div>
    </div>
    <div class="attent__element">
        <div class="photo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/att-5.png" alt="photo"></div>
        <div class="descr">
            <div class="triangle"></div>
            <h3>Právo nemovitosti a právní podpora developerských projektů</h3>
            <p>Advokátní kancelář Jehne, Vodák a partneří je již více než 15 let spolehlivým partnerem klientům z řad
                středních a středně velkých podnikatelských subjektů, osobám fyzickým i právnickým, a to ve všech
                zásadních oblastech práva. Na rozdíl od některých jiných advokátních kanceláří partneři a vlastníci
                kanceláře advokacii aktivně vykonávají a přebírají tak za služby, poskytované kanceláří, plnou
                odpovědnost. Všichni právníci naší advokátní kanceláře mají vysokoškolské vzdělání právnického směru a
                jsou řádně registrováni u České advokátní komory.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
        </div>
    </div>
    <div class="attent__element">
        <div class="descr">
            <div class="triangle-right"></div>
            <h3>Pracovní právo</h3>
            <p>Advokátní kancelář Jehne, Vodák a partneří je již více než 15 let spolehlivým partnerem klientům z řad
                středních a středně velkých podnikatelských subjektů, osobám fyzickým i právnickým, a to ve všech
                zásadních oblastech práva. Na rozdíl od některých jiných advokátních kanceláří partneři a vlastníci
                kanceláře advokacii aktivně vykonávají a přebírají tak za služby, poskytované kanceláří, plnou
                odpovědnost. Všichni právníci naší advokátní kanceláře mají vysokoškolské vzdělání právnického směru a
                jsou řádně registrováni u České advokátní komory.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
        </div>
        <div class="photo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/att-6.png" alt="photo"></div>
    </div>
    <div class="attent__element">
        <div class="photo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/att-7.png" alt="photo"></div>
        <div class="descr">
            <div class="triangle"></div>
            <h3>Právo IT</h3>
            <p>Advokátní kancelář Jehne, Vodák a partneří je již více než 15 let spolehlivým partnerem klientům z řad
                středních a středně velkých podnikatelských subjektů, osobám fyzickým i právnickým, a to ve všech
                zásadních oblastech práva. Na rozdíl od některých jiných advokátních kanceláří partneři a vlastníci
                kanceláře advokacii aktivně vykonávají a přebírají tak za služby, poskytované kanceláří, plnou
                odpovědnost. Všichni právníci naší advokátní kanceláře mají vysokoškolské vzdělání právnického směru a
                jsou řádně registrováni u České advokátní komory.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
        </div>
    </div>
    <div class="attent__element">
        <div class="descr">
            <div class="triangle-right"></div>
            <h3>Škoda na zdraví</h3>
            <p>Advokátní kancelář Jehne, Vodák a partneří je již více než 15 let spolehlivým partnerem klientům z řad
                středních a středně velkých podnikatelských subjektů, osobám fyzickým i právnickým, a to ve všech
                zásadních oblastech práva. Na rozdíl od některých jiných advokátních kanceláří partneři a vlastníci
                kanceláře advokacii aktivně vykonávají a přebírají tak za služby, poskytované kanceláří, plnou
                odpovědnost. Všichni právníci naší advokátní kanceláře mají vysokoškolské vzdělání právnického směru a
                jsou řádně registrováni u České advokátní komory.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
            <p>Právní služby, poskytované naší advokátní kanceláří vycházejí z bezpodmínečně perfektní znalosti platného
                práva a aktuální tuzemské i zahraniční judikatury. Naši právníci těmito znalostmi disponují a průběžně
                je dle vývoje právní úpravy aktualizují.</p>
        </div>
        <div class="photo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/att-8.png" alt="photo">
        </div>
    </div>
</section>

<section id="media" class="media">
    <h3 class="section-title">Média o nás</h3>
    <div id="media-slider" class="media__slider">
        <div class="media__slider--slide">
            <h3>BŘEZEN 2017</h3>
            <p>Advokátní kancelář dokončila pro klienta koupi podílů ve společnosti podnikající v oblasti kovoprůmyslu
                s dlouholetou tradicí na českém trhu.</p>
        </div>
        <div class="media__slider--slide">
            <h3>BŘEZEN 2017</h3>
            <p>Advokátní kancelář dokončila pro klienta koupi podílů ve společnosti podnikající v oblasti kovoprůmyslu
                s dlouholetou tradicí na českém trhu.</p>
        </div>
        <div class="media__slider--slide">
            <h3>BŘEZEN 2017</h3>
            <p>Advokátní kancelář dokončila pro klienta koupi podílů ve společnosti podnikající v oblasti kovoprůmyslu
                s dlouholetou tradicí na českém trhu.</p>
        </div>
        <div class="media__slider--slide">
            <h3>BŘEZEN 2017</h3>
            <p>Advokátní kancelář dokončila pro klienta koupi podílů ve společnosti podnikající v oblasti kovoprůmyslu
                s dlouholetou tradicí na českém trhu.</p>
        </div>
    </div>
    <div class="media__slider-top">
        <div class="media__slider-top--slide">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_4.png" alt="slide">
            <h3 class="media__slider-top--title">Těší nás zájem médií o naši práci.<br>Pravidelně konzultujeme
                významné<br>právní kauzy ve sdělovacích prostředcích.</h3>
        </div>
        <div class="media__slider-top--slide">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_1.png" alt="slide">
            <h3 class="media__slider-top--title">Těší nás zájem médií o naši práci.<br>Pravidelně konzultujeme
                významné<br>právní kauzy ve sdělovacích prostředcích.</h3>
        </div>
        <div class="media__slider-top--slide">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_2.png" alt="slide">
            <h3 class="media__slider-top--title">Těší nás zájem médií o naši práci.<br>Pravidelně konzultujeme
                významné<br>právní kauzy ve sdělovacích prostředcích.</h3>
        </div>
        <div class="media__slider-top--slide">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_3.png" alt="slide">
            <h3 class="media__slider-top--title">Těší nás zájem médií o naši práci.<br>Pravidelně konzultujeme
                významné<br>právní kauzy ve sdělovacích prostředcích.</h3>
        </div>
    </div>
    <div class="media__slider-for">
        <div class="media__slider-for--slide">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_4.png" alt="slide">
        </div>
        <div class="media__slider-for--slide">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_1.png" alt="slide">
        </div>
        <div class="media__slider-for--slide">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_2.png" alt="slide">
        </div>
        <div class="media__slider-for--slide">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_3.png" alt="slide">
        </div>
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
            <h3>TELEFON</h3>
            <p>+420 222 232 061-2</p>
            <p>+420 222 232 661</p>
            <p>+420 222 232 276</p>
        </div>
        <div class="contacts__wrapper--element">
            <h3>E-MAIL</h3>
            <p>jehne@jehnevodak.cz</p>
            <p>vodak@jehnevodak.cz</p>
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
    <form class="contacts__form">
        <h3>Napište nám</h3>
        <input type="text" placeholder="Jméno a příjmení" class="contacts__form--field">
        <input type="text" placeholder="E-mail" class="contacts__form--field">
        <input type="text" placeholder="Telefon" class="contacts__form--field">
        <textarea placeholder="Text Vaší zprávy" class="contacts__form--text"></textarea>
        <input type="submit" value="ODESLAT" class="contacts__form--submit">
    </form>
</section>