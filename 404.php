<!DOCTYPE html>
<html class="noPaddingMargin" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("./head.html");
?>
<title>404 | Bionic Bears</title>
</head>

<body class="noPaddingMargin">
<div id="header">
    2916 Bionic Bears
</div>
<?php 
include("./menu.html");
?>
<div id="content" class="box">
  <div id="intContent">
          <!-- PAGE TITLE IN h1 ELEMENT -->
           <h1>404</h1>
          <!-- CONTENT GOES IN INTERNAL CONTENT (intContent) CENTER -->
            
    
		<div class="section"><h3>There is no Robot at <code><?php echo($_SERVER['REQUEST_URI']); ?></code> :(</h3><br><p>Here's PETMAN instead.</p><br><div class="youtube"><iframe width="560" height="315" src="https://www.youtube.com/embed/9lfky_j0Jko?rel=0&autoplay=1&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div></div>
    
    
    
    
    

  </div>
</div>
<?php 
include("./footer.html");
?>
</body>
</html>