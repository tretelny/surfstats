      <!-- FOOTER -->
<footer>
   <div class="container">	
		<div class="row">
			<div class="span3">
		        <a class="surfscore-brand" href="home.php">surfscore</a>
		        <h4 class="custom-h4">Technical Feedback for Surfers</h4>
		        <p>&copy; <?php echo date('Y'); ?> surfscore, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
			</div>
			<div class="nav navbar-inverse">
				<div class="span2 offset1">
					<h4 class="custom-h4">About</h4>
						<ul class="nav">
							<li><a href="team.php">team</a></li>
							<li><a href="news.php">news</a></li>
							<li><a href="#">contact</a></li>
						</ul>
				</div>
				<div class="span2">
					<h4 class="custom-h4">Surfscore</h4>
						<ul class="nav">
							<li><a href="home.php#howitworks-section">how it works</a></li>
							<li><a href="home.php#data-section">features</a></li>
							<li><a href="#">sign-up</a></li>
						</ul>
				</div>
				<div class="span2">
					<h4 class="custom-h4">Follow us</h4>
						<ul class="nav">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">twitter</a></li>
							<li><a href="#">rss</a></li>
						</ul>
				</div>
			</div>
		</div><!-- /.row -->	    
	</div><!-- /.container -->
</footer>




    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/bootstrap-transition.js"></script>
    <script src="./js/bootstrap-alert.js"></script>
    <script src="./js/bootstrap-modal.js"></script>
    <script src="./js/bootstrap-dropdown.js"></script>
    <script src="./js/bootstrap-scrollspy.js"></script>
    <script src="./js/bootstrap-tab.js"></script>
    <script src="./js/bootstrap-tooltip.js"></script>
    <script src="./js/bootstrap-popover.js"></script>
    <script src="./js/bootstrap-button.js"></script>
    <script src="./js/bootstrap-collapse.js"></script>
    <script src="./js/bootstrap-carousel.js"></script>
    <script src="./js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
<script type="text/javascript" id="js">
  $(document).ready(function() {
    $('#table').bind('click', function() {
      $('#th1').siblings().css({'border-bottom':'none', 'background-color':'inherit'});
      $('#th1').css({'border-bottom':'10px solid red', 'background-color':'white'});
      $('#th2').siblings().css({'border-bottom':'none', 'background-color':'inherit'});
      $('#th2').css({'border-bottom':'10px solid red', 'background-color':'white'});
      $('#th3').siblings().css({'border-bottom':'none', 'background-color':'inherit'});
      $('#th3').css({'border-bottom':'10px solid red', 'background-color':'white'});
    });
    $('#table').trigger('click');
    // call the tablesorter plugin
    $("#table").tablesorter({sortList: [[2,1]],});
    $("#table2").tablesorter({sortList: [[2,1]],});
    $("#table3").tablesorter({sortList: [[2,1]],});
    $(".tableheader").click(function() {
      console.log(this);
      $(this).siblings().css({'border-bottom':'none', 'background-color':'inherit'});
      $(this).css({'border-bottom':'10px solid red', 'background-color':'white'}); }
                           );
    
  });
</script>    
  </body>
</html>
