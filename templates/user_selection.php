<!-- <div>
  <h2>
    <a href="product.php?id=<?php //echo $product['id']; ?>">
      <?php// echo $product['name']; ?>
    </a>
  </h2>
</div>

-->

<!-- Si le temps, prévoir un template pour le SELECT user -->
<?php 
echo'<option value="'. $User['user_name'] . '">'. $User['id'] . ' - ' . $User['user_name'] . '</option>';  ?>