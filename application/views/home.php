<!-- don't touch -->
<title><?= $this->config->item('project_name'); ?> - <?= $this->lang->line('home'); ?></title>
</head>
<!-- don't touch -->
<body>

 <center>

 <!--HEADER-->
 <?php $this->load->view('general/menu'); ?>
 <!--HEADER.End-->

<!-- images -->
<div id="image_header" align="center">

	<div class="slider" id="warcry-slider" align="center">
			<!-- TextFader Cycle JQuery Plugin -->
			<script type="text/javascript">
				$(function()
				{
					setTimeout(function()
					{
						$("#IndexTextFader").cycle(
						{
							random: 1,
							delay: -6000
						});
					}, 1000);
				}); 
			</script>
			
			<div id="IndexTextFader">
				<img src="<?= base_url(); ?>assets/images/1.png" style="opacity:0;"/>
				<img src="<?= base_url(); ?>assets/images/2.png" style="opacity:0;"/>
<img src="<?= base_url(); ?>assets/images/3.png" style="opacity:0;"/>
			</div></div>    
</div>
<!-- images -->

<div class="main_a_holder" align="center">
<!-- BODY-->
<div class="main_b_holder" align="center">

	
	<!-- Membership Sh!t! -->
	<div class="membership-holder">
  		<div class="membership-bar">
            	<!--Not logged-->
            	<div class="member-side-left">
	       			<ul class="not-logged-menu">
             			<li class="login-home"><a id="login" href="<?= base_url(); ?>user/login"><p></p><span></span></a></li>
                    	<li class="register-home"><a id="register" href="https://heroes-wow.com/wotlk/index.php?page=register"><p></p><span></span></a></li>
    	   			</ul>
            	</div>
           	 	<!--Not logged.End-->
			<div class="memeber-side-right">
				<div class="bonus-m-links">
					<a href="https://forum.heroes-wow.com/showthread.php?17-Frequently-asked-Questions-and-Topics">Frequently Asked Questions</a>
					<a href="https://heroes-wow.com/wotlk/index.php?page=howto&activate=0">Connection Guide</a>
				</div>
				<div class="search" align="left">
					<form action="https://heroes-wow.com/wotlk/forums.php" method="get" id="search">
						<input type="text" name="keywords" maxlength="128" title="Search for keywords" placeholder="Search for keywords"><input type="submit" value="">
<input type="hidden" value="search" name="page" />
					</form>
				</div>
			</div>
			
		</div>
	</div>
	<!-- Membership Sh!t.End -->
 <div class="sec_b_holder" align="center">
  <div id="body" align="left">
   <!-- BODY Content start here -->
   

<div class="content_holder">

<!-- anuncio -->
	<div class="important_notice">
		<p><b><?php foreach ($this->news_model->getAnnounceSuperior()->result() as $row) { echo $row->description; } ?></b></p>
	</div>
<!-- anuncio -->
	
<!-- Main Side -->
<div class="main_side">
 
<!-- Index News -->
<div class="index_news">
<?php foreach ($this->news_model->getAnnounceInferior()->result() as $row) { ?>
   	<div class="welcome_to_warcry">
    	<h1><?= $row->title; ?></h1>
		<span></span>
        <p>
        <?= $row->description; ?>
        </p>
    </div>
<?php } ?>
	<div class="news_container">
    	
		<div class="header">
			<div class="header_left">
				<?= $this->lang->line('latest_news'); ?>
				<span class="title_overlay"></span>
			</div>
			<div class="header_right">
				<ul>
					<li><a href="<?= base_url();?>news"><?= $this->lang->line('archived_news'); ?></a></li>
					<li><a href="<?= base_url();?>changelogs"><?= $this->lang->line('changelogs'); ?></a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
        
        <div class="active_latest_news">
        
			<?php foreach ($this->news_model->getNewLimit()->result() as $row) { ?>
				<div class="news_thumb_image">
					<a href="?page=news&id=188"><img src="<?= $row->image; ?>" /></a>
					<span class="news-img-overlay"></span>
				</div>
            
				<div class="news_content">
					<h1><?= $row->title; ?> </h1>
					<h4><?= date('Y-m-d', $row->date); ?></h4>
					<p><?= $row->description; ?></p>
					<a class="readn_ln" href="<?= base_url(); ?>news/<?= $row->id; ?>"><?= $this->lang->line('read_more'); ?></a>
				</div>
            <?php } ?>

				<div class="clear"></div>            
        </div>
        
	</div>
    
