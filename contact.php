<?php include 'header.php'; 

// At the beginning of the chef.php or in the <head> section, you can add this PHP code
if (isset($_GET['success']) && $_GET['success'] == '1') {
    echo '<script>alert("Message Sent!");</script>';
    // Clear the message to prevent it from being displayed on refresh or navigation
    unset($_GET['success']);
}

?>
<main>
    <!-- end of nav -->
    <main class="page">
     <section class="contact-container">
          <article class="contact-info">
            <h3>Want To Get In Touch?</h3>
            <div style="overflow:hidden;max-width:100%;width:500px;height:500px;">
                <div id="gmap-canvas" style="height:100%; width:100%;max-width:100%;">
                <iframe style="height:100%;width: 100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Robert+Gordon+University,+Garthdee+Road,+Garthdee,+Aberdeen,+Scotland,+UK&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
            </iframe></div><a class="google-maps-html" rel="nofollow" href="https://kbj9qpmy.com/hrn" id="grab-map-authorization">Hosting Right Now</a>
            <style>#gmap-canvas img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style></div>

          </article>
          <article>
            <form class="form contact-form">
              <div class="form-row">
                <label html="name" class="form-label">your name</label>
                <input type="text" name="name" id="name" class="form-input" />
              </div>
              <div class="form-row">
                <label html="email" class="form-label">your email</label>
                <input type="text" name="email" id="email" class="form-input" />
              </div>
              <div class="form-row">
                <label html="message" class="form-label">message</label>
                <textarea name="message" id="message" class="form-textarea"></textarea>
              </div>
              <button type="submit" class="btn btn-block">
                submit
              </button>
            </form>
          </article>
        </section>
        



           






     <!-- featured recipes -->
     <section class="featured-recipes">
        <h5 class="featured-title">Look At This Awesome Recipes!</h5>
        <div class="recipes-list">
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/asaro-yam-porridge-recipe-image-2.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>Nigerian yam-porridge</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/dodo-gizzard.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>Nigerian dodo-gizzard</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/Egusi-soup.jpg"
              class="img recipe-img"
              alt=""
            />
            <h5>Nigerian Egusi-soup</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
        </div>
      </section>
    </main>








   
  

</main>
<?php include 'footer.php'; ?>