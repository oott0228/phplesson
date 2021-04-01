<?php

//1. 基本的な変数の宣言

//・整数（int） $number: 5
$number = 5;
echo $number . PHP_EOL;

//・文字列（string） $text: test
$text = 'test';
echo $text . PHP_EOL;

//・論理型（boolean） $flag: true
$flag = true;
echo $flag . PHP_EOL;

//・null型 $test: null
$test = null;
echo $test . PHP_EOL;

//2. 基本的な計算
// 整数型の２つの変数を宣言してください。
// 2つの変数を用いて、　足す、引く、かける、割る、割った余りを出力してください。
$number1 = 4;
$number2 = 7;

echo $number1 + $number2 . PHP_EOL;
echo $number1 - $number2 . PHP_EOL;
echo $number1 * $number2 . PHP_EOL;
echo $number1 / $number2 . PHP_EOL;
echo $number1 % $number2 . PHP_EOL;

// 3. 条件式とboolean(論理型)について
// 初期値がfalseである論理型の変数を宣言してください。
// 問題2で宣言した２つの変数を足した結果が偶数であれば、論理型の変数にtrueを代入してください。
$flag = false;
if($number1 + $number2 % 2 === 0) {
    $flag = true;
}
echo PHP_EOL;

// 4. 条件式
// 設問3のboolean型の変数を利用した条件式を作成し、以下のように出力してください。
// ・偶数なら..... 「偶数です」
// ・奇数なら.....「奇数です」
if($flag === true) {
    echo '偶数です';
} else {
    echo '奇数です';
}
echo PHP_EOL;

// 5, for文の基礎
// 1~10までの数字をfor文を使って出力してください
for($i = 1; $i <= 10; $i++) {
    echo $i . PHP_EOL;
}

// 6, for文の基礎２
// 35 ~ 46までの数字をfor文を使って出力してください
for ($i = 35; $i <= 46; $i++) {
    echo $i . PHP_EOL;
}

// 7. for文と条件式の組み合わせ
// 40 ~ 50までの数字の中で奇数の数字のみを出力してください
for($i = 40; $i <= 50; $i++) {
    if($i % 2 === 1) {
        echo $i . PHP_EOL;
    }
}

// 8. for文と条件式の組み合わせ2
// 10 ~ 25までの数字の中で3の倍数の数字のみを出力してください
for ($i = 10; $i < 26; $i++) {
    if($i % 3 === 0 ) {
        echo $i . PHP_EOL;
    }
}


// 9. for文と条件式の組み合わせ3
// 20 ~ 50までの数字の中で2で割ったら奇数となる数字のみを出力してください
for ($i = 20; $i <= 50; $i++) {
    if ($i / 2 % 2 === 1 && $i % 2 === 0 ) {
        echo $i . PHP_EOL;
    }
}


for($i = 20; $i <= 50; $i++) {
    $div = $i / 2;
    if(!is_int($div)) {
        conitnue;
    }
    if($div % 2 !== 0) {
        echo $i . PHP_EOL;
    }
}

// 10. for文と条件式の組み合わせ4
// 20 ~ 50までの数字の中で2で割ったら奇数となる数字の個数を出力してください
$count = 0;
for ($i = 20; $i <= 50; $i++) {
    if ($i / 2 % 2 === 1 && $i % 2 === 0 ) {
         $count++;
    }
}
echo $count . PHP_EOL;

// 11. for文を使用した計算
// 1000未満の「3と7の倍数」は何個あるか　個数を出力してください
$count = 0;
for ($i = 1; $i < 1000; $i++) {
    if ($i % 3 === 0 && $i % 7 === 0) {
         $count++;
    }
}
echo $count . PHP_EOL;

// 12. for文を使用した計算2
// 1000未満の「3と7の倍数」の5番目に大きい数を出力してください
$count = 0;
for($i = 999; $i >= 1; $i--) {
    if($i % 3 === 0 && $i % 7 === 0 ) {
        $count++;
        if($count === 5) {
            break;
        }
    }
}
echo $i. PHP_EOL;

// 13. 条件式
// 整数型の２つの変数を宣言してください。
// 上記で宣言した２つの変数の内、1つ目を2つ目で引いた数字が偶数、奇数、
// 0で「偶数です」「奇数です」「0です」と表示させるような条件式を書いてください。
 $num1 = 4;
 $num2 = 2;
 $diff = $num1 - $num2;
 if ($diff === 0) {
     echo '0です' . PHP_EOL;
 } elseif ($diff % 2 === 0) {
     echo '偶数です' . PHP_EOL;
 }  else {
     echo '奇数です' . PHP_EOL;
 }

// 14. FizzBuzz
// 1 ~ 100の数字をfor文でループしてください。
// ただし3の倍数のときは数の代わりに｢Fizz｣と、5の倍数のときは｢Buzz｣、
// 3と5両方の倍数の場合には｢FizzBuzz｣と出力すること。
for($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuZZ' . PHP_EOL;
    } elseif ($i % 3 === 0) {
        echo 'Fizz' . PHP_EOL;
    } elseif ($i % 5 === 0) {
        echo 'Buzz' . PHP_EOL;
    } else {
        echo $i . PHP_EOL;
    }
}

// 15. switch文
// 整数型の２つの変数を宣言してください。
// 上記で宣言した２つの変数の内、1つ目を2つ目で引いた数字が偶数、奇数、
// 0で「偶数です」「奇数です」「0です」と表示させるような条件式を書いてください。
$num1 = 10;
$num2 = 8;
$diff = $num1 - $num2;
switch($diff) {
    case 0:
        echo '0です' . PHP_EOL;
        break;
    case $diff % 2 === 0:
        echo '偶数です' . PHP_EOL;
        break;
    default:
        echo '奇数です' . PHP_EOL;
        break;
}


