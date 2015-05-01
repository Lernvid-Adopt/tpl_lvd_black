$j(document).ready(function(){


//fadeTo
	$j("a#sitetitle,a.readon,a.latestnews,a.mostread,.blogsection").fadeTo("slow", 1.0);
	$j("a#sitetitle,a.readon,a.latestnews,a.mostread,.blogsection").hover(function(){
	$j(this).stop().fadeTo("slow", 0.5);
	},function(){
	$j(this).stop().fadeTo("slow", 1.0);
	});


//scroll to top
		$j('.gotoplink').click(function() {
			$j( 'html, body' ).animate( { scrollTop: 0 }, 'slow' );
			return false;
		});

      
 });
