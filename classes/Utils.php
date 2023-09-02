<?php

// class Utils
// {
//   public static function redirect(string $location): void
//   {
//     header('Location: ' . $location);
//     exit;
//   }
// } ?>


<?php

class Utils {

  public static function redirect($url) {
    header("Location: " . $url);
    exit;
  }
}

?>