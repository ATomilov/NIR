<?php
$index = 0;
$path_to_images = "C:/Users/Apofeo/Downloads/CropNumbers/NumBase";
$dir_items = array_diff( scandir( $path_to_images ), array('..', '.') );
foreach ($dir_items as $dir_item) :
  $index++;
  $dir_item = explode(".", $dir_item);
  $new_dir_items[] = $dir_item[0];
  $size = getimagesize($path_to_images . "/" . $dir_item[0] . "." . $dir_item[1]);
  $tags = ($index > 4056) ? "test" : "train";
  $data = array(
    'tags' => [$tags,$tags],
    'description' => '',
    'objects' => [],
    'size' => array(
      'height' => $size[1],
      'width' => $size[0],
    ),
  );
  // $formattedData = json_encode($data, JSON_UNESCAPED_UNICODE);
  // $filename = $dir_item[0] . ".json";
  // $handle = fopen($tags . "/" . $filename,'w+');
  // fwrite($handle,$formattedData);
  // fclose($handle);
endforeach;
// echo count($dir_items);
// sort($dir_items);
// var_dump($new_dir_items);
// var_dump($sizes);
?>