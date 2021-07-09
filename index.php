<?php
function inserter($ttl, $slug, $catNum, $type) {
    if(isset($_SESSION['test']) ){
        for ($i=0; $i < 10; $i++) {                     
            $my_post = [
                'post_title' => $i.$ttl,// 投稿のタイトル
                'post_name' => $i.$slug, // スラッグ 
                'post_category' => [$catNum], // カテゴリーID(配列)
                'post_status'   => 'publish',
                'post_type' => $type, // 投稿タイプ
            ];
            wp_insert_post($my_post);
        }
    }
}

$id=1912;

for ($i=0; $i < 10; $i++) {                     
    wp_set_object_terms($id, 'place', 'タクソノミ');
    echo $id++;
}


$_SESSION['test'] = 'test';

?>