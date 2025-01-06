<?php
function factorial($n){
    if($n==0 or $n==1)return 1;
    return $n*factorial(($n)-1);
}
function isKrishnamurthy($num){
$sum=0;
$temp=$num;
while($temp>0){


    $rem=(int)($temp%10);
    $sum+=factorial($rem);
    $temp=(int)($temp/10);
    
    if($sum>$num)return false;
}
if($sum==$num){
    return true;
}
return false;
}
$num=146;
if(isKrishnamurthy($num)){
    echo "Given Number Is a Krishnamurthy Number";
}
else{
    echo "Given Number Is Not a Krishnamurthy Number";

}
?>