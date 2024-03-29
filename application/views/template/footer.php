<footer>
		<div class="container margin_120_95">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></p>
					<p>Java8s.com offers Academic Training, Online Training, Industrial Training, Corporate Training, Internship Program and Winter Training.</p>
					<div class="follow_us">
						<ul>
							<li>Follow us</li>
							<li><a href="#0"><i class="ti-facebook"></i></a></li>
							<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#0"><i class="ti-google"></i></a></li>
							<li><a href="#0"><i class="ti-pinterest"></i></a></li>
							<li><a href="#0"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="#0">Projects</a></li>
						<li><a href="#0">About</a></li>
						<li><a href="<?=base_url('auth/login')?>">Login</a></li>
						<li><a href="<?=base_url('auth/register')?>">Register</a></li>
						<li><a href="#0">News &amp; Events</a></li>
						<li><a href="#0">Contacts</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="ti-mobile"></i> 0674-2361252</a></li>
						<li><a href="mailto:info@udema.com"><i class="ti-email"></i> info@silantechnology.com</a></li>
					</ul>
					<div id="newsletter">
					<h6>Newsletter</h6>
					<div id="message-newsletter"></div>
					<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
						<div class="form-group">
							<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
							<input type="submit" value="Submit" id="submit-newsletter">
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2019 <a href="http://silantechnology.com">SilanTechnology</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
    <script src="<?=base_url('assets')?>/js/jquery-2.2.4.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="<?=base_url('assets')?>/js/common_scripts.js"></script>
    <script src="<?=base_url('assets')?>/js/main.js"></script>
	<script src="<?=base_url('assets')?>/js/validate.js"></script>
	<script>
		// Comment Verification
		$(function() {
			$("form[name='comment']").validate({
				rules: {
					name: "required",
					content: "required",
					email: {
						required: true,
						email: true
					}
				},
				messages: {
					name: "Please enter your Full Name",
					content: "Please enter your Message",
					email: "Please enter a valid email address"
				},
				submitHandler: function(form) {
					form.submit();
				}
			});
		});
	</script>
	
</body>
</html>