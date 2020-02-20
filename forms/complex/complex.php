<?php
function complexEmptyItemRead(&$Item = []) {
      if (!isset($Item["buildings"])) {
        $bid = wbNewId();
        $Item["buildings"] = [
             "data" => [$bid => ["id"=>$bid]]
            ,"dict" => [[
              "name"=> "prop",
              "label"=> "",
              "type"=> "forms",
              "value"=> "",
              "prop"=> [
                "form"=> "complex",
                "mode"=> "buildings",
                "unwrap"=> "on",
                "class"=> "",
                "style"=> ""
              ]]
            ]
          ];
    }
    return $Item;
}

function complexBeforeItemShow(&$Item) {
    $Item["image"] = wbGetItemImg($Item);
    return $Item;
}

?>
