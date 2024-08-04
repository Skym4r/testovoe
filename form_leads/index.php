<? include '../php/header.php'?>
<h3>Форма лидов</h3>
<form class="form"  id="ajax_form" >
    <div class="info_lead">
    <label for="FIO">Введите ваше ФИО: </label>
    <input type="text" name="FIO">
    </div>
    <div class="info_lead">
        <label for="EMAIL">Введите вашу почту: </label>
    <input type="email" name="EMAIL">
    </div>
    <div class="info_lead">
        <label for="PHONE">Введите номер телефона: </label>
    <input id="phone" type="tel" name="PHONE">
    </div>
    <div class="info_city">
    <label for="CITY">Выберите город:</label>
    <select id="CITY" name="CITY">
        <option value="Тула">Тула</option>
        <option value="Москва">Москва</option>
        <option value="Санкт-Петербург">Санкт-Петербург</option>
    </select>
    </div>
    <div class="form-example">
        <input  id='button' type="submit" value="Отправить" />
    </div>

</form>
<div class='btn_list'><a href="../list_leads/">Список лидов</a></div>
<script>
     $('.info_lead #phone').inputmask({"mask": "+7 (999) 999-9999"});
    </script>
<? include '../php/footer.php'?>
