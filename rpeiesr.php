
<?php
$n=100; 
function getName($n) { 
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	$randomString = ''; 

	for ($i = 0; $i < $n; $i++) { 
		$index = rand(0, strlen($characters) - 1); 
		$randomString .= $characters[$index]; 
	} 

	return $randomString; 
} 


?>

<?php  
session_start();  
if(!isset($_SESSION["uids"]))
{
$log = "Login";
}else{
	$logs =  $_SESSION['name'];
}


 
?> 
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="UTF-8">
	<title>Baking terms and Do It Yourself |DIY</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		
		<link rel="shortcut icon" href="img/fav.png">
		
		<meta name="author" content="yummyhomes Nigeria">
		
		<meta name="description" content="Over 300 Free best baking recipes of all time | Baking terms & DIY">
		<meta name="robots" content="index, follow">
		
		<meta name="keywords" content="recipes,cake,pudding,cheesecake,quick bread,muffins,cupcakes,healthy desserts,french desserts,pies,tarts, online baking,free baking,baking tutorial,owerri,imo state,Nigeria,ingredients,baking measurement conversion, free, Best, Baking, of all time">
		
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  
  
</head>

<body oncontextmenu="return false;">

  
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></a>
        
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
         
          <li>
          <a href="index?1d=p9076 3l7b e7218&<?php echo getName($n); ?>">Home</a></li>
							  <li><a href="#abts">About</a></li>
							  <li><a href="mairepueins.php?1d=p9076 3l7b e7218&<?php echo getName($n); ?>">Recipies</a></li>
							   <li  class="menu-active"><a href="rpeiesr?1d=870 &9l/0763l7e&<?php echo getName($n); ?>">Baking Terms</a></li>
							 
							  <li><a href="contact?1d=p9076 3l7b e7218&<?php echo getName($n); ?>">Contact</a></li>
							 <li><span class="lnr lnr-user" style="color:#7a2b00; font-weight:bold;"><a href=""><?php echo $logs;?></a></span></li>
							  <li><a href="ulogf?1d=p9076 3l7b e7218&<?php echo getName($n); ?>"><?php echo $log;?></a></li>
							  <li><a href="lotgtuo.php?1d=i jkk l7e7218&<?php echo getName($n); ?>">Logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
	
  <!--==========================
    Hero Section
  ============================-->
  <div class="se-pre-con"></div>
  <section id="hero">
    <div class="hero-container">
      <h1>Learn recipe terms</h1>
      <h2>And make some ingredients yourself</h2>
      <span><a href="#about" class="btn-get-started wow fadeInRight" data-wow-delay="0.4s">Do It Yourself</a>
		  <a href="#portfolio" class="btn-get-started wow fadeInLeft" data-wow-delay="0.8s">Baking Terms</a></span>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-6 order-lg-1 wow fadeInRight">
           <h2 class="title">Homemade Applesauce</h2>
          <img src="img/diyimages/applesauce_new.jpg">
         <div class="icon-box wow fadeInUp">
              
               <h4 class="title">Ingredients</h4>
              <p class="description"><li>4 apples, peeled, cored and chopped</li>
             	<li>¾ Cup (6oz/170g) water</li>
             	<li>¼ Cup (2oz/57g) sugar</li></p>
            </div>
            

          </div>
         
         
          <div class="col-lg-6 content order-lg-2 order-2">
           
            <div class="icon-box wow fadeInUp">
              
              <h4 class="title">Instructions</h4>
              <p class="description">1. Combine all ingredients in a medium sauce pan.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              
              <p class="description">2. Bring to a simmer(cook or heat until starts bubbling gently round the edge of the sauce pan or pot) over medium heat. Cover the sauce pan or pot and reduce heat to low and simmer(keep just below boiling point while bubbling gently) for twenty minutes.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
             
              <p class="description">3. Here you can add your favorite flavor eg vanilla, cinnamon etc. Then with an immersion blender, or electric blender, pulse or blend applesauce until smooth.</p>
            </div>
            
            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
             
              <p class="description">4. Serve warm or cold. Store in the fridge for up to 2 weeks or freeze it.</p>
            </div>

          <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
             
              <p class="description">Recipe Notes:
