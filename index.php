<?php

// 40 じゃんけんを作成しよう！
// 下記の要件を満たす「じゃんけんプログラム」を開発してください。
//
// 要件定義
// ・使用可能な手はグー、チョキ、パー
// ・勝ち負けは、通常のじゃんけん
// ・PHPファイルの実行はコマンドラインから。
//
// ご自身が自由に設計して、プログラムを書いてみましょう！

const HANDS = array("グー", "チョキ", "パー");

function game() {
    $you = yourHand();
    $me = mineHand();
    result($you, $me);
    retry();

}

function yourHand() {
    echo 'グーなら0、チョキなら1、パーなら2を入力してください' . PHP_EOL;
    $you = trim(fgets(STDIN));
    if ($you !== '0' && $you !== '1' && $you !== '2') {
        return yourHand();
    }
    echo "あなたは" . HANDS[$you] . "です" . PHP_EOL;
    return $you;
}

function mineHand() {
    $me = mt_rand (0, 2);
    echo "私は" . HANDS[$me] . "です" . PHP_EOL;
    return $me;
}

function result($you, $me) {
    if(($me - $you + 3) % 3 === 2) {
        echo 'あなたの負けです' . PHP_EOL;
    } else if (($me - $you + 3) % 3 === 1) {
        echo 'あなたの勝ちです' . PHP_EOL;
    } else if (($me - $you + 3) % 3 === 0) {
        echo '引き分けです' . PHP_EOL;
    }
}

function retry(){
    echo '続けるなら1、終了するなら2を入力してください'  . PHP_EOL;
    $continue = trim(fgets(STDIN));
    if ($continue != 1 && $continue != 2) {
        return retry();
    }
    if ($continue == 1) {
        return game();
    }
    if ($continue == 2) {
        return gameEnd();
    }

    function gameEnd() {
        exit('プログラムを終了します');
    }

}


game();
