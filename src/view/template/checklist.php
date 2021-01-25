<main>
  <h1 class="hidden">Checklist Page</h1>
  <section class="start_wrapper">
    <div class="checklist_header">
      <h2 class="subtitle">Heb je alles?</h2>
      <p class="text center max">Gebruik de <span>checklist</span> om te controleren of alle items aanwezig zijn. <span>Klik op de items</span> die in je set aanwezig zijn. Als je zeker ben dat alles aanwezig is, kunnen we beginnen aan de tutorial. Laten we beginnen !</p>
    </div>
    <form action="index.php?page=checklist">
    <div class="checklist_wrapper">
      <div class="check_wrap">
        <input class="radio__button" type="checkbox" id="ballon" name="ballon" value="ballon">
        <label for="ballon" class="checkitem_wrapper">
          <img class="check_img" src="assets/img/checklist/balloon.svg" alt="ballon">
          <p class="label">Ballon</p>
        </label>
      </div>
      <div class="check_wrap">
        <input class="radio__button" type="checkbox" id="ropes" name="ropes" value="ropes">
        <label for="ropes" class="checkitem_wrapper">
          <img class="check_img" src="assets/img/checklist/ropes.svg" alt="ropes">
          <p class="label">4 Touwen</p>
        </label>
      </div>
      <div class="check_wrap">
        <input class="radio__button" type="checkbox" id="mand" name="mand" value="mand">
        <label for="mand" class="checkitem_wrapper">
          <img class="check_img" src="assets/img/checklist/mand.svg" alt="mand">
          <p class="label">Mand</p>
        </label>
      </div>
      <div class="check_wrap">
        <input class="radio__button" type="checkbox" id="buis" name="buis" value="buis">
        <label for="buis" class="checkitem_wrapper">
          <img class="check_img" src="assets/img/checklist/buis.svg" alt="buis">
          <p class="label">Buis</p>
        </label>
      </div>
      <div class="check_wrap">
        <input class="radio__button" type="checkbox" id="robot" name="robot" value="robot">
        <label for="robot" class="checkitem_wrapper">
          <img class="check_img" src="assets/img/checklist/robot.svg" alt="robot">
          <p class="label">Test Pop</p>
        </label>
      </div>
      <div class="check_wrap">
        <input class="radio__button" type="checkbox" id="hairdryer" name="hairdryer" value="hairdryer">
        <label for="hairdryer" class="checkitem_wrapper">
          <img class="check_img" src="assets/img/checklist/hairdryer.svg" alt="hairdryer">
          <p class="label">Haardroger</p>
        </label>
      </div>
      <div class="check_wrap">
        <input class="radio__button" type="checkbox" id="pomp" name="pomp" value="pomp">
        <label for="pomp" class="checkitem_wrapper">
          <img class="check_img" src="assets/img/checklist/pomp.svg" alt="pomp">
          <p class="label">Pomp</p>
        </label>
      </div>
    </div>
    </form>
    <div class="button_wrapper">
      <a class="button" href="index.php?page=tutorial">laten we beginnen</a>
    </div>
  </section>
</main>
