<form class="form form--add-lot container form--invalid" action="add.php" method="post">
    <!-- form--invalid -->
    <h2>Добавление лота</h2>
    <div class="form__container-two">
        <div class="form__item form__item--invalid"> <!-- form__item--invalid -->
            <label for="lot-name">Наименование <sup>*</sup></label>
            <input id="lot-name" type="text" name="lot_name" placeholder="Введите наименование лота">
            <span class="form__error">Введите наименование лота</span>
        </div>
        <div class="form__item">
            <label for="category">Категория <sup>*</sup></label>
            <select id="category" name="category">
                <?php foreach ($categories as $category): ?>
                    <option value="<?php print($category["category_id"]) ?>"><?php print($category["name"]) ?></option>
                <?php endforeach; ?>
            </select>
            <span class="form__error">Выберите категорию</span>
        </div>
    </div>
    <div class="form__item form__item--wide">
        <label for="message">Описание <sup>*</sup></label>
        <textarea id="message" name="description" placeholder="Напишите описание лота"></textarea>
        <span class="form__error">Напишите описание лота</span>
    </div>
    <div class="form__item form__item--file">
        <label>Изображение <sup>*</sup></label>
        <div class="form__input-file">
            <!--   убираю класс visually-hidden т.к кнопка "добавить" с ним не работает         -->
            <input type="file" id="img_url" name="img_url">
<!--            <label for="lot-img">-->
<!--                Добавить-->
<!--            </label>-->
        </div>
    </div>
    <div class="form__container-three">
        <div class="form__item form__item--small">
            <label for="lot-rate">Начальная цена <sup>*</sup></label>
            <input id="lot-rate" type="text" name="init_price" placeholder="0">
            <span class="form__error">Введите начальную цену</span>
        </div>
        <div class="form__item form__item--small">
            <label for="lot-step">Шаг ставки <sup>*</sup></label>
            <input id="lot-step" type="text" name="bet_step" placeholder="0">
            <span class="form__error">Введите шаг ставки</span>
        </div>
        <div class="form__item">
            <label for="lot-date">Дата окончания торгов <sup>*</sup></label>
            <input class="form__input-date" id="lot-date" type="text" name="completed"
                   placeholder="Введите дату в формате ГГГГ-ММ-ДД">
            <span class="form__error">Введите дату завершения торгов</span>
        </div>
    </div>
    <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
    <button type="submit" class="button">Добавить лот</button>
</form>
