<?php
require_once('drink.php');

require_once('review.php');
require_once('user.php');

$juice = new Drink('001 田中はのん','苦手な英語を克服して入試へラストスパート', 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/female.png' , '若園中３');
$coffee = new Drink('002 内藤かずき', '忙しいサッカーの合間の効果的な勉強で成績上位', 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/male.png', '若園中２');
$curry = new Drink('003 竹内ここみ', '自習に来て勉強の絶対量を増やそう', 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/female.png', '若園中２');
$pasta = new Drink('004 安藤ゆきな', '休塾中です', 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/female.png', '前林中２');

$menus = array($juice, $coffee, $curry, $pasta);

$user1 = new User('中村文', 'male');
$user2 = new User('松井', 'female');

$users = array($user1, $user2);

$review1 = new Review($juice->getName(), $user1->getName(), '私立推薦決りました！');
$review2 = new Review($curry->getName(), $user1->getName(), 'スキー合宿前に自習に来るよう言いました');
$review3 = new Review($coffee->getName(), $user1->getName(), '来月はサッカーのスペイン遠征があります');
$review4 = new Review($pasta->getName(), $user1->getName(), '理科の時間が足りなかったです。次回電気回路の復習からお願いします');
$review5 = new Review($juice->getName(), $user2->getName(), '受験に向け授業科目注意してください');
$review6 = new Review($curry->getName(), $user2->getName(), '今月末の学習診断テストが不安なようです');
$review7 = new Review($coffee->getName(), $user2->getName(), '不定詞に苦手意識が出てきています');
$review8 = new Review($pasta->getName(), $user2->getName(), '今日は理科を多めにやりました');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>
