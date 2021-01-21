<main>
  <h1 class="title winkel__title">Bestelformulier</h1>
  <form action="index.php?page=formulier" method="post" class="order__form">
    <input type="hidden" name="action" value="insertOrder">
      <p class="form__sub">Persoonlijke Gegevens</p>
      <p class="text">Deze info is vereist. Zo kunnen we je een bevestiging sturen zodra de bestelling afgerond is.</p>
        <label for="voornaam" class="form__label top__label">Voornaam *
            <span class="error">Dit veld is verplicht</span>
            <input id="voornaam" name="voornaam" type="text" required placeholder="Voornaam" class="form-input input" value="">
        </label>
        <label for="achternaam" class="form__label">Achternaam *
            <span class="error">Dit veld is verplicht</span>
            <input id="achternaam" name="achternaam" type="text" required placeholder="Achternaam" class="form-input input" value="">
        </label>
        <label for="email" class="form__label">E-mail *
            <span class="error">Dit veld is verplicht</span>
            <input id="email" name="email" type="email" required placeholder="E-mail" class="form-input input" value="">
        </label>
      <p class="form__sub">Adres Informatie</p>
      <p class="text">Deze info is vereist. Zo kunnen we je pakje verzenden zodra de bestelling afgerond is. </p>
        <label for="straat" class="form__label top__label">Straatnaam *
            <span class="error">Dit veld is verplicht</span>
            <input id="straat" name="straat" type="straat" required placeholder="Straatnaam" class="form-input input" value="">
        </label>
        <label for="huisnr" class="form__label">Huisnummer *
            <span class="error">Dit veld is verplicht</span>
            <input id="huisnr" name="huisnr" type="huisnr" required placeholder="Huisnummer" class="form-input input" value="">
        </label>
        <label for="postcode" class="form__label">Postcode *
            <span class="error">Dit veld is verplicht</span>
            <input id="postcode" name="postcode" type="postcode" required placeholder="Postcode" class="form-input input" value="">
        </label>
        <label for="stad" class="form__label">Stad / Gemeente *
            <span class="error">Dit veld is verplicht</span>
            <input id="stad" name="stad" type="stad" required placeholder="Stad" class="form-input input" value="">
        </label>
        <label for="land" class="form__label">Land *
            <span class="error">Dit veld is verplicht</span>
            <input id="land" name="land" type="land" required placeholder="Land" class="form-input input" value="">
        </label>
        <div class="button__wrapper">
            <a class="button__inverse" href="?page=shop">verder winkelen</a>
            <input type="submit" value="Bevestigen" class="button">
        </div>
  </form>
</main>