Use any variety of apple you like</p>
            </div>
         
          </div>

         
         
        </div>

      </div>
    </section><!-- #about -->
	</main>
   
       <!--==========================
      buttermilk Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-6 order-lg-1 wow fadeInRight">
           <h2 class="title">Homemade Buttermilk</h2>
          <img src="img/diyimages/buttermilk_new_1.jpg">
         <div class="icon-box wow fadeInUp">
              
               <h4 class="title">Ingredients</h4>
              <p class="description"><li>2 tablespoons freshly squeezed lemon juice or white vinegar</li>
             	<li>1 Cup (8oz / 224g) milk (full or low fat)</li>
             	</p>
            </div>
            

          </div>
         
         
          <div class="col-lg-6 content order-lg-2 order-2">
           
            <div class="icon-box wow fadeInUp">
              
              <h4 class="title">Instructions</h4>
              <p class="description">1. Measure the milk into a jug.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              
              <p class="description">2. Stir in lemon juice or vinegar into the milk. Stir to combine. Let sit for 30 minutes at room temperature
until the milk begins to curdle and becomes acidic.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
             
              <p class="description">3. Use in place of buttermilk in the recipe as it calls for. And if you don’t use it straight away, you can store it in the
fridge, it can last 3 days.</p>
            </div>
           
          <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
             
              <p class="description">Recipe Notes:
I don't recommend freezing Buttermilk. Dairy doesn't always defrost the same way.</p>
            </div>
         
          </div>

         
         
        </div>

      </div>
    </section><!-- #about -->

	
            
         <!--==========================
      coconutbutter Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-6 order-lg-1 wow fadeInRight">
           <h2 class="title">Homemade Coconut butter</h2>
          <img src="img/diyimages/coconut%20butter_new.jpg">
         <div class="icon-box wow fadeInUp">
              
               <h4 class="title">Ingredients</h4>
              <p class="description"><li>3 cups (9oz/255g) shredded unsweetened coconut</li>
             	<li>2 tablespoons coconut cream, or coconut oil</li>
             	<li>2 tablespoons Lakanto Maple Syrup or maple syrup or honey</li>
             	<li>1 tablespoon vanilla extract</li>
             	</p>
            </div>
            

          </div>
         
         
          <div class="col-lg-6 content order-lg-2 order-2">
           
            <div class="icon-box wow fadeInUp">
              
              <h4 class="title">Instructions</h4>
              <p class="description">1. Add the coconut, Lakanto maple syrup or maple syrup or honey and vanilla to your blender or food processor.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              
              <p class="description">2. Blend on high for 5 minutes until the coconut starts to blend down into an oily paste.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
             
              <p class="description">3. After 5 minutes, scrape down the sides of the blender or food processor then continue to blend for another 5-7 minutes until you have a smooth glossy butter.</p>
            </div>
            
            
            <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
             
              <p class="description">4. Cover and store at room temperature for up to three months.</p>
            </div>
           
          <div class="icon-box wow fadeInUp" data-wow-delay="0.8s">
             
              <p class="description">Recipe Notes: The coconut will harden at room temperature but still be spreadable.If you want it to be thinner or in liquid form, microwave it for 30 seconds.
If you do not want to use Lakanto Maple Syrup you can use regular maple syrup or honey but the coconut butter will no longer be sugar-free</p>
            </div>
         
          </div>

         
         
        </div>

      </div>
    </section><!-- #about -->

 <!--==========================
      cream cheese Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-6 order-lg-1 wow fadeInRight">
           <h2 class="title">Homemade Cream cheese</h2>
          <img src="img/diyimages/cream-cheese_1.jpg">
         <div class="icon-box wow fadeInUp">
              
               <h4 class="title">Ingredients</h4>
              <p class="description"><li>4 cups (32oz /1000ml) whole milk (full fat, not low fat)</li>
             	<li>2-3 tablespoons lemon juice (lime juice or white vinegar)</li>
             	<li>1/4 - 1/2 teaspoon salt (read notes)</li>
             	
             	</p>
            </div>
            

          </div>
         
         
          <div class="col-lg-6 content order-lg-2 order-2">
           
            <div class="icon-box wow fadeInUp">
              
              <h4 class="title">Instructions</h4>
              <p class="description">1. In a heavy-bottomed saucepan, heat the milk on med-high. Stirring constantly until it starts to a rolling