</div>
<!-- Index News.End -->

    <!-- MEDIA -->
    
    	<div class="home_media home_container">
        
        	<div class="new_trailer">
            	<div class="sub_header">
                	<h1><?= $this->lang->line('newest_video'); ?></h1>
                    <a href="<?= base_url(); ?>videos"><?= $this->lang->line('all_videos'); ?></a>
                    <div class="clear"></div>
					<span class="title_overlay"></span>
                </div>
                <div class="new_video_thumb">
                
							<a title="The Shattered Halls" href="index.php?page=open-video&id=15">
								<!--Video THUMB Preview-->
								<div class="image-thumb-preview" style="background-image:url('<?= base_url(); ?>assets/images/index_2f86c_shattered-halls.jpg');"></div>
								<div class="play-button-small"></div>
							</a>                    </div>
                    
                    <div class="sub_header sreenshots">
                        <h1><?= $this->lang->line('new_screenshots'); ?></h1>
                        <a href="<?= base_url(); ?>"><?= $this->lang->line('all_screenshots'); ?></a>
                        <div class="clear"></div>
						<span class="title_overlay"></span>
                	</div>
                    
                    
					<!-- Screenshots -->
					<ul class="screanshots home_scr">
							<li>
								<a href="<?= base_url(); ?>assets/images/WoWScrnShot_080916_172704_1470757137.jpg" class="container_frame" rel="shadowbox" title="metamorphosis{|}i am cool">
									<span class="cframe_inner" style="background-image:url(<?= base_url(); ?>assets/images/WoWScrnShot_080916_172704_1470757137.jpg); background-repeat: no-repeat; background-size:121%;"></span>
								</a>
							</li>
							<li>
								<a href="<?= base_url(); ?>assets/images/WoWScrnShot_050115_092340_1431413259.jpg" class="container_frame" rel="shadowbox" title="my first transmog for VoA{|}BEST !">
									<span class="cframe_inner" style="background-image:url(<?= base_url(); ?>assets/images/WoWScrnShot_050115_092340_1431413259.jpg); background-repeat: no-repeat; background-size:121%;"></span>
								</a>
							</li>
							<li>
								<a href="<?= base_url(); ?>assets/images/WoWScrnShot_011016_184235_1452453445.jpg" class="container_frame" rel="shadowbox" title="Selfie{|}Just me taking selfie in The Barrens :D !">
									<span class="cframe_inner" style="background-image:url(<?= base_url(); ?>assets/images/WoWScrnShot_011016_184235_1452453445.jpg); background-repeat: no-repeat; background-size:121%;"></span>
								</a>
							</li><div class="clear"></div></ul>                
            </div>
        </div>
    
    <!-- MEDIA.End -->
    
    <!-- TOP VOTERS -->
        <div class="top_voters home_container">
            <div class="sub_header">
                <h1>Top Voters</h1>
                <h2>! Reset Every Month</h2>
				<span class="title_overlay"></span>
            </div>
            
            <div class="cont_container">
            
            	<ul class="top_voters_list">
                
						<li>
							<p>1</p>
							<a href="https://heroes-wow.com/wotlk/index.php?page=profile&uid=693294">WarriorQt</a>
							<span>99 <i>Votes</i></span>
						</li>
						<li>
							<p>2</p>
							<a href="https://heroes-wow.com/wotlk/index.php?page=profile&uid=601954">Gluttonyy</a>
							<span>90 <i>Votes</i></span>
						</li>
						<li>
							<p>3</p>
							<a href="https://heroes-wow.com/wotlk/index.php?page=profile&uid=274124">denis30</a>
							<span>77 <i>Votes</i></span>
						</li>
						<li>
							<p>4</p>
							<a href="https://heroes-wow.com/wotlk/index.php?page=profile&uid=588692">adushi</a>
							<span>77 <i>Votes</i></span>
						</li>
						<li>
							<p>5</p>
							<a href="https://heroes-wow.com/wotlk/index.php?page=profile&uid=459313">DEATHTOUCH</a>
							<span>70 <i>Votes</i></span>
						</li>				</ul>
				
                <div class="gift_box">
                	<div class="gift_image"></div>
                    <h2>
                    Monthly rewards will be given to the Top Voters. 
                    500 silver coins for the Top 5 and an additional 25 gold coins for top 3.
                    </h2>
                </div>
            
            </div>
            
        </div>
    <!-- TOP VOTERS.End -->
    
    <div class="clear"></div>
    
</div>
<!-- Main side.End-->


<!-- Sidebar -->
<div class="sidebar">
	
    <!-- Banners -->
    	<div class="banners">
        	<a href="https://heroes-wow.com/wotlk/index.php?page=howto" id="support"><p></p></a>
