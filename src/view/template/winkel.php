<main>
  <h1 class="hidden">Winkel</h1>
  <section>
    <h2 class="title winkel__title">Bestel een DIY pakket</h2>
    <p class="text winkel_text">Om jullie bezig te houden in deze moeilijke tijd, presenteren we jullie onze <span>DIY pakketten</span>. Deze periode kunnen jullie een <span>luchtballon</span> maken. Bestel een van onderstaande pakketten en ga aan de slag. Bekijk de tutorial die je zal helpen het bouwproces te overlopen. </p>
  </section>
  <?php foreach($products as $product): ?>
  <section class="product_wrapper">
    <lottie-player class="lottie_balloons" src="<?php echo $product['img'];?>"  background="transparent"  speed="0.5"  loop  autoplay></lottie-player>
    <div class="winkel_wrap">
      <h2 class="subtitle winkel_sub"><?php echo $product['titel'];?></h2>
      <p class="text winkel_tekst"><?php echo $product['beschrijving'];?></p>
      <p class="text winkel_tekst"><?php echo $product['tools'];?></p>
      <p class="text winkel_tekst"><?php echo $product['extra'];?></p>
      <p class="price">€ <?php echo $product['price'];?></p>
      <div class="button_wrapper nocenter">
        <a class="button__inverse" href="index.php?page=tutorial">Start Tutorial</a>
        <form method="post" action="index.php?page=winkelwagen">
          <input type="hidden" name="id" value="<?php echo $product['id'];?>" />
          <button class="button" type="submit" name="action" value="add">In Winkelwagen</button>
        </form>
      </div>
    </div>
  </section>
  <?php endforeach; ?>
</main>