// 16, 図形の表示
//  0
//  00
//  000

// この図形をfor文を使って出力してください。
for($i = 0; $i < 3; $i++) {
    for($j = 0; $j <= $i ; $j++) {
        echo "0";
    }
    echo PHP_EOL;
}

// 17, 図形の表示
//   0
//  000
// 00000

// この図形をfor文を使って出力してください。
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 2 - $i; $j++) {
        echo " ";
    }
    for ($j = 0; $j < $i * 2 + 1; $j++) {
            echo "0";
    }
    echo PHP_EOL;
}

// 18, 図形の表示
//   0
//  000
// 00000
//  000
//   0

// この図形をfor文を使って出力してください。
for ($i = 0; $i < 3; $i++) {
    for($j = 0; $j < 2 - $i; $j++) {
        echo " ";
    }

    for($j = 0; $j < $i * 2 + 1; $j++) {
            echo "0";
    }
    echo PHP_EOL;
}

for($i = 0; $i < 2; $i++) {
    for($j = 0; $j <= $i; $j++) {
        echo " ";
    }
    for($k = 0; $k < 2 - ($i * 2) + 1; $k++) {
        echo "0";
    }
    echo PHP_EOL;
}

// 19, while文 do-while文
// 1000から2000までの間で1の桁が7の数字の最初の数字を求めて出力してください

// for文　while文　do-while文を使ってそれぞれ出力してください*/
for ($i = 1000; $i <= 2000; $i++) {
    if ($i % 10 === 7) {
        $number[] = $i;
    }
}
echo $number[0] . PHP_EOL;

$i = 1000;
while ($i <= 2000) {
    if($i % 10 === 7) {
        echo $i . PHP_EOL;
        break;
    }
    $i++;
}

$i = 1000;
do {
    if($i % 10 === 7) {
        echo $i . PHP_EOL;
        break;
    }
    $i++;
}while ($i <= 2000);

// 20. メソッドの基礎
// int型の変数を宣言してください。
// 変数を渡して二乗の整数を返す関数を作成してください*/

function getNumber($number) {
    return $number ** 2;
}
echo getNumber(5) . PHP_EOL;

// もしくは↓?
function getNumber2($number) {
    return pow($number, 2);
}
echo getNumber2(5) . PHP_EOL;

// 21. メソッドの基礎2
// boolean型を渡すと別のboolean型を返す関数を作成してください
// ex) trueを渡す→falseが返ってくる

function reverseBool($bool) {
    if($bool == true) {
        return false;
    }
    return true;
}
echo reverseBool(true) . PHP_EOL;

function boolean($bool) {
    return !$bool;
}

// 22.
// int型とString型の２つの変数を引数で渡すと 「int型:String型」という文字列を返す
// メソッドを作成してください
// ※int型,String型は引数で渡してください
// ex)出力例「 5: ああああ」
function makeWord($number, $str) {
    return $number . ":" . $str;
}

echo makeWordord(5, "ああああ") . PHP_EOL;

// 23.
// int型とboolean型を渡し boolean型がtrueなら　int型を1プラスする　falseなら1マイナスする関数を作成してください

// 渡ってきた変数が正しいかどうかチェックする場合は、（バリデーションチェック）
// 関数の冒頭でチェックして、もし期待値でなければ、その時点で
// 関数の処理を終了するように書く。

function makeNumber($int, $bool) {
    if (!is_numeric($int)) {
        echo "引数が不正です。";
        return;
    }
    if ($bool == true) {
        $int += 1;
    } else {
        $int -= 1;
    }
    return $int;
}

echo makeNumber(5, false) . PHP_EOL;

// 24.
// int型とString型を渡しそのint型の数値の回数分　型の内容Stringを出力する関数を作成してください
// (int型が0以下の場合　「範囲外の入力値です」と出力してください
function makeWord($int, $str) {
    if ($int <= 0) {
        echo "範囲外の入力値です" . PHP_EOL;
        return;
    }
    for ($i = 0; $i < $int; $i++) {
        echo $str . PHP_EOL;
    }
}

makeWord(7, "めろん");

// ↑関数の冒頭で$intをチェックし期待値でなければそこで終了、OKなら関数の処理を実行

// 25,
// 配列を宣言してください
// Integer(整数) 1個の配列　
// String(文字列) 3個の配列
$nums = array(6);
$names = array('エリツィン', 'プーチン', 'メドヴェージェフ');


// 13. 条件式
// 整数型の２つの変数を宣言してください。
// 上記で宣言した２つの変数の内、1つ目を2つ目で引いた数字が偶数、奇数、
// 0で「偶数です」「奇数です」「0です」と表示させるような条件式を書いてください。
//これをランダムな数字を代入するような関数を」作る。２つの変数の差がマイナスになる場合は、再度、同じ関数を呼び、再代入するような関数を作成


//関数で2つ以上の値を返すときは、配列を使用する。
function getRandNumber() {
    $num1 = mt_rand(1, 9);
    $num2 = mt_rand(1, 9);
    if ($num1 < $num2) {
        return getRandNumber();
    }
    return array($num1,$num2);
}

list($num1, $num2) = getRandNumber();



//連想配列の場合
function getRandNumber() {
    $num1 = mt_rand(1, 9);
    $num2 = mt_rand(1, 9);
    if ($num1 < $num2) {
        return getRandNumber();
    }
    return array(
        "num1" => $num1,
        "num2" => $num2
    );
}


$result = getRandNumber();
var_dump($result);

