<?php

if (!empty($_SESSION['current-link'])) {
  $current_link = $_SESSION['current-link'] - 1;
}
else if (!empty($_SESSION['current-card-link'])) {
  $current_card_link = $_SESSION['current-card-link'] - 1;
}

$sql_get_cards = "SELECT * FROM goods";
$items = $connect->query($sql_get_cards);
?>

<div class="admin-page__sidebar">
  <div class="admin-page__sidebar-container">
    <div class="admin-page__sideba-top-links">
      <a class="admin-page__home-link" href="../index.php">Вернуться на сайт</a>
      <a class="admin-page__logout-link" href="../functions/logout.php">Выйти</a>
    </div>
    <h4 class="sidebar__title">Редактирование:</h4>
    <h6 class="sidebar__subtitle">Секции</h6>
    <div class="sidebar__links-box">
      <a class="sidebar__link" href="header-content.php">
        Верхний баннер
        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
              <path d="M0.441628 0.999383C0.333535 1.10751 0.272811 1.25414 0.272811 1.40703C0.272811 1.55992 0.333535 1.70655 0.441628 1.81468L3.29574 4.66879L0.441628 7.5229C0.336598 7.63165 0.278481 7.77729 0.279795 7.92847C0.281109 8.07965 0.341748 8.22427 0.448652 8.33117C0.555556 8.43808 0.700172 8.49872 0.851351 8.50003C1.00253 8.50134 1.14818 8.44323 1.25692 8.3382L4.51868 5.07644C4.62678 4.96831 4.6875 4.82168 4.6875 4.66879C4.6875 4.5159 4.62678 4.36927 4.51868 4.26114L1.25692 0.999383C1.1488 0.89129 1.00217 0.830566 0.849276 0.830566C0.696386 0.830566 0.549755 0.89129 0.441628 0.999383Z" fill="white"/>
        </svg>
      </a>
      <a class="sidebar__link" href="about.php">
        Секция "О нас"
        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
              <path d="M0.441628 0.999383C0.333535 1.10751 0.272811 1.25414 0.272811 1.40703C0.272811 1.55992 0.333535 1.70655 0.441628 1.81468L3.29574 4.66879L0.441628 7.5229C0.336598 7.63165 0.278481 7.77729 0.279795 7.92847C0.281109 8.07965 0.341748 8.22427 0.448652 8.33117C0.555556 8.43808 0.700172 8.49872 0.851351 8.50003C1.00253 8.50134 1.14818 8.44323 1.25692 8.3382L4.51868 5.07644C4.62678 4.96831 4.6875 4.82168 4.6875 4.66879C4.6875 4.5159 4.62678 4.36927 4.51868 4.26114L1.25692 0.999383C1.1488 0.89129 1.00217 0.830566 0.849276 0.830566C0.696386 0.830566 0.549755 0.89129 0.441628 0.999383Z" fill="white"/>
        </svg>
      </a>
    </div>
    <h6 class="sidebar__subtitle">Карточки <a class="add-card" href="card-add-page.php" title="Добавить карточку">+</a></h6>
    <div class="sidebar__cards-links-box">
      <?php foreach ($items as $item) {?>
        <a class="sidebar__link sidebar__link1" href='./card-admin-component.php?item=<?php echo $item['id']?>'>
        <?php echo $item['title']?>
          <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
                <path d="M0.441628 0.999383C0.333535 1.10751 0.272811 1.25414 0.272811 1.40703C0.272811 1.55992 0.333535 1.70655 0.441628 1.81468L3.29574 4.66879L0.441628 7.5229C0.336598 7.63165 0.278481 7.77729 0.279795 7.92847C0.281109 8.07965 0.341748 8.22427 0.448652 8.33117C0.555556 8.43808 0.700172 8.49872 0.851351 8.50003C1.00253 8.50134 1.14818 8.44323 1.25692 8.3382L4.51868 5.07644C4.62678 4.96831 4.6875 4.82168 4.6875 4.66879C4.6875 4.5159 4.62678 4.36927 4.51868 4.26114L1.25692 0.999383C1.1488 0.89129 1.00217 0.830566 0.849276 0.830566C0.696386 0.830566 0.549755 0.89129 0.441628 0.999383Z" fill="white"/>
          </svg>
        </a>
      <?php }?>
    </div>
  </div>
</div>

<?php if (!empty($_SESSION['current-link'])) { ?>
<script>
  const sidebarLinks = document.querySelectorAll('.sidebar__link');
  sidebarLinks[<?php echo $current_link;?>].classList.add('sidebar__link--active');
</script>
<?php } ?>

<?php if (!empty($_SESSION['current-card-link'])) { ?>
<script>
  const sidebarLinks1 = document.querySelectorAll('.sidebar__link1');
  sidebarLinks1[<?php echo $current_card_link;?>].classList.add('sidebar__link--active');
</script>
<?php }?>

