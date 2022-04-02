<?php

$total = 10;

/*switch( $total ) {
      case 1 :
           echo '<p>$total is 1 </p>';
           break;
      case 2 :
           echo '<p>$total is 2 </p>';
           break;
      case 3 :
           echo '<p>$total is 3 </p>';
           break;

        default:
            echo '$total is more than 3.';
}*/

switch( $total ) :
      case 1 :
           echo '<p>$total is 1 </p>';
      case 2 :
           echo '<p>$total is 2 </p>';
      case 3 :
           echo '<p>$total is 3 </p>';
        default:
            echo '$total is more than 3.';
      endswitch;

$turtle = 'Leo';
$bandana  = '';
switch( $turtle ){
    case 'Leo':
    $bandana = 'pink';
      break;
    
    case 'Raph':
    $bandana = 'orange';
       break;
    case 'Mike':
    $bandana = 'blue';
       break;

}

echo $bandana;