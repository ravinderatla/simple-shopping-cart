 <!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <title>Alat Shopping Cart</title>
    </head>
    <body>
        <div class="summary">
           <h1>Items in your cart:</h1>
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
               if(isset($_POST['Pizza'])){
                  $pizza = &$_POST['Pizza'];
               }
               $total = $shoes + $headphones + $pizza;
               echo '<b>You ordered on </b>'. date('H:i, jS F Y'). ':';
               echo '<br />';
               echo '<b> '.$shoes. '</b> RBK Shoes <br />';
               echo '<b> '.$headphones. '</b> Sony Headphones </br />';
               echo '<b> '.$pizza. '</b> Pizza <br />';
               echo '<b> '.$total. ' Total Items </b>';
           ?>
           <hr />
	</div>
	</body>
	</html>

