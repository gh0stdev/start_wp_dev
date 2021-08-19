<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SegaPrototype
 */


$description = carbon_get_theme_option('sp_footer_desc');
$footer_address = carbon_get_theme_option('sp_footer_address');
$footer_office = carbon_get_theme_option('sp_footer_office');
$footer_scripts = carbon_get_theme_option('sp_footer_scripts');
$footer_copy = carbon_get_theme_option('sp_footer_copy');
$work_time = carbon_get_theme_option('sp_work_time');
$phone = carbon_get_theme_option('sp_phone');
$email = carbon_get_theme_option('sp_email');

$soc_in = carbon_get_theme_option('sp_footer_soc_in');
$soc_fa = carbon_get_theme_option('sp_footer_soc_fa');
$soc_yo = carbon_get_theme_option('sp_footer_soc_yo');
$soc_vk = carbon_get_theme_option('sp_footer_soc_vk');

?>


<?php wp_footer(); ?>

<footer class="footer">
    <div class="footer__container container">
        <div class="footer__col footer__col_socials">

            <div class="footer__links-block">
                <?php if(!empty($soc_in)): ?>
                    <a href="<?= $soc_in ?>" target="_blank"
                       class="footer__links-item footer__links-item_1"></a>
                <?php endif; ?>

                <?php if(!empty($soc_fa)): ?>
                    <a href="<?= $soc_fa ?>" target="_blank"
                       class="footer__links-item footer__links-item_2"></a>
                <?php endif; ?>

                <?php if(!empty($soc_yo)): ?>
                    <a href="<?= $soc_yo ?>" target="_blank"
                       class="footer__links-item footer__links-item_3"></a>
                <?php endif; ?>

                <?php if(!empty($soc_vk)): ?>
                    <a href="<?= $soc_vk ?>" target="_blank"
                       class="footer__links-item footer__links-item_4"></a>
                <?php endif; ?>
            </div>

            <div class="footer__links-block">
                <span class="footer__pay-system-item footer__pay-system-item_visa"></span>
                <span class="footer__pay-system-item footer__pay-system-item_mir"></span>
                <span class="footer__pay-system-item footer__pay-system-item_mastercard"></span>
            </div>
        </div>

        <div class="footer__col footer__col_main">

            <div class="footer__info-block">
                <div class="footer__address-column">
                    <div class="footer__address">
                        <div class="footer__address-descr">
                            <?= $footer_office ?>
                        </div>
                        <p class="footer__address-line">
                            <?= $footer_address ?>
                        </p>
                    </div>
                    <a href="mailto: <?= $email ?>" class="footer__mail"><?= $email ?></a>
                </div>

                <div class="footer__internet-shop-column">
                </div>
                <div class="footer__call-center-column">
                    <p class="footer__call-center-phone"><?= $phone ?></p>
                    <p class="footer__internet-shop-timetable"><?= $work_time ?></p>
                    <br>
                    <a href="javascript:void(0)" data-href="#call-request-popup"
                       class="footer__call-request js-popup-link">Заказать звонок</a>
                </div>
            </div>
            <div class="footer-col-multimenu">
                <?php sp_catalog_footer_menu(); ?>
           </div>
            <div class="footer__menu-wrap">
                <?php sp_static_footer_menu(); ?>
            </div>
            <!--noindex-->
            <p class="footer__info">

            </p>
            <!--/noindex-->
            <div class="footer__bottom-line">

                <p class="footer__rights">
                    <?= $footer_copy ?>
                </p>
            </div>
        </div>
    </div>
</footer>


<div class="mobile-menu" id="mobile-menu">
    <form action="https://dyatkovo.ru/search/">
        <div class="mobile-menu__search-block">
            <div class="mobile-menu__search-wrap">
                <input type="text" class="mobile-menu__search" name="q" placeholder="поиск">
            </div>
            <button name="s" value="Искать" type="submit" class="mobile-menu__search-button"></button>
        </div>
    </form>
    <div class="mobile-menu__main-part">
        <a href="index.html#" class="mobile-menu__close" id="mobile-menu-close"></a>
        <div class="mobile-menu__list-wrap">
            <div class="mobile-menu__list">
                <a href="https://dyatkovo.ru/virtual-designer/" class="mobile-menu__item">Виртуальный дизайнер</a>
                <a href="https://dyatkovo.ru/kuhni/" class="mobile-menu__item ">кухни</a>
                <a href="https://dyatkovo.ru/catalogue/gostinye/" class="mobile-menu__item ">гостиные</a>
                <a href="https://dyatkovo.ru/catalogue/spalnye_garnitury/" class="mobile-menu__item ">спальни</a>
                <a href="https://dyatkovo.ru/catalogue/molodezhnye/" class="mobile-menu__item ">молодежные</a>
                <a href="https://dyatkovo.ru/catalogue/prikhozhie/" class="mobile-menu__item ">прихожие</a>
                <a href="https://dyatkovo.ru/catalogue/shkafy/" class="mobile-menu__item ">Шкафы</a>
                <a href="https://dyatkovo.ru/catalogue/krovati/" class="mobile-menu__item ">Кровати</a>
                <a href="https://dyatkovo.ru/catalogue/" class="mobile-menu__item ">все товары</a>
                <a href="https://dyatkovo.ru/catalogue/special-offer/" class="mobile-menu__item mobile-menu__item_special">Ликвидация</a>
            </div>
            <div class="mobile-menu__list">
                <a href="https://dyatkovo.ru/virtual-designer/" class="mobile-menu__item">Виртуальный дизайнер</a>
                <a href="https://dyatkovo.ru/buyers/" class="mobile-menu__item ">Покупателям</a>
                <a href="https://dyatkovo.ru/partners/" class="mobile-menu__item ">Партнёрам</a>
                <a href="https://dyatkovo.ru/news/" class="mobile-menu__item ">Новости</a>
                <a href="https://dyatkovo.ru/actions/" class="mobile-menu__item ">Акции</a>
                <a href="https://dyatkovo.ru/articles/" class="mobile-menu__item ">Статьи</a>
                <a href="https://dyatkovo.ru/jobs/" class="mobile-menu__item ">Вакансии</a>
                <a href="https://dyatkovo.ru/credit/" class="mobile-menu__item ">Рассрочка</a>
                <a href="https://dyatkovo.ru/about/" class="mobile-menu__item ">О нас</a>
                <a href="https://dyatkovo.ru/faq/" class="mobile-menu__item ">FAQ</a>
                <a href="https://dyatkovo.ru/stores/" class="mobile-menu__item pre-header__menu-item--show-mobile-only">Магазины</a>
            </div>
        </div>
    </div>
</div>

