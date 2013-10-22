<?php
	$page_title = 'HOME';
	//get header
	include ('v-templates/header.php');

	//get the horizontal navbar
	include ('v-templates/navbar.php');
?>
	<!-- playing-movie page specific css and js -->
    <link href="videoplayer/video-js.css" rel="stylesheet" type="text/css">
    <script src="videoplayer/video.js"></script>
    <script>
        videojs.options.flash.swf = "videoplayer/video-js.swf";
      </script>
    <!-- playing-movie page specific css and js ends here -->	
    
	 <div id="bodyContainer" class="row-fluid">
       <div class="row-fluid">
       		<div class="btn-group">
			  <button class="btn btn-large btn-danger">Movies</button>
			  <button class="btn btn-large btn-danger">Phtos</button>
			  <button class="btn btn-large btn-danger">Caps</button>
			  <button class="btn btn-large btn-danger">Comments</button>
			</div>	
       </div>
       
       
        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="640" height="264"
      poster="http://video-js.zencoder.com/oceans-clip.png"
      data-setup="{}">
    <source src="video/oceans-clip.mp4" type='video/mp4' />
    <source src="video/oceans-clip.webm" type='video/webm' />
    <source src="video/oceans-clip.ogv" type='video/ogg' />
    <track kind="captions" src="videoplayer/demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
  </video>
       
       
       <div class="row-fluid">
            <div id="searchBar" class="span12 pull-left">
                    <h4>BreadCrumbs</h4>
            </div>
       </div>
      
		<div class="row-fluid">
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
               
		</div>
		<div class="row-fluid">
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
                
		</div>
		<div class="row-fluid">
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
                    <div class="span3 element">
                        <h4>Kattie Gold behind the scene tease.</h4>
                        <h5>0 min 0 sec</h5>
                        <img class="lazy" data-src="images/video.jpg" src="" alt="vdeo">
                        <p>Added 2013-07-23<br />Views: 90</p>
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                        <img class="lazy" data-src="images/star-on.png" src="" alt="star">
                    </div>
                </div>
		
		
            
            
            
 
		<div class="row-fluid">
            <div class="span12 blank">
				<div class="pagination pagination-small center">
				  <ul>
					<li><a href="#">Prev</a></li>
					<li><a class="btn-danger" href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#">Next</a></li>
				  </ul>
				</div>
            </div>
        </div>
 	
   	</div>
    <!-- body container ends here -->
    

<?php
	//include footer
	include ('v-templates/footer.php');
?>