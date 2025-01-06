<?php
function isPrime($a){
    $i=0;
    if($a<=1)return false;
    for( $i=2;$i<=sqrt($a);$i++){
        if ($a%$i==0)return false;
    }
    return true;
}
$ans=isPrime(5);
if ($ans){
echo "Number Is Prime";
}
else{
echo "Number Is Not Prime";

}

?>