simmer(mildly boiling round the edge of the saucepan).</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              
              <p class="description">2. Reduce the heat to medium. Add the lemon juice 1 tablespoon at a time, in 1-minute intervals. Continue stirring constantly.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
             
              <p class="description">3. Continue cooking until the mixture curdles. Stir constantly till the mixture has separated completely, this should take just a few minutes. There will be a green liquid on the bottom and thick curdles on top.Remove from the heat. This should happen within a few minutes.</p>
            </div>
            
            
            <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
             
              <p class="description">4. cover a sieve with sievecloth and lay over a large bowl. Pour the curd mixture into the sieve. Let it strain and cool for about 15 minutes.</p>
            </div>
            
            <div class="icon-box wow fadeInUp" data-wow-delay="0.8s">
             
              <p class="description">5. Transfer curds to a food processor(blender) and process until curds have come together and are totally smooth and creamy. It will take around 3-4 minutes. Keep going if your cream cheese is grainy.</p>
            </div>
            
            <div class="icon-box wow fadeInUp" data-wow-delay="1s">
             
              <p class="description">6. Add salt and taste. Add more if you want more flavor. Now is also a good time to add herbs, garlic or any other flavors you like.</p>
            </div>
            
             <div class="icon-box wow fadeInUp" data-wow-delay="1.2s">
             
              <p class="description">7. This cream cheese must be stored in the fridge. I always use it within 7 days but can last as long as up to 2 weeks.</p>
            </div>
           
          <div class="icon-box wow fadeInUp" data-wow-delay="1.4">
             
              <p class="description">Recipe Notes: SMALL CURDS: I have heard feedback that lemon juice yields a smaller amount of curd than vinegar, and this may very well be true for pasteurized milk. Choose a white vinegar, cider vinegar/white wine vinegar will do it.
When using lemon juice use it fresh from the fruit.
SALT: Just add 1/4 teaspoon of salt and then taste. If you would like it saltier then feel free to add more.</p>
            </div>
         
          </div>

        </div>

      </div>
    </section><!-- #about -->

     
     
     <!--==========================
      date Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-6 order-lg-1 wow fadeInRight">
           <h2 class="title">Homemade date sugar</h2>
          <img src="img/diyimages/date-sugar_new.jpg">
         <div class="icon-box wow fadeInUp">
              
               <h4 class="title">Ingredients</h4>
              <p class="description"><li>1 large baking tray
