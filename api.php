<?php
if(isset($_GET['q'])){
  $q = trim($_GET['q']);
  $i = isset($_GET['i']) ? intval($_GET['i']) : 0;
  if(!$q){ echo "null"; exit; }

  $html = file_get_contents("https://www.youtube.com/results?search_query=".urlencode($q));

  preg_match_all('/"videoRenderer":\{"videoId":"([^"]+)"/',$html,$m);

  if(!isset($m[1][$i])){ echo "null"; exit; }

  $vid = $m[1][$i];
  echo json_encode([
    "url"=>"https://youtube.com/watch?v=$vid",
    "thumb"=>"https://i.ytimg.com/vi/$vid/hqdefault.jpg"
  ]);
  exit;
}
if(isset($_POST['ids'])){
  $ids = json_decode($_POST['ids'], true);
  echo "https://www.youtube.com/watch_videos?video_ids=".implode(",",$ids);
  exit;
}
if(isset($_POST['playlist'])){
  $songs = json_decode($_POST['playlist'], true);
  $ids=[];
  foreach($songs as $q){
    $html = file_get_contents("https://www.youtube.com/results?search_query=".urlencode($q));
    preg_match('/"videoRenderer":\{"videoId":"([^"]+)"/',$html,$m);
    if($m) $ids[] = $m[1];
  }
  echo "https://www.youtube.com/watch_videos?video_ids=".implode(",",$ids);
  exit;
}