$num1 = $result[0];
$num2 = $result[1];

$result = getRandNumber();
$num1 = $result['num1'];
$num2 = $result['num2'];



if ($num1 - $num2 === 0) {
    echo "0です";
} elseif (($num1 - $num2) % 2 === 0) {
    echo "偶数です";
} else {
    echo "奇数です";
}

// exitはプログラムの終了なので、関数内で書くと、その時点で
// そのPHPファイルの実行は終了し、後の処理は走らない。
// returnは関数の終了なので、その時点でgetRandNumber関数を抜けて、
// 関数をコール後の処理が走る。
// exitと同じ昨日を持つdie関数がある。

// 26,
// 配列は初期化の際に初めから配列の値の代入までまとめて行う事ができます。
// Integer(整数)　3個の配列で　　1,2,3という数字を値に持たせたい。
// 宣言、要素の確保ののちそれぞれに代入する配列の用意の仕方と
// 代入までまとめて行う書き方で用意する仕方にて配列を用意してください
 $nums = array(1, 2, 3);

// もしくは
$nums = [1, 2, 3];

// 27,
// 26の続き、
// 用意した配列をfor文を使って値を出力してください。
// foreach文を使った値の出力をしてください。

for ($i = 0; $i < count($nums); $i++) {
    echo $nums[$i] . PHP_EOL;

}

foreach ($nums as $num) {
    echo $num . PHP_EOL;
}

// 28,
// 27の続き、
// 値を出力したあとにそれぞれの値の２乗の値を代入し直すよう修正してください。

$nums = array(1, 2, 3);

for ($i = 0; $i < count($nums); $i++) {
    $nums[$i] = $nums[$i] ** 2;
}
var_dump($nums);

$nums = array(1, 2, 3);
$nums_tmp = array();
foreach ($nums as $num) {
    $nums_tmp[] = $num ** 2;
}
$nums = $nums_tmp;
var_dump($nums);


// 29,
// 5個のString(文字列)の配列を用意し適当な文字を代入してください。
// その2番目の値を出力してください。
$names = array("ウィーン", "ザルツブルク", "インスブルック", "リンツ", "ハルシュタット");
// 
echo $names[1] .PHP_EOL;

// 30,
// 10個のInteger(整数)の配列を用意し適当な値を代入してください。
// 添字が偶数番目の合計値と添字が奇数番目の合計値を出力してください。
$nums = array(1740, 1756, 1770, 1781, 1792, 1793, 1797, 1825, 1862, 1900);

$even = 0;
$odd = 0;
for($i = 0; $i < count($nums); $i++) {
    if ($i % 2 === 0 ){
        $even += $nums[$i];
    } else {
        $odd += $nums[$i];
    }

}

var_dump($even);
var_dump($odd);

// 31,
// Integer(整数)の配列を渡すと、配列の中身が３乗される関数を作ってください。
// なお、関数の中で引数に必要だと思うvalidationも作成してください。
//（validationの意味がわからない場合は、お調べください）
//
function makeNumber($numbers) {
    $errors = array();
    if(empty($numbers) || !is_array($numbers)) {
        $errors[] = "引数が不正です。";
    }

    foreach($numbers as $number) {
        if(!is_int($number)) {
            $errors[] = "配列に数字ではない値が格納されています。";
        }
    }
    if($errors) {
        return array(
            "error_msgs" => $errors
        );
    }
    foreach($numbers as &$number) {
        $number = $number ** 3;
    }
    unset($number);
    return $numbers;
}
$result = makeNumber(array('a', 'b', 'c'));
if(isset($result['error_msgs'])) {
    foreach($result['error_msgs'] as $error) {
        echo $error . PHP_EOL;
    }
    exit;
}


function makeNumber($numbers) {
    function is_numeric_array($numbers) {
        if(in_array(false, array_map('is_numeric', $numbers))) {
            return;
        }
    }
    foreach($numbers as &$number) {
        $number = $number ** 3;
        }
        unset($number);
        return $numbers;
}

$result = makeNumber(array(1, 2, 3));

function is_numeric_array($numbers) {
    if(in_array(false, array_map('is_numeric', $numbers))) {
        return false;
    } else {
        return true;
    }
}

$numbers = array(1, 2, 3);


// 32,
// 2つのInteger(整数)の配列を引数にもち、それぞれ同じ順番の値が
// 合計された配列を作るメソッドを作ってください(配列を返り値として持つ)
// 作られる配列は２つの入力された配列のうち少ない個数の配列の個数とします。

class Caluculator {
    public $nums1;
    public $nums2;

    public function makeSum() {
        $nums1 = $this->nums1;
        $nums2 = $this->nums2;

        if(count($nums1) <= count($nums2)) {
            $total = count($nums1);
        } else {
            $total = count($nums2);
        }
        $sums = array();
        for($i = 0; $i < $total; $i++) {
            $sums[] = $nums1[$i] + $nums2[$i];
        }
        return $sums;
    }
}

$calculator = new Caluculator;
$calculator->nums1 = array(1,2);
$calculator->nums2 = array(3, 4, 5);
$sum = $calculator->makeSum();


function makeSum($nums1, $nums2) {
  if(count($nums1) <= count($nums2)) {
      $total = count($nums1);
  } else {
      $total = count($nums2);
  }
$sums = array();
for($i = 0; $i < $total; $i++) {
    $sums[] = $nums1[$i] + $nums2[$i];
}
    return $sums;
}

$nums1 = array(1, 2);
$nums2 = array(3, 4, 5);

$result = makeSum($nums1, $nums2);



