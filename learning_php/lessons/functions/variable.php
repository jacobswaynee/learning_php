<?php

function double(int $a){
    return $a * 2;
}

//echo double (2);
//echo double( 3.4);

function math($a, $b = 2, $op = 'multiplier'){
    if ('add' == $op){
        return $a + $b;
    }else if ('sub'== $op) {
        return $a - $b;
    } else if ('divide'== $op){
            return $a/$b;
    }
        return $a * $b;

}

echo math(4 , 2 , 'add');



//ANONYMOUS FUNCTIONS



$names = array ('Mike' , 'Peter', 'Louis' , 'Devi');
usort( $names , function ($a, $b){
    return $a[1] <=> $b[1];
});
?>

<pre>
    <?php print_r( $names ); ?>
</pre>



