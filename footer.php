<!-- footer -->
<footer class="py-5">
  <div class="container py-md-3">
    <div class="footer-grids">
        <div class="footer-grid left">
          <h2 class="logo"><a href="index.html"><span class="fa fa-server"></span> IntellCap</a></h2>
        </div>
      <div class="middle">
        <p>© 2021 IntellCap. All Rights Reserved | Design by <a href="index.html"
            target="_blank">IntellCap</a></p>
      </div>
      <div class="right">
        <ul class="social">
          <li><a href="#url"><span class="fa fa-facebook icon_facebook"></span></a></li>
          <li><a href="#url"><span class="fa fa-twitter icon_twitter"></span></a></li>
          <li><a href="#url"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
          <li><a href="#url"><span class="fa fa-dribbble icon_dribbble"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</footer>
<!-- //footer -->