// 33,
// 1階層3部屋ある3階建てのアパートがある。101 102、、、という部屋番号で
// 管理するとする。
// 多次元配列で表してください。
$rooms = [
    [101, 102, 103],
    [201, 202, 203],
    [301, 302, 303]
];


// 34,連想配列
// メンバーを意味する配列に下記内容をキーに持つ値を格納したい。
// 名前
//     -性別：
//     -年齢：
// メンバーを意味する配列を宣言し、上記内容を保持する連想配列を作成してください。
$members = array(
    array(
        'name' => '吉沢亮',
        'gender' => 'male',
        'age' => 25
    ),
    array(
        'name' => '鈴木亮平',
        'gender' => 'male',
        'age' => 36
    ),
);

// 35,
// 次の配列を使用して、2という値を出力してください。

$test = array(
  array(
    array(
      1,1,1
    ),
    array(
      1,1,1
    ),
    array(
      1,1,1
    )
  ),
  array(
    array(
      1,1,2
    ),
    array(
      1,1,1
    )
)
);

echo $test[1][0][2] . PHP_EOL;

// 36,
// 35の続き、
// 35の配列をfor文をつかって全て出力してください　　(1 1 1 1 1 1 1 1 1 1 1 2 1 1 1　的な)
// foreach文を使った出力もしてください。

for($i = 0; $i < count($test); $i++) {
    $row1 = $test[$i];
    for($j = 0; $j < count($row1); $j++) {
        $row2 = $row1[$j];
        for($k = 0; $k < count($row2); $k++) {
            echo $test[$i][$j][$k];
        }
    }
}

foreach($test as $row1) {
    foreach ($row1 as $row2) {
        foreach($row2 as $data) {
            echo $data;
        }
    }
}

// 37,三項演算子
// Integer(整数)の変数を2つ、String(文字列)の変数を1つ宣言してください。
// 2つのint型変数の合計が100未満なら「100未満」、そうじゃなければ「100以上」と
// String(文字列)に三項演算子(条件演算子)を使って代入して、出力してください。

$num1 = 5;
$num2 = 37;

$result = ($num1 + $num2) < 100 ? '100未満' : '100以上';
echo $result;


// 38,文字列検索
// string型の変数を２つ宣言してください。
// 第二引数のString(文字列)が第一引数に含まれているかどうかのboolean型を
// 返すメソッドを作成してください。

function findWord($word, $find) {
    $pos = strpos($word, $find);
    if($pos !== false) {
        return true;
    } else {
        return false;
    }
}
findWord('tapioka', 'o');

// 39, 標準入力
// PHPファイルはコマンドラインから実行してください。
// 仕様
// 「あなたの名前を教えてください。」出力
// ↓
// 入力 ex) Micael
// ↓
// 「Micaelさん、あなたの年齢は何歳ですか？」出力
// ↓
// 入力
// ↓
// 「Micaelさん、ご登録ありがとうございます！」出力
// ↓
// プログラム終了

function registration() {
    $name = inputName();
    $age = inputAge($name);
    show($name, $age);
}

function inputName() {
    echo 'あなたの名前を教えてください' . PHP_EOL;
    $name = trim(fgets(STDIN));
    if (mb_strlen($name) > 10 || $name === '') {
        return inputName();
    }
    return $name;
}

function inputAge($name) {
    echo $name . "さん、あなたの年齢は何歳ですか？" .PHP_EOL;
    $age = trim(fgets(STDIN));
    if (!is_numeric($age) || $age === '') {
         return inputAge($name);
    }
    return $age;
}

function show($name, $age) {
    echo $name . "さん、ご登録ありがとうございます！" . PHP_EOL;
    echo '名前：' . $name . '、' . '年齢：' . $age;
}

registration();


// 41
// $x = "abcaあいう"; と宣言する
// 「あいう」という文字のみを切り抜いて表示してください

$x = "abcaあいう";
echo substr($x, 4) . PHP_EOL;

// 42
// 次の配列を宣言する
// $array1 = array('あ', 'い', 'う', 'え', 'お');
// 降順にソートして出力してください
// ex) おえういあ

$array1 = array('あ', 'い', 'う', 'え', 'お');
rsort($array1);
foreach ($array1 as $array) {
    echo $array;
}

echo PHP_EOL;

// 43
// 42の機能を関数にしてください

$array1 = array('あ', 'い', 'う', 'え', 'お');

function reverse(&$array1) {
    return rsort($array1);

}

reverse($array1);

// 44
// 次のソースコードの関数内を埋めて、2と表示されるソースコードを作成しなさい
// 元の処理の改変は行わないこと

$number = 1;

function add_number($number){
    global $number;
    $number = $number + 1;
    return;
}
add_number($number);
echo $number;

//global変数はあまり可読性はよくない。
//また、間違えて上書きしてしまうリスクも大きいので、あまり使わない方が良い。

// 45
// 1,2,3,4 ... 10と出力できるように関数内を埋めてください
// 元の処理の書き換えは行わず// 内に処理を書いていくこと
//

$number = 0;

function count_up($number){
    global $number;
    $number = $number + 1;
    return $number;
}
for($i = 0; $i < 10; $i ++){
    echo count_up($number). PHP_EOL;
}


// 46 外部ファイル
// "Hello World"と出力するファイルを作成してください。
// index.phpというファイルを作成し、先ほど作成したファイルを読み込んで、出力してください。

require('hello.php');

// 47
// phpinfo関数を使用し、PHPの情報を確認してください。

phpinfo();

//ローカルに開発環境を作成するときに使用することがある。

// 48
// 日時の関数を利用し、
// 現在時間のUNIX タイムスタンプを表示しなさい。
// 2017/08/04 13:44:41だと、次のように表示される
// 1501821881

