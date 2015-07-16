<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<title><?php echo $title_for_layout; ?>
</title>
<?php
echo $this->Html->meta('icon', $this->Html->url('/../fav.png'));
/*for default whole page layout*/
echo $this->Html->css('main');

/*for jQuery*/
echo $this->Html->script('jQuery/Datepicker/jquery-1.3.2.min');

/*for cufon*/
echo $this->Html->script('cufon/cufon-yui');
echo $this->Html->script('cufon/Chiller_400.font');

/*for fancybox*/
echo $this->Html->css('fancybox/jquery.fancybox-1.3.3', null, array('media' => 'screen'));
echo $this->Html->script('fancybox/jquery.fancybox-1.3.3.pack');

echo $scripts_for_layout;

?>
<script type="text/javascript">
	Cufon.replace(".header");
</script>
</head>
<body bgcolor="#ffffff">
	<div class="wrapper">
		<!-- Start Border-->
		<div id="border">
			<!-- Start Header -->
			<div class="header">
				<div style="float: left; padding: 0px 0px 0px 6px;">
					<p>&nbsp;</p>
					<a href="http://www.myspace.com/paydirtau/radio">
					<?php echo $this->Html->image('k10387380.jpg', array('style' => 'height:90px; border: 0px;')); ?>
					</a>
				</div>
				<div style="float: right; padding: 0px 0px 0px 0px;">
					<font
						style="font-size: 48.0pt; font-weight: bold; color: #dc9e38">www</font><font
						style="font-size: 72.0pt; font-weight: bold; color: #dc9e38">.PayDirtDollars.</font><font
						style="font-size: 48.0pt; font-weight: bold; color: #dc9e38">com</font>
				</div>
			</div>
			<!-- End Header -->
			<!-- Start Right Column -->
			<div id="rightcolumn">
				<!-- Start Main Content -->
				<div class="maincontent" style="background-color:black;">
					<center>
						<b><font color="red"><?php echo $this->Session->flash(); ?></font> </b>
					</center>
					<div class="content-top"></div>
					<div class="content-mid">

						<?php echo $content_for_layout; ?>

					</div>
					<div class="content-bottom"></div>
				</div>
				<!-- End Main Content -->
			</div>
			<!-- End Right Column -->
		</div>
		<!-- End Border -->
		<!-- Start Footer -->
		<div id="footer">
			<font size="2" color="white"><b>Copyright &copy; 2010 PayDirtDollars All
					Rights Reserved.&nbsp;&nbsp;</b> </font>
		</div>
		<!-- End Footer -->
	</div>
	
	<!-- Pop up window for redirecting to NCC -->
	<div style="display:none">
		<a id="attentions_link" href="#attentions_for_agents">show attentions</a>
	</div>
	<div style="display:none">
		<div id="attentions_for_agents" style="width:800px;color:red;">
		WELCOME TO NEW  IMPROVED PDD STATS.  OUR NEW NAME IS: "NINJA'S CHAT CLUB" PLEASE USE THIS URL
		(<a href="http://www.ninjaschatclub.com/NinjasChatClub">http://www.ninjaschatclub.com/NinjasChatClub</a>)
		TO LOG IN TO YOUR NEW STATS.
		<br/>
		TO LOG IN USE SAME USER  NAME AND PASSWORD YOU USED ON PDD.
		</div>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery("a#attentions_link").fancybox({
				'type': 'inline',
				'overlayOpacity': 0.6,
				'overlayColor': '#0A0A0A',
				'modal': true
			});
			jQuery("a#attentions_link").click();
		});
	</script>
	
	<!-- To avoid delays, initialize Cufón before other scripts at the bottom -->
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
