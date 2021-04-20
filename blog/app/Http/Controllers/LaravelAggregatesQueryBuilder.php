<?php
namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class LaravelAggregatesQueryBuilder extends Controller{
    //Counting (How man rows in your database table, it will count)
    //DB::table('users')->count();
    function aggregatesCount(){
        $result= DB::table('student_details')->count();
        return $result; 
    }

    //Maximum (Suppose in your database you need to know which roll is larger)
    //DB::table('users')->max('roll');
    function aggregatesMaximum(){
        $result= DB::table('student_details')->max('roll');
        return $result; 
    }

    //Manimum (Suppose in your database you need to know which roll is small)
    //DB::table('users')->min('roll');
    function aggregatesManimum(){
        $result= DB::table('student_details')->min('roll');
        return $result; 
    }

    //Average (Suppose in your database you need to know how much avarage roll)
    //DB::table('rolls')->avg('price');
    function aggregatesAverage(){
        $result= DB::table('student_details')->avg('roll');
        return $result; 
    }
 
    //Summation (Suppose in your database you need to know sum of all classes)
    //DB::table('rolls')->sum('price');
    function aggregatesSum(){
        $result= DB::table('student_details')->sum('class');
        return $result; 
    }
}