echo time() . PHP_EOL;

// 49
// 年月日 時:分:秒で表示しなさい
// ex) 2017/8/4 13:44:41

// $date = time();
// echo date('Y/m/d H:i:s', $date) . PHP_EOL;

echo date('Y/m/d H:i:s');

// 50
// 2017-01-01 00:00:00をUNIX タイムスタンプ形式に変更しなさい
// echo date('Y-m-d H:i:s', strtotime("2017-01-01")) . PHP_EOL;

echo strtotime("2017-01-01") . PHP_EOL;

// 51
// 次の変数を宣言しなさい
// $array = array("g", "M", "g" ,"r", "g", "g" ".", "b", "g", "e", "g", "a", "g", "n");
// ループで文字連結しなさい。
// 文字がgの場合は、処理をスキップさせること。

$array = array("g", "M", "g" ,"r", "g", "g", ".", "b", "g", "e", "g", "a", "g", "n");
$word = '';
foreach ($array as $str) {
    if($str === "g") {
        continue;
    }
    $word .= $str;
}

echo $word;

// 52
// 連想配列を宣言しなさい
// first_name : joe
// last_name : jonathan
// age : 12
$introduce = array('first_name' => 'joe', 'last_name' => 'jonathan', 'age' => 12);

// 53
// 52の連想配列を使用し、次のように出力しなさい
// name : joe jonathan
// age : 12

echo "name:" . $introduce['first_name'] . " " . $introduce['last_name'] . PHP_EOL;
echo "age:" . $introduce['age'] . PHP_EOL;

// 54
// 53の続き、
// 連想配列の中身を追加し、表示しなさい
// favorite => spiderman
// 追加した配列は次のように表示される
// name : joe jonathan
// age : 12
// favorite : spiderman

$introduce['favorite'] = "spiderman";

echo "name:" . $introduce['first_name'] . " " . $introduce['last_name'] . PHP_EOL;
echo "age:" . $introduce['age'] . PHP_EOL;
echo "favorite:" . $introduce['favorite'] . PHP_EOL;

// 55
// 54の続き、
// ageとfavoriteの中身を次のように書き換え,表示しなさい
// age => 23
// favorite => music

$introduce['age'] = 23;
$introduce['favorite'] = "music";
echo $introduce['age'] . PHP_EOL;
echo $introduce['favorite'] . PHP_EOL;

// 56
// 55の続き、
// 54の連想配列を多次元連想配列としなさい。
// 次の情報で配列追加すること
// first_name => kelly
// last_name => clarkson
// age => 35
// favorite => singing

$introduce = array(
    array('first_name' => 'joe', 'last_name' => 'jonathan', 'age' => 23, 'favorite' => 'music'),
    array('first_name' => 'kelly', 'last_name' => 'clarkson', 'age' => 35, 'favorite' => 'singing'),

);

// 57
// 56の続き
// foreach文、for文を使って多次元配列を出力しなさい
// ex)
// 1人目
// name : joe jonathan
// age : 23
// favorite : music
// 2人目
// name : kelly clarkson
// age : 35
// favorite : singing

foreach($introduce as $key) {
    foreach($key as $value) {
        echo $value . PHP_EOL;
    }
}

for($i = 0; $i < count($introduce); $i ++) {
    for ($j = 0; $j < count($introduce[$i]); $j++)
        print_r(array_values($introduce[$i]));
}

// 58
// Memberというクラスを作成しなさい。
// 名前というmember変数を持つことができる。
// registというメソッドで名前を設定し、
// showというメソッドでセットされた名前を出力する機能を作りなさい。
// 出力例 山田太郎さんです。
// Memberクラスのインスタンスを生成し、registメソッドで名前設定後、
// showメソッドで名前を出力しなさい。

class Member {
    public $name;
    public function regist ($name){
        $this->name = $name;
    }
    public function show() {
        echo $this->name . PHP_EOL;
    }
}

$member1 = new Member();
$member1->regist("山田太郎");
$member1->show();

// 59
// 58の続き、
// Memberクラスを改修する
// Memberというクラスは名前と年齢を持つ事ができる。
// registというメソッドで名前と年齢を設定し、
// showというメソッドでセットされた名前と年齢を出力する機能を作れ
// 出力例　山田太郎さんは１１歳です。
// Memberクラスのインスタンスを生成し、registメソッドを使用し登録。
// その後showメソッドを使用して出力しなさい。

class Member {
    public $name;
    public $age;
    public function regist ($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function show() {
        echo $this->name . "さんは" . $this->age . "歳です。" . PHP_EOL;

    }
}

$member1 = new Member();
$member1->regist("山田太郎", 11);
$member1->show();

// 60
// 59の続き、
// Memberクラスを改修する
// Memberというクラスは名前と年齢を持つ事ができる。
// setNameというメソッドで名前を設定する。
// setAgeというメソッドで年齢を設定する。
// showというメソッドでセットされた名前を出力する機能を作成しなさい。
// 出力例　山田太郎さんは１１歳です。

class Member {
    public $name;
    public $age;
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function show() {
        echo $this->name . "さんは" . $this->age . "歳です。" . PHP_EOL;

    }
}

$member1 = new Member();
$member1->setName("山田太郎");
$member1->setAge(11);
$member1->show();

// 61
// 60の続き、
// 3人の情報を持ちたい
// Memberクラスの配列を作りなさい。
// それぞれの名前、年齢はは適当に入力すること

class Member {
    public $name;
    public $age;
    public function setName($name) {
        $this->name = $name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function show() {
        echo $this->name . "さんは" . $this->age . "歳です。" . PHP_EOL;
    }
}

$tanaka = new Member();
$tanaka->setName("田中太郎");
$tanaka->setAge(11);
$tanaka->show();

$members = array();
$members[] = $tanaka;

// 62
// 61の続き、
// 名前と年齢をコンストラクターで登録するMemberクラスを作成し、インスタンス生成しなさい。
// showメソッドで出力結果を確認すること

class Member {
    public $name;
    public $age;
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function show() {
        echo $this->name . "さんは" . $this->age . "歳です。" . PHP_EOL;
    }
}

$member1 = new Member("山田太郎", 11);
$member1->show();

// 63
// 次のクラスをカプセル化し、$languageはアクセサメソッドからのみ、代入・参照できる様に修正しなさい


class HumanBase {
  private $human_count;
  private $language = "Japanese";

