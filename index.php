<?php
$p=$_GET['p'];
?>
<html>
<head>
<title>Anak Islam</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />    
    
<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
    $('#gallery a').lightBox();
});
</script>
</head>
<body>

<div id="templatemo_wrapper">

  <div id="templatemo_header">
    
    	<div id="site_title">
            <h1><a href="" target="_parent">
                <img src="images/" alt="Site Title" width="200" height="50" />
                <span>Anak Islam</span>
            </a></h1>
      	</div>
        
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Enter a keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
            </form>
        </div>
        
        <div class="cleaner"></div>
	</div> <!-- end of header -->
    
    
    <div id="templatemo_menu">
    
            <ul>
                <li><a href="http://localhost/prokus/index.php?p=homepage">Beranda</a></li>
                <li><a href="http://localhost/prokus/index.php?p=magazine">Majalah Anak</a></li>
                <li><a href="http://localhost/prokus/index.php?p=fashion">Fashion Anak</a></li>
                <li><a href="http://localhost/prokus/index.php?p=signup">Sign up</a></li>
				 <li><a href="http://localhost/prokus/index.php?p=login">Login</a></li>
            </ul>    	
    
    	</div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_content_wrapper"><span class="top"></span><span class="bottom"></span>
       
	   <div id="templatemo_content">
	<?php
  if ($p=='homepage')
  {
  ?>
            <div id="templatemo_slider">
  
                <div id="one" class="contentslider">
	
                    <div class="cs_wrapper">

                        <div class="cs_slider">
                        
                            <div class="cs_article">
                                <a href="" target="_parent">
                                    <img src="images/slider/templatemo_slide02.jpg" alt="Website Template 01" />
                                </a>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <a href="" target="_parent">
                               	<img src="images/slider/templatemo_slide01.jpg" alt="Website Template 02" />
                                </a>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <a href="" target="_parent">
                               	<img src="images/slider/templatemo_slide03.jpg" alt="Website Template 03" />
                                </a>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <a href="" target="_parent">
                               	<img src="images/slider/templatemo_slide04.jpg" alt="Website Template 04" />
                                </a>
                            </div><!-- End cs_article -->
                      
                        </div><!-- End cs_slider -->

                    </div><!-- End cs_wrapper -->
                </div><!-- End contentslider -->
                
                <!-- Site JavaScript -->
               
            </div> <!-- end of templatemo_slider -->
						<?php
  }
  ?>		
<?php
		if($p=="homepage"){
			include "homepage.php";
		}
		else if($p=="magazine"){
			include "magazine.php";
		}
		else if($p=="fashion"){
			include "fashion.php";
		}
		else if($p=="signup"){
			include "signup.php";
		}
		else if($p=="login"){
			include "login.php";
		}
		else if($p=="loginsubmit"){
			include "loginsubmit.php";
		}
		else if($p=="menu"){
			include "menu.php";
		}
		
		

	?>
                       
        </div> <!-- end of templatemo_content -->
        <?php
  if ($p=='homepage')
  {
  ?>  
   <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
                <script type="text/javascript">
                    $(function() {
                    $('#one').ContentSlider({
                    width : '600px',
                    height : '240px',
                    speed : 600,
                    easing : 'easeInOutQuart'
                    });
                    });
                </script>
                <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
                <script src="js/chili/recipes.js" type="text/javascript"></script>
               
				<?php
  }
  ?>
        <div id="templatemo_sidebar">
            
            <div class="section_rss_twitter">
        
                <div class="rss_twitter twitter">
                <a href="" target="_parent">FOLLOW US <span>on Twitter</span></a>
                </div>
                
                <div class="margin_bottom_20"></div>
                
                <div class="rss_twitter rss">
                <a href="" target="_parent">SUBSCRIBE <span>our feed</span></a>
                </div>
            
            </div>
            
            <div id="sidebar_featured_project">
                
                <h3> News & Event </h3>
                <div class="left"><img src="images/maker.png" alt="image 3" /></div>
                <div class="right">
                    <a href="#">Ayo kita sholat</a>
                    <p>Anak-anak yg belum baligh harus di ajarkan juga sholat loh..</p>
                </div>
                
                 <div class="cleaner"></div>
                
            </div>
            
            <div id="news_section">
                
                <h3>Promotion</h3>    
                <div class="news_box">
                    <a href="#">Unggah file</a>
                    <p>ingin mencoba menambah wawasan terhadap anak? Ayo segera unggah file anda kesini</p>
                </div>
                
                <div class="news_box">
                    <a href="#">Sopan santun</a>
                    <p>Budayakan berbicara sopan ya?</p>
                </div>
                <div class="button"><a href="news.php">View All</a></div>
                
				<div class="cleaner"></div>  
                   
            </div>
        
            <div class="cleaner"></div>
        </div>
    
    	<div class="cleaner"></div>
    </div> <!-- end of content_wrapper -->
    
    <!-- end of footer -->

</div> <!-- end of wrapper -->

</body>
</html>
