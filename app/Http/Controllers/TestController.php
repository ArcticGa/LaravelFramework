<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //Примеры
    public function lessonOne() {
        return 'Моя первая программа';
    }
    public function lessonTwo(Request $request) {
        $data = [ ];
        if($request->has('text'))
            $data['text'] = $request->input('text');
        $data['token'] = $request->input('token', 'none-token');
        return $data;
    }

    //Первый блок заданий
    //Задание 1
    public function loveChrt()
    {
        return "Я люблю учиться в ЧРТ";
    }

    //Задание 2
    public function nameIvan(Request $request)
    {
        $data = [];
        if($request->has('name'))
        {
            $data['name'] = $request->input('name');
            return "Меня зовут ".$data['name'];
        }
    }

    //Задание 3
    public function nameAndFruits(Request $request)
    {
        $data = [];
        if($request->has('name', 'apple'))
        {
            $data['name'] = $request->input('name');
            $data['apple'] = $request->input('apple');
            return "Меня зовут ".$data['name']." и я люблю есть ".$data['apple'];
        }
    }

    //Задание 4
    public function sumInProg()
    {
        $data=['num1' => 2, 'num2' => 5];
        return "Сумма ".$data['num1']." и ".$data['num2']." = ".$data['num1']+$data['num2'];
    }

    //Задание 5
    public function sum(Request $request)
    {
        $data = [];
        if($request->has('numone', 'numtwo'))
        {
            $data['num1'] = $request->input('numone');
            $data['num2'] = $request->input('numtwo');
        }
        return "Сумма ".$data['num1']." и ".$data['num2']." = ".$data['num1']+$data['num2'];
    }

    //Задание 6
    public function cipher(Request $request)
    {
        $data = [];
        if($request->has('cipher'))
        {
            $data['cipher'] = $request->input('cipher');
            if($data['cipher'] == 'keyOneTest')
                return "Я взломал шифр";
            else
                return "Нет доступа";
        }
    }



    //Второй блок заданий
    //Пример
    public function lessonTemplateOne($detach) {
        $detachment = 'Нет отряда';
        switch($detach) {
            case 1: $detachment = 'Отряд 287'; break;
            case 2: $detachment = 'Отряд 54'; break;
            case 3: $detachment = 'Отряд 925'; break;
            case 4: $detachment = 'Отряд 9'; break;
            default: $detachment = '-';
        }
        $user = [];
        $user[] = 'Иванов Иван Иванович';
        $user[] = 'Петров Аркадий Иванович';
        $user[] = 'Люлькин Акакий Романович';

        return view('template', compact('detachment', 'user'));
    }

    //Задание 1 и 2 в одной функции
    public function politicConf() {

        $organization = 'ПрактикаЛаравелОрг';

        return view('politic', compact('organization'));
    }

    //Задание 3
    public function favoriteString($favorite) {
        return view('favoriteString', compact('favorite'));
    }

    //Задание 4, 5, 6
    public function array() {
        $users = [];
        $users[] = 'ДжоДжо Чуббака';
        $users[] = 'Джорно Джованна';
        $users[] = 'Хочу пиццы';

        $items = [];
        $items[] = 'Плюшевый мишка';
        $items[] = 'Пк';
        $items[] = 'Стул';

        $seasons = [1, 2, 3 ,4, 5];

        return view('array', compact('users', 'items', 'seasons'));
    }
}
