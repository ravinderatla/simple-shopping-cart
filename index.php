 <!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <title>Alat Shopping Cart</title>
    </head>
    <body>
        <div class="summary">
           <h1>Below is your order summary:</h1>
           <hr />
           <?php
               //declare the variables here
               $shoes = 0;
               $headphones = 0;
               $pizza = 0;
               $total = 0;

               //Now let us get the values from the form
               if(isset($_POST['shoes'])){
                  $shoes = &$_POST['shoes'];
               }
               if(isset($_POST['headphones'])){
                  $headphones = &$_POST['headphones'];
               }
               if(isset($_POST['pizza'])){
                  $pizza = &$_POST['pizza'];
               }
               $total = $shoes + $headphones + $pizza;
               echo '<b>You ordered on </b>'. date('H:i, jS F Y'). ':';
               echo '<br />';
               echo '<b> '.$shoes. '</b> RBK Shoes <br />';
               echo '<b> '.$headphones. '</b> Sony Head phones </br />';
               echo '<b> '.$pizza. '</b> Cheese pizza <br />';
               echo '<b>You Ordered '.$total.'items </b>';
           ?>
           <hr />
	</div>
	</body>
	</html>