A bag of fresh dates, pitted(seeds removed)
Silpat silicone mat or Parchment paper
				  Coffee grinder or food processor or blender</li>
             	</p>
            </div>
            

          </div>
         
         
          <div class="col-lg-6 content order-lg-2 order-2">
           
            <div class="icon-box wow fadeInUp">
              
              <h4 class="title">Instructions</h4>
              <p class="description">1.Preheat the oven 150C/300F/gas mark 2.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              
              <p class="description">2. Spread the pitted Dates evenly on the entire baking sheet lined with Silpat silicone mat or parchment paper.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
             
              <p class="description">3. Place the baking tray in the oven and allow the dates to roast in the oven until they are rock hard. Do not allow it to burn to charcoal, so be watchful on them during the entire process.</p>
            </div>
            
            
            <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
             
              <p class="description">4. The dates should have reached the desired stage in approximately 2 to 3 hours.</p>
            </div>
           
          <div class="icon-box wow fadeInUp" data-wow-delay="0.8s">
             
              <p class="description">5. Once done remove from the oven, set aside and let the dates cool completely. Once cooled and hardened, pulse or grind the dates in segments using either a food processor/coffee grinder/blender into a powdery form. The sugar may lump after pulverising, don’t worry this is normal and will still be used. Store in an airtight container (can last for several weeks).</p>
            </div>
         
          </div>

         
         
        </div>

      </div>
    </section><!-- #about -->

  
   <!--==========================
      dried mango Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-6 order-lg-1 wow fadeInRight">
           <h2 class="title">Homemade Dried Mango</h2>
          <img src="img/diyimages/dried-mango_new.jpg">
         <div class="icon-box wow fadeInUp">
              
               <h4 class="title">Ingredients</h4>
              <p class="description"><li>2 ripe mangoes</li>
             	</p>
            </div>
            

          </div>
         
         
          <div class="col-lg-6 content order-lg-2 order-2">
           
            <div class="icon-box wow fadeInUp">
              
              <h4 class="title">Instructions</h4>
              <p class="description">1. Preheat oven to 185ºF or as low as your oven will go.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              
              <p class="description">2. Place a Silpat silicone mat on a baking sheet(baking tray or pan as the case may be)</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
             
              <p class="description">3. Wash both mangoes, and use a peeler to remove the skin.</p>
            </div>
            
            
            <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
             
              <p class="description">4. Cut into thin slices, and place them on the Silpat.</p>
            </div>
           
          <div class="icon-box wow fadeInUp" data-wow-delay="0.8s">
             
              <p class="description">5. Put the mango in the oven, and bake for two to three hours, flipping them over every 30 minutes or until they're dry. Avoid cooking too long or you'll end up with mango chips!</p>
            </div>
         
         <div class="icon-box wow fadeInUp" data-wow-delay="1s">
             
              <p class="description">6. Store leftovers in an airtight container. Since this snack is preservative-free, enjoy them within a few days.</p>
            </div>
         
          </div>

         
         
        </div>

      </div>
    </section><!-- #about -->

  <!--==========================
      dried mango Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-6 order-lg-1 wow fadeInRight">
           <h2 class="title">Homemade Sour Cream</h2>
          <img src="img/sour-cream.jpg">
         <div class="icon-box wow fadeInUp">
              
               <h4 class="title">Ingredients</h4>
              <p class="description"><li>1 cup (8oz / 240g) heavy cream or whipping cream</li>
              <li>2 teaspoon lemon juice (or white vinegar)</li>
              <li>¼ cup (2oz / 60g) milk</li>
             	</p>
            </div>
            

          </div>
         
         
          <div class="col-lg-6 content order-lg-2 order-2">
           
            <div class="icon-box wow fadeInUp">
              
              <h4 class="title">Instructions</h4>
              <p class="description">1. Get a jar that has a tight screw cover, mix the cream and lemon juice (or vinegar) together inside the jar, then pour in the milk. cover the jar with its cover(Screw tightly) and shake well.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              
              <p class="description">2. Remove the jar cover and cover the jar very tight with a clean piece of kitchen paper using  rubber band to hold the kitchen paper tightly round the mouth of the jar.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
             
              <p class="description">3. Leave it covered with the kitchen paper and store under room temperature overnight (up to 24 hours) for it to set up.</p>
            </div>
            
            
            <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
             
              <p class="description">4. After 24 hours it should be quite firm. Give it a stir(turn it to mix well) and cover it with the jar cover. You can use immediately or store in refrigerator for later use(can last for 2 weeks).</p>
            </div>
           
          <div class="icon-box wow fadeInUp" data-wow-delay="0.8s">
             
              <p class="description">5. Note: Because there are no artificial thickeners, your homemade sour cream may be thinner than commercial brands you may be used to. Have no fear, it’s fine. I’ve gotten used to the consistency and like it better since it blends in recipes so well.</p>
            </div>
         
          </div>

        </div>

      </div>
    </section><!-- #about -->
    
    
    
    <!--==========================
      dried mango Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-6 order-lg-1 wow fadeInRight">
           <h2 class="title">Homemade Warm Milk</h2>
          <img src="img/warm%20milk_new.png">
         <div class="icon-box wow fadeInUp">
              
               <h4 class="title">Ingredients</h4>
              <p class="description">
              <li>milk</li>
             	</p>
            </div>
            

          </div>
         
         
          <div class="col-lg-6 content order-lg-2 order-2">
           
            <div class="icon-box wow fadeInUp">
              
              <h4 class="title">Instructions</h4>
              <p class="description">Add milk on the sauce pan or pot, heat mildly to bring to simmer(cook or heat until starts bubbling gently round the edge of the sauce pan or pot). enjoy your warm milk.
</p>
            </div>
			</div>
			</div>
      </div>
    </section><!-- #about -->


    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">BAKING TERMS</h3>
          <p class="section-description">These are the baking terms you 'll encounter when going through our recipes. Finding anyone difficult? Please contact us immediately.Thanks.</p>
        </div>
       

        <div class="row" id="portfolio-wrapper">
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <h3>FOLD-IN</h3>
            <a href="">
           
              <img src="img/folding.gif" alt="FOLD-IN">
              <div class="details">
                <h4>FOLD-IN</h4>
                <span>FOLD-IN is a gentle mixing method,spooning or turning or mixing from bottom to top with spatula or spoon. You use the folding technique to gently combine light and airy mixtures, such as beaten egg whites or whipped cream with a heavier mixture, such as a batter, flour or fruit purees. The aim is to mix the components without causing deflation.r</span>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
           <h3>Alternating</h3>
            <a href="">
              <img src="img/diyimages/alternating_new.gif" alt="">
              <div class="details">
                <h4>ALTERNATING</h4>
                <span>This refers to adding ingredients bit by bit in a certain time interval as you fold-in and not pouring the whole ingredients at once.</span>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
           <h3>Shredded coconut</h3>
            <a href="">
              <img src="img/7shredded%20coconut_new.jpg" alt="">
              <div class="details">
                <h4>SHREDDED COCONUT</h4>
               <span>Shredded coconut is simply the meat from fresh whole coconuts that has been dried and cut or grated into fine pieces. No artificial sweeteners, flavors, or no preservatives have been added. Shredded coconut gives the rich flavor of fresh coconuts to all manner of baked goods.</span>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.4s">
             <h3>Pitted</h3>
            <a href="">
             
              <img src="img/4pitted.gif" alt="">
              <div class="details">
                <h4>PITTED</h4>
                <span>fruit that the seed have been removed</span>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.4s">
           <h3>Cored</h3>
            <a href="">
              <img src="img/5cored.gif" alt="">
              <div class="details">
                <h4>CORED</h4>
                <span>Removing or cutting off the seed rack of fruits usually centred inside the fruit. It can be done with a coring tool or just use knife and cut it off.</span>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.4s">
           <h3>Coconut Flakes</h3>
            <a href="">
              <img src="img/6coconut%20flakes_new.jpg" alt="">
              <div class="details">
                <h4>COCONUT FLAKES</h4>
                <span>Coconut flakes
