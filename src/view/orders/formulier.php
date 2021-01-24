<main>
  <h1 class="title winkel__title max_w">Bestelformulier</h1>
  <form action="index.php?page=formulier" method="post" class="order__form">
    <input type="hidden" name="action_order" value="insertOrder">
    <input type="hidden" name="action" value="insertClient">
      <p class="form__sub">Persoonlijke Gegevens</p>
      <p class="text">Deze info is vereist. Zo kunnen we je een bevestiging sturen zodra de bestelling afgerond is.</p>
        <label for="voornaam" class="form__label top__label">Voornaam *
            <span class="error"><?php if(!empty($errors['voornaam'])){echo $errors['voornaam'];} ?></span>
            <input id="voornaam" name="voornaam" type="text" required placeholder="Voornaam" class="form-input input" value="<?php if(!empty($_POST['voornaam'])){ echo $_POST['voornaam'];} ?>">
        </label>
        <label for="achternaam" class="form__label">Achternaam *
            <span class="error"><?php if(!empty($errors['achternaam'])){echo $errors['achternaam'];} ?></span>
            <input id="achternaam" name="achternaam" type="text" required placeholder="Achternaam" class="form-input input" value="<?php if(!empty($_POST['achternaam'])){ echo $_POST['achternaam'];} ?>">
        </label>
        <label for="email" class="form__label">E-mail *
            <span class="error"><?php if(!empty($errors['email'])){echo $errors['email'];} ?></span>
            <input id="email" name="email" type="email" required placeholder="E-mail" class="form-input input" value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>">
        </label>
      <p class="form__sub">Adres Informatie</p>
      <p class="text">Deze info is vereist. Zo kunnen we je pakje verzenden zodra de bestelling afgerond is. </p>
        <label for="straat" class="form__label top__label">Straatnaam *
            <span class="error"><?php if(!empty($errors['straat'])){echo $errors['straat'];} ?></span>
            <input id="straat" name="straat" type="straat" required placeholder="Straatnaam" class="form-input input" value="<?php if(!empty($_POST['straat'])){ echo $_POST['straat'];} ?>">
        </label>
        <label for="huisnr" class="form__label">Huisnummer *
            <span class="error"><?php if(!empty($errors['huisnummer'])){echo $errors['huisnummer'];} ?></span>
            <input id="huisnummer" name="huisnummer" type="huisnummer" required placeholder="Huisnummer" class="form-input input" value="<?php if(!empty($_POST['huisnummer'])){ echo $_POST['huisnummer'];} ?>">
        </label>
        <label for="stad" class="form__label">Stad / Gemeente *
            <span class="error"><?php if(!empty($errors['stad'])){echo $errors['stad'];} ?></span>
            <input id="stad" name="stad" type="stad" required placeholder="Stad" class="form-input input" value="<?php if(!empty($_POST['stad'])){ echo $_POST['stad'];} ?>">
        </label>
        <label for="postcode" class="form__label">Postcode *
            <span class="error"><?php if(!empty($errors['postcode'])){echo $errors['postcode'];} ?></span>
            <input id="postcode" name="postcode" type="postcode" required placeholder="Postcode" class="form-input input" value="<?php if(!empty($_POST['postcode'])){ echo $_POST['postcode'];} ?>">
        </label>
        <label for="land" class="form__label">Land *
            <span class="error"><?php if(!empty($errors['land'])){echo $errors['land'];} ?></span>
            <input id="land" name="land" type="land" required placeholder="Land" class="form-input input" value="<?php if(!empty($_POST['land'])){ echo $_POST['land'];} ?>">
        </label>
        <div class="button__wrapper button_winkel">
            <a class="button__inverse" href="?page=shop">verder winkelen</a>
            <div>
              <input type="submit" value="Bevestigen" class="button">
              <input type="hidden" name="action_unset" value="unset">
            </div>
        </div>
  </form>
</main>
