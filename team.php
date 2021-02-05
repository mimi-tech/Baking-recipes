<?php include 'includes/head.php';?>
		
		  <style>
			  body{
				  margin:0;
				  padding: 0;
			  }
			  .preloader{
				  position: fixed;
				  top: 0;
				  left: 0;
				  width:100%;
				  height: 100%;
				  background: #000;
				  transition: 1s;
			  }
			  .preloader:before{
				  content: '';
				  position: absolute;
				  left: 0;
				  width: 50%;
				  height: 100%;
				  background: #000;
				  transition: 1s;
			  }
			  .preloader.complete:before{
				left: -50%;  
			  }
			  .preloader:after{
				  content: '';
				  position: absolute;
				  right: 0;
				  width: 50%;
				  height: 100%;
				  background: #000;
				  transition: 1s;
			  }
			  
			    .preloader.complete:after{
				right: -50%;  
			  }
			</style>
		  
		  <div class="preloader"></div>
		  
		  
		  
		  
		  <?php include 'includes/footer.php';?>
		  
		 <script type="text/javascript">
$(window).on('load',function(){
	$('.preloader').addClass('complete');
});
</script>
	    