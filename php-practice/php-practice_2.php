<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します' . "\n\n";
for ($i = 1; $i <= 100; $i ++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo 'tic-tac' . "\n";
    } elseif ($i % 4 === 0) {
        echo 'tic' . "\n";
    } elseif ($i % 5 === 0) {
        echo 'tac' . "\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列

//問題１
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。' . "\n";

//問題２
foreach ($personalInfos as $number => $content) {
    echo 1 + $number . '番目の' . $content['name'] . 'のメールアドレスは' . $content['mail'] . 'で、電話番号は' . $content['tel'] . 'です。' . "\n";
}

//問題３
$ageList=[25,30,18];
foreach ($personalInfos as $number => $content) {
    $personalInfos[$number]['age'] = $ageList[$number];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function IdName()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。' . "\n";
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');
$yamada->IdName();

//Q3 メソッドを定義しない場合
$yamada = new Student(120, '山田');
echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';

// Q4 オブジェクト-2(attend()の書き換え)
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function IdName()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。' . "\n";
    }

    public function attend($class)
    {
        echo $this->studentName . 'は' . $class . 'の授業に参加しました。学籍番号：' . $this->studentId . "\n";
    }
}

$yamada = new Student(120, '山田');
$yamada->IdName();
$yamada->attend('PHP');


// Q5 定義済みクラス
//問題１
$date = new Datetime();
$date->modify('-1 month');
echo $date->format('Y-m-d') . "\n";

//問題２
$today = new Datetime();
$pastDay = new Datetime('1992-4-25');
$interval = $pastDay->diff($today);
echo 'あの日から' . $interval->format('%a') . '日経過しました。';
