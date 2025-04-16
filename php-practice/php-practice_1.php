<?php
// Q1 変数と文字列
$name = '中井';
echo '私の名前は「' . $name . '」です。' . "\n";

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
$num /= 2;
echo $num . "\n";

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です。' . "\n";


// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。' . "\n";
} else {
    echo 'どちらでもありません。' . "\n";
}

// Q5 条件分岐-2 三項演算子
$age = 7;
echo $age >= 18 ? '成人です。' . "\n" : '未成年です。' . "\n";

// Q6 配列
$array = ['東京都','埼玉県','神奈川県','栃木県','千葉県','茨城県','山梨県','群馬県'];
echo $array[3] . 'と' . $array[4] . 'は関東地方の都道府県です。' . "\n";

//Q6（東京を出力したい場合は何を指定すればいいか。）→インデックス番号を0に指定する。
echo $array[0];



// Q7 連想配列-1
$kanto = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];
foreach ($kanto as $city) {
    echo $city . "\n";
}

// Q8 連想配列-2      
foreach ($kanto as $prefecture => $city) {
    if ($prefecture === '埼玉県') {
        echo $prefecture . 'の県庁所在地は、' . $city . 'です。' . "\n";
    }
}

// Q9 連想配列-3        
$kanto['愛知県'] = '名古屋市';
$kanto['大阪府'] = '大阪市';

foreach ($kanto as $prefecture => $city) {
    if ($prefecture !== '愛知県' && $prefecture !== '大阪府') {
        echo $prefecture . 'の県庁所在地は' . $city . 'です。' . "\n";
    } else {
        echo $prefecture . 'は関東地方ではありません。' . "\n";
    }
}


// Q10 関数-1
function hello($name){
    return $name . 'さん、こんにちは。' . "\n";
}

echo hello('金谷');
echo hello('安藤');

// Q11 関数-2
function calcTaxlnPrice($taxExPrice){
    return $taxExPrice * 1.1;
}

$price = 1000;
$taxlnPrice = calcTaxlnPrice($price);
echo $price . '円の商品の税込み価格は' . $taxlnPrice . '円です。';

// Q12 関数とif文
function distinguishNum($num){
    if ($num % 2 === 0) {
        return $num . 'は偶数です。' . "\n";
    } else {
        return $num . 'は奇数です。' . "\n";
    }    
}

echo distinguishNum(11);
echo distinguishNum(24);


// Q13 関数とswitch文
function evaluateGrade($grade){
    switch ($grade) {

        case 'A':
        case 'B':
            return '合格です。' . "\n";
            break;
      
        case 'C':
            return '合格ですが追加課題があります。' . "\n";
            break;
      
        case 'D':
            return '不合格です。' . "\n";
            break;
      
        default:
            return '判定不明です。講師に問いあわせてください' . "\n";
            break;
    }
}

echo evaluateGrade('A');
echo evaluateGrade('L');