<a href="https://heroes-wow.com/wotlk/index.php?page=downloads" id="launcher_dw"><p></p></a>
        </div>
    <!-- Banners . End -->

    <!-- REALMLIST -->
        <div class="realmlist home_container">
            <p>set realmlist <font color="#817464">heroes-wow.com</font></p>
        </div>
    <!-- REALMLIST.End -->

  
  	<div class="index-status-container home_container">

		<!-- REALM -->
                    <div class="realm_st realm_st_pandaria">

                            <div class="realmst_head">
                                <div class="realm_name">
                                    <span id="realm-status-1">
                                        <script>
                                            $(function()
                                            {
                                                WarcryQueue('onload').add(function()
                                                {
                                                    updateRealmStatus(1);
                                                });
                                            });
                                        </script>
                                    </span>
                                    Unlimited
                                </div>
                                <p class="realm-desc">Fun Realm, 255 Level, PvE</p>
                            </div>
                        </a>
                    </div>
                <!-- REALM.End --><!-- REALM -->
                    <div class="realm_st realm_st_wotlk">

                            <div class="realmst_head">
                                <div class="realm_name">
                                    <span id="realm-status-3">
                                        <script>
                                            $(function()
                                            {
                                                WarcryQueue('onload').add(function()
                                                {
                                                    updateRealmStatus(3);
                                                });
                                            });
                                        </script>
                                    </span>
                                    Fallen Heroes
                                </div>
                                <p class="realm-desc">Blizzlike x100</p>
                            </div>
                        </a>
                    </div>
                <!-- REALM.End -->    	
        <script>
			//Update the teamspeak server status
			$(function()
			{
				WarcryQueue('onload').add(function()
				{
					updateTeamspeakStatus();
				});
			});
		</script>
        
    	<div class="ts-status">
        	<h3>Discord is <p class="status" id="teeamspeak-status"><font color="#313F09">Online</font></p></h3>
            <a href="https://discord.gg/ZKB6utW" target="_blank" id="download-ts">Connect</a>
        </div>
    	<div class="ts-status">
        	<h3>TEAMSPEAK is <p class="status" id="teeamspeak-status"><font color="#313F09">Online</font></p></h3>
            <a href="https://www.teamspeak.com/?page=downloads" target="_blank" id="download-ts">Download TS3 Client</a>
            <a href="https://heroes-wow.com/wotlk/index.php?page=howto&activate=1" id="download-htc">How to Connect</a>
        </div>
        
       	<div class="logon-status">
        	<div id="logon-status">
            	<script>
				$(function()
				{
					WarcryQueue('onload').add(function()
					{
						updateLogonStatus();
					});
				});
				</script>
            	<h3>LOGON Status: <br /><p class="status" id="logon-status2">Unknown</p></h3>
                <!--<p>2 days 2 hours 52 min Uptime</p>-->
            </div>
            <div id="server-time">
            	<script>
					ServerTimeCloack();
				</script>
            	<span>Server Time</span>
                <p id="server-time-cloack">00:00:00</p>
            </div>
        </div>
    </div>

    <div class="spotlight home_container">
    	
        
			<div class="sub_header">
				<h1>Spotlight</h1>
				<div class="title_overlay"></div>
			</div>
    
			<div class="blueberry">
				<ul class="slides">
					<li style="position: relative">
						
						<div class="spotlight_image">
							<img src="<?= base_url(); ?>assets/images/79f88_utgarde_keep_loading_screen.jpg" />
							<span class="spotlight_image_overlay"></span>
						</div>
						<h1><a href="https://heroes-wow.com/wotlk/index.php?page=article&id=40">Utgarde Keep</a></h1>
						<h4><font color="#4c4235">19 Nov, 2016</font> &nbsp;&nbsp;&nbsp; 1179 Views &nbsp;&nbsp;&nbsp; 2 Comments</h4>
						<p>Utgarde Keep is open now. </p>
					</li>
					<li style="display: none">
						
						<div class="spotlight_image">
							<img src="<?= base_url(); ?>assets/images/8c1fe_pvp_ranking.png" />
							<span class="spotlight_image_overlay"></span>
						</div>
						<h1><a href="https://heroes-wow.com/wotlk/index.php?page=article&id=38">PvP Ranking</a></h1>
						<h4><font color="#4c4235">23 Oct, 2016</font> &nbsp;&nbsp;&nbsp; 3291 Views &nbsp;&nbsp;&nbsp; 2 Comments</h4>
						<p>PvP Ranking added to website.</p>
					</li>
					<li style="display: none">
						
						<div class="spotlight_image">
							<img src="<?= base_url(); ?>assets/images/eba4a_wowscrnshot_070608_195911.jpg" />
							<span class="spotlight_image_overlay"></span>
						</div>
						<h1><a href="https://heroes-wow.com/wotlk/index.php?page=article&id=37">Emerald Dragons</a></h1>
						<h4><font color="#4c4235">20 Sep, 2016</font> &nbsp;&nbsp;&nbsp; 6109 Views &nbsp;&nbsp;&nbsp; 5 Comments</h4>
						<p>Emerald Dragons returned.</p>
					</li>
				</ul>
				
				<!-- Optional, see options below -->
				<ul class="pager"><li><a href="#"><span></span></a></li><li><a href="#"><span></span></a></li><li><a href="#"><span></span></a></li>
				</ul>
				<!-- Optional, see options below -->
				
			</div>
	</div>
    
</div>


<!-- Sidebar.End -->

<div class="clear"></div>

</div>

<!-- Include Social APIs -->
<div id="fb-root"></div>
<script>
    
 $(function() {
  $('.vote-inf').on("click", function(){
    if( $(this).hasClass("active") ){
      $(this).removeClass("active");
    } else {
      $(this).addClass("active");
    }
  });
  
});
    
</script>
   <!-- BODY Content end here -->
   </div>
  </div>
 </div>
 <!-- BODY-->
 </div>
