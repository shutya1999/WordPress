<?php
get_header();
?>
<div class="container">
    <div class="feedback">
        <div class="feedback-email">
            <form class="form">
                <p>Ваше имя:</p>
                <input type="text" placeholder="имя" required="">

                <p>Email для связи:</p>
                <input type="text" placeholder="адрес электронной почты" required="">

                <p>Ваше сообщение:</p>
                <textarea class="message" name="messageFF" required="" rows="5"></textarea>
                <input class="btn" type="submit" value="отправить">

            </form>
        </div>

        <div class="contact">
            <h2>Контакты</h2>
            <h3>Адрес: Украина, г. Киев, ул. Верхний Вал 42В</h3>
            <h3><span>Телефон: </span><a href="#">066-907-51-27</a></h3>
            <h3><span>E-mail: </span><a href="#">zvit365@gmail.com</a></h3>
            <h3><span>Skype: </span><a href="#">zvit365</a></h3>
        </div>
<!--        --><?php //echo do_shortcode('[contact-form-7 id="60" title="Контактная форма 1"]')?>
    </div>
</div>

<?php
get_footer();
?>
