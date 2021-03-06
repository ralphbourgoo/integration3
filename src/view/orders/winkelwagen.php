<main>
  <h1 class="winkelwagen__title">Winkelwagen</h1>
  <div class="chart__wrapper">
    <p class="blue">product</p>
    <div class="chart__wrapper--end">
      <p class="blue">aantal</p>
      <p class="blue chart__price">prijs</p>
    </div>
  </div>
  <section class="chart__wrapper--product">
    <h2 class="hidden">product</h2>
    <form action="index.php?page=winkelwagen" method="post">
      <?php
          $total = 0;
          $itemTotal = 0;
          foreach($_SESSION['cart'] as $item) {
            $itemTotal = $item['product']['price'] * $item['quantity'];
            $total += $itemTotal;
        ?>
      <div class="chart">
        <div class="chart__product">
          <img src="<?php echo $item['product']['cart_img'];?>" alt="cart img" width="60" height="60">
          <div class="chart__info">
            <p class="chart__tekst"><?php echo $item['product']['titel'];?></p>
            <p class="chart__versie"><?php echo $item['product']['versie'];?></p>
            <div class="handle__buttons">
              <button type="submit" class="chart__remove" name="remove" value="<?php echo $item['product']['id'];?>">
                <img class="updel trash" src="assets/img/logo/trash.svg" alt="trash icon" >
              </button>
              <button class="update" type="submit" id="update-cart" class="btn" name="action" value="update">
                <img class="updel" src="assets/img/logo/update.svg" alt="update icon" >
              </button>
            </div>
          </div>
        </div>
        <div class="chart__content">
          <input class="hoeveel" type="text" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $item['quantity'];?>" class="replace"/></input>
          <p class="chart__prijs"><?php echo $item['product']['price'];?> EUR</p>
        </div>
      </div>
    </form>
    <?php
            }
        ?>
  </section>
  <section>
    <h2 class="hidden">Berekening</h2>
    <div class="subtotal">
      <p class="subtotal__text">Subtotaal</p>
      <p class="chart__prijs">€ <?php echo $total;?></p>
    </div>
    <div class="subtotal">
      <p class="subtotal__text">Verzending</p>
      <p class="chart__prijs">GRATIS</p>
    </div>
  </section>
  <section class="subtotal">
    <h2 class="hidden">totaal</h2>
    <p class="subtotal__text">Totaal</p>
    <p class="chart__prijs">€ <?php echo $total?></p>
  </section>
  <div class="winkew_buttons nocenter">
      <a class="button__inverse" href="?page=shop">verder winkelen</a>
      <a class="button" href="?page=formulier">bestellen</a>
  </div>
</main>
