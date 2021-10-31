<?php

namespace App\Traits;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


trait Generics{

    public function random_string ( $type = 'alnum', $len = 60 ){
        switch ( $type )
        {
            case 'alnum'	:
            case 'numeric'	:
            case 'nozero'	:

                switch ($type)
                {
                    case 'alnum'	:	$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        break;
                    case 'numeric'	:	$pool = '0123456789';
                        break;
                    case 'nozero'	:	$pool = '123456789';
                        break;
                }

                $str = '';
                $mdstr = md5 ( uniqid ( mt_rand () ) );
                $mdstrstrlen = strlen($mdstr);
                for ( $i=0; $i < $len; $i++ )
                {
                    $str .= substr ( $pool, mt_rand ( 0, strlen ( $pool ) -1 ), 1 );
                }
                return $str.substr($mdstr, 0, $mdstrstrlen/2);
                break;
            case 'unique' : return md5 ( uniqid ( mt_rand () ) );
                break;
        }
    }

    //create a unique id
    public function createUniqueId($table_name, $column){

        /*$unique_id = Controller::picker();*/
        $unique_id = $this->random_string();
        $unique_id = substr($unique_id, 0, strlen($unique_id)/2);

        //check for the database count from the database"unique_id"
        $rowcount = DB::table($table_name)->where($column, $unique_id)->count();

        if($rowcount == 0){

            if(empty($unique_id)){
                $this->createUniqueId($table_name, $column);
            }else{
                return $unique_id;
            }

        }else{
            $this->createUniqueId($table_name, $column);
        }

    }

    function hashPassword($password){
        return hash('sha256', md5($password));
    }

    function validateImage($acceptedFileType = ['jpeg','jpg','png','gif','webp'], $fileName = []){
        $errorMessage = [];
        if(count($fileName) > 0){
            foreach($fileName as $k => $eachFileName){
                $explodedFile = explode('.', $eachFileName);
                $fileLen = count($explodedFile);
                $fileExtention = $explodedFile[$fileLen - 1];
                if(!in_array($fileExtention, $acceptedFileType)){
                    $errorMessage[] = 'Image at position '.($k + 1).' must be of image type: '.implode(',', $acceptedFileType.'='.$fileExtention);
                }
            }
        }

        if(count($errorMessage) > 0){
            return [
                'status'=>false,
                'error'=>$errorMessage,
                'data'=>[]
            ];
        }
        return [
            'status'=>true,
            'error'=>'',
            'data'=>[]
        ];

    }

    function randomStringCreator ( $type = 'alnum', $len = 8 ){
        switch ( $type )
        {
            case 'alnum'	:
            case 'numeric'	:
            case 'nozero'	:

                switch ($type)
                {
                    case 'alnum'	:	$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        break;
                    case 'numeric'	:	$pool = '0123456789';
                        break;
                    case 'nozero'	:	$pool = '123456789';
                        break;
                }

                $str = '';
                for ( $i=0; $i < $len; $i++ )
                {
                    $str .= substr ( $pool, mt_rand ( 0, strlen ( $pool ) -1 ), 1 );
                }
                return $str;
                break;
            case 'unique' : return md5 ( uniqid ( mt_rand () ) );
                break;
        }
    }

    public function createUniqueId2($table_name, $column, $type = 'numeric', $len = 8){

        $unique_id = $this->randomStringCreator ( $type, $len);

        //check for the database count from the database"unique_id"
        $rowcount = DB::table($table_name)->where($column, $unique_id)->count();

        if($rowcount == 0){

            if(empty($unique_id)){
                $this->createUniqueId2($table_name, $column);
            }else{
                return $unique_id;
            }

        }else{
            $this->createUniqueId2($table_name, $column);
        }

    }

    //function that changes an associative array to an object
    function returnObject(array $array){
        return json_decode(json_encode($array));
    }

}