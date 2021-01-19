<main>
  <h1>Winkelwagen</h1>
  <div class="chart__wrapper">
    <p>product</p>
    <div class="chart__wrapper--end">
      <p>aantal</p>
      <p class="chart__price">prijs</p>
    </div>
  </div>
  <section>
    <h2 class="hidden">product</h2>
    <form action="index.php?page=shoppingcart" method="post">
      <div class="chart">
        <div class="chart__product">
          <img src="" alt="cart img" width="100" height="100">
          <div class="chart__info">
            <p class="chart__tekst">Titel Product</p>
            <p class="chart__versie">Versie Product</p>
            <div class="handle__buttons">
              <button type="submit" class="chart__remove" name="remove" value="">
                <img class="updel trash" src="assets/trash.svg" alt="trash icon" >
              </button>
              <p><button class="update" type="submit" id="update-cart" class="btn" name="action" value="update">
                <img class="updel" src="assets/update.svg" alt="update icon" >
              </button></p>
            </div>
          </div>
        </div>
        <div class="chart__content">
          <input class="hoeveel" type="text" name="quantity[]" value="" class="replace"/></input>
          <p class="chart__prijs">4 EUR</p>
        </div>
      </div>
    </form>
  </section>
  <section>
    <h2 class="hidden">Berekening</h2>
    <div class="subtotal">
      <p class="subtotal__text">subtotaal</p>
      <p class="chart__prijs">4 EUR</p>
    </div>
    <div class="subtotal">
      <p class="subtotal__text">verzending</p>
      <p class="chart__prijs">GRATIS</p>
    </div>
    <div class="subtotal">
      <form class="discount" method="get" action="index.php">
        <input type="hidden" name="page" value="shoppingcart"/>
        <input type="hidden" name="action" value="korting" />
        <input type="text" class="korting_input" placeholder="Vul korting in" name="code">
        <button type="submit" class="korting__button">voeg toe</button>
      </form>
    </div>
  </section>
  <section class="subtotal">
    <h2 class="hidden">totaal</h2>
    <p class="subtotal__text">Totaal</p>
    <p class="chart__prijs"></p>
  </section>
  <div class="chart__buttons">
      <a class="chart__button--reverse" href="?page=shop">verder winkelen</a>
      <a class="chart__button" href="?page=form">bestellen</a>
  </div>
</main>
