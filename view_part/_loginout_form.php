<?php var_dump($site_data); if(! $site_data[USER_IS_LOGGED]){ ?>
    <form id="login" name="login">
        <label for="username">Pseudo :</label>
        <input type="text" name="username" id="username" />
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" />
        <input type="submit" name="dologin" value="Entrer"/>
    </form>
<?php } else { ?>
    <form id="logout" name="logout">
        <input type="submit" name="dologout" value="Sortir"/>
    </form>
<?php } ?>