<div style="display: none;">
    <div class="box-modal" id="design-request-popup">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup">

                <!--noindex-->
                <form action="https://dyatkovo.ru/local/components/custom/uform.form/.ajax.php" method="POST" name="popup_form" id="js-design-request-form"
                      accept-charset="windows-1251"
                      class="uform-formdesignrequest53 uform-form-pagedesignrequest53" data-href="#thanks-for-request" data-metrika-goal="SEND_DESIGN" data-analytics-category="DESIGN" data-analytics-action="SEND_DESIGN">

                    <input type="hidden" name="line" value="455" />
                    <input type="hidden" name="src" value="/local/templates/dmi/footer.php" />
                    <input type="hidden" name="popup" value="" />

                    <div class="test-popup__container">
                        <h2 class="test-popup__title test-popup__title_big">
                            Заказать<br>дизайн-проект                    </h2>
                        <p class="test-popup__text">
                            Закажите бесплатный<br>дизайн-проект разработанный<br>индивидуально для Вас        </p>
                        <div id="uform_field_308" class="field-wrap">

                            <div class="form__input-holder"
                            >
                                <input type="text"
                                       placeholder="Имя"
                                       rel="NAME"
                                       id="form_text_308"
                                       class="form__input "
                                       name="PROPERTY[308][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_309" class="field-wrap">

                            <div class="form__input-holder"
                            >
                                <input type="text"
                                       placeholder="Телефон*"
                                       rel="PHONE"
                                       id="form_text_309"
                                       class="form__input phone"
                                       name="PROPERTY[309][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_310" class="field-wrap">

                            <div class="form__input-holder"
                            >
                                <input type="text"
                                       placeholder="Эл. почта"
                                       rel="EMAIL"
                                       id="form_text_310"
                                       class="form__input "
                                       name="PROPERTY[310][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_311" class="field-wrap">

                            <div class="form__input-holder"
                            >
                                <input type="text"
                                       placeholder="Город"
                                       rel="CITY"
                                       id="form_text_311"
                                       class="form__input "
                                       name="PROPERTY[311][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_312" class="field-wrap">

                            <input type="hidden" name="PROPERTY[312][0][VALUE][TYPE]" value="html">
                            <div class="form__textarea-holder">
                                <textarea id="form_text_312" cols="30" rows="10" class="form__textarea" placeholder="Комментарий" name="PROPERTY[312][]"></textarea>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_314" class="field-wrap">
                            <div class="test-popup__photo-block" data-files-number="0">
                                <p class="test-popup__photo-block-text">Прикрепите файлы:</p>
                                <div class="test-popup__photo-block-list">
                                </div>
                                <input type="file" class="design-request-popup_file_input js-input-file-0" style="display:none"
                                       name="PROPERTY_FILE_314_0[]"/>
                                <a href="index.html#" class="test-popup__photo-block-add-more js-test-popup__photo-block-add-more">
                                    Добавить ещё
                                </a>
                            </div>

                            <span class="err"></span>
                        </div>
                        <p class="test-popup__personal-info">Заполняя форму, Вы принимаете <a href="index.html#" class="test-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                    </div>
                    <button type="submit" class="test-popup__button send-btn" data-href="#thanks-for-request">отправить</button>


                    <input type="hidden" name="popup" value="" />

                    <input type="hidden" name="page_url" value="/">
                    <input type="hidden" name="page_title" value="Мебель от производителя: купить в Москве | цены в каталоге магазина «Дятьково»">

                </form>
                <!--/noindex-->


                <script type="text/javascript">
                    $(function(){

                        $('.uform-formdesignrequest53').ajaxForm({
                            dataType: 'json',
                            success: function (msg, statusText, xhr, $form) {
                                if (msg.status == 'ok') {
                                    var criteoParams = {};
                                    criteoParams.transactionId = msg.id;
                                    sendSingleCriteoTransaction(criteoParams);
                                }
                                send_uformdesignrequest53(msg, statusText, xhr, $form);
                                $(".js-preloader-Wait").hide();
                            },
                            beforeSerialize: function($form, options) {
                                $form.find('input[name=page_url]').val(document.location.href);
                                $form.find('input[name=page_title]').val(document.title);
                            },
                            beforeSubmit: function (fields, $form) {
                                $(".js-preloader-Wait").show();
                                $form.find(".send-btn").attr('disabled', 'disabled');
                            }
                        });

                        function send_uformdesignrequest53(data, statusText, xhr, $form) {

                            $form.find(".send-btn").removeAttr('disabled');
                            $form.find(".field-error").removeClass('field-error');

                            if (data.status == 'ok') {


                                if($form.attr('data-metrika-goal')) {
                                    yandexReachGoal($form.attr('data-metrika-goal'));
                                }
                                if($form.attr('data-analytics-category')) {
                                    ga('send', 'event', $form.attr('data-analytics-category'), $form.attr('data-analytics-action'));
                                }

                                $form.trigger('reset');

                                var href = $form.attr('data-href');
                                if(href) {
                                    $.arcticmodal('close');
                                    openPopup(href);
                                }
                                else {
                                    $('.uform_popup_inner').html(data.message).show();
                                    show_uform();
                                    window.setTimeout('hide_popup();',5000);
                                }

                            }
                            else if (data.err !== undefined) {
                                for (i = 0; i < data.err.length; i++) {
                                    $(data.err[i][0]).addClass('field-error').find('span.err').html(data.err[i][1]);
                                }
                            }

                            if (data.captcha !== undefined) {
                                $form.find('img.uform-captcha-img').attr('src', data.captcha.img);
                                $form.find('input[name="CAPTCHA[SID]"]').val(data.captcha.sid);
                            }

                        }
                    });
                </script>




            </div>

        </div>
    </div>

    <div class="box-modal box-modal__kitchen" id="design-request-kitchen-popup">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">


            <div class="test-popup">








                <!--noindex-->
                <form action="https://dyatkovo.ru/local/components/custom/uform.form/.ajax.php" method="POST"
                      accept-charset="windows-1251"
                      name="designrequestkitchen67"
                      id="designrequestkitchen67"
                      class="uform-formdesignrequestkitchen67 uform-form-pagedesignrequestkitchen67 js-form-FileReader js-form-selector-city js-form-waitForm"
                      data-href="#thanks-for-request" data-id="designrequestkitchen67"
                      data-get-shops-url="/local/components/custom/uform.form/templates/design-request-kitchen/ajaxGetShopsSelector.php" data-metrika-goal="SEND_DESIGN_KUHNI"
                      data-analytics-category="DESIGN_KUHNI" data-analytics-action="SEND_DESIGN">


                    <div id="win8_wrapper" class="js-form-Wait">
                        <div class="windows8">
                            <div class="wBall" id="wBall_1">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_2">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_3">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_4">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_5">
                                <div class="wInnerBall"></div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="line" value="562" />
                    <input type="hidden" name="src" value="/local/templates/dmi/footer.php" />
                    <input type="hidden" name="popup" value="" />
                    <input type="hidden" name="ajaxSenddesignrequestkitchen67" value="Y" />

                    <div class="test-popup__container">
                        <h2 class="test-popup__title test-popup__title_big">
                            Заказать<br>дизайн-проект                    </h2>
                        <p class="test-popup__text">
                            Закажите бесплатный<br>дизайн-проект разработанный<br>индивидуально для Вас        </p>





                        <div id="uform_field_599" class="field-wrap">

                            <div class="form__input-holder"
                            >
                                <input type="text"
                                       placeholder="Имя*"
                                       rel="NAME"
                                       id="form_text_599"
                                       class="form__input "
                                       name="PROPERTY[599][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_600" class="field-wrap">

                            <div class="form__input-holder"
                            >
                                <input type="text"
                                       placeholder="Телефон*"
                                       rel="PHONE"
                                       id="form_text_600"
                                       class="form__input                                    phone
                                   "
                                       name="PROPERTY[600][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_597" class="field-wrap">

                            <div class="form__input-holder"
                            >
                                <input type="text"
                                       placeholder="Эл. почта*"
                                       rel="EMAIL"
                                       id="form_text_597"
                                       class="form__input "
                                       name="PROPERTY[597][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_596" class="field-wrap">

                            <input type="hidden" name="PROPERTY[596][0][VALUE][TYPE]" value="html">
                            <div class="form__textarea-holder">
                        <textarea id="form_text_596" cols="30" rows="10"
                                  class="form__textarea js-COMMENT"
                                  placeholder="Комментарий"
                                  name="PROPERTY[596][]"></textarea>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_595" class="field-wrap">
                            <div class="test-popup__photo-block" data-files-number="0">
                                <p class="test-popup__photo-block-text">Прикрепите файлы:</p>
                                <div class="test-popup__photo-block-list">
                                </div>
                                <input type="file" class="design-request-popup_file_input js-input-file-0" style="display:none"
                                       name="PROPERTY_FILE_595_0[]"/>
                                <a href="index.html#" class="test-popup__photo-block-add-more js-test-popup__photo-block-add-more">
                                    Добавить ещё
                                </a>
                            </div>

                            <span class="err"></span>
                        </div>



                        <p class="test-popup__personal-info">Заполняя форму, Вы принимаете <a href="index.html#" class="test-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                    </div>
                    <button type="submit" class="test-popup__button send-btn">отправить</button>


                    <input type="hidden" name="popup" value="" />


                    <input type="hidden" name="page_url" value="/">
                    <input type="hidden" name="page_title" value="Мебель от производителя: купить в Москве | цены в каталоге магазина «Дятьково»">

                </form>
                <!--/noindex-->

                <script type="text/javascript">
                    $(function(){

                        waitForm = "";
                        $('.uform-formdesignrequestkitchen67').ajaxForm({
                            dataType: 'json',
                            success: function(msg, statusText, xhr, $form){
                                if (msg.status == 'ok') {
                                    var criteoParams = {};
                                    criteoParams.transactionId = msg.id;
                                    sendSingleCriteoTransaction(criteoParams);
                                }
                                var formID = $form.parents(".box-modal").attr("id");
                                //BX.closeWaitCustom(formID, waitForm);
                                $form.find(".js-form-Wait").hide();
                                send_uform_design_request_kitchen(msg, statusText, xhr, $form);
                            },
                            beforeSubmit: function(fields, $form, options){
                                $form.find('input[name=page_url]').val(document.location.href);
                                $form.find('input[name=page_title]').val(document.title);
                                if(validate(fields, $form, options)){

                                    var formID = $form.parents(".box-modal").attr("id");
                                    //waitForm = BX.showWaitCustom(formID);
                                    $form.find(".send-btn").attr('disabled', 'disabled');
                                    $form.find(".js-form-Wait").show();

                                }else{

                                    return false;
                                }
                            }
                        });

                        var $select = $(".custom-styled-select");
                        $select.chosenCustom();


                        function validate(formData, jqForm, options) {

                            jqForm.find(".field-wrap").each(function(){
                                $(this).removeClass("field-error");
                            });



                            var $name = jqForm.find('input[rel="NAME"]');
                            var $phone = jqForm.find('input[rel="PHONE"]');
                            var $mail = jqForm.find('input[rel="EMAIL"]');

                            var nameValue = $name.fieldValue();
                            var phoneValue = $phone.fieldValue();
                            var mailValue = $mail.fieldValue();

                            var isErrors = false;

                            if(nameValue[0].length == 0){
                                $name.closest(".field-wrap").find(".err").html("Поле обязательно для заполнения");
                                $name.closest(".field-wrap").addClass("field-error");
                                isErrors = true;
                                //return false;
                            }
                            if(phoneValue[0].length == 0){
                                $phone.closest(".field-wrap").find(".err").html("Поле обязательно для заполнения");
                                $phone.closest(".field-wrap").addClass("field-error");
                                isErrors = true;
                                //return false;
                            }
                            if(mailValue[0].length == 0){
                                $mail.closest(".field-wrap").find(".err").html("Поле обязательно для заполнения");
                                $mail.closest(".field-wrap").addClass("field-error");
                                isErrors = true;
                                //return false;
                            }
                            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                            if(!pattern.test(mailValue[0])){
                                $mail.closest(".field-wrap").find(".err").html("Неверный формат e-mail");
                                $mail.closest(".field-wrap").addClass("field-error");
                                isErrors = true;
                                //return false;
                            }

                            if(isErrors){
                                return false;
                            }else{
                                return true;
                            }


                        }

                    });
                </script>


            </div>

        </div>
    </div>

    <div class="box-modal box-modal__kitchen" id="call-get-size">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">


            <div class="test-popup">








                <form action="index.html" method="POST"
                      accept-charset="windows-1251"
                      name="design-request-kitchen-map68"
                      id="design-request-kitchen-map68"
                      class="uform-formdesign-request-kitchen-map68 uform-form-pagedesign-request-kitchen-map68 js-form-FileReader js-form-selector-city js-form-waitForm"
                      data-href="#thanks-for-request" data-id="design-request-kitchen-map68"
                      data-get-shops-url="/local/components/custom/uform.form/templates/design-request-kitchen-map/ajaxGetShopsSelector.php" data-metrika-goal=""
                      data-analytics-category="" data-analytics-action="">


                    <div id="win8_wrapper" class="js-form-Wait">
                        <div class="windows8">
                            <div class="wBall" id="wBall_1">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_2">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_3">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_4">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_5">
                                <div class="wInnerBall"></div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="line" value="623" />
                    <input type="hidden" name="src" value="/local/templates/dmi/footer.php" />
                    <input type="hidden" name="popup" value="" />
                    <input type="hidden" name="ajaxSenddesign-request-kitchen-map68" value="Y" />

                    <div class="test-popup__container">
                        <h2 class="test-popup__title test-popup__title_big">
                            Вызвать замерщика                    </h2>
                        <p class="test-popup__text">
                            Пригласите профессионального замерщика, чтобы составить подробный план помещения        </p>





                        <div id="uform_field_601" class="field-wrap">

                            <div class="form__input-holder"
                            >
                                <input type="text"
                                       placeholder="Имя*"
                                       rel="NAME"
                                       id="form_text_601"
                                       class="form__input "
                                       name="PROPERTY[601][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_602" class="field-wrap">

                            <div class="form__input-holder"
                            >
                                <input type="text"
                                       placeholder="Телефон*"
                                       rel="PHONE"
                                       id="form_text_602"
                                       class="form__input                                    phone
                                   "
                                       name="PROPERTY[602][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_603" class="field-wrap">

                            <div class="form__input-holder"
                            >
                                <input type="text"
                                       placeholder="Эл. почта*"
                                       rel="EMAIL"
                                       id="form_text_603"
                                       class="form__input "
                                       name="PROPERTY[603][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_604" class="field-wrap">

                            <div class="test-popup__select-holder"><!--test-popup__select styled-select-->
                                <select name="PROPERTY[604][]" class="custom-styled-select
selector-city js-selector-city">


                                    <option value="796"
                                            selected>Москва и МО</option>
                                </select>
                            </div>


                            <span class="err"></span>
                        </div>
                        <div id="uform_field_605" class="field-wrap">
                            <!--test-popup__select styled-select-->
                            <div class="test-popup__select-holder
test-popup__select-shop-holder">
                                <select name="PROPERTY[605][]" class="custom-styled-select
