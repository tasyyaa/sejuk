<?php
namespace App\Helpers;

class helpers
{
    public static function test($name){
        echo 'Hello Helper - My name is '.$name;
    }

    public static function idGenerator($model, $trow, $length = 5, $prefix){
        $data = $model::orderBy('id','item_name')->first();
        if(!$data){
           $og_length = $length;
           $last_number = '';
        } else {
            $code = substr($data->$trow, strlen($prefix)+1);
            $actual_last_number = ($code/1)*1;
            $increment_last_number = $actual_last_number+1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeroes = "";
        for($i=0;$i<$og_length;$i++){
            $zeroes.="0";
        }
        return $prefix.$zeroes.$last_number;
    }
}
?>
