<?php
include("connections/connections.php");
$result="";
if(!isset($_GET['count']))
{
    echo "up";
    $query="SELECT * FROM posts LIMIT=6";
$count=2;
$result=mysqli_query($connect,$query);

}
else{
    echo "niche";
$count=$count+2;
$q=6+$count/2;
$query="SELECT * FROM posts LIMIT='"+$q+"'";
$result=mysqli_query($connect,$query);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plan of Action</title>

    <!-- Bootstrap Core CSS -->

    <link href="css/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


</head>

<body>
   <?php include("menu.html");?>
    <!--#################################
    - THEMEPUNCH BANNER -
#################################-->
  <div class="tp-banner-container">
    <div class="tp-banner" >
      <ul>  <!-- SLIDE  -->
  <li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="500" data-title="">
    <!-- MAIN IMAGE -->
    <img src="img/banner3.jpg"  alt="slidebg1" data-lazyload="img/banner3.jpg" data-bgposition="" data-bgfit="cover" data-bgrepeat="no-repeat">
    <!-- LAYERS -->
<!-- LAYER NR. 1 -->
    <div class="tp-caption tp-resizeme sft"
        data-x="45"
        data-y="480"
        data-speed="1000"
        data-start="2400"
        data-easing="Power4.easeOut"
        data-endspeed="300"
        data-endeasing="Power1.easeIn"
        data-captionhidden="off"
        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;font-family : 'Playball', sans-serif;font-size: 45px; letter-spacing: 3px; color: #fff;">Be the Best Version of you
      </div>  
  
<!-- LAYER NR. 2 -->
    <div class="tp-caption tp-resizeme sft"
      data-x="55"
      data-y="580"
      data-speed="1000"
      data-start="3000"
      data-easing="Power3.easeInOut"
      data-splitin="none"
      data-splitout="none"
      data-elementdelay="0.1"
      data-endelementdelay="0.1"
      data-linktoslide="next"
      style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class='tr-slider-btn'>READ MORE</a>
    </div>

  </li>
  <!-- SLIDE 2 -->
   <!-- data-transition="curtain-2" data-slotamount="1" data-masterspeed="1000" -->
   <li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="500" data-title="">
    <!-- MAIN IMAGE -->
    <img src="img/banner2.jpg"  alt="" data-lazyload="img/banner2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
<!-- LAYERS -->
<!-- LAYER NR. 1 -->
    <div class="tp-caption tp-resizeme sft"
        data-x="45"
        data-y="480"
        data-speed="1000"
        data-start="2400"
        data-easing="Power4.easeOut"
        data-endspeed="300"
        data-endeasing="Power1.easeIn"
        data-captionhidden="off"
        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;font-family : 'Playball', sans-serif;font-size: 45px; letter-spacing: 3px; color: #fff;">Step in to the world of vintage Cars!
      </div>  
  
<!-- LAYER NR. 2 -->
    <div class="tp-caption tp-resizeme sft"
      data-x="55"
      data-y="580"
      data-speed="1000"
      data-start="3000"
      data-easing="Power3.easeInOut"
      data-splitin="none"
      data-splitout="none"
      data-elementdelay="0.1"
      data-endelementdelay="0.1"
      data-linktoslide="next"
      style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class='tr-slider-btn'>READ MORE</a>
    </div>
   </li>
  
 <li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="500" data-title="">
    <!-- MAIN IMAGE -->
    <img src="img/fbanner.jpg"  alt="" data-lazyload="img/fbanner.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
<!-- LAYERS -->
<!-- LAYER NR. 1 -->
    <div class="tp-caption tp-resizeme sft"
        data-x="45"
        data-y="480"
        data-speed="1000"
        data-start="2400"
        data-easing="Power4.easeOut"
        data-endspeed="300"
        data-endeasing="Power1.easeIn"
        data-captionhidden="off"
        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;font-family : 'Playball', sans-serif;font-size: 45px; letter-spacing: 3px; color: #fff;">Enjoy Delhi's Beautiful sunset with a Boat Ride!
      </div>  
  
<!-- LAYER NR. 2 -->
    <div class="tp-caption tp-resizeme sft"
      data-x="55"
      data-y="580"
      data-speed="1000"
      data-start="3000"
      data-easing="Power3.easeInOut"
      data-splitin="none"
      data-splitout="none"
      data-elementdelay="0.1"
      data-endelementdelay="0.1"
      data-linktoslide="next"
      style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class='tr-slider-btn'>READ MORE</a>
    </div>
  </li>
   <li data-transition="slotfade-horizontal" data-slotamount="1" data-masterspeed="500" data-title="">
    <!-- MAIN IMAGE -->
    <img src="img/red.jpg"  alt="" data-lazyload="img/red.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
<!-- LAYERS -->
<!-- LAYER NR. 1 -->
    <div class="tp-caption tp-resizeme sft"
        data-x="45"
        data-y="480"
        data-speed="1000"
        data-start="2400"
        data-easing="Power4.easeOut"
        data-endspeed="300"
        data-endeasing="Power1.easeIn"
        data-captionhidden="off"
        style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;font-family : 'Playball', sans-serif;font-size: 45px; letter-spacing: 3px; color: #fff;">Ye Dilli Hai Meri Jaan!
      </div>  
  
<!-- LAYER NR. 2 -->
    <div class="tp-caption tp-resizeme sft"
      data-x="55"
      data-y="580"
      data-speed="1000"
      data-start="3000"
      data-easing="Power3.easeInOut"
      data-splitin="none"
      data-splitout="none"
      data-elementdelay="0.1"
      data-endelementdelay="0.1"
      data-linktoslide="next"
      style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class='tr-slider-btn'>READ MORE</a>
    </div>
   </li>
  
 </ul>
<div class="tp-bannertimer"></div>
    </div>
  </div>
  
    

    <!--Banner Ends-->
<div class="container" id="content">

        <br>
        <h2>
            Latest Stories
        </h2>
        <br>
        
        <?php 
             while ($row = mysqli_fetch_assoc($result)){
          ?>
           
            <div class='pro_part col-xs-12 col-sm-6 col-md-4 col-lg-4'>
            <?php if(isset($row['imgname'])){
                if($row['imgname']=="no")
                    $img="img/poa.jpg";
                else
                $img ="img/".$row['imgname'];
            ?>
      <div class='h1' id='try' style='background-image: url("<?php echo $img;?>");
background-position: center;background-size:cover;'><a href='#'></a><?php }?>
<div class='h2'>
          <div class='fl'><span><a href="category.php?pid=<?php echo $row['id'];?>">  <?php echo $row['category'];?></a></span></div><br>
          <div class='f2'><span><a href="post.php?pid=<?php echo $row['id'];?>">  <?php echo $row['title'];?>.</a></span></div>
          <br>
          <div class='f3'><span><a href="blogger.php?bid=<?php echo $row['id'];?>"> <?php echo $row['author'];?></a></span></div>
      </div>
       
        <div class='clear'></div>
      </div>
    </div>
        

<?php  }?>
            
        
        <div class="row load">
            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4"> 

            <a href="index.php" name="count" class="btn btn-lg btn-success">LOAD MORE</a>



</div>
        </div>
        
      <section >
            <div class="container" >
                <div class="row " >
                    
                    <h1 id="heading" >Browse Our Other Genres</h1>
                        <br>
                        <br>
                        <div class="mini-posts" >
                     
                        
                        <!-- Mini Post -->


                        <article class="mini-post col-xs-12 col-sm-6 col-lg-4 col-md-4">

                            <header>
                                <h3><a href="" id="genre">Lifestyle</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/lifestyle.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-6 col-lg-4 col-md-4">

                            <header>
                                <h3><a href="" id="genre">Entertainment</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/enter.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-6 col-lg-4 col-md-4">

                            <header>
                                <h3><a href="" id="genre">Art,Culture &amp; Heritage</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/art.jpg" alt="" /></a>
                        </article>

                        <article class="mini-post col-xs-12 col-sm-6 col-lg-4 col-md-4">

                            <header>
                                <h3><a href="" id="genre">Health &amp; Wellness</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/health.jpg" alt="" /></a>
                        </article>



                        <article class="mini-post col-xs-12 col-sm-6 col-lg-4 col-md-4">

                            <header>
                                <h3><a href="" id="genre">Food &amp; Beverages</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/food.jpg" alt="" /></a>
                        </article>

                        <article class="mini-post col-sm-6 col-xs-12 col-lg-4 col-md-4">

                            <header>
                                <h3><a href="" id="genre">Travel &amp; Adventure</a></h3>
                            </header>
                            <a href="" class="image"><img src="img/travel2.jpg" alt="" /></a>
                        </article>

                    </div>
                </div>
            </div>
                </section>

            
            <div id="right-wrapper" class="col-xs-12 col-sm-12 col-lg-12 col-md-12">

<?php include("sliderimg.php"); ?>    

                <!-- Posts List -->
                <section id="right" class="row">
                    <div>
                        <br>
                        <ul class="posts col-xs-12 col-sm-12 col-lg-12 col-md-12">

                            <h1 id="heading">Most Liked Posts</h1>
                            
           
           
                            <?php 
                            $p=1;

$query="SELECT * FROM posts LIMIT 4";
$result=mysqli_query($connect,$query);
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <li style='padding:5px;'>
                                        <article>
                                            <header>
<HEAD>
                                                <h3><a href='post.php?pid=<?php echo $row['id'];?>' id='genre'><?php echo $row['title'];?></a></h3>
                                                <p><?php echo $row['author'];?></p>
                                                                                             
                                                <time class='published' ><?php echo $row['category'];?></time>
<!-- d6b50480983b95cf39058442325e382bbaf57ae4-->
                                            </header>
                                            
                                            <a href='post.php?pid=<?php echo $row['id'];?>' class='image'><img src='<?php echo"img/".$row['imgname'];?>' alt='' /></a>
                                        </article>
                                    </li>
                              <?php 
                            }
                        ?>

                        </ul>
                        <a href="#"> <p><b >  View All</p></a>
                    </div>
                </section>


            </div>
        </div>
    
    <?php include("footer.html");?>
    

    <script src="js/script.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>

</html>
