<?php
  $feed = 'https://www.google.com/calendar/feeds/ntd1j5m7gaecklrabdispqfdbo%40group.calendar.google.com/public/basic';
  $rss = simplexml_load_file($feed);
  foreach ($rss->entry as $item) {
    $title = (string) $item->title;
        $summary = (string) $item->summary;
        $summary_array = explode("\n",$summary);
        $summary_date_array = explode(":",$summary);
    $summary = $summary_array[4];
    $event_date = $summary_date_array[1];
    $calendar[] = array('title'=>$title,'summary'=>$summary,'date'=>$event_date);
    }
?>
<html lang="en">
<head>
    <title>kobie watkins</title>
    <meta name="keywords" content="Musican,Drummer,Percussionist,Jazz,Composer,Artist,Swing Master,Chicago,Church,Explosive">  
    <meta name="description" content="Official Website for Kobie Watkins. Music, news, photos, bio and live show dates.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    
    <link rel="profile" href="http://microformats.org/profile/hcalendar">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="colors/default.css" id="color">
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="css/ie7.css" media="screen"/><![endif]-->
    <script src="js/modernizr.js"></script>
</head>
 
<body class="home">

<div id="page">

<header id="header">
    <div class="wrap group">
        <div class="social-wgt group">
            <aside class="widget group">
                <a title="Connect with us on LinkedIn." class="icn lnkdin" href="http://www.linkedin.com/pub/kobie-watkins/40/b71/a86">Connect with us on LinkedIn.</a>
                <a title="Follow us on twitter." class="icn twitter" href="https://twitter.com/kobiewatkins">Follow us on twitter.</a>
                <a title="Like us on Facebook." class="icn facebook" href="http://www.facebook.com/kobie.watkins">Like us on Facebook.</a>
                <a title="Follow us on pinterest" class="icn pinterest" href="http://pinterest.com/bac2211">Follow us on Pinterest.</a>
            </aside>
        </div>
        <!-- .social-wgt -->

        <div class="head-wrap group">
            <hgroup class="logo imglogo">
                <h1><a href="#">kobie watkins</a></h1>
            </hgroup>

            <nav>
                <ul id="navigation" class="group">
                    <li class="current_page_item current-menu-item"><a href="index.php">home</a></li>              
                    <li><a href="music.html">music</a></li>                    
                    <li><a href="discography.html">discography</a></li>
                     <li><a href="bio.html">bio</a></li>
                     <li><a href="grouptet.html">grouptet</a></li>
                    <li><a href="contact.html">contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- .head-wrap -->
    </div>
    <!-- .wrap < header -->
</header>

<div id="main-content">
<div class="wrap">
<div class="inner-wrap">
<div class="sld-container group">
    <div id="main-slider" class="flexslider">
        <ul class="slides group">            
            <li class="sld-item group">
                <a href="#"><img src="demo/MG_0590.jpg" alt="kobie"></a>               
                <div class="sld-desc right">
                    <h3><a href="#">Kobie Watkins</a></h3>
                </div>
                <!-- sld-desc -->
            </li>
            <li class="sld-item group">
                <a href="#"><img src="demo/DSC00382.jpg" alt="headshot"></a>
                <div class="sld-desc right">
                </div>
                <!-- sld-desc -->
            </li>
            <li class="sld-item group">
                <a href="#"><img src="demo/IMG_3795.jpg" alt=""></a>

                <div class="sld-desc right">
                    <h3><a href="#">Involved interview!</a></h3>
                    <a href="#" class="ci-read-more">Read More</a>
                </div>
                <!-- sld-desc -->
            </li>          
        </ul>
    </div>
    <!-- .flexslider -->
</div>
<!-- .sld-container -->

<section class="widget-block group">
    <div class="block widget">
        <h3>Kobie Watkins</h3>
        <a href="grouptet.html"><img src="images/KBW_thumb.jpg" alt=""></a>
        <h4><a href="grouptet.html">Grouptet</a></h4>
        <p>
        Kobie Watkins Grouptet 
        </p>
    </div>
    <div class="block widget">
        <h3>Who. I. Am.</h3>
        <a href="bio.html"><img src="images/kobie_ttx_thumb.jpg" alt=""></a>
        <h4><a href="bio.html">Biography</a></h4>
        <p>A native of Chicago, Illinois, Kobie began as a small child listening and watching his 
        father ... </p>
    </div>
    <div class="block widget last">
        <h3>Currently Available</h3>
        <a href="music.html"><img src="images/cdimages/cdCover.jpg" alt=""></a>
        <h4><a href="music.html">Involved</a></h4>
        <p>
         Involved marks the debut of a dynamic young drummer with a sweeping musical sense. From the burning straight-ahead...
        
        </p>
    </div>
