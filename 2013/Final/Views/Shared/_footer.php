<div class="footer navbar-inverse navbar-fixed-bottom" role="navigation">
    	
    	<div class="container">

   			 	footer
   		</div>
</div>

<?
	$pages = array(
		
		'about'=> array(
			'url' =>'about.php',
			'section' => 'about',
			'title' => 'About'
		),
		'contact'=> array(
			'url' => 'contact.php',
			'section' => 'contact',
			'title' => 'Contact'
		)
	);
?>
    
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	
    	<div class="container">

   			 <div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
				
			<div class="collapse navbar-collapse nav-c">
				
				<ul class="nav navbar-nav">
				
					<!-- Get each key and value pair in the $pages array , dynamically generates a list of links-->
					<? foreach($pages as $name => $data): ?>
							
						<li class=" <?=$data['section']?> "> 
							
							
							<a href="<?= "?action=".$name; ?>"> 
								<?=$data['title'] ?> 
							</a>
						</li>
						
					<? endforeach; ?>
					
				</ul>
				
			</div>
		</div>
	</div>
	<!-- End navbar-->
	

