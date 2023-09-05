<!-- <div>
  <h2>
    <a href="product.php?id=<?php //echo $product['id']; ?>">
      <?php// echo $product['name']; ?>
    </a>
  </h2>
</div>

-->
<?php 
echo'<option value="'. $User['id'] . '">'. $User['user_name'] . '</option>'; 
echo '</select>'; ?>