  public function setLaunguage($language) {
      $this->language = $language;
  }

  public function getLanuguage() {
      return $this->language;
  }
}

// 64
// 63の続き、
// HumanBaseクラスのインスタンスを生成した際にインスタンスの生成回数を追加し、
// インスタンスを生成した回数がわかる様にしなさい
// 回数はコンストラクタ内で行うようにし、
// インスタンスが生成された回数は、クラスの外から参照できるようにすること
// $human_countをクラス変数として書き換えることで実現できる

class HumanBase {
    public static $human_count = 0;
    private $language = "Japanese";

    public function __construct() {
        self::$human_count++;
    }

    public function setLaunguage($language) {
        $this->language = $language;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getName() {
        return $this->name;
    }
}

// 65
// 64の続き、
// HumanBaseクラスを継承する、Humanクラスを作成しなさい
// 作成後、64で実行していたHumanBaseクラスのインスタンス生成で実行していた処理を
// Humanクラスに置き換えなさい

class Human extends HumanBase {
    public function _construct() {
        self::$human_count++;
    }
}

echo Human::$human_count;

// 66
// 65の続き、
// Humanクラスのインスタンス変数に$first_name, $last_name, $ageを追加し、
// アクセサメソッドも追加しなさい
// カプセル化を想定した記述方法とすること
// 実装後、2名分のインスタンス生成、データ設定、データ出力を実行すること

class Human extends HumanBase {
    private $first_name;
    private $last_name;
    private $age;

