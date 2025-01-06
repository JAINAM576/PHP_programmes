<?php
function isPefect($num){
    $sum=0;
    for ($i=1; $i <$num ; $i++) { 

    if((int)($num%$i)==0){
        $sum+=$i;
    
        if($sum>$num)return false;
    }
    }
    if($sum==$num){
        return true;
    }
    return false;
}
$number=282;
if(isPefect($number)){
    echo "Given Number Is A Pefect Number.";
}else{
    echo "Given Number Is Not A Pefect Number.";

}
?>