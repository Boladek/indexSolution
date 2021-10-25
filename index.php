<?php
    function sortIndex($arr, $num) {
      $result = array_search($num, $arr);
      if ($result > 0){
      return $result;
      }
      for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] > $num && $arr[$i - 1] < $num){
            array_splice( $arr, 3, 0, $num );
        }
        if (($arr[$i] < $num) && (!$arr[$i + 1])){
            array_push($arr, $num);
        }
      }
      return array_search($num, $arr);
    }
?>