Unlike shredded coconut, coconut flakes is much larger. The coconut is shaved or grated or cut into long, wide flakes. Then toasted or baked, usually dry and brown in color.</span>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.6s">
           <h3>Simmer</h3>
            <a href="">
              <img src="img/diyimages/simmer_new.gif" alt="">
              <div class="details">
                <h4>SIMMER</h4>
                <span>(of water or food that is being heated) stay just below boiling point while bubbling gently.</span>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.6s">
           <h3>Cubed</h3>
            <a href="">
              <img src="img/diyimages/cubed_new_1.png" alt="">
              <div class="details">
                <h4>CUBED</h4>
                <span>Fruits in cube form or cut in cubes.</span>
              </div>
            </a>
          </div>

          

        </div>

      </div>
    </section><!-- #portfolio -->
<section id="abts">
				<div class="container">
					<div class="row">
					<div class="col-sm-6 d-flex flex-column address-wrap">
							<h6>About Us</h6>
							<p>
									@yummyhomes we make baking an art
								</p>	
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="fas fa-phone" ></span>
								</div>
								<div class="contact-details">
									<p style="color:white; margin-left:5px;">+2340853907916</p>
								
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="fas fa-envelope"></span>
								</div>
								<div class="contact-details">
									<p style="color:white; margin-left:5px;">support@yummyhomes.co</p>
									
								</div>
							</div>														
						</div>
					
					
						
						<div class="col-sm-6 ">
							<div class="single-footer-widget">
							
								<h6>Newsletter</h6>
								
								 <div class="single">
								<form action="menu?<?php echo  getName($n);?>" method="post" class="form-inline" autocomplete="off">
									
                                          <div class="input-group">
										<input class="form-control"  placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required type="email" id="subemail">
			                            	 <button class="btns" type="submit" id="submits">Subscribe</button>
        
									</div>
										
									</form>
									<div class="display-errors" style="display: none">
                                        </div>
							</div>
							</div>
						</div>						
						
									
					</div><br /><br /><br /><br />
					<hr style=" display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;">
					<center>
					<p> &copy;2019 Terms &amp; Conditions | Privacy Policy | Site Map</p>
					</center>
				</div>
				
			</section>	


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  
  <!-- Template Main Javascript File -->
  <script src="js/mains.js"></script>
  
  		<script>
			
			
  $(document).ready(function() {


      $('#submits').click(function(e){
        e.preventDefault();


       
        var email = $("#subemail").val();
        

        $.ajax({
            type: "POST",
            url: "subscribe",
            dataType: "json",
            data: {email:email},
            success : function(data){
                if (data.code == "200"){
                    $(".display-errors").html("<p>"+data.msg+"</p>");
                    $(".display-errors").css("display","block");
                } else {
                    $(".display-errors").html("<p>"+data.msg+"</p>");
                    $(".display-errors").css("display","block");
                }
            }
        });


      });
  });

    
			
			</script>		
			
			<script>
   $(window).load(function() {
		
		$(".se-pre-con").fadeOut("slow");;
	});
			</script>		
			
		<script>
	
	  document.onkeydown=function(e){
		  if(event.keyCode == 123){
			  return false;
		  }
		  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
			  return false;
		  }
		  
		  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
			  return false;
		  }
		  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
			  return false;
		  }
	  }
	  </script>
	
	</body>
</html>