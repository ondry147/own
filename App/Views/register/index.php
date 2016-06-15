<div id="content">
    <div id="content_top">
        <div id="content_rep" class="view">
            <div id="content_top" class="view">
                <div id="main_content">
                    <div id="main_content_eventcountdown_description">
                        <div id="main_content_eventcountdown_description_title"></div>
                        <div id="main_content_eventcountdown_description_content" class="textstyle_eventcountdown_description">
                        </div>
                    </div>
                    <div id="main_content_extrabuttons">
                        <a href="http://" target="_blank" id=""></a>
                        <a href="http://" target="_blank" id=""></a>
                        <a href="index.php?s=itemshop" id=""></a>
                    </div>
                    <div id="main_content_items">
                        <div id="main_content_item">
                            <div id="main_content_item_title">
                                <p class="textstyle_main_content_item_title">Registrace</p>
                            </div>
                            <div id="main_content_item_content">
                                <p class="textstyle_main_content_item_content">
                                <?php if(isset($result['register'])) { echo $result['register']; } ?>
                                <div class="register">
                                <form method="POST" action="/register">
                                    Uživatelské jméno: <input type="text" name="username" required><br />
                                    Emailová adresa: <input type="text" name="email" required><br />
                                    Mazací kód: <input type="text" name="deletecode" required><br />
                                    Heslo: <input type="password" name="password" required><br />
                                    Heslo znovu: <input type="password" name="password2" required><br /><br />
                                    <input type="submit" name="register" value="Registrovat">
                                </form>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
