<?php
  function sum_func(int$a,int$b){
  	$sum = $a+$b;
  	return $sum ; 
  }


  function minus_func(int$a,int$b){
     $minus = $a-$b;
     return $minus;
  }
 
 function divide_func(int$a,int$b){
 	$divide = $a/$b;
 	return $divide;
 }

function product_func(int$a,int$b){
	$product = $a*$b;
	return $product;
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Simple calculator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
    <h1 style="text-align: center; margin-top: 20px; margin-bottom: 20px; color:#dc3545;">Simple Calculator</h1>
    <div class="container">
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"> 
    	<div class="row">
            <div class="col-md-6" style="margin-bottom: 20px;">
            	<input type="number" name="a" class="form-control" required="" placeholder="first digit" value="<?php if(isset($_POST['a'])) {echo $_POST['a'];}?>">
            	
            </div>
            <div class="col-md-6" style="margin-bottom: 20px;">
            <input type="number" name="b" class="form-control" required="" placeholder="second digit" value="<?php if(isset($_POST['b'])) {echo $_POST['b'];}?>">
            </div>
        </div>

        <div class="row">

        	<div class="col-md-3">
        	 <button type="submit" name="add_btn" class="btn btn-primary"  style="width: 100%; margin-bottom: 10px;">ADD ( + )</button>
        	</div>

        	
        	<div class="col-md-3">
        		<button type="submit" name="minus_btn" class="btn btn-primary"  style="width: 100%; margin-bottom: 10px;">SUBTRACT ( - )</button>
        	</div>

        	<div class="col-md-3">
        		<button type="submit" name="divide_btn" class="btn btn-primary"  style="width: 100%; margin-bottom: 10px;">DIVIDE ( / )</button>
        	</div>

        	<div class="col-md-3">
        		<button type="submit" name="product_btn" class="btn btn-primary"  style="width: 100%; margin-bottom: 10px;">MULTIPLY ( * )</button>
        	</div>

        </div>

        <div class="container">
        	<div class="row">
        		<!-- addition -->
        		<div class="col-md-3">
        			 <?php
                         if (isset($_POST['add_btn'])) {  
              	           $a = $_POST ['a'];
              	           $b = $_POST ['b'];
                       ?>
  	                     <h5 style="margin-top: 20px; text-align: center;">Your Sum is: <?php echo sum_func($a,$b)?></h5>
                       <?php  
                             }

                         ?>
        		</div>

                   <!-- subtraction -->
        		<div class="col-md-3">
        			<?php
                     if (isset($_POST['minus_btn'])) {
                     	$a = $_POST ['a'];
                     	$b = $_POST['b'];

                      ?>
                      <h5 style="margin-top: 20px; text-align: center;">Your Subtraction is: <?php echo minus_func($a,$b)?></h5>
                      <?php
                       }

        			?>
        		</div>

                   <!-- division -->
        		<div class="col-md-3">
        			<?php
                      if (isset($_POST['divide_btn'])) {
                      	$a = $_POST['a'];
                      	$b = $_POST['b'];
                      ?>
                      <h5 style="margin-top: 20px; text-align: center;">Your Division is: <?php echo divide_func($a,$b)?></h5>

                     <?php
                      } 
        			?>
        		</div>

        		   <!-- multiplication -->
        		<div class="col-md-3">
        			<?php
                      if (isset($_POST['product_btn'])) {
                      	$a = $_POST['a'];
                      	$b = $_POST['b'];
                      ?>
                      <h5 style="margin-top: 20px; text-align: center;">Your Multiplication is: <?php echo product_func($a,$b)?></h5>
                      <?Php
                      }
        			?>
        		</div>
        	</div>
        </div>
        
        <a href="http://localhost/simplecalc/index.php" class="btn btn-danger" style="width: 100%; margin-top: 20px;">RESET</a>  

      </form>
    </div>
</body>
</html>