js-test-popup__select-shop"
                                        data-placeholder="Выберите магазин:"
                                >


                                    <option value="2527"
                                            data-xml-id="24"
                                    >МЦ Roomer</option>

                                    <option value="2529"
                                            data-xml-id="24"
                                    >МЦ Империя</option>

                                    <option value="2544"
                                            data-xml-id="24"
                                    >ТРЦ Красный Кит</option>

                                    <option value="2550"
                                            data-xml-id="24"
                                    >ТЦ Черемушки</option>

                                    <option value="2551"
                                            data-xml-id="24"
                                    >ЦДиИ Экспострой </option>

                                    <option value="2565"
                                            data-xml-id="24"
                                    >ТЦ Мебель Град</option>

                                    <option value="2570"
                                            data-xml-id="24"
                                    >МЦ Красный кит</option>

                                    <option value="2576"
                                            data-xml-id="24"
                                    >МТК Гранд</option>

                                    <option value="2579"
                                            data-xml-id="24"
                                    >ТЦ Румянцево</option>

                                    <option value="20310"
                                            data-xml-id="24"
                                    >МЦ Дом</option>

                                    <option value="20406"
                                            data-xml-id="24"
                                    >ТК Вагант</option>

                                    <option value="22574"
                                            data-xml-id="24"
                                    >ТЦ Твой Дом Крокус</option>

                                    <option value="25278"
                                            data-xml-id="24"
                                    >ФМ Дятьково</option>

                                    <option value="27333"
                                            data-xml-id="24"
                                    >Дом Кухни</option>

                                    <option value="29528"
                                            data-xml-id="24"
                                    >ТЦ Твой Дом Vegas</option>

                                    <option value="30022"
                                            data-xml-id="24"
                                    >ТЦ МОСКВА МЕБЕЛЬ</option>

                                    <option value="30036"
                                            data-xml-id="24"
                                    >ТЦ Три Кита</option>

                                    <option value="32096"
                                            data-xml-id="24"
                                    >ТЦ Кухни Парк</option>

                                    <option value="36868"
                                            data-xml-id="24"
                                    >ТЦ Шоколад</option>

                                    <option value="37192"
                                            data-xml-id="24"
                                    >ТЦ Мебель Park 2</option>

                                    <option value="42150"
                                            data-xml-id="24"
                                    >ТЦ Гранд юг</option>

                                    <option value="44474"
                                            data-xml-id="24"
                                    >ТЦ Андромеда</option>

                                    <option value="45260"
                                            data-xml-id="24"
                                    >МЦ Большая Медведица</option>

                                    <option value="47041"
                                            data-xml-id="24"
                                    >ТЦ Пулмарт</option>

                                    <option value="48222"
                                            data-xml-id="24"
                                    >ТЦ Family Room</option>

                                    <option value="50465"
                                            data-xml-id="24"
                                    >ТЦ Family Room</option>

                                    <option value="50888"
                                            data-xml-id="24"
                                    >ТЦ Твой Дом</option>

                                </select>
                            </div>


                            <span class="err"></span>
                        </div>
                        <div id="uform_field_606" class="field-wrap">

                            <input type="hidden" name="PROPERTY[606][0][VALUE][TYPE]" value="html">
                            <div class="form__textarea-holder">
                        <textarea id="form_text_606" cols="30" rows="10"
                                  class="form__textarea js-COMMENT"
                                  placeholder="Комментарий"
                                  name="PROPERTY[606][]"></textarea>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_607" class="field-wrap">
                            <div class="test-popup__photo-block" data-files-number="0">
                                <p class="test-popup__photo-block-text">Прикрепите файлы:</p>
                                <div class="test-popup__photo-block-list">
                                </div>
                                <input type="file" class="design-request-popup_file_input js-input-file-0" style="display:none"
                                       name="PROPERTY_FILE_607_0[]"/>
                                <a href="index.html#" class="test-popup__photo-block-add-more js-test-popup__photo-block-add-more">
                                    Добавить ещё
                                </a>
                            </div>

                            <span class="err"></span>
                        </div>



                        <p class="test-popup__personal-info">Заполняя форму, Вы принимаете <a href="index.html#" class="test-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                    </div>
                    <button type="submit" class="test-popup__button send-btn">отправить</button>


                    <input type="hidden" name="popup" value="" />


                    <input type="hidden" name="page_url" value="/">
                    <input type="hidden" name="page_title" value="Мебель от производителя: купить в Москве | цены в каталоге магазина «Дятьково»">

                </form>

                <script>
                    $(function(){

                        waitForm = "";

                        $('.uform-formdesign-request-kitchen-map68').ajaxForm({
                            dataType: 'json',
                            success: function(msg, statusText, xhr, $form){
                                send_uform_design_request_kitchen(msg, statusText, xhr, $form);
                                var formID = $form.parents(".box-modal").attr("id");
                                //BX.closeWaitCustom(formID, waitForm);
                                $form.find(".js-form-Wait").hide();
                            },
                            beforeSerialize: function($form, options) {
                                $form.find('input[name=page_url]').val(document.location.href);
                                $form.find('input[name=page_title]').val(document.title);
                            },
                            beforeSubmit: function(fields, $form, options){
                                if(validate(fields, $form, options)){

                                    var formID = $form.parents(".box-modal").attr("id");
                                    //waitForm = BX.showWaitCustom(formID);
                                    $form.find(".send-btn").attr('disabled', 'disabled');
                                    $form.find(".js-form-Wait").show();

                                }else{

                                    return false;
                                }
                            }
                        });

                        var $select = $(".custom-styled-select");
                        $select.chosenCustom();


                        function validate(formData, jqForm, options) {

                            jqForm.find(".field-wrap").each(function(){
                                $(this).removeClass("field-error");
                            });



                            var $name = jqForm.find('input[rel="NAME"]');
                            var $phone = jqForm.find('input[rel="PHONE"]');
                            var $mail = jqForm.find('input[rel="EMAIL"]');

                            var nameValue = $name.fieldValue();
                            var phoneValue = $phone.fieldValue();
                            var mailValue = $mail.fieldValue();

                            var isErrors = false;

                            if(nameValue[0].length == 0){
                                $name.closest(".field-wrap").find(".err").html("Поле обязательно для заполнения");
                                $name.closest(".field-wrap").addClass("field-error");
                                isErrors = true;
                                //return false;
                            }
                            if(phoneValue[0].length == 0){
                                $phone.closest(".field-wrap").find(".err").html("Поле обязательно для заполнения");
                                $phone.closest(".field-wrap").addClass("field-error");
                                isErrors = true;
                                //return false;
                            }
                            if(mailValue[0].length == 0){
                                $mail.closest(".field-wrap").find(".err").html("Поле обязательно для заполнения");
                                $mail.closest(".field-wrap").addClass("field-error");
                                isErrors = true;
                                //return false;
                            }
                            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                            if(!pattern.test(mailValue[0])){
                                $mail.closest(".field-wrap").find(".err").html("Неверный формат e-mail");
                                $mail.closest(".field-wrap").addClass("field-error");
                                isErrors = true;
                                //return false;
                            }

                            if(isErrors){
                                return false;
                            }else{
                                return true;
                            }


                        }

                    });
                </script>


            </div>

        </div>
    </div>



    <div class="box-modal" id="testimonial-popup">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup">
                <!--<form>-->
                <div class="test-popup__container">
                    <h2 class="test-popup__title">оставить отзыв</h2>
                    <p class="test-popup__text">
                        Пожалуйста, авторизуйтесь
                        <br>
                        через социальную сеть
                    </p>
                    <div class="test-popup__auth-block">

                        <script type="text/javascript">if (window.location.hash != '' && window.location.hash != '#') top.BX.ajax.history.checkRedirectStart('bxajaxid', '331a1cf318e23d141f0b563a343257bc')</script><div id="comp_331a1cf318e23d141f0b563a343257bc">








                            <a  class="test-popup__auth-button"
                                title="ВКонтакте"
                                href="javascript:void(0)"
                                onclick="BX.util.popup('https://oauth.vk.com/authorize?client_id=5867396&redirect_uri=https%3A%2F%2Fdyatkovo.ru%2F%3Fauth_service_id%3DVKontakte&scope=friends,offline,email&response_type=code&state=site_id%3Ds1%26backurl%3D%252F%253Fcheck_key%253D9f7e1cb808e1979f562cd00bd3a6720b%2526SHOW_REVIEW_FORM%253D1%26redirect_url%3D%252F%253FSHOW_REVIEW_FORM%253D1', 660, 425)">
                                вконтакте                </a>






                            <a  class="test-popup__auth-button"
                                title="Facebook"
                                href="javascript:void(0)"
                                onclick="BX.util.popup('https://www.facebook.com/dialog/oauth?client_id=1865551180151254&redirect_uri=https%3A%2F%2Fdyatkovo.ru%2Fbitrix%2Ftools%2Foauth%2Ffacebook.php&scope=email&display=popup&state=site_id%3Ds1%26backurl%3D%252F%253Fcheck_key%253D9f7e1cb808e1979f562cd00bd3a6720b%26redirect_url%3D%252F', 680, 600)">
                                Фейсбук                </a>









                        </div><script type="text/javascript">if (top.BX.ajax.history.bHashCollision) top.BX.ajax.history.checkRedirectFinish('bxajaxid', '331a1cf318e23d141f0b563a343257bc');</script><script type="text/javascript">top.BX.ready(BX.defer(function() {window.AJAX_PAGE_STATE = new top.BX.ajax.component('comp_331a1cf318e23d141f0b563a343257bc'); top.BX.ajax.history.init(window.AJAX_PAGE_STATE);}))</script>
                        <a href="index.html#" class="btn btn_green js-popup-link btn__change-form"
                           data-href="#testimonial-popup-completed">Оставить отзыв без авторизации</a>


                    </div>


                </div>
                <!--<button type="submit" class="test-popup__button js-popup-link" data-href="#thank-you">отправить</button>-->
                <!--</form>-->
            </div>

        </div>
    </div>


    <div class="box-modal" id="thank-you">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup test-popup_thank-you">
                <form>
                    <div class="test-popup__container">
                        <h2 class="test-popup__title">
                            Спасибо,
                            <br>
                            что помогаете нам
                            <br>
                            стать лучше!</h2>
                        <p class="test-popup__text">
                            Ваше сообщение появится на сайте
                            <br>
                            после модерации.
                        </p>
                    </div>
                    <button type="submit" class="test-popup__button arcticmodal-close">закрыть</button>
                </form>
            </div>

        </div>
    </div>

    <!-- всплывашка после добавления в корзину -->
    <!--noindex-->
    <div class="box-modal" id="add-to-cart">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="add-to-cart">
                <p class="add-to-cart__good-name">Вы добавили<br><span
                            class="add-to-cart__text popup_item_name"></span> в корзину</p>
                <div class="add-to-cart__button-block">
                    <a href="index.html#" class="add-to-cart__continue-shopping">продолжить покупки</a>
                    <a href="https://dyatkovo.ru/personal/cart/" class="add-to-cart__go-to-cart">перейти в корзину</a>
                </div>
            </div>

        </div>
    </div>
    <!--/noindex-->

    <!--noindex-->
    <div class="box-modal" id="call-request-popup">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">
            <div class="test-popup">

                <form action="https://dyatkovo.ru/local/components/custom/uform.form/.ajax.php" method="POST" name="popup_form"
                      id="popup_form" accept-charset="windows-1251"
                      class="uform-formdefault35 uform-form-pagedefault35" data-href="#thanks-for-request"
                      data-metrika-goal="SEND_CALL_BACK"
                      data-analytics-category="FORM"
                      data-analytics-action="SEND_CALL_BACK">

                    <input type="hidden" name="line" value="775" />
                    <input type="hidden" name="src" value="/local/templates/dmi/footer.php" />
                    <input type="hidden" name="popup" value="" />

                    <div class="test-popup__container">
                        <h2 class="test-popup__title test-popup__title_big">
                            Заказать<br>обратный звонок                    </h2>
                        <p class="test-popup__text">
                            Пожалуйста, оставьте свои контакты,<br>и мы свяжемся с Вами<br>в ближайшее время!        </p>
                        <div id="uform_field_148" class="field-wrap">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Имя*"
                                       rel="NAME"
                                       id="form_text_148" class="form__input"
                                       name="PROPERTY[148][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_149" class="field-wrap">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Телефон*"
                                       rel="PHONE"
                                       id="form_text_149" class="form__input"
                                       name="PROPERTY[149][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_150" class="field-wrap">
                            <input type="hidden" name="PROPERTY[150][0][VALUE][TYPE]" value="html">
                            <div class="form__textarea-holder">
                        <textarea id="form_text_150" cols="30" rows="10" class="form__textarea"
                                  placeholder="Комментарий"
                                  name="PROPERTY[150][]"></textarea>
                            </div>
                            <span class="err"></span>
                        </div>
                        <p class="test-popup__personal-info">Заполняя форму, Вы принимаете <a href="index.html#" class="test-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                    </div>
                    <button type="submit" class="test-popup__button send-btn">отправить</button>


                    <input type="hidden" name="popup" value="" />

                    <input type="hidden" name="page_url" value="/">
                    <input type="hidden" name="page_title" value="Мебель от производителя: купить в Москве | цены в каталоге магазина «Дятьково»">

                </form>

                <script>
                    $(function(){
                        var $form = $('.uform-formdefault35');
                        var isOneClick = false;
                        $form.ajaxForm({
                            dataType: 'json',
                            success: function(msg, statusText, xhr, $form){
                                /*if (msg.status == 'ok') {
                var criteoParams = {};
                criteoParams.transactionId = msg.id;
                sendSingleCriteoTransaction(criteoParams);
            }*/
                                send_uformdefault35(msg, statusText, xhr, $form);
                                if(typeof isOneClick !== 'undefined' && isOneClick){
                                    $.cookie('isOneClickOrder' , 1);
                                }
                                $(".js-preloader-Wait").hide();
                            },
                            beforeSerialize: function($form, options) {
                                $form.find('input[name=page_url]').val(document.location.href);
                                $form.find('input[name=page_title]').val(document.title);
                            },
                            beforeSubmit: function(fields, $form){
                                $(".js-preloader-Wait").show();
                                $form.find(".send-btn").attr('disabled', 'disabled');
                            }
                        });


                        function send_uformdefault35(data, statusText, xhr, $form) {

                            $(".uform_popup .preloader").hide();
                            $form.find(".send-btn").removeAttr('disabled');
                            $form.find(".field-error").removeClass('field-error');

                            if (data.status == 'ok') {
                                $form.trigger('reset');
                                if($form.find('.account-checkbox').hasClass('checked')){
                                    $form.find('.account-checkbox').removeClass('checked');
                                }

                                var href = $form.attr('data-href');
                                if(href) {
                                    $.arcticmodal('close');
                                    openPopup(href);
                                }
                                else {
                                    $('.uform_popup_inner').html(data.message).show();
                                    show_uform();
                                    window.setTimeout('hide_popup();',5000);
                                }

                                ga("send", "event", $form.data("analytics-category"), $form.data("analytics-action"));
                                yandexReachGoal($form.data("metrika-goal"));

                                //criteo
                                var idItem = $('.link_one_click').attr('data-artnumber') || 1;
                                var price = $('.link_one_click').attr('data-price') || 1;
                                var realId = $('.link_one_click').attr('data-id') || 1;

                                console.log(realId);
                                window.criteo_q = window.criteo_q || [];
                                window.criteo_q.push(
                                    { event: "setAccount", account: accountId },
                                    { event: "setSiteType", type: siteType },
                                    { event: "setEmail", email: userEmail},
                                    { event: "trackTransaction", id: data.id, item: [{ id: idItem, price: price, quantity: 1} ]});

                            }
                            else if (data.err !== undefined) {
                                for (i = 0; i < data.err.length; i++) {
                                    $(data.err[i][0]).addClass('field-error').find('span.err').html(data.err[i][1]);
                                }
                            }

                            if (data.captcha !== undefined) {
                                $form.find('img.uform-captcha-img').attr('src', data.captcha.img);
                                $form.find('input[name="CAPTCHA[SID]"]').val(data.captcha.sid);
                            }

                        }


                    });
                </script>                </div>

        </div>
    </div>
    <!--/noindex-->

    <div class="box-modal" id="thanks-for-request">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup test-popup_thank-you">
                <form>
                    <div class="test-popup__container">
                        <h2 class="test-popup__title">
                            Спасибо

                            <br>
                            за обращение!
                        </h2>
                        <p class="test-popup__text">
                            Менеджер перезвонит
                            <br>
                            Вам в течение нескольких минут.
                        </p>
                    </div>
                    <button type="submit" class="test-popup__button arcticmodal-close">закрыть</button>
                </form>
            </div>

        </div>
    </div>

    <div class="box-modal box-modal__kitchen" id="thanks-for-dealer-profit">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup test-popup_thank-you">
                <form>
                    <div class="test-popup__container">
                        <h2 class="test-popup__title">
                            Спасибо
                            <br>
                            за обращение!
                        </h2>
                        <p class="test-popup__text">
                            Менеджер перезвонит
                            <br>
                            Вам в течение нескольких минут.
                        </p>
                    </div>
                    <button type="submit" class="test-popup__button arcticmodal-close">закрыть</button>
                </form>
            </div>

        </div>
    </div>

    <div class="box-modal__kitchen" id="thanks-for-review">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup test-popup_thank-you">
                <form>
                    <div class="test-popup__container">
                        <h2 class="test-popup__title">
                            Спасибо

                            <br>
                            за отзыв!
                        </h2>
                    </div>
                    <button type="submit" class="test-popup__button arcticmodal-close">закрыть</button>
                </form>
            </div>

        </div>
    </div>


    <div class="box-modal" id="one-click-popup">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">
            <div class="test-popup">

                <form action="https://dyatkovo.ru/local/components/custom/uform.form/.ajax.php" method="POST" name="popup_form"
                      id="popup_form" accept-charset="windows-1251"
                      class="uform-formdefault66 uform-form-pagedefault66" data-href="#thanks-for-request"
                      data-metrika-goal="BUY1CLICK_SEND"
                      data-analytics-category="BUY1CLICK"
                      data-analytics-action="SEND">

                    <input type="hidden" name="line" value="894" />
                    <input type="hidden" name="src" value="/local/templates/dmi/footer.php" />
                    <input type="hidden" name="popup" value="" />

                    <div class="test-popup__container">
                        <h2 class="test-popup__title test-popup__title_big">
                            Заказ в один клик                    </h2>
                        <p class="test-popup__text">
                        </p>
                        <div id="uform_field_587" class="field-wrap">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Имя*"
                                       rel="NAME"
                                       id="form_text_587" class="form__input"
                                       name="PROPERTY[587][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_588" class="field-wrap">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Телефон*"
                                       rel="PHONE"
                                       id="form_text_588" class="form__input"
                                       name="PROPERTY[588][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_589" class="field-wrap">
                            <input type="hidden" name="PROPERTY[589][0][VALUE][TYPE]" value="html">
                            <div class="form__textarea-holder">
                        <textarea id="form_text_589" cols="30" rows="10" class="form__textarea"
                                  placeholder="Комментарий"
                                  name="PROPERTY[589][]"></textarea>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_590" class="field-wrap" style="display:none;">
                            <input name="PROPERTY[590][]" rel="ITEM" type="hidden">
                            <span class="err"></span>
                        </div>
                        <div class="form__input-holder" style="margin-top:16px;">
                            <div class="account-popup__checkbox-block">
                                <label class="account-popup__checkbox">
                                    <input type="checkbox" name="PROPERTY[BUY_ONLINE]" class="account-checkbox">
                                    <p class="account-popup__checkbox-text">Оплатить онлайн</p>
                                </label>
                            </div>
                        </div>
                        <p class="test-popup__personal-info">Заполняя форму, Вы принимаете <a href="index.html#" class="test-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                    </div>
                    <button type="submit" class="test-popup__button send-btn">отправить</button>


                    <input type="hidden" name="popup" value="" />

                    <input type="hidden" name="page_url" value="/">
                    <input type="hidden" name="page_title" value="Мебель от производителя: купить в Москве | цены в каталоге магазина «Дятьково»">

                </form>

                <script>
                    $(function(){
                        var $form = $('.uform-formdefault66');
                        var isOneClick = 1;
                        $form.ajaxForm({
                            dataType: 'json',
                            success: function(msg, statusText, xhr, $form){
                                /*if (msg.status == 'ok') {
                var criteoParams = {};
                criteoParams.transactionId = msg.id;
                sendSingleCriteoTransaction(criteoParams);
            }*/
                                send_uformdefault66(msg, statusText, xhr, $form);
                                if (msg.status == 'ok') {
                                    oneClickEcommerce($form, msg);
                                }
                                if(typeof isOneClick !== 'undefined' && isOneClick){
                                    $.cookie('isOneClickOrder' , 1);
                                }
                                $(".js-preloader-Wait").hide();
                            },
                            beforeSerialize: function($form, options) {
                                $form.find('input[name=page_url]').val(document.location.href);
                                $form.find('input[name=page_title]').val(document.title);
                            },
                            beforeSubmit: function(fields, $form){
                                $(".js-preloader-Wait").show();
                                $form.find(".send-btn").attr('disabled', 'disabled');
                            }
                        });


                        function send_uformdefault66(data, statusText, xhr, $form) {

                            $(".uform_popup .preloader").hide();
                            $form.find(".send-btn").removeAttr('disabled');
                            $form.find(".field-error").removeClass('field-error');

                            if (data.status == 'ok') {
                                $form.trigger('reset');
                                if($form.find('.account-checkbox').hasClass('checked')){
                                    $form.find('.account-checkbox').removeClass('checked');
                                }

                                var href = $form.attr('data-href');
                                if(href) {
                                    $.arcticmodal('close');
                                    openPopup(href);
                                }
                                else {
                                    $('.uform_popup_inner').html(data.message).show();
                                    show_uform();
                                    window.setTimeout('hide_popup();',5000);
                                }

                                ga("send", "event", $form.data("analytics-category"), $form.data("analytics-action"));
                                yandexReachGoal($form.data("metrika-goal"));

                                //criteo
                                var idItem = $('.link_one_click').attr('data-artnumber') || 1;
                                var price = $('.link_one_click').attr('data-price') || 1;
                                var realId = $('.link_one_click').attr('data-id') || 1;

                                console.log(realId);
                                window.criteo_q = window.criteo_q || [];
                                window.criteo_q.push(
                                    { event: "setAccount", account: accountId },
                                    { event: "setSiteType", type: siteType },
                                    { event: "setEmail", email: userEmail},
                                    { event: "trackTransaction", id: data.id, item: [{ id: idItem, price: price, quantity: 1} ]});

                            }
                            else if (data.err !== undefined) {
                                for (i = 0; i < data.err.length; i++) {
                                    $(data.err[i][0]).addClass('field-error').find('span.err').html(data.err[i][1]);
                                }
                            }

                            if (data.captcha !== undefined) {
                                $form.find('img.uform-captcha-img').attr('src', data.captcha.img);
                                $form.find('input[name="CAPTCHA[SID]"]').val(data.captcha.sid);
                            }

                        }


                    });
                </script>                </div>

        </div>
    </div>
    <div class="box-modal" id="one-click-sale-popup">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">
            <div class="test-popup">

                <form action="https://dyatkovo.ru/local/components/custom/uform.form/.ajax.php" method="POST" name="popup_form"
                      id="popup_form" accept-charset="windows-1251"
                      class="uform-formdefault66 uform-form-pagedefault66" data-href="#thanks-for-request"
                      data-metrika-goal="BUY1CLICK_SEND"
                      data-analytics-category="BUY1CLICK"
                      data-analytics-action="SEND">

                    <input type="hidden" name="line" value="937" />
                    <input type="hidden" name="src" value="/local/templates/dmi/footer.php" />
                    <input type="hidden" name="popup" value="" />

                    <div class="test-popup__container">
                        <h2 class="test-popup__title test-popup__title_big">
                            Забронировать товар                    </h2>
                        <p class="test-popup__text">
                        </p>
                        <div id="uform_field_587" class="field-wrap">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Имя*"
                                       rel="NAME"
                                       id="form_text_587" class="form__input"
                                       name="PROPERTY[587][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_588" class="field-wrap">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Телефон*"
                                       rel="PHONE"
                                       id="form_text_588" class="form__input"
                                       name="PROPERTY[588][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_589" class="field-wrap">
                            <input type="hidden" name="PROPERTY[589][0][VALUE][TYPE]" value="html">
                            <div class="form__textarea-holder">
                        <textarea id="form_text_589" cols="30" rows="10" class="form__textarea"
                                  placeholder="Комментарий"
                                  name="PROPERTY[589][]"></textarea>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_590" class="field-wrap" style="display:none;">
                            <input name="PROPERTY[590][]" rel="ITEM" type="hidden">
                            <span class="err"></span>
                        </div>
                        <p class="test-popup__personal-info">Заполняя форму, Вы принимаете <a href="index.html#" class="test-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                    </div>
                    <button type="submit" class="test-popup__button send-btn">отправить</button>


                    <input type="hidden" name="popup" value="" />

                    <input type="hidden" name="page_url" value="/">
                    <input type="hidden" name="page_title" value="Мебель от производителя: купить в Москве | цены в каталоге магазина «Дятьково»">

                </form>

                <script>
                    $(function(){
                        var $form = $('.uform-formdefault66');
                        var isOneClick = 1;
                        $form.ajaxForm({
                            dataType: 'json',
                            success: function(msg, statusText, xhr, $form){
                                /*if (msg.status == 'ok') {
                var criteoParams = {};
                criteoParams.transactionId = msg.id;
                sendSingleCriteoTransaction(criteoParams);
            }*/
                                send_uformdefault66(msg, statusText, xhr, $form);
                                if (msg.status == 'ok') {
                                    oneClickEcommerce($form, msg);
                                }
                                if(typeof isOneClick !== 'undefined' && isOneClick){
                                    $.cookie('isOneClickOrder' , 1);
                                }
                                $(".js-preloader-Wait").hide();
                            },
                            beforeSerialize: function($form, options) {
                                $form.find('input[name=page_url]').val(document.location.href);
                                $form.find('input[name=page_title]').val(document.title);
                            },
                            beforeSubmit: function(fields, $form){
                                $(".js-preloader-Wait").show();
                                $form.find(".send-btn").attr('disabled', 'disabled');
                            }
                        });


                        function send_uformdefault66(data, statusText, xhr, $form) {

                            $(".uform_popup .preloader").hide();
                            $form.find(".send-btn").removeAttr('disabled');
                            $form.find(".field-error").removeClass('field-error');

                            if (data.status == 'ok') {
                                $form.trigger('reset');
                                if($form.find('.account-checkbox').hasClass('checked')){
                                    $form.find('.account-checkbox').removeClass('checked');
                                }

                                var href = $form.attr('data-href');
                                if(href) {
                                    $.arcticmodal('close');
                                    openPopup(href);
                                }
                                else {
                                    $('.uform_popup_inner').html(data.message).show();
                                    show_uform();
                                    window.setTimeout('hide_popup();',5000);
                                }

                                ga("send", "event", $form.data("analytics-category"), $form.data("analytics-action"));
                                yandexReachGoal($form.data("metrika-goal"));

                                //criteo
                                var idItem = $('.link_one_click').attr('data-artnumber') || 1;
                                var price = $('.link_one_click').attr('data-price') || 1;
                                var realId = $('.link_one_click').attr('data-id') || 1;

                                console.log(realId);
                                window.criteo_q = window.criteo_q || [];
                                window.criteo_q.push(
                                    { event: "setAccount", account: accountId },
                                    { event: "setSiteType", type: siteType },
                                    { event: "setEmail", email: userEmail},
                                    { event: "trackTransaction", id: data.id, item: [{ id: idItem, price: price, quantity: 1} ]});

                            }
                            else if (data.err !== undefined) {
                                for (i = 0; i < data.err.length; i++) {
                                    $(data.err[i][0]).addClass('field-error').find('span.err').html(data.err[i][1]);
                                }
                            }

                            if (data.captcha !== undefined) {
                                $form.find('img.uform-captcha-img').attr('src', data.captcha.img);
                                $form.find('input[name="CAPTCHA[SID]"]').val(data.captcha.sid);
                            }

                        }


                    });
                </script>                </div>

        </div>
    </div>
    <div class="box-modal" id="credit-popup">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">
            <div class="test-popup">

                <form action="https://dyatkovo.ru/local/components/custom/uform.form/.ajax.php" method="POST" name="popup_form"
                      id="popup_form" accept-charset="windows-1251"
                      class="uform-formcredit179 uform-form-pagecredit179" data-href="#thanks-for-request"
                      data-metrika-goal="rassrochka"
                      data-analytics-category="FORM"
                      data-analytics-action="rassrochka">

                    <input type="hidden" name="line" value="983" />
                    <input type="hidden" name="src" value="/local/templates/dmi/footer.php" />
                    <input type="hidden" name="popup" value="" />

                    <div class="test-popup__container">
                        <h2 class="test-popup__title test-popup__title_big">
                            Рассрочка                    </h2>
                        <div id="uform_field_1225" class="field-wrap">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Имя*"
                                       rel="NAME"
                                       id="form_text_1225" class="form__input"
                                       name="PROPERTY[1225][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_1226" class="field-wrap">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Телефон*"
                                       rel="PHONE"
                                       id="form_text_1226" class="form__input"
                                       name="PROPERTY[1226][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_1227" class="field-wrap" style="display:none;">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Ссылка на товар*"
                                       rel="LINK_ITEM"
                                       id="form_text_1227" class="form__input"
                                       name="PROPERTY[1227][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_1251" class="field-wrap" style="display:none;">
                            <input name="PROPERTY[1251][]" rel="ITEM" type="hidden">
                            <span class="err"></span>
                        </div>
                        <p class="test-popup__personal-info item-name"></p>
                        <p class="test-popup__personal-info">Заполняя форму, Вы принимаете <a href="index.html#" class="test-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                    </div>
                    <button type="submit" class="test-popup__button send-btn">отправить</button>


                    <input type="hidden" name="prId" value="">
                    <input type="hidden" name="prPrice" value="">
                    <input type="hidden" name="popup" value="" />
                    <input type="hidden" name="page_url" value="/">
                    <input type="hidden" name="page_title" value="Ссылка на товар">


                </form>

                <script>
                    $(function(){
                        var $form = $('.uform-formcredit179');
                        $form.ajaxForm({
                            dataType: 'json',
                            success: function(msg, statusText, xhr, $form){
                                if (msg.status == 'ok') {
                                    var criteoParams = {};
                                    criteoParams.transactionId = msg.id;
                                    criteoParams.productId = $form.find("input[name=prId]").val();
                                    criteoParams.productPrice = $form.find("input[name=prPrice]").val();
                                    sendSingleCriteoTransaction(criteoParams);
                                }
                                send_uformcredit179(msg, statusText, xhr, $form);
                                if (msg.status == 'ok') {
                                    creditAdmitad($form, msg);
                                }
                                $(".js-preloader-Wait").hide();
                            },
                            beforeSerialize: function($form, options) {
                                $form.find('input[rel="ITEM"]').attr('value' , $('.link_credit_click').data('id'));
                                $form.find('input[rel="LINK_ITEM"]').attr('value' , "https://dyatkovo.ru"+$('.link_credit_click').data('link'));
                                $form.find('input[name=page_url]').val("https://dyatkovo.ru"+$('.link_credit_click').data('link'));

                            },
                            beforeSubmit: function(fields, $form){
                                $(".js-preloader-Wait").show();
                                $form.find(".send-btn").attr('disabled', 'disabled');
                            },
                        });


                        function send_uformcredit179(data, statusText, xhr, $form) {

                            var itemID = $('#uform_field_1251').find('input[type="hidden"]').val();
                            $.get('/ajax/cart.php', {action: 'one_click_ecommerce', id: itemID}, function(data){
                                fbq('track', 'AddToCart', {
                                    currency: 'RUB',
                                    value: data.price,
                                    contents: [
                                        {'id' : data.id, 'quantity' : 1, 'item_price' : data.price,},
                                    ],
                                    content_type: 'product'
                                });


                                /*fbq('track', 'InitiateCheckout');*/


                                /* fbq('track', 'Purchase', {
                value: data.price,
                currency: 'RUB',
                contents: [
                    {'id' : data.id, 'quantity' : 1, 'item_price' : data.price,},
                ],
                content_type: 'product'}
            );*/

                            }, 'json');

                            $(".uform_popup .preloader").hide();
                            $form.find(".send-btn").removeAttr('disabled');
                            $form.find(".field-error").removeClass('field-error');

                            if (data.status == 'ok') {
                                $form.trigger('reset');

                                var href = $form.attr('data-href');
                                if(href) {
                                    $.arcticmodal('close');
                                    openPopup(href);
                                }
                                else {
                                    $('.uform_popup_inner').html(data.message).show();
                                    show_uform();
                                    window.setTimeout('hide_popup();',5000);
                                }

                                ga("send", "event", $form.data("analytics-category"), $form.data("analytics-action"));
                                yandexReachGoal($form.data("metrika-goal"));



                            }
                            else if (data.err !== undefined) {
                                for (i = 0; i < data.err.length; i++) {
                                    $('.uform-formcredit179').find(data.err[i][0]).addClass('field-error');
                                    $('.uform-formcredit179').find(data.err[i][0] + ' span.err').html(data.err[i][1]);
                                }
                            }

                            if (data.captcha !== undefined) {
                                $form.find('img.uform-captcha-img').attr('src', data.captcha.img);
                                $form.find('input[name="CAPTCHA[SID]"]').val(data.captcha.sid);
                            }

                        }


                    });
                </script>                </div>

        </div>
    </div>

    <div class="box-modal" id="credit-popup-on-page">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">
            <div class="test-popup">

                <form action="https://dyatkovo.ru/local/components/custom/uform.form/.ajax.php" method="POST" name="popup_form"
                      id="popup_form" accept-charset="windows-1251"
                      class="uform-formcreditonpage179 uform-form-pagecreditonpage179" data-href="#thanks-for-request"
                      data-metrika-goal="rassrochka"
                      data-analytics-category="FORM"
                      data-analytics-action="rassrochka">

                    <input type="hidden" name="line" value="1027" />
                    <input type="hidden" name="src" value="/local/templates/dmi/footer.php" />
                    <input type="hidden" name="popup" value="" />

                    <div class="test-popup__container">
                        <h2 class="test-popup__title test-popup__title_big">
                            Рассрочка                    </h2>
                        <div id="uform_field_1225" class="field-wrap">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Имя*"
                                       rel="NAME"
                                       id="form_text_1225" class="form__input"
                                       name="PROPERTY[1225][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_1226" class="field-wrap">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Телефон*"
                                       rel="PHONE"
                                       id="form_text_1226" class="form__input"
                                       name="PROPERTY[1226][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_1227" class="field-wrap" style="display:none;">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Ссылка на товар*"
                                       rel="LINK_ITEM"
                                       id="form_text_1227" class="form__input"
                                       name="PROPERTY[1227][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <p class="test-popup__personal-info">Заполняя форму, Вы принимаете <a href="index.html#" class="test-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                    </div>
                    <button type="submit" class="test-popup__button send-btn">отправить</button>


                    <input type="hidden" name="popup" value="" />
                    <input type="hidden" name="page_url" value="/">
                    <input type="hidden" name="page_title" value="Ссылка на товар">


                </form>

                <script>
                    $(function(){
                        var $form = $('.uform-formcreditonpage179');
                        $form.ajaxForm({
                            dataType: 'json',
                            success: function(msg, statusText, xhr, $form){
                                if (msg.status == 'ok') {
                                    var criteoParams = {};
                                    criteoParams.transactionId = msg.id;
                                    sendSingleCriteoTransaction(criteoParams);
                                }
                                send_uformcreditonpage179(msg, statusText, xhr, $form);
                                $(".js-preloader-Wait").hide();
                            },
                            beforeSerialize: function($form, options) {
                                $form.find('input[rel="LINK_ITEM"]').attr('value' , "https://dyatkovo.ru"+$('.link_credit_click').data('link'));
                                $form.find('input[name=page_url]').val("https://dyatkovo.ru"+$('.link_credit_click').data('link'));

                            },
                            beforeSubmit: function(fields, $form){
                                $(".js-preloader-Wait").show();
                                $form.find(".send-btn").attr('disabled', 'disabled');
                            },
                        });


                        function send_uformcreditonpage179(data, statusText, xhr, $form) {

                            $(".uform_popup .preloader").hide();
                            $form.find(".send-btn").removeAttr('disabled');
                            $form.find(".field-error").removeClass('field-error');

                            if (data.status == 'ok') {
                                $form.trigger('reset');

                                var href = $form.attr('data-href');
                                if(href) {
                                    $.arcticmodal('close');
                                    openPopup(href);
                                }
                                else {
                                    $('.uform_popup_inner').html(data.message).show();
                                    show_uform();
                                    window.setTimeout('hide_popup();',5000);
                                }

                                ga("send", "event", $form.data("analytics-category"), $form.data("analytics-action"));
                                yandexReachGoal($form.data("metrika-goal"));


                            }
                            else if (data.err !== undefined) {
                                for (i = 0; i < data.err.length; i++) {
                                    $('.uform-formcreditonpage179').find(data.err[i][0]).addClass('field-error');
                                    $('.uform-formcreditonpage179').find(data.err[i][0] + ' span.err').html(data.err[i][1]);
                                }
                            }

                            if (data.captcha !== undefined) {
                                $form.find('img.uform-captcha-img').attr('src', data.captcha.img);
                                $form.find('input[name="CAPTCHA[SID]"]').val(data.captcha.sid);
                            }

                        }


                    });
                </script>                </div>

        </div>
    </div>


    <div class="box-modal" id="city-choose-popup">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

        </div>
    </div>

    <!--noindex-->
    <div class="box-modal" id="thanks-for-subscription">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup test-popup_thank-you">
                <form>
                    <div class="test-popup__container">
                        <h2 class="test-popup__title">
                            Спасибо,
                            <br>
                            что выбрали нас!
                        </h2>
                        <p class="test-popup__text">
                            Теперь Вы будете в курсе
                            <br>
                            всех самых выгодных акций
                            <br>
                            и предложений от dmi Дятьково.
                        </p>
                    </div>
                    <button type="submit" class="test-popup__button arcticmodal-close">закрыть</button>
                </form>
            </div>

        </div>
    </div>
    <!--/noindex-->

    <!--noindex-->
    <div class="box-modal" id="popup-34461">
        <div class="box-modal__close arcticmodal-close"></div>
        <div class="box-modal__content">
            <div class="picture-popup">
                <div class="picture-popup__image" style="background-image: url(upload/iblock/a15/a15da936b25933dc2284e7e0923cb9c9.jpg)"></div>
                <div class="picture-popup__container">
                    <h2 class="picture-popup__title">
                        Бесплатный дизайн-проект!                        </h2>
                    <p class="picture-popup__text">
                        Заполните форму обратной связи, и получите бесплатный дизайн-проект.
                    </p>
                    <form action="https://dyatkovo.ru/ajax/auto-popup.php" method="POST" name="popup_form"
                          data-analytics-category="DISCOUNT_FORM"
                          data-analytics-action="pop-up_skidka"
                          data-metrika-goal="pop-up_skidka"
                          id="form-34461" data-href="#thanks-for-request" accept-charset="windows-1251">

                        <div id="uform_field_1247"
                             class="field-wrap"
                        >
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Имя*"
                                       rel="NAME"
                                       id="form_text_1247" class="form__input"
                                       name="PROPERTY[1247][0]" value=""/>
                            </div>                                        <span class="err"></span>
                        </div>
                        <div id="uform_field_1248"
                             class="field-wrap"
                        >
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Телефон*"
                                       rel="PHONE"
                                       id="form_text_1248" class="form__input"
                                       name="PROPERTY[1248][0]" value=""/>
                            </div>                                        <span class="err"></span>
                        </div>
                        <div id="uform_field_1250"
                             class="field-wrap"
                        >
                            <input type="hidden" name="PROPERTY[1250][0][VALUE][TYPE]" value="html">
                            <div class="form__textarea-holder">
                        <textarea id="form_text_1250" cols="30" rows="10" class="form__textarea"
                                  placeholder="Комментарий"
                                  name="PROPERTY[1250][]"></textarea>
                            </div>                                        <span class="err"></span>
                        </div>
                        <input type="hidden" name="CONFIG_ID" value="34461">
                        <input type="hidden" name="page_url" value="/">
                        <input type="hidden" name="page_title" value="Мебель от производителя: купить в Москве | цены в каталоге магазина «Дятьково»">
                        <p class="picture-popup__personal-info">Заполняя форму,
                            Вы принимаете <a href="index.html#" class="picture-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a>
                        </p>
                        <button type="submit" class="picture-popup__button send-btn">Получить проект</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        new PopupsTracking({'34461':{'time':'4000','showCount':'1','startPageUrl':['/catalogue/* | /actions/* | /*'],'utmHidden':[{'utmName':'utm_test','utmValue':'zebrus'}],'startPage':'TARGET_PAGE','eventFired':false,'concatCondition':'AND','showPageUrl':['/catalogue/gostinye/','/catalogue/spalnye_garnitury/','/catalogue/molodezhnye/','/catalogue/prikhozhie/','/catalogue/shkafy/','/catalogue/krovati/','/catalogue/landings/stenki/','/catalogue/landings/modulnye-gostinye/','/catalogue/landings/spalnye-garnitury/','/catalogue/landings/molodezhnye-garnitury/','/catalogue/landings/prikhozhie/','/catalogue/landings/domashnie-kabinety/','/catalogue/gostinye/boca_gostinye/*','/catalogue/gostinye/boston_gostinye/*','/catalogue/gostinye/parma_gostinye/*','/catalogue/gostinye/turin_gostinye/*','/catalogue/gostinye/altera_gostinaya/*','/catalogue/gostinye/asti_gostinaya/*','/catalogue/gostinye/alivio_gostinye/*','/catalogue/gostinye/elegante_gostinye/*','/catalogue/gostinye/este/*','/catalogue/spalnye_garnitury/boston_spalni/*','/catalogue/spalnye_garnitury/parma_spalni/*','/catalogue/spalnye_garnitury/turin_spalni/*','/catalogue/spalnye_garnitury/alivio-bedroom/*','/catalogue/spalnye_garnitury/elegante_spalni/*','/catalogue/spalnye_garnitury/altera_spalni/*','/catalogue/spalnye_garnitury/spalnya-este/*','/catalogue/spalnye_garnitury/spalnya-asti/*','/catalogue/molodezhnye/parma_molodezh/*','/catalogue/molodezhnye/turin_molodezh/*','/catalogue/molodezhnye/altera_molodezh/*','/catalogue/molodezhnye/elegante_molodezh/*','/catalogue/molodezhnye/alivio_molodezh/*','/catalogue/prikhozhie/parma_prihozaya/*','/catalogue/prikhozhie/turin_prihozaya/*','/catalogue/prikhozhie/altera_prihozaya/*','/catalogue/prikhozhie/alivio_prihozaya/*','/catalogue/prikhozhie/elegante_prihozaya/*','/catalogue/','/']}});
        window.popupsManager = new PopupsManager({'34461':{'time':'4000','showCount':'1','startPageUrl':['/catalogue/* | /actions/* | /*'],'utmHidden':[{'utmName':'utm_test','utmValue':'zebrus'}],'startPage':'TARGET_PAGE','eventFired':false,'concatCondition':'AND','showPageUrl':['/catalogue/gostinye/','/catalogue/spalnye_garnitury/','/catalogue/molodezhnye/','/catalogue/prikhozhie/','/catalogue/shkafy/','/catalogue/krovati/','/catalogue/landings/stenki/','/catalogue/landings/modulnye-gostinye/','/catalogue/landings/spalnye-garnitury/','/catalogue/landings/molodezhnye-garnitury/','/catalogue/landings/prikhozhie/','/catalogue/landings/domashnie-kabinety/','/catalogue/gostinye/boca_gostinye/*','/catalogue/gostinye/boston_gostinye/*','/catalogue/gostinye/parma_gostinye/*','/catalogue/gostinye/turin_gostinye/*','/catalogue/gostinye/altera_gostinaya/*','/catalogue/gostinye/asti_gostinaya/*','/catalogue/gostinye/alivio_gostinye/*','/catalogue/gostinye/elegante_gostinye/*','/catalogue/gostinye/este/*','/catalogue/spalnye_garnitury/boston_spalni/*','/catalogue/spalnye_garnitury/parma_spalni/*','/catalogue/spalnye_garnitury/turin_spalni/*','/catalogue/spalnye_garnitury/alivio-bedroom/*','/catalogue/spalnye_garnitury/elegante_spalni/*','/catalogue/spalnye_garnitury/altera_spalni/*','/catalogue/spalnye_garnitury/spalnya-este/*','/catalogue/spalnye_garnitury/spalnya-asti/*','/catalogue/molodezhnye/parma_molodezh/*','/catalogue/molodezhnye/turin_molodezh/*','/catalogue/molodezhnye/altera_molodezh/*','/catalogue/molodezhnye/elegante_molodezh/*','/catalogue/molodezhnye/alivio_molodezh/*','/catalogue/prikhozhie/parma_prihozaya/*','/catalogue/prikhozhie/turin_prihozaya/*','/catalogue/prikhozhie/altera_prihozaya/*','/catalogue/prikhozhie/alivio_prihozaya/*','/catalogue/prikhozhie/elegante_prihozaya/*','/catalogue/','/']}});

        $(function(){
            var $form = $('#popup-34461 form');
            $form.ajaxForm({
                dataType: 'json',
                success: function(msg, statusText, xhr, $form){
                    if (msg.status == 'ok') {
                        var criteoParams = {};
                        criteoParams.transactionId = msg.id;
                        sendSingleCriteoTransaction(criteoParams);
                    }
                    $(".uform_popup .preloader").hide();
                    $form.find(".send-btn").removeAttr('disabled');
                    $form.find(".field-error").removeClass('field-error');

                    if (msg.status == 'ok') {
                        $form.trigger('reset');

                        var href = $form.attr('data-href');
                        if(href) {
                            $.arcticmodal('close');
                            openPopup(href);
                        }
                        else {
                            $('.uform_popup_inner').html(msg.message).show();
                            show_uform();
                            window.setTimeout('hide_popup();',5000);
                        }

                        ga("send", "event", $form.data("analytics-category"), $form.data("analytics-action"));
                        yandexReachGoal($form.data("metrika-goal"));

                    }
                    else if (msg.err !== undefined) {
                        for (i = 0; i < msg.err.length; i++) {
                            $(msg.err[i][0]).addClass('field-error').find('span.err').html(msg.err[i][1]);
                        }
                    }
                    $(".js-preloader-Wait").hide();
                },
                beforeSubmit: function(fields, $form){
                    $(".js-preloader-Wait").show();
                    $form.find(".send-btn").attr('disabled', 'disabled');
                }
            });
        });
    </script>
    <!--/noindex-->

    <!--noindex-->
    <div class="box-modal" id="thanks-for-subscription-update">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup test-popup_thank-you">
                <form>
                    <div class="test-popup__container">
                        <h2 class="test-popup__title">
                            Спасибо,
                            <br>
                            что выбрали нас!
                        </h2>
                        <p class="test-popup__text">
                            Список Ваших подписок изменён.
                        </p>
                    </div>
                    <button type="submit" class="test-popup__button arcticmodal-close">закрыть</button>
                </form>
            </div>

        </div>
    </div>
    <!--/noindex-->

    <!--noindex-->
    <div class="box-modal" id="thanks-for-partnership">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup test-popup_thank-you">
                <form>
                    <div class="test-popup__container">
                        <h2 class="test-popup__title">
                            Спасибо
                            <br>
                            за обращение!
                        </h2>
                        <p class="test-popup__text">
                            Ваш запрос успешно отправлен.
                            <br>
                            Менеджеры свяжутся с Вами в ближайшее время!
                        </p>
                    </div>
                    <button type="submit" class="test-popup__button arcticmodal-close">закрыть</button>
                </form>
            </div>

        </div>
    </div>
    <!--/noindex-->

    <!--noindex-->
    <div class="box-modal" id="thanks-for-question">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup test-popup_thank-you">
                <form>
                    <div class="test-popup__container">
                        <h2 class="test-popup__title">
                            Спасибо
                            <br>
                            за обращение!
                        </h2>
                        <p class="test-popup__text">
                            Ваш запрос успешно отправлен.
                        </p>
                    </div>
                    <button type="submit" class="test-popup__button arcticmodal-close">закрыть</button>
                </form>
            </div>

        </div>
    </div>
    <!--/noindex-->
    <!--noindex-->
    <div class="box-modal" id="personal-info">
        <div class="box-modal__close arcticmodal-close js-personal-info-close"></div>

        <div class="box-modal__content">

            <div class="personal-info">
                <div class="info-box">
                    <h2>Согласие на обработку персональных данных</h2>
                    <p>Я даю согласие на использование всех указанных мной персональных данных, таких как:</p>
                    <ul>
                        <li>имя, фамилию и отчество;</li>
                        <li>номер телефона;</li>
                        <li>адрес электронной почты;</li>
                        <li>адрес доставки и место положение;</li>
                        <li>информацию об избранных контактах;</li>
                        <li>в том числе любую другую информацию, передаваемую посредством cookies сайта.</li>
                    </ul>
                    <p> также иных данных, полученных в результате их обработки, любыми способами (в т. ч.
                        воспроизведение, электронное копирование, обезличивание, блокирование, уничтожение).
                        Обработка может осуществляться как Компанией, так и третьими лицами с целью:</p>
                    <ul>
                        <li>обеспечения информационной поддержки;</li>
                        <li>оказания услуг, связанных с деятельностью Компании;</li>
                        <li>создания информационных систем персональных данных Компании;</li>
                        <li>обеспечения интересов Компании и моих интересов;
                            в любых других целях, прямо или косвенно связанных с обслуживанием и предложением
                            продуктов Компании.
                        </li>
                    </ul>
                    <p>Указанное согласие дано на срок 15 лет. В случае его отзыва обработка моих персональных
                        данных должна быть прекращена Компанией и/или третьими лицами, а данные уничтожены.</p>
                    <p>Я даю согласие на получение рекламы и информационных рассылок (в том числе по сети Интернет и
                        телефонной сети), от Компании, ее контрагентов и аффилированных лиц.</p>
                    <br>
                    <br>
                    <h2>Правила использования персональных данных</h2>
                    <p>Собираемые персональные данные позволяют направлять Пользователям уведомления о новых
                        продуктах, специальных предложениях и различных событиях. Они также помогают Компании
                        совершенствовать услуги, контент и коммуникации. В случае нежелания быть включенным в список
                        рассылки, Пользователь может в любое время отказаться от нее путём информирования Компании в
                        письменной форме на электронный адрес
                        <a href="mailto:support@dyatkovo.ru">support@dyatkovo.ru</a>, а также внесения изменений в
                        настройки своего профиля на сайте.</p>
                    <p>Компания может использовать персональные данные Пользователей для отправки важных
                        уведомлений, содержащих информацию об изменениях положений, условий и политик, а также
                        подтверждающих размещенные пользователями заказы и совершенные покупки. Поскольку такая
                        информация важна для взаимоотношений с Компанией, Пользователь не можете отказаться от
                        получения таких сообщений.</p>
                    <p>Компания также может использовать персональную информацию для внутренних целей, например, при
                        проведении аудита, анализа данных и различных исследований в целях улучшения продуктов и
                        услуг, а также для взаимодействия с потребителями.</p>
                </div>
            </div>

        </div>
    </div>
    <!--/noindex-->
    <!--noindex-->
    <div class="box-modal" id="enter">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="account-popup">
                <script type="text/javascript">if (window.location.hash != '' && window.location.hash != '#') top.BX.ajax.history.checkRedirectStart('bxajaxid', '3da6faa254bf06537c3f13f908d49a13')</script><div id="comp_3da6faa254bf06537c3f13f908d49a13">    <form name="system_auth_formPqgS8z" method="post" target="_top" action="https://dyatkovo.ru/?login=yes">
                        <p class="account-popup__title">Вход на сайт</p>
                        <input type="hidden" name="backurl" value="/" />
                        <input type="hidden" name="AUTH_FORM" value="Y" />
                        <input type="hidden" name="TYPE" value="AUTH" />

                        <div class="form__input-holder">
                            <input type="text" required name="USER_LOGIN" maxlength="50" value="" class="form__input" placeholder="Эл. почта">
                        </div>

                        <div class="form__input-holder">
                            <input type="password" required name="USER_PASSWORD" maxlength="50" autocomplete="off" class="form__input" placeholder="Пароль">
                        </div>
                        <div class="account-popup__checkbox-block">
                            <label class="account-popup__checkbox">
                                <input type="checkbox" name="USER_REMEMBER" value="Y" class="account-checkbox">
                                <p class="account-popup__checkbox-text">Запомнить меня</p>
                            </label>
                        </div>
                        <p class="account-popup__personal-info">Заполняя форму, Вы принимаете <a href="index.html#" class="account-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                        <div class="account-popup__button-block">
                            <div class="account-popup__button-wrap">
                                <button type="submit" class="btn btn_block btn_green">Войти</button>
                            </div>
                            <div class="account-popup__button-wrap">
                                <a href="index.html#" class="account-popup__button js-popup-link" data-href="#registration">зарегистрироваться</a>
                            </div>
                        </div>
                    </form>


                    <script type="text/javascript">
                        $(function(){
                            $('form[name="system_auth_formPqgS8z"]').submit(function(){
                                $(".js-preloader-Wait").show();
                            });
                        });
                    </script></div><script type="text/javascript">if (top.BX.ajax.history.bHashCollision) top.BX.ajax.history.checkRedirectFinish('bxajaxid', '3da6faa254bf06537c3f13f908d49a13');</script><script type="text/javascript">top.BX.ready(BX.defer(function() {window.AJAX_PAGE_STATE = new top.BX.ajax.component('comp_3da6faa254bf06537c3f13f908d49a13'); top.BX.ajax.history.init(window.AJAX_PAGE_STATE);}))</script>                </div>

        </div>
    </div>
    <!--/noindex-->

    <!--noindex-->
    <div class="box-modal" id="registration">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="account-popup">
                <form method="post" action="index.html" name="regform" enctype="multipart/form-data">
                    <p class="account-popup__title">регистрация</p>
                    <div class="form__input-holder">
                        <input type="text" required class="form__input register_email" name="REGISTER[EMAIL]" value="" placeholder="Эл. почта">
                        <input type="hidden" class="register_login" name="REGISTER[LOGIN]" value="">
                    </div>
                    <div class="form__input-holder">
                        <input type="password" required class="form__input" placeholder="Пароль" name="REGISTER[PASSWORD]" value="" autocomplete="off">
                    </div>
                    <div class="form__input-holder">
                        <input type="password" required class="form__input" placeholder="Повторите пароль" name="REGISTER[CONFIRM_PASSWORD]" value="" autocomplete="off">
                    </div>

                    <p class="account-popup__personal-info">Заполняя форму, Вы принимаете <a href="index.html#" class="account-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                    <div class="account-popup__button-block">
                        <div class="account-popup__button-wrap">
                            <button type="submit" name="register_submit_button" value="Регистрация" class="btn btn_block btn_green">зарегистрироваться</button>
                        </div>
                        <div class="account-popup__button-wrap">
                            <button type="submit" class="account-popup__button js-popup-link" data-href="#enter">войти</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!--/noindex-->

    <!--noindex-->
    <div class="box-modal" id="nonstandard-mattress">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup">

                <form action="https://dyatkovo.ru/local/components/custom/uform.form/.ajax.php" method="POST" name="popup_form" id="popup_form" class="uform-form uform-form-page" data-href="#thanks-for-request"
                      accept-charset="windows-1251"
                      data-metrika-goal="custom_size_send" data-analytics-category="custom_size" data-analytics-action="send">

                    <input type="hidden" name="line" value="1351" />
                    <input type="hidden" name="src" value="/local/templates/dmi/footer.php" />
                    <input type="hidden" name="popup" value="" />

                    <div class="test-popup__container">
                        <h2 class="test-popup__title test-popup__title_big">
                            Заявка на матрас нестандартного размера                    </h2>
                        <p class="test-popup__text">
                        </p>
                        <div id="uform_field_695">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Имя*"
                                       rel="NAME"
                                       id="form_text_695" class="form__input"
                                       name="PROPERTY[695][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div id="uform_field_696">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder=" Почта или телефон*"
                                       rel="EMAIL"
                                       id="form_text_696" class="form__input"
                                       name="PROPERTY[696][0]" value=""/>
                            </div>
                            <span class="err"></span>
                        </div>
                        <div class="test-popup__input-holder-wrap">
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Ширина"
                                       rel="WIDTH"
                                       id="form_text_697" class="form__input"
                                       name="PROPERTY[697][0]" value=""/>
                            </div>
                            <div class="form__input-holder">
                                <input type="text"
                                       placeholder="Длина"
                                       rel="LENGTH"
                                       id="form_text_698" class="form__input"
                                       name="PROPERTY[698][0]" value=""/>
                            </div>
                        </div>
                        <p class="test-popup__personal-info">Заполняя форму, Вы принимаете <a href="index.html#" class="test-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                    </div>
                    <button type="submit" class="test-popup__button send-btn">отправить</button>


                    <input type="hidden" name="popup" value="" />

                    <input type="hidden" name="page_url" value="/">
                    <input type="hidden" name="page_title" value="Мебель от производителя: купить в Москве | цены в каталоге магазина «Дятьково»">

                </form>

                <script>
                    $(function(){
                        $('.uform-form, .order-form').ajaxForm({
                            dataType: 'json',
                            success: function(msg, statusText, xhr, $form){
                                BX.closeWait();
                                if (msg.status == 'ok') {
                                    var criteoParams = {};
                                    criteoParams.transactionId = msg.id;
                                    sendSingleCriteoTransaction(criteoParams);
                                }
                                send_uform_matress(msg, statusText, xhr, $form);
                            },
                            beforeSerialize: function($form, options) {
                                $form.find('input[name=page_url]').val(document.location.href);
                                $form.find('input[name=page_title]').val(document.title);
                            },
                            beforeSubmit: function(fields, $form){
                                BX.showWait();
                                $form.find(".send-btn").attr('disabled', 'disabled');
                            }
                        });
                    });
                </script>                </div>

        </div>
    </div>
    <!--/noindex-->



