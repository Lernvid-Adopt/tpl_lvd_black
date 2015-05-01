<head>
<jdoc:include type="head" />
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Copyright LernVid.com - Creative Commons Sharalike 3.0" />
<link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/joomla.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/<?php echo $this->params->get('colorVariation'); ?>.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="templates/<?php echo $this->template ?>/css/colors1.css" title="styles1" media="screen" />
<link rel="stylesheet" type="text/css" href="templates/<?php echo $this->template ?>/css/colors2.css" title="styles2" media="screen" />
<link rel="stylesheet" type="text/css" href="templates/<?php echo $this->template ?>/css/colors3.css" title="styles3" media="screen" />
<link rel="stylesheet" type="text/css" href="templates/<?php echo $this->template ?>/css/colors4.css" title="styles4" media="screen" />
<link rel="stylesheet" type="text/css" href="templates/<?php echo $this->template ?>/css/colors5.css" title="styles5" media="screen" />
<link rel="stylesheet" type="text/css" href="templates/<?php echo $this->template ?>/css/colors6.css" title="styles6" media="screen" />
<link rel="stylesheet" type="text/css" href="templates/<?php echo $this->template ?>/css/colors7.css" title="styles7" media="screen" />
<link rel="stylesheet" type="text/css" href="templates/<?php echo $this->template ?>/css/colors8.css" title="styles8" media="screen" />
<!--[if IE 7]>
	<link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
	<link href="templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
</head>

<?php
	if($this->countModules("position-7")&&!$this->countModules("position-8")){ $contentwidth="left";}
	if($this->countModules("position-8")&&!$this->countModules("position-7")){ $contentwidth="right";}
	if($this->countModules("position-7")&&$this->countModules("position-8")) {$contentwidth="middle"; }

	//parameter shortys
	$whatWidth = $this->params->get('whatWidth'); // dynamic or fixed width
	
	$app    = &JFactory::getApplication();
?>
