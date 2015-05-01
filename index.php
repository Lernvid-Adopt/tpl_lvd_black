<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<?php require("head_includes.php"); ?>
<body>
<div id="bg_up">
	<?php if($whatWidth == 1) : ?>
		<div id="wrapper" style="max-width:<?php echo htmlspecialchars($this->params->get('pageMaxWidth'));?>;">
	<?php endif;?>
	<?php if($whatWidth == 0) : ?>
		<div id="wrapper" style="width:<?php echo htmlspecialchars($this->params->get('pageWidth'));?>;">
	<?php endif;?>
		<div id="header_container">
			<div id="header">
				<?php if (($this->params->get('showLogo')) !=0) : ?>
					<div id="logo"></div>
				<?php endif; ?>
				<?php if (($this->params->get('showSitetitle')) !=0) : ?>
					<a id="sitetitle" style="color: #<?php echo  $this->params->get('FontColor');?>; ; font-size:<?php echo  $this->params->get('FontSize');?>px;" href="" class="mootips" title="Go to Frontpage"><?php echo $app->getCfg('sitename'); ?></a>
				<?php endif; ?>
				<?php if (($this->params->get('showStyleswitcher')) !=0) : ?>
					<div id="styleswitcher">
						<noscript>Switcher needs Javascript enabled!</noscript>
						<ul>
							<li><a title="style 1" href="index.php" rel="styles1" class="styleswitch"><img src="templates/<?php echo $this->template ?>/images/styles1.png" alt="style 1"/></a></li>
							<li><a title="style 2" href="index.php" rel="styles2" class="styleswitch"><img src="templates/<?php echo $this->template ?>/images/styles2.png" alt="style 2"/></a></li>
							<li><a title="style 3" href="index.php" rel="styles3" class="styleswitch"><img src="templates/<?php echo $this->template ?>/images/styles3.png" alt="style 3"/></a></li>
							<li><a title="style 4" href="index.php" rel="styles4" class="styleswitch"><img src="templates/<?php echo $this->template ?>/images/styles4.png" alt="style 4"/></a></li>
							<li><a title="style 5" href="index.php" rel="styles5" class="styleswitch"><img src="templates/<?php echo $this->template ?>/images/styles5.png" alt="style 5"/></a></li>
							<li><a title="style 6" href="index.php" rel="styles6" class="styleswitch"><img src="templates/<?php echo $this->template ?>/images/styles6.png" alt="style 6"/></a></li>
							<li><a title="style 7" href="index.php" rel="styles7" class="styleswitch"><img src="templates/<?php echo $this->template ?>/images/styles7.png" alt="style 7"/></a></li>
							<li><a title="style 8" href="index.php" rel="styles8" class="styleswitch"><img src="templates/<?php echo $this->template ?>/images/styles8.png" alt="style 8"/></a></li>
						</ul>				
					</div>
				<?php endif;?>
			</div>
		</div>
		<div id="oben">
			<?php if($this->countModules('position-1')) : ?>
				<div id="navigation">
		             <jdoc:include type="modules" name="position-1" />
				</div>
			<?php endif; ?>
		</div>		
		<div id="container">
			<div id="content_up_outer">
				<div id="content_up">
					<div id="content_up_left">
						<?php if($this->countModules('position-2')) : ?>
							<div id="breadcrumbs">
								<div id="breadcrumbs_left">
					            	<jdoc:include type="modules" name="position-2" />
							    </div>
							    <div id="breadcrumbs_right"></div>
						    </div>
						<?php endif; ?>
						<div id="content_up_right">
							<?php if($this->countModules('position-0')) : ?>
								<div id="search">
									<div id="search_inner">
							             <jdoc:include type="modules" name="position-0" />
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>					
			<?php if($this->countModules('user5 or user6 or user6')) : ?>
				<div id="user_modules1">
						<?php if($this->countModules('user5')) : ?>
							<div id="user5">
								<jdoc:include type="modules" name="user5" style="xhtml" />
							</div>
						<?php endif; ?>				
						<?php if($this->countModules('user6')) : ?>
							<div id="user6">
								<jdoc:include type="modules" name="user6" style="xhtml" />
							</div>
						<?php endif; ?>				
						<?php if($this->countModules('user7')) : ?>
							<div id="user7">
								<jdoc:include type="modules" name="user7" style="xhtml" />
							</div>
						<?php endif; ?>				
						<div class="clr"></div>
			</div>
			<?php endif; ?>	
			<?php if($this->countModules('top')) : ?>
				<div id="top">
		             <jdoc:include type="modules" name="top" style="xhtml" />
				</div>
			<?php endif; ?>		
			<div class="clr"></div>
			<?php if($this->countModules('position-7')) : ?>
				<div id="sidebar_left">
		             <jdoc:include type="modules" name="position-7" style="rounded" />
				</div>
			<?php endif; ?>		
			<?php if($this->countModules('position-8')) : ?>
				<div id="sidebar_right">
		             <jdoc:include type="modules" name="position-8" style="rounded" />
				</div>
			<?php endif; ?>		
		    <div id="content_out<?php echo $contentwidth; ?>">
				<div id="content">
					<jdoc:include type="message" />						
					<jdoc:include type="component" />
				</div>
			</div>
			<div class="clr"></div>
			<div id="content_down">
				<div id="content_down_left">
				</div>
			</div>	
			<div id="container2">
				<?php if($this->countModules('user1 or user2')) : ?>
					<div id="user_modules2">
							<?php if($this->countModules('user1')) : ?>
								<div id="user1">
									<jdoc:include type="modules" name="user1" style="xhtml" />
								</div>
							<?php endif; ?>				
							<?php if($this->countModules('user2')) : ?>
								<div id="user2">
									<jdoc:include type="modules" name="user2" style="xhtml" />
								</div>
							<?php endif; ?>				
					</div>
				<?php endif; ?>				
				<div class="clr"></div>
				<div id="footer">
					<!-- It is Not allowed to delete the Backlink to the autors! -->
					<div id="copyright_info">
						<p>| Copyright <strong><?php echo $app->getCfg('sitename'); ?></strong> | Design &copy; <a href="http://www.lernvid.com" target="_blank" title="Templates">LernVid.com</a> &amp; <a href="http://www.qpattern.com" target="_blank" title="Webdesign">qpattern</a> |</p>
					</div>
					<?php if($this->countModules('footer')) : ?>
						<jdoc:include type="modules" name="footer" />
					<?php endif; ?>
					<div class="gotop"> <a href="#" class="gotoplink" title="go to top"></a></div>
				</div>
			</div>
		</div>
		<div class="clr"></div>
	</div>
</div>
<jdoc:include type="modules" name="debug" style="xhtml" />
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
	var $j = jQuery.noConflict();
</script>
<?php if (($this->params->get('showStyleswitcher')) !=0) : ?>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jq.css.switch.js"></script>
<?php endif;?>
<?php if (($this->params->get('useJavascript')) !=0) : ?>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jq.hover.js"></script>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jq.loadhover.js"></script>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jq.effects.js"></script>
<?php endif;?>
</body>
</html>