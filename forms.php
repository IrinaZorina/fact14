<?php require_once 'inc/header.php'; ?>
<main>
    <form action="" method="get">
        <p class="some-text">
            <label for="name">Имя пользователя:</label>
            <input type="text" name="name" id="name" class="input-text">
        </p>
        <p class="some-text">
            <label for="email">Электронная почта:</label>
            <input type="email" name="email" id="email" class="input-text" required>
        </p>
        <p class="some-text">
            <label for="select">Что вы хотите изучать:</label>
            <select name="value" id="select" class="input-text">
                <option value="HTML">HTML</option>
                <option value="PHP">PHP</option>
                <option value="BITRIX">BITRIX</option>
            </select>
        </p>
        <fieldset class="some-text">
            <legend>Хочу быть...</legend>
            <input type="radio" name="radio" value="Junior PHP Developer">Junior PHP Developer
            <input type="radio" name="radio" value="Middle PHP Developer">Middle PHP Developer
            <input type="radio" name="radio" value="Front-end Developer">Front-end Developer
            <input type="radio" name="radio" value="Неее, хочу быть дизайнером">Неее, хочу быть дизайнером
        </fieldset><br>
        <fieldset class="some-text">
            <legend>Мои навыки программирования</legend>
            <input type="checkbox" name="check" value="Бог программирования">Бог программирования
            <input type="checkbox" name="check" value="Гуру программирования">Гуру программирования
            <input type="checkbox" name="check" value="Эмм, я еще учусь">Эмм, я еще учусь
        </fieldset>
        <p class="some-text">
            <label for="date">Во сколько мне удобно приходить на занятия:</label>
            <input type="date" name="date" id="date" class="input-text">
        </p>
        <p class="some-text">
            <label for="text">Мои пожелания и комментарии по курсам:</label><br>
            <textarea name="comment" id="text" cols="80" rows="10"></textarea><br>
        </p>
        <p class="some-text">
            <button type="submit" class="input-text">Всё, я справился с заполнением формы</button>
        </p>
    </form>
</main>
<?php require_once 'inc/footer.php'; ?>