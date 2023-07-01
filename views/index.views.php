<!DOCTYPE html>
<html lang="en">
<?php require("views/partials/head.php") ?>
<body>
 
<?php require("views/partials/nav.php") ?>
           

        
        <div class="hero-section"><h4 id="Transform-y-s">Transform your space into a sanctuary of style and comfort</h4> <h2 id="THP">THE HOMETERIOR PLACE</h2> <button id="shop-button">LUXURY AT ITS  FINEST</button></div>
        <div class="display-section">
            <div class="sub"> <div class="s-item1"> <img src="assests/imgs/desktop-view/closet.svg" alt=""> </div> <div class="s-item2"> <img src="assests/imgs/desktop-view/dinning.svg" alt=""></div></div>
            <div class="item1"><img src="assests/imgs/desktop-view/Master bedroom.svg" alt="Master"></div>
            <div class="item2"><img src="assests/imgs/desktop-view/Group 1.svg" alt=""></div>
        </div>

    <div class="Recommendation-Component"> <div class="title"><h3>Our Recommendations</h3>
</div> <div class="Recommendation-items">

<input type="radio" name="R-items" id="Best-sellers" value="option1" checked  > 
<label for="Best-sellers">Best sellers</label>
<input type="radio" name="R-items" id="Popular" value="option2" > 
<label for="Popular">Popular</label>

<input type="radio" name="R-items" id="Dining-tables" value="option3"  > 
<label for="Dining-tables">Dining tables</label>

<input type="radio" name="R-items" id="Beds" value="option4"  > 
<label for="Beds">Beds</label>





</div> </div>
    <div class="Recommended-items-cards">
    <div class="ritem"><div class="product-image"><img src="views/imgs/hot 1.svg" alt="couldn't load image" id="img1"> </div> <div class="product-description"><p class="prize">Prize</p> <p class="Product-name">Sofa</p></div></div>
    <div class="ritem"><div class="product-image"><img src="views/imgs/mirrors 1.svg" alt="couldn't load image" id="img2"> </div> <div class="product-description"><p class="prize">Prize</p> <p class="Product-name">Sofa</p></div></div>
    <div class="ritem"><div class="product-image"><img src="views/imgs/kitchen 1.svg" alt="couldn't load image" id="img3"> </div> <div class="product-description"><p class="prize">Prize</p> <p class="Product-name">Sofa</p></div></div>
    <div class="ritem"><div class="product-image"><img src="views/imgs/sofa.svg" alt="couldn't load image"id="img4"> </div> <div class="product-description"><p class="prize">Prize</p> <p class="Product-name">Sofa</p></div></div>
    <?php require("views/partials/pagination.php") ?>
</div>
<div class="collections-section"><div class="Bespoke-furniture"><h2>BESPOKE FURNITURE</h2> <h3>Collection</h3> <button>Shop Now</button></div> 
<div class="Bespoke-interior"><h2>BESPOKE INTERIOR</h2> <h3>Collection</h3> <button>Shop Now</button></div>
 <div class="Bespoke-design"><h2>BESPOKE DESIGNS</h2> <h3>Collection</h3> <button>Shop Now</button></div></div>
 <div class="reasons-container"><div class="Reason"><h3>Why Choose the Hometerior Place</h3> <div class="box1"><div class="sb1"><img src="assests/imgs/desktop-view/design-box.svg" alt="design-box"><h3>Design</h3><p>We inspire you with trendy colorful designs, customize the home furniture exactly in your mind.</p></div>
 <div class="sb2"><img src="assests/imgs/desktop-view/Quality-box.svg" alt="Quality-box"><h3>Quality</h3> <p>We ensure high quality with advanced German machines and strict quality inspection procedures.</p></div></div> 
 <div class="box2"><div class="sb3"><img src="assests/imgs/desktop-view/service.svg" alt="service"><h3>Service</h3><p>A team of 2000+ members serves you on sales, design, shipping, inspection, installation and after-sales.</p></div> 
 <div class="sb4"><img src="assests/imgs/desktop-view/eco-friendly.svg" alt="Eco friendly"> <h3>Eco Friendly</h3> <p>Our raw materials & manufacturing process meet Euro E1 standard, the symbol of quality & health.</p></div></div></div>
 </div>

 <div class="feautured">
    <h3>Feautured Products</h3>
    <div class="Recommended-items-cards">
        <div class="ritem"><div class="product-image"><img src="views/imgs/hot 1.svg" alt="couldn't load image" ></div> <div class="product-description"><p class="prize">Prize</p> <p class="Product-name">Sofa</p></div></div>
        <div class="ritem"><div class="product-image"><img src="views/imgs/mirrors 1.svg" alt="couldn't load image"></div> <div class="product-description"><p class="prize">Prize</p> <p class="Product-name">Sofa</p></div></div>
        <div class="ritem"><div class="product-image"><img src="views/imgs/sofa.svg" alt="couldn't load image"></div> <div class="product-description"><p class="prize">Prize</p> <p class="Product-name">Sofa</p></div></div>
        <div class="ritem"><div class="product-image"><img src="views/imgs/hot 1.svg" alt="couldn't load image"> </div> <div class="product-description"><p class="prize">Prize</p> <p class="Product-name">Sofa</p></div></div>
        <?php require("views/partials/pagination.php") ?>
    </div>
 </div>


</body>
<?php require("views/partials/foot.php");?>
</html>