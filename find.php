<html>

<?php include'conn.php'; ?>

<head>
<title>Food Suggestion </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<link rel="shortcut icon" href="images/logo.png">
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-quicksand.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
		<b><h2 class="mainTitle" style="color:#000000;font-size: 33px; font-weight:300;">Adaptive Food Suggestion</h2></b>
      </div>
   
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> 
			<a href="#"><img src="images/slide/1.jpg" width="960" height="360" alt="" /></a> 
			<a href="#"><img src="images/slide/2.jpg" width="960" height="360" alt="" /></a> 
			<a href="#"><img src="images/slide/3.jpg" width="960" height="360" alt="" /></a> 
			<a href="#"><img src="images/slide/4.jpg" width="960" height="360" alt="" /></a> 
			<a href="#"><img src="images/slide/5.jpg" width="960" height="360" alt="" /></a> 
			<a href="#"><img src="images/slide/6.jpg" width="960" height="360" alt="" /></a> 
		</div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span>Home Page</span></a></li>
          <li class="active"><a href="find.php"><span>Find Restaurant</span></a></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li><a href="gallery.php"><span>Gallery</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="homeDiv">
        <div class="article">
          <h2 style="color:#2F8611; font-size:30px;">Nearest Restaurant</h2><hr class="titleLine" style="width:200px;">
          
		  <div class="FindDivTop">
			<span>Present place:</span>
			<input type="text" class="Findtxt" value="BGC Trust University Bangladesh Campus" readonly>
		  </div>
		  
		  <div class="clr"></div>		  
        </div>
		
		<div class="FindDivTopaNthr">
			<div class="FindDivLeft">
<?php
	$sql = "select * from tbl_restaurant ORDER BY RAND() limit 1";
	$query = mysqli_query($conn, $sql);
	while($result = mysqli_fetch_assoc($query))
	{
		$id =  $result['id'];
?>
			<h3 style="color:#2F8611; font-size:29px;"><?php echo $result['name']; ?></h3>
				<img src="<?php echo $result['image']; ?>">
				<p>Address<hr class="titleLine" style="width:50px; margin-bottom:-4px; height:2px; margin-top:-4px"><br>
					<strong><?php echo $result['address']; ?></strong>
				</p><br>
				<div style="text-align:left; margin-bottom:5px; padding:10px 15px;">
					<span class="span1">Environment:&nbsp;&nbsp;</span><span class="span2"><?php echo $result['env']; ?></span><br>
					<span class="span1" style="margin-right:47px">Budget:</span><span class="span2"><?php echo $result['budget1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['budget2']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['budget3']; ?></span><br>
					<span class="span1" style="margin-right:59px">Taste:</span><span class="span2"><?php echo $result['taste1']; ?>&nbsp;&nbsp;&nbsp;<?php echo $result['taste2']; ?></span><br>
					<span class="span1" style="margin-right:37px">Review:&nbsp;&nbsp;</span><span class="span2"><?php echo $result['review']; ?></span><br>
				</div>
<?php } ?>
			</div>
			<div class="FindDivRight">
<?php

	$sql = "select * from tbl_restaurant where id!=$id ORDER BY RAND() limit 1";
	$query = mysqli_query($conn, $sql);
	while($result = mysqli_fetch_assoc($query))
	{
?>
			<h3 style="color:#2F8611; font-size:29px;"><?php echo $result['name']; ?></h3>
				<img src="<?php echo $result['image']; ?>">
				<p>Address<hr class="titleLine" style="width:50px; margin-bottom:-4px; height:2px; margin-top:-4px"><br>
					<strong><?php echo $result['address']; ?></strong>
				</p><br>
				<div style="text-align:left; margin-bottom:5px; padding:10px 15px;">
					<span class="span1">Environment:&nbsp;&nbsp;</span><span class="span2"><?php echo $result['env']; ?></span><br>
					<span class="span1" style="margin-right:47px">Budget:</span><span class="span2"><?php echo $result['budget1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['budget2']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['budget3']; ?></span><br>
					<span class="span1" style="margin-right:59px">Taste:</span><span class="span2"><?php echo $result['taste1']; ?>&nbsp;&nbsp;&nbsp;<?php echo $result['taste2']; ?></span><br>
					<span class="span1" style="margin-right:37px">Review:&nbsp;&nbsp;</span><span class="span2"><?php echo $result['review']; ?></span><br>
				</div>
<?php } ?>
			</div>
		</div>
			  
      </div>
     
      <div class="clr"></div>
    </div>
  </div>
  
  <div class="footer">
    <div class="footer_resize">
      <p>All rights reserved By <b>ABIR</b></p>
    </div>
  </div>
</div>
</body>
</html>