</section>
<!-- .widget-block -->

<section class="widget-block mid-section group">

    <div class="block widget group block-videos two-thirds">
        <h3>Latest Videos</h3>

        <div id="video-slider" class="flexslider">
            <ul class="slides">
                <li class="sld-vid-item">
                    <iframe width="621" height="378" src="http://www.youtube.com/embed/QZunOIMyKf0" frameborder="0" allowfullscreen></iframe>
                </li>
                <li class="sld-vid-item">
                    <iframe width="621" height="378" src="http://www.youtube.com/embed/dHHyWsOBdiU" frameborder="0" allowfullscreen></iframe>
                </li>
                <li class="sld-vid-item">
                    <iframe width="621" height="378" src="http://www.youtube.com/embed/zJ_PzJj-vN0" frameborder="0" allowfullscreen></iframe>
                </li>
                <li class="sld-vid-item">
                    <iframe width="621" height="378" src="http://www.youtube.com/embed/iulz25ZaCAY" frameborder="0" allowfullscreen></iframe>
                </li>
                <li class="sld-vid-item">
                    <iframe width="621" height="378" src="http://www.youtube.com/embed/AltczL6mjYQ" frameborder="0" allowfullscreen></iframe>
                </li>
            </ul>
        </div>
        <!-- .flexslider-vid -->
    </div>
    <!-- .block-videos -->

    <div class="block widget group block-events last">
        <h3>Upcoming Shows</h3>

        <div class="events-container" >
          <?php
               date_default_timezone_set('America/New_York');
               $listItem = "";
               $today = date("Ymd");
               
               echo "<ul id='locations'>";

               foreach($calendar as $c)
               {         
                 $newEventDate = date("Ymd", strtotime(substr($c['date'],4,14)));  

                 if($newEventDate >= $today)
                 {    
                   $listItem = $listItem."<li class='vevent'><time class='dtstart'>".substr($c['date'],0,17)."</time><h4 class='summary'>"
                   .$c['title']."</h4><b class='location'>".$c['summary']."</b></li>"; 
                 }
                 else
                 {
                    $listItem = "<li class='vevent'>Check back soon for dates</li>";
                 }
               }
               echo $listItem;  
               echo "</ul>";                  
          ?>            
        </div>
        
    </div>
    <!-- .block-events -->
</section>
<!-- .widget-block -->


</div>
<!-- .inner-wrap -->
</div>
<!-- .wrap < #main-content -->
</div>
<!-- #main-content -->

<footer id="footer">
    <div class="wrap group">

        <div class="widget-block group">

            <aside class="widget audio-player">
                <div class="audio-wrap">
                    <div id="jp500" class="jp-jplayer"></div>

                    <div id="jp-203" class="jp-audio">
                        <div class="jp-type-single">
                            <div class="jp-gui jp-interface">
                                <ul class="jp-controls">
                                    <li><a href="#" class="jp-play" tabindex="1">Play</a></li>
                                    <li><a href="#" class="jp-pause" tabindex="1">Pause</a></li>
                                </ul>

                                <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar"></div>
                                    </div>
                                </div>

                                <div class="jp-current-time"></div>

                                <div class="jp-volume-bar">
                                    <div class="jp-volume-bar-value">
                                        <div class="jp-volume-bar-knob"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-playlist">
                                <ul>
                                    <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .audio-wrap -->
            </aside>
        </div>
        <!-- widget-block -->

        <div class="site-copy">
            <span>2016 kobiewatkins.com All Rights Reserved.</span>
        </div>
    </div>
    <!-- .wrap < #footer -->
</footer>

</div>
<!-- /page -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery.cycle.all.latest.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.carouFredSel-5.6.1-packed.js"></script>
<script src="js/superfish.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/jquery.fitvid.js"></script>
<script src="js/jquery.jplayer.js"></script>
<script src="js/jplayer.playlist.min.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="js/selectivizr-min.js"></script><![endif]-->
<script defer src="js/scripts.js"></script>
</body>
</html>