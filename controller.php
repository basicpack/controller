<?php
//Criado por Anderson Ismael
//21 de janeiro de 2019

function controller($name,$data=false){
    $str=ROOT.'controller/'.$name.'.php';
    $name2=explode('/',$name);
    $repoName=@$name2[0];
    $nameControllerName=@$name2[1];
    $str2=ROOT.'/controller/'.$nameControllerName.'.php';
    if(file_exists($str)){
        if(is_array($data)){
            extract($data);
        }
        return require_once($str);
    }elseif(file_exists($str2)){
        if(is_array($data)){
            extract($data);
        }
        return require_once($str2);
    }else{
        return false;
    }
}