    public function __construct() {
        self::$human_count++;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }
    public function getFirstName() {
        return $this->first_name;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }
    public function getLastName() {
        return $this->last_name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

$human1 = new Human();
$human1->setFirstName('太郎');
$human1->setLastName('山田');
$human1->setAge(11);
echo $human1->getFirstName() . $human1->getLastName();
echo $human1->getAge() . '歳';

$human2 = new Human();
$human2->setFirstName('宮川');
$human2->setLastName('大輔');
$human2->setAge(47);
echo $human2->getFirstName() . $human2->getLastName();
echo $human2->getAge() . '歳';


// 67
// 66の続き、
// Humanクラスのメソッドに"$first_name-$last_name"の形式で値を取得できる
// getFullNameメソッドを追加し、表示させなさい

class Human extends HumanBase {
    private $first_name;
    private $last_name;
    private $age;

    public function __construct() {
        self::$human_count++;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }
    public function getFirstName() {
        return $this->first_name;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }
    public function getLastName() {
        return $this->last_name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setFullName($first_name, $last_name) {
        $this->getFirstName($first_name);
        $this->getLastName($last_name);
    }

    public function getFullName() {
    return $this->getFirstName() . '-' . $this->getLastName();
    }
}

$human1 = new Human();
$human1->setFullName('太郎', '山田');
echo $human1->getFullName();

$human2 = new Human();
$human2->setFullName('大輔', '宮川');
echo $human2->getFullName();


// 68
// 67の続き、
// 仕様変更により、$middle_nameの考慮が必要になった
// Humanクラスに$middle_nameを追加し、必要な修正を加えなさい
// なお、フルネームの形式は"$first_name-$middle_name-$last_name"とするが、
// $middle_nameが無い場合は変更前の"$first_name-$last_name"の形式で出力する
// 実装後、生成している2名の内1名だけ$middle_nameを設定せよ

class Human extends HumanBase {
    private $first_name;
    private $middle_name;
    private $last_name;
    private $age;

    public function __construct() {
        self::$human_count++;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }
    public function getFirstName() {
        return $this->first_name;
    }

    public function setMiddleName($middle_name) {
        $this->middle_name = $middle_name;
    }

    public function getMiddleName() {
        return $this->middle_name;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }
    public function getLastName() {
        return $this->last_name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setFullName($first_name, $last_name, $middle_name=null) {
        $this->setFirstName($first_name);
        $this->setMiddleName($middle_name);
        $this->setLastName($last_name);
    }

    public function getFullName() {
        if ($this->middle_name == '') {
            return $this->getfirstName() . '-' . $this->getLastName();
        } else {
            return $this->getfirstName() . '-' . $this->getMiddleName() . '-' . $this->getLastName();
        }
    }
}

$human1 = new Human();
$human1->setFullName('太郎', '山田', 'ぴえん');
echo $human1->getFullName();

$human2 = new Human();
$human2->setFullName('大輔','宮川', '');
echo $human2->getFullName();

//なるべく定数を使用してプログラムを書けば、もしプログラムの仕様が変更になっても定数を修正するだけで済むので、修正箇所が少なく済む。

//70 ファイル関数
// 5つの果物の名前(string型)の要素をもつ配列を宣言してください。
// カレントディレクトリに、配列の中身を１行ずつ記載したCSVファイルを出力してください。
// CSVのファイル名はfruits.csvとします。ex)
// $fruits = array("apple", "banana", "orange); なら
// CSVファイルの中身は
// apple
// banana
// orange
$fruits = array("apple", "banana", "orange");
$file_name = "./fruits.csv";
$handle = fopen($file_name, "w+");
foreach($fruits as $fruit) {
  fwrite($handle, $fruit . "\n");
}

//もしくは↓
if (file_exists($file_name)) {
  touch("fruits.csv");
}
if ($handle) {
  fputcsv($file, $fruits);
}
fclose($handle);

//71
// 70.の続き
// csvファイルの出力場所を下記パスに変更してください。
// ./csv/dev/fruits/
// その際に、上記パスのディレクトリが存在しない場合は、再帰的にディレクトリを作成する処理を追加してください。

chmod($file_name, 0755);
$file_path = "./csv/dev/fruits/fruits.csv";
//1つ上の階層を取得↓
$dir = dirname($file_path);
//フルパスからファイル名だけを取得↓
$filename = basename($file_path);

if(!file_exists($dir)) {
  mkdir($dir, 0755, true);
} 
rename("fruits.csv", "./csv/dev/fruits/fruits.csv");

//72
// 71.の続き
// 71で出力したcsvファイルに、それぞれ金額と在庫数の項目を追加したい。
// 71で出力したcsvファイルを読み込んで、金額と在庫数の項目を追加してください。
// なお金額は、100,200,300のうちのどれか、在庫数は999個以下のランダムな数字とする。
// ex)
// apple,100, 345
// banana,200,247
// orange,300,987

$file_path = "./csv/dev/fruits/fruits.csv";
$handle = fopen($file_path, "r+");
$amounts = [100, 200, 300];

while($row = fgets($handle)) {
  $price = array_rand($amounts);
  $stock = mt_rand(1, 999);
  $line = "\n" . '---------------' . "\n";
  $fruit = str_replace($row, '', $fruit);
  $new_line = $fruit . ', ' . $price . ', ' . $stock . ', ' . $line;
  $handle2 = fopen($dir . "/new_fruits.csv", "a+");
  fwrite($handle2, $new_line);
  fclose($handle2);
}

fclose($handle);

// //73
// 72の続き
// 出力するCSVファイルの1行目に出力項目をわかりやすいように追加したい。
// １行目に「name,price,stock」が表示されるように72のソースを改修してください。
// ex)
// name,price,stock
// apple,100, 345
// banana,200,247
// orange,300,987
// 出力するCSVのファイル名を現在時刻にしてください。
// ex)
// 201904041609.csv

$file_path = "./csv/dev/fruits/fruits.csv";
$amounts = [100, 200, 300];

$handle2 = fopen($dir . "/new_fruits.csv", "a+");
$header = "name,price,stock" . "\n";
fwrite($handle2, $header);
fclose($handle2);

$handle = fopen($file_path, "r+");
while($row = fgets($handle)) {
  $handle2 = fopen($dir . "/new_fruits.csv", "a+");
  $price = array_rand($amounts);
  $stock = mt_rand(1, 999);
  $line = "\n" . '---------------' . "\n";
  $fruit = str_replace("\n", '', $row);
  $new_line = $fruit . ', ' . $price . ', ' . $stock . ', ' . $line;
  fwrite($handle2, $new_line);
  fclose($handle2);
}
fclose($handle);
$date = date('YmdHi');
rename($dir . "/new_fruits.csv", $dir . "/{$date}.csv");

// //74
// 1-100までのidにそれぞれユニークなIDを紐つけたCSVファイルを出力したい。
// ユニークIDの仕様は、ランダムな数字6桁 + 一意なID13桁とする（計19桁）下記パスに出力してください。
// ./csv/dev/unique/
// 出力するファイル名はuniqueId.csvとする。
// ex)
// id, uniqueId
// 1,1057225cd930000d762
// 2,9561415cd930000d785
// ~
$file_path = "./csv/dev/unique/uniqueId.csv";
$dir = dirname($file_path);
$filename = basename($file_path);

if(!file_exists($dir)) {
  mkdir($dir, 0755, true);
} 

$handle = fopen($file_path, "a+");
$header = "id, uniqueId" . "\n";
fwrite($handle, $header);
fclose($handle);

$row = 1;
while($row <= 100) {
  $number = mt_rand(100000, 999999);
  $uniqueId = uniqid($number);
  $handle = fopen($file_path, "a+");
  $ID_line = $row . ', ' . $uniqueId . "\n";
  fwrite($handle, $ID_line);
  fclose($handle);
  $row++;
}

// //75　ファイル分割
// 74の続き
// 74で出力したcsvファイルを読みこんで、
// 10個のファイルに分割して出力してください。
// なお、分割ファイルのファイル名は、それぞれuniqueId_1.php ~ のように連番とすること

$handle = fopen($file_path, "r+");

$file_number = 1;
while($file_number <= 10) {
  $split_path = $dir . "uniqueId_" . $file_number . ".csv";
  if(file_exists($split_path)) {
    unlink($split_path);
  }
  $new_handle = fopen($dir . "/uniqueId_" . $file_number . ".csv", "a+");
  $header = "id, uniqueId" . "\n";
  fwrite($new_handle, $header);
  fclose($new_handle);
  $file_number++;
}

$handle = fopen($file_path, "r+");
//ファイルポインタを一行すすめる
fgets($handle);
$row = 0;
while($line = fgets($handle)){
  $number = $row % 10 + 1;
  if ($line == "id, uniqueId". "\n"){
    continue;
  }

  if ($row === 0){
    continue;
  }
    $new_handle = fopen($dir . "/uniqueId_" . $number . ".csv", "a+");
    fwrite($new_handle, $line);
    fclose($new_handle);
  $row++;
}

fclose($handle);

//76
// try catch
// 1- 10 までのランダムな数字を変数に代入してください。
// もし生成した数字が奇数なら例外を発生させ、
// 「奇数です」と例外メッセージを出力してください。

function makeNumber() {
  try {
    $number = mt_rand(1, 10);
    if($number % 2 === 1) {
      throw new Exception('奇数です');
    }
  } catch(Exception $e) {
    echo $e->getMessage() .  PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
  }
}

makeNumber();

//77
// 例外が発生するしないに限らず、「例外処理を終了します」と出力するように実装してください。
// (finallyを利用して

function makeNumber() {
  try {
    $number = mt_rand(1, 10);
    if($number % 2 === 1) {
      throw new Exception('奇数です');
    }
  } catch(Exception $e) {
    echo $e->getMessage() .  PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
  } finally {
    echo "例外処理を終了します" .PHP_EOL;
  }
}

makeNumber();

//78
// exceptionクラスを継承した独自の例外クラスを宣言してください。
// 独自の例外クラスを使用して、エラーメッセージを出力してください。

function makeNumber() {
  try {
    $number = mt_rand(1, 10);
    if($number % 2 === 1) {
      throw new Exception('奇数です');
    }
  } catch(Exception $e) {
    echo $e->getMessage() .  PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
  } finally {
    echo "例外処理を終了します" .PHP_EOL;
  }
}

makeNumber();

class OddException extends Exception {
}

function number2() {
  try {
    $number = mt_rand(1, 10);
    if($number > 5) {
      throw new OddException('5より大きい数です');
    }
  } catch(OddException $e) {
    echo  $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
  } finally {
    echo "例外処理を終了します" . PHP_EOL;
  }
}
number2();

//79
// コマンドラインからphpファイル実行時、環境に合わせて出力内容を変えたい。
// 主な環境は、dev, stg, master の3つとする。
// コマンドラインに入力した環境変数を取得し、その環境変数を出力するような処理を書いてください。
// なお、実行コマンドは下記の通りとする。
// ex) ENV=stg php index.php
#出力
// stg

$array = getenv();
echo $array["ENV"] . PHP_EOL;

//80
// 環境変数に従って、下記パスにcsvファイルを出力するようにしてください。
// もしディレクトリが存在しない場合は、再帰的に作成するような処理を書くこと。
// ｀｀｀./csv/{環境変数}/ファイル名｀｀｀

$file_path = "./csv/". $array["ENV"] . "/newfile.csv";
$dir = dirname($file_path);
$filename = basename($file_path);

if(!file_exists($dir)) {
  mkdir($dir);
} 
$handle = fopen($filename, "w+");

//81
// ｀｀｀http://localhost:1234｀｀｀
// こちらのURLにアクセスできるようなビルトインウェブサーバーのコマンドを書いてください。

php -S localhost:1234

//82
// 下記パスのファイル名のみを取得し、出力してください。
// "/app/doc/test/sample/dev/test.php"
// 期待値
// test.php

$file_path = "/app/doc/test/sample/dev/test.php";
$filename = basename($file_path);
echo $filename;

//83
// 下記パスのディレクトリのパスのみを取得し、出力してください。
// "/app/doc/test/sample/dev/test.php"
// 期待値
// /app/doc/test/sample/dev

$file_path = "/app/doc/test/sample/dev/test.php";
$dir = dirname($file_path);
echo $dir;

//84
// $array = array(
//        "a" => 1,
//        "b" => 2,
//    );
// 上記の配列をjson化して出力してください。
// またjson化したものをデコードしてください。

$array = array(
  "a" => 1,
  "b" => 2,
);

$jsonarray = json_encode($array);
echo $jsonarray;

$decodearray = json_decode($jsonarray, true);
var_dump($decodearray);

//85
// eyJtZXNzYWdlIjoiQ29uZ3JhdHVsYXRpb25zISJ9
// 上記は、base64でエンコードされた文字列です。
// base64でデコードし、さらにjsonをデコードされた内容をvar_dump()で出力してください。

$date = "eyJtZXNzYWdlIjoiQ29uZ3JhdHVsYXRpb25zISJ9";
$basedecode = base64_decode($date);
echo $basedecode;
$jsondecode = json_decode($basedecode, true);
var_dump($jsondecode);

//86
// "Hello World"をhash化して、出力してください。

$hashword = hash("md2", "Hello World");
echo $hashword;

//87
// コマンドラインからPHPファイルを実行する。
// コマンドラインの引数から、名前と年齢(int)を渡す。
// 「{string}さん、{int}歳の誕生日おめでとう！"」
// と出力するようにしてください。
// なお、引数のキーは任意とし、期待の型ではないときは、
// 「引数が不正です」と出力し、プログラムを終了させるようにしてください。

$name = $argv[1];
$age = $argv[2];
if(!is_string($name) || !is_numeric($age)) {
  exit();
}
echo $name . "さん、" . $age . "歳の誕生日おめでとう！";

//88
//無名関数
// $greet　という変数に、「Hello, World!」と出力する無名関数を代入してください

$greet = function() {
  echo("Hello, World!" . PHP_EOL);
};

$greet();

//89
// $nameという変数に、名前を意味する値を代入し、
// $greetという変数に$nameを渡して「Hello, {$name}!」と出力するような無名関数を代入してください。

$name = "Mendy";
$greet = function() use($name) {
  echo("Hello, {$name}!" . PHP_EOL);
};

$greet();


