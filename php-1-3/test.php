<?php
    print "おはよう";
    print "こんにちは";
    print "こんばんは";
?>

<?php
    $hensuu = "何らかのデータ";
    print $hensuu;
?>

<?php
    $ichiniti_no_zikan = 24;
    $ichizikan_no_hun = 60;
    $ippun_no_byou = 60;

    $ichiniti_no_byousuu = $ichiniti_no_zikan * $ichizikan_no_hun * $ippun_no_byou;

    print $ichiniti_no_byousuu;
?>

<?php
    $hensuu = "別の何か";
    print $hensuu;
?>

<?php
    $num = 2;
    var_dump($num);
?>

<?php
    // 10 > 5 は正しいので、true と評価される。 if (true) となるので { } の中が実行される
    if (10 > 5) {
        print 'ここだけ表示される' . PHP_EOL;
    }

    // 10 <= 5 は間違いなので、 false と評価される。if (false) となるので { } の中は実行されない
    if (10 <= 5) {
        print 'ここには絶対来ない' . PHP_EOL;
    }
?>