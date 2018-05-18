<?php ?>
<div class="container theme-showcase index" role="main">
    <h3 align="center">
        Редактирование анкеты абитуриента
    </h3>




    <div class="tab-my-content new-form-anketa">
        <form class="simple_form form-anketa js-dependent-select light-gray-bg armed" novalidate="novalidate" id="new_form" data-url="/vk_proxy" action="/my/form" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="vFcG7AJRQAsybgFJkoAh/Yi3hVRO3Og8XOcSahkIUZ19uDbvw8hFk0WKO4nm3HZwR4FWCFCGCY38JwUYZWPBWw==">

            <div class="form-common-fields-wrapper">
                <div class="row">
                    <div class="form-group hidden form_kind"><input class="hidden form-control" type="hidden" value="abiturient" name="form[kind]" id="form_kind"></div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group string required form_surname"><label class="string required control-label" for="form_surname">Фамилия <abbr title="обязательное поле">*</abbr></label><input class="string required js-participation-autocomplete js-surname form-control" autofocus="autofocus" type="text" value="Гамбург" name="form[surname]" id="form_surname"></div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group string required form_name"><label class="string required control-label" for="form_name">Имя <abbr title="обязательное поле">*</abbr></label><input class="string required js-participation-autocomplete js-name form-control" type="text" value="Андрей" name="form[name]" id="form_name"></div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group string optional form_patronymic"><label class="string optional control-label" for="form_patronymic">Отчество</label><input class="string optional js-patronymic form-control" type="text" value="Юрьевич" name="form[patronymic]" id="form_patronymic"></div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group string optional form_patronymic"><label class="string optional control-label" for="form_patronymic">Дата рождения</label><input class="string optional js-patronymic form-control" type="text" value="" name="form[patronymic]" id="form_patronymic"></div>
                    </div>



                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group select optional form_gender"><label class="select optional control-label" for="form_gender">Пол</label><select class="select optional js-gender default-select form-control" name="form[gender]" id="form_gender"><option value=""></option>
                                <option value="female">Женский</option>
                                <option value="male">Мужской</option></select></div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group select optional form_gender"><label class="select optional control-label" for="form_gender">Факультет</label><select class="select optional js-gender default-select form-control" name="form[gender]" id="form_gender"><option value=""></option>
                                <option value="female">Информационных технологий</option>
                                </select></div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group select optional form_gender"><label class="select optional control-label" for="form_gender">Кафедра</label><select class="select optional js-gender default-select form-control" name="form[gender]" id="form_gender"><option value=""></option>
                                <option value="female">ПОКС</option>
                               </select></div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group select optional form_gender"><label class="select optional control-label" for="form_gender">Специальность</label><select class="select optional js-gender default-select form-control" name="form[gender]" id="form_gender"><option value=""></option>
                                <option value="female">Программная инженерия</option>
                             </select></div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group select optional form_gender"><label class="select optional control-label" for="form_gender">Страна</label><select class="select optional js-gender default-select form-control" name="form[gender]" id="form_gender"><option value=""></option>
                                <option value="female">Кыргызстан</option>
                                <option value="male">Казахстан</option></select></div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group select optional form_gender"><label class="select optional control-label" for="form_gender">Город</label><select class="select optional js-gender default-select form-control" name="form[gender]" id="form_gender"><option value=""></option>
                                <option value="female">Бишкек</option>
                                <option value="male">Кант</option></select></div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group select optional form_gender"><label class="select optional control-label" for="form_gender">Область</label><select class="select optional js-gender default-select form-control" name="form[gender]" id="form_gender"><option value=""></option>
                                <option value="female">Чуйская</option>
                               </select></div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group select optional form_gender"><label class="select optional control-label" for="form_gender">Село</label><select class="select optional js-gender default-select form-control" name="form[gender]" id="form_gender"><option value=""></option>
                                <option value="female">Лебединовка</option>
                                <option value="male">Покровка</option></select></div>
                    </div>




                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group select optional form_gender"><label class="select optional control-label" for="form_gender">Тип законченного учебного заведения</label><select class="select optional js-gender default-select form-control" name="form[gender]" id="form_gender"><option value=""></option>
                                <option value="female">УВК</option>
                                <option value="male">Средняя школа</option></select></div>
                    </div>



                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group string required form_surname"><label class="string required control-label" for="form_surname">Название учебного заведения <abbr title="обязательное поле">*</abbr></label><input class="string required js-participation-autocomplete js-surname form-control" autofocus="autofocus" type="text" value="" name="form[surname]" id="form_surname"></div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group select optional form_gender"><label class="select optional control-label" for="form_gender">ОРТ пройдено</label><select class="select optional js-gender default-select form-control" name="form[gender]" id="form_gender"><option value=""></option>
                                <option value="female">Да</option>
                                <option value="male">Нет</option></select></div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group select optional form_gender"><label class="select optional control-label" for="form_gender">Цвет сертификата</label><select class="select optional js-gender default-select form-control" name="form[gender]" id="form_gender"><option value=""></option>
                                <option value="female">Синий</option>
                                <option value="male">Фиолетовый</option></select></div>
                    </div>



                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group string required form_surname"><label class="string required control-label" for="form_surname">Балл по сертификату <abbr title="обязательное поле">*</abbr></label><input class="string required js-participation-autocomplete js-surname form-control" autofocus="autofocus" type="text" value="" name="form[surname]" id="form_surname"></div>
                    </div>

                </div>

            </div>

            <a class="btn btn-success" href="/site/functions">Отправить</a>


