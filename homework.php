<?php

    echo '<h3>Домашнее задание №6</h3>';
    echo 'от 06.02.2017'.'<hr>';
    //Main - Сумма аргументов
    function summ () {
        $args = func_get_args ();
        $summ = 0;
        foreach ($args as $value)
            $summ += $value;
        return $summ;
    }

    $result = summ(1,5,7,2,8);
    print_r ($result);
    echo '<br />';

    //1.

      function getCommonWords($a, $b) {
        $arr_a = explode(' ', $a);
        $arr_b = explode(' ', $b);
/*
        $j=0;
        if (count($arr_a) > count ($arr_b)) {
            $m = count ($arr_a);
        } else {
            $m = count ($arr_b);
        }

        $same = array();
        for ($i = 0; $i < $m; $i += 1) {
            foreach ($arr_b as $value) {
                if ($arr_a[$i] == $value){
                    array_push ($same, $arr_a[$i]);
                }
            }
        }*/

       $same = array_intersect($arr_a, $arr_b);

       return $same;
    }

    $str1 = 'first second third';
    $str2 = 'first third fifth';
    $result = getCommonWords ($str1, $str2);
    echo 'Входная строка 1: '.$str1.'<br />';
    echo 'Входная строка 2: '.$str2.'<br />';
    echo 'Одинаковые элементы: ';
    var_export($result); // 0 => 'first', 1 => 'third'
    echo '<hr>';

    //9. Переворачивание строки
    function reverbe ($str) {
        $len = strlen ($str);
        $new_str = '';
        for ($i = 0; $i < $len; $i ++)
            $new_str = $str[$i].$new_str;
        return ($new_str);
    }
    $task = 'abcde';
    $result = reverbe ($task);
    echo 'Входная строка: '.$task.'<br />';
    echo 'Выходная строка: '.$result.'<br />';

    //12. Строка в обратном порядке

    function reverse ($a) {
        $arr_rev = array ();
        $mass = explode('. ', $a);
        foreach ($mass as $value) {
            //$array_push ($arr_norm, $value);
            array_unshift ($arr_rev, $value);
        }
        array_push ($arr_rev, ".");
        $str_rev = implode (". ", $arr_rev);
        $str_rev = substr ($str_rev, 2);
        return ($str_rev);
    }

    $string = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти. ';
    $result = reverse($string);
    echo '<b>Поменять предложения местами</b><br />';
    echo 'Исходная строка: '.$string.'<br />';
    echo 'Новая строка: '.$result.'<br />';
    echo '<hr>';


    //13. Количество разных слов в строке

    function num_fruits ($a, $b) {
        //$b = array();
        foreach ($b as $k => $value) {

            $kol_words = substr_count ($a, $value);
            echo '<em>'.$value.'</em>'.' - '.$kol_words.'<br />';
        }

    }

    $string = 'яблоко вишня вишня слива черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
    $words = array ('яблоко', 'черешня', 'груша', 'слива');
    echo '<b>'.'Количество слов в тексте :'.'</b>'.'<br />';
    $result = num_fruits($string, $words);
    echo '<hr>';

