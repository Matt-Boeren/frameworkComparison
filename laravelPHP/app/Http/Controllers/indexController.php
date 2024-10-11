<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    function showIndex(){
        $board = $this->generateBoard();
        return view('index', ['board' => $board]);
    }
    function generateBoard(){
        $tiles = array("S", "S", "S", "S", "W", "W", "W","W", "H", "H","H", "H", "B","B","B","O","O","O", "D");
        shuffle($tiles);
        $numbers = array("2", "3","3","4","4","5","5", "6","6","8","8","9","9","10","10","11","11","12");
        shuffle($numbers);
        $board = array();
        $numberIndex = 0;
        for($i=0; $i < count($tiles); $i++){
            if($tiles[$i] !== "D"){
                $board[] = array($tiles[$i], $numbers[$numberIndex]);
                $numberIndex++;
            }
            else{
                $board[] = array($tiles[$i], "");
            }
        }
        return $board;
    }
}
