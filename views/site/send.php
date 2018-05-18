<?php ?>
<div class="container theme-showcase index" role="main">
    <h3 align="center">
        Редактирование информации о сообщении
    </h3>




    <div class="tab-my-content new-form-anketa">
        <form class="simple_form form-anketa js-dependent-select light-gray-bg armed" novalidate="novalidate" id="new_form" data-url="/vk_proxy" action="/my/form" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="vFcG7AJRQAsybgFJkoAh/Yi3hVRO3Og8XOcSahkIUZ19uDbvw8hFk0WKO4nm3HZwR4FWCFCGCY38JwUYZWPBWw==">

            <div class="form-common-fields-wrapper">
                <div class="row">
                    <div class="form-group hidden form_kind"><input class="hidden form-control" type="hidden" value="abiturient" name="form[kind]" id="form_kind"></div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group string required form_surname"><label class="string required control-label" for="form_surname">От кого <abbr title="обязательное поле">*</abbr></label><input class="string required js-participation-autocomplete js-surname form-control" autofocus="autofocus" type="text" value="Кафедра ПОКС" name="form[surname]" id="form_surname"></div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group string required form_name"><label class="string required control-label" for="form_name">Тема <abbr title="обязательное поле">*</abbr></label><input class="string required js-participation-autocomplete js-name form-control" type="text" value="" name="form[name]" id="form_name"></div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group string optional form_patronymic"><label class="string optional control-label" for="form_patronymic">Заголовок</label><input class="string optional js-patronymic form-control" type="text" value="" name="form[patronymic]" id="form_patronymic"></div>
                    </div>




                </div>
                <div class="form-group">
                    <label for="message" class="p ">Сообщение</label>
                    <textarea id="message" class="form-control" cols="60" rows="4" placeholder="Введите ваше сообщение" required></textarea>
                </div>
            </div>



            <a class="btn btn-success" href="index.php?id=1">Выполнить рассылку</a>


