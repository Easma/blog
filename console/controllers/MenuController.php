<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/17 0017
 * Time: 20:05
 */
namespace console\controllers;


use yii\console\Controller;

class MenuController extends Controller{

    public function actionGet($user){
        $members = [
            0 => '阳憶松',
            1 => '林锦华',
            2 => '马英豪',
            3 => '吴俊伟',
        ];
        $weights = [
            0 => 1,
            1 => 1,
            2 => 1,
            3 => 2,
        ];
        $menus = [
            '排骨米饭' => [
                0 => 1,
                1 => 1,
                2 => 1,
                3 => 2,
            ],
            '沙县小吃' => [
                0 => 2,
                1 => 1,
                2 => 1,
                3 => 1,
            ],
            '浏阳蒸菜' => [
                0 => 2,
                1 => 1,
                2 => 2,
                3 => 1,
            ],
            '常德牛肉粉' => [
                0 => 2,
                1 => 1,
                2 => 1,
                3 => 2,
            ],
            '重庆小面' => [
                0 => 2,
                1 => 1,
                2 => 1,
                3 => 1,
            ],
            '香煎包' => [
                0 => 1,
                1 => 2,
                2 => 1,
                3 => 1,
            ],
            '牛肉拉面' => [
                0 => 1,
                1 => 1,
                2 => 1,
                3 => 1,
            ],
            '麻辣香锅' => [
                0 => 1,
                1 => 1,
                2 => 1,
                3 => 1,
            ],
            '下馆子' => [
                0 => 1,
                1 => 1,
                2 => 1,
                3 => 1,
            ]
        ];

        $info=[];
        if(isset($members[$user])){
            $info['weight'] = $weights[$user] * 2;
            $info['user'] = $members[$user];
            $info['key'] = $user;
        }else{
            $this->stdout('POP组不存在这样的沙比');
            return;
        }

        $total_number = 0;
        $menu_info = [];
        foreach ($menus as $menu=>$rows){
            $number = 0;
            foreach ($rows as $key => $row){
                if($key == $user){
                    $number += $row * $info['weight'] * 100;
                }else{
                    $number += $row * 100;
                }
            }
            $total_number += $number;
            $menu_info[$menu] = $number;
        }

        $number = mt_rand(1,$total_number);
        $sum = 0;
        $str = '菜单列表:['.PHP_EOL;
        foreach ($menu_info as $menu=>$num){
            $str .= $menu.' (权重:'.$num.') '.PHP_EOL;
        }
        $str .= ']'.PHP_EOL;
        $this->stdout($str);
        foreach ($menu_info as $menu=>$num){
            $sum += $num;
            if($number < $sum){
                $this->stdout('今天权重较高的沙比是：'.$info['user'].' 今天要吃：['.$menu.']');
                break;
            }
        }
    }
}