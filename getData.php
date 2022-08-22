<?php
  //getData.php
  header("Content-type: application/json; charset=UTF-8");
  
  //jsに返すデータ。今回は簡略化のためにDBから取得はせず、単に配列を用いる。
  $animals = ["cat", "dog"];
  $fruits = ["apple", "orange"];
  
  //AjaxでPost送信された値を受け取る
  $data = $_POST['data'];
  
  //jsに返すデータを後ほどここに格納する。
  $return_data = [];
  
  //Ajaxで受け取ったデータに応じて、$return_dataを書き換え。
  if($data=="animals"){
    $return_data = $animals;
  }else if($data=="fruits"){
    $return_data = $fruits;
  }
  
  //$return_dataをjson形式で返す。
  echo json_encode($return_data);
  
  //処理終了
  exit;
?>