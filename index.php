<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

function isCorrect($source)
{
    for($i = 0; $i < strlen($source); $i++)
    {
        $stack="";
        switch ($source[$i]) {
            case "(":
                if ($source[$i+1] == ")")
                {
                    $stack .= "1";
                }else
                {
                    $stack .= "0";
                }
                break;
            case "{":
            if ($source[$i+1] == "}")
            {
                $stack .= "1";
            }else
            {
                $stack .= "0";
            }
            break;
            case ")":
                if ($source[$i-1] == "(")
                {
                    $stack .= "1";
                }else
                {
                    $stack .= "0";
                }
                break;
            case "}":
                if ($source[$i-1] == "{")
                {
                    $stack .= "1";
                }else
                {
                    $stack .= "0";
                }
                break;
            case "[":
                if ($source[$i+1] == "]")
                {
                    $stack .= "1";
                }else
                {
                    $stack .= "0";
                }
                break;
            case "]":
                if ($source[$i-1] == "[")
                {
                    $stack .= "1";
                }else
                {
                    $stack .= "0";
                }
                break;

        }
        //echo $stack;
    }
    for ($i =0;$i<strlen($stack);$i++)
    {
        if ($stack[$i]== "1"  ){
            $result = true;
        }
        elseif($stack[$i]=="0")
            $result = false;
    }
    if ($stack == ""){
        $result = true;
    }
    if ($result == true){
        return true;
    }
    elseif ($result == false){
        return false;
    }
}
?>
</body>
</html>