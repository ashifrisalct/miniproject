<html>
<head>
{%load static%}

    <link href="css2/trans.css" rel="stylesheet" type="text/css" media="all">
</head>

{% for craft in ct%}
<form  action="" method="post">
<div style="float:left; padding:10px;">

			<div class="background">
  <div class="transbox">
<center>
    <br>
    <br>
  <img src="{{craft.photo}}" height="130" width="130"/>
    <br>    <br>
  
    Name:      {{craft.catname}}
       <br>    
    Description:   {{craft.description}}

   <br>    
  
       <br>    

  
<button><a href="ordercustomer.php?f=<?php echo $row['itemno']?>">BUY</a></button>
<button><a href="gift_order.php?f=<?php echo $row['itemno']?>">GIFT</a></button>

        <br>    <br>
</center>
                </div>
    </div>
    
 </div>

 </form>
 
<?php
}
?>
</html>