</div>

<div style="display: none;">
    <div class="box-modal" id="testimonial-popup-completed">
        <div class="box-modal__close arcticmodal-close"></div>

        <div class="box-modal__content">

            <div class="test-popup">







                <!--noindex-->
                <form action="index.html"
                      accept-charset="windows-1251"
                      method="POST" name="testimonial-popup-completed61"
                      id="testimonial-popup-completed61" class="uform-formtestimonial-popup-completed61 uform-form-pagetestimonial-popup-completed61 js-form-selector-city
          js-form-waitForm
                      js-clear-all-inputs
          "
                      data-href="" data-id="testimonial-popup-completed61"
                      data-metrika-goal="TESTIMONIALS"
                      data-analytics-category="TESTIMONIALS"
                      data-analytics-action="SEND_TESTIMONIALS"
                >

                    <div id="win8_wrapper" class="js-form-Wait">
                        <div class="windows8">
                            <div class="wBall" id="wBall_1">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_2">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_3">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_4">
                                <div class="wInnerBall"></div>
                            </div>
                            <div class="wBall" id="wBall_5">
                                <div class="wInnerBall"></div>
                            </div>
                        </div>
                    </div>


                    <input type="hidden" name="line" value="1418" />
                    <input type="hidden" name="src" value="/local/templates/dmi/footer.php" />
                    <input type="hidden" name="testmonial" value="" />
                    <input type="hidden" name="ajaxSendtestimonial-popup-completed61" value="Y" />

                    <div class="test-popup__container">
                        <h2 class="test-popup__title">оставить отзыв</h2>







                        <div class="form__input-holder" id="uform_field_548"
                             style="display:none;"                    >

                            <input type="text"
                                   rel="AVATAR"
                                   class="form__input js-AVATAR"
                                   value=""
                                   id="form_text_548"
                                   name="PROPERTY[548][0]"
                                   placeholder="Аватарка">
                            <span class="err"></span>
                        </div>









                        <input type="hidden" name="PROPERTY[547][]"
                               value=""/>






                        <input type="hidden" name="PROPERTY[546][]"
                               value="16"/>






                        <div class="form__input-holder" id="uform_field_549"
                        >

                            <input type="text"
                                   rel="NAME"
                                   class="form__input js-NAME"
                                   value=""
                                   id="form_text_549"
                                   name="PROPERTY[549][0]"
                                   placeholder="Имя">
                            <span class="err"></span>
                        </div>








                        <div class="form__input-holder" id="uform_field_552"
                        >

                            <input type="text"
                                   rel="PHONE"
                                   class="form__input js-PHONE phone"
                                   value=""
                                   id="form_text_552"
                                   name="PROPERTY[552][0]"
                                   placeholder="Телефон">
                            <span class="err"></span>
                        </div>





                        <div class="form__input-holder" id="uform_field_545"
                        >

                            <input type="text"
                                   rel="MAIL"
                                   class="form__input js-MAIL"
                                   value=""
                                   id="form_text_545"
                                   name="PROPERTY[545][0]"
                                   placeholder="E-mail">
                            <span class="err"></span>
                        </div>



                        <input type="hidden" name="PROPERTY[551][0][VALUE][TYPE]" value="html">


                        <div class="form__textarea-holder" id="uform_field_551">
                <textarea cols="30" rows="10" class="form__textarea js-REVIEW"
                          id="form_text_551"
                          placeholder="Текст отзыва"
                          name="PROPERTY[551][0][VALUE][TEXT]"></textarea>
                            <span class="err"></span>
                        </div>



                        <div class="display-none">
                            <p class="partners-form__label">Соц. сеть</p>
                            <div class="form__input-holder" id="uform_field_550">



                                <!-- test-popup__select styled-select-->
                                <select class=" " style="display: block;"
                                        name="PROPERTY[550]">
                                    <option value="0"></option>
                                    <option value="160"  selected="selected">Нет</option>
                                    <option value="162" >VK</option>
                                    <option value="161" >FB</option>
                                </select>
                                <span class="err"></span>


                                <div class="chosen-container chosen-container-single" style="width: 276px;
                            display:none;"
                                     title=""><a class="chosen-single" tabindex="-1">
                                        <span></span>
                                        <div>
                                            <b></b>
                                        </div>
                                    </a>
                                    <div class="chosen-drop">
                                        <div class="chosen-search">
                                            <input type="text" autocomplete="off">
                                        </div>
                                        <ul class="chosen-results"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="form__input-holder js-form__input-holder__898"
                             id="uform_field_898">

                            <!--composition-item__detail => form__input-holder-->
                            <div class="form__input-holder-line margin-top__10px">
                                <div class="form__input-holder-line-box">
                                    <p class="form__input-holder-key">Оцените товар:</p>
                                    <div class="form__input-holder-value">
                                        <div class="star-rating">
                                            <div class="star-rating__wrap">


                                                <!-- display-none -->
                                                <select class="display-none js-rating-selector"
                                                        name="PROPERTY[898]">
                                                    <option value="0">Оцените товар</option>
                                                    <option value="409"  selected="selected">0</option>
                                                    <option value="410" >1</option>
                                                    <option value="411" >2</option>
                                                    <option value="412" >3</option>
                                                    <option value="413" >4</option>
                                                    <option value="414" >5</option>
                                                </select>


                                                <!--<input class="star-rating__input" id="star-rating-5" type="radio"
                                                           name="rating" value="5">-->
                                                <span class="star-rating__ico fa fa-star-o fa-lg js-star-rating__ico
                                                                        js-star-rating__ico__5"
                                                      data-key="414"
                                                      data-property-id="898"
                                                      data-num="5"></span>
                                                <span class="star-rating__ico fa fa-star-o fa-lg js-star-rating__ico
                                                                        js-star-rating__ico__4"
                                                      data-key="413"
                                                      data-property-id="898"
                                                      data-num="4"></span>
                                                <span class="star-rating__ico fa fa-star-o fa-lg js-star-rating__ico
                                                                        js-star-rating__ico__3"
                                                      data-key="412"
                                                      data-property-id="898"
                                                      data-num="3"></span>
                                                <span class="star-rating__ico fa fa-star-o fa-lg js-star-rating__ico
                                                                        js-star-rating__ico__2"
                                                      data-key="411"
                                                      data-property-id="898"
                                                      data-num="2"></span>
                                                <span class="star-rating__ico fa fa-star-o fa-lg js-star-rating__ico
                                                                        js-star-rating__ico__1"
                                                      data-key="410"
                                                      data-property-id="898"
                                                      data-num="1"></span>



                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>





                        <p class="test-popup__personal-info">Заполняя форму, вы принимаете <a href="index.html#" class="test-popup__text-link js-popup-link" data-href="#personal-info">пользовательское соглашение</a></p>
                    </div>


                    <button type="submit" class="test-popup__button js-popup-link-testmonial"
                            data-href="#thank-you">отправить</button>
                    <!--<button type="submit" class="btn btn_green btn_block">отправить заявку</button>-->
                    <!--  -->

                    <input type="hidden" name="popup" value="" />

                    <input type="hidden" name="page_url" value="/">
                    <input type="hidden" name="page_title" value="Мебель от производителя: купить в Москве | цены в каталоге магазина «Дятьково»">


                </form>
                <!--/noindex-->

                <script>
                    $(function(){

                        var wait = "";
                        $('.uform-formtestimonial-popup-completed61').ajaxForm({
                            dataType: 'json',
                            success: function(msg, statusText, xhr, $form){

                                BX.closeWait('testimonial-popup-completed', wait);
                                BX.closeWait();
                                send_uform_testmonial_reviews(msg, statusText, xhr, $form);
                            },
                            error: function(q, w, e) {
                                console.log(q);
                                console.log(w);
                                console.log(e);
                            },
                            beforeSerialize: function($form, options) {
                                $form.find('input[name=page_url]').val(document.location.href);
                                $form.find('input[name=page_title]').val(document.title);
                            },
                            beforeSubmit: function(fields, $form){
                                wait = BX.showWait('testimonial-popup-completed');
                                //$(".uform_popup .preloader").show();
                                //$form.find(".send-btn").attr('disabled', 'disabled');

                            }
                        });


                        var currentUrl = window.location.href;

                        currentUrl = currentUrl.replace("#", "");


                        if((currentUrl.indexOf("SHOW_REVIEW_FORM=1") + 1) ||
                            (currentUrl.indexOf("SHOW_REVIEW_AUTH_FORM=1") + 1)){

                            if(currentUrl.indexOf("SHOW_REVIEW_FORM=1") + 1){
                                var href = "#testimonial-popup-completed";
                            }else if(currentUrl.indexOf("SHOW_REVIEW_AUTH_FORM=1") + 1){
                                var href = "#testimonial-popup";
                            }

                            var effectIn = "fadeInDown",
                                $href;

                            if (typeof href !== "string") {
                                console.log("Target does not defined");
                                return false;
                            }

                            $href = $(href);
                            if ($href.length < 1) {
                                console.log("Target does not exist");
                                return false;
                            }

                            $href.arcticmodal({
                                overlay: {
                                    css: {
                                        backgroundColor: 'rgba(34, 34, 34, 0.90)',
                                        opacity: 1
                                    }
                                },
                                openEffect: {
                                    type: 'fade',
                                    speed: 400
                                },
                                closeEffect: {
                                    type: 'none',
                                    speed: 0
                                },
                                afterOpen: (function() {
                                    $('.test-popup__select').chosen({
                                        disable_search: false
                                    });
                                })
                            });

                            $href.addClass("animated " + effectIn);
                            $href.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                                $href.removeClass("animated " + effectIn);
                            });


                        }








                    });
                </script>



            </div>

        </div>
    </div>
</div>

<!--noindex-->
<div class="menu-dropdown__overlay js-overlay"></div>
<div id="win8_wrapper" class="js-preloader-Wait">
    <div class="windows8">
        <div class="wBall" id="wBall_1">
            <div class="wInnerBall"></div>
        </div>
        <div class="wBall" id="wBall_2">
            <div class="wInnerBall"></div>
        </div>
        <div class="wBall" id="wBall_3">
            <div class="wInnerBall"></div>
        </div>
        <div class="wBall" id="wBall_4">
            <div class="wInnerBall"></div>
        </div>
        <div class="wBall" id="wBall_5">
            <div class="wInnerBall"></div>
        </div>
    </div>
</div>
<!--/noindex-->

<script>
    $(function () {
        $('.current-city').html('Москва и МО');
    });
</script>
</div>

<!--<a href="https://dyatkovo.ru/virtual-designer/" class="virtual-designer-banner-button" virtual-designer-button>-->
<!--    <span class="virtual-designer-banner-button-close" virtual-designer-close></span>-->
<!--</a>-->
<script>
    $('body').on('click', '[virtual-designer-close]', function(e){
        e.preventDefault();

        $('[virtual-designer-button]').hide();
        $.cookie('virtual-designer-hidden', 1);
    });
</script>

</body>
</html>
