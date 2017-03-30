<html><body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

echo 'Hello world from Cloud9!';


$response = file_get_contents('http://sketches.quintype.com/api/v1/stories');

$response1 = json_decode($response);

echo $response1->stories[1]->headline;


$variable = "<div class=" + "thumbnail" + ">";
echo $variable;

<?php  
$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 
?> 

     <div class="thumbnail">
         <img src="http://placehold.it/320x150" alt="">
         <div class="caption">
             <h4 class="pull-right">$64.99</h4>
             <h4><a href="#">Second Product</a>
             </h4>
             <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
         </div>
         <div class="ratings">
             <p class="pull-right">12 reviews</p>
             <p>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star-empty"></span>
             </p>
         </div>
     </div>



echo "<script>console.log( 'Debug Objects: " . $response1->stories[0]->headline . "' );</script>";

?>
</body>
</html>