<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>

<?php getComponent("pageheader", $data['pageheader']); ?>

<section class="contact">
	<div class="container">
		

		<section class="contact-content">
			<h3> - <?php /*(214) 702-6752 -*/ ?> Dallas, TX</h3>
			<blockquote>
				I try to be available to anyone who's trying to reach out to me. If you have questions or concerns the best way to get a hold of me is through social media. Shoot me a quick message on twitter or find me on linkedin. I'm currently not looking for new clients but if you are looking for a quote on a project you can still reach out to me in the same way.
			<?php /*Have questions or concerns for me? Shoot me an email here and I'll get back with you as soon as possible. Give me your name, email address, city where you reside, and a detailed message here. I love hearing from my clients and potential clients, so if you have any questions or concerns please do not hesitate to contact me!*/ ?></blockquote>
		</section>

		<section class="container">
			<?php getComponent("social_list", $data['social-data']); ?>
			<hr />
			<?php getComponent("specialties_block", $data['specialties']); ?>
		</section>
	</div>
		<?php getComponent("besection", $data['bedata']); ?>

	<div class="container">	
		<section class="contact-about">
			<blockquote><?= $data['about-text'] ?></blockquote>
			
				<?php /*		
			<form role="form" action="" method="post" class="stacked-form">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" id="name" placeholder="Full Name" name="name" />
				</div>
				<div class="form-group">
					<label for="company">Company Name:</label>
					<input type="text" id="company" placeholder="Company Name (optional)" name="company" />
				</div>
				<div class="form-group">
					<label for="email">Contact Email:</label>
					<input type="text" id="email" placeholder="Contact@Email.com" name="email" />
				</div>
				<div class="form-group">
					<label for="phone">Contact Phone#:</label>
					<input type="text" id="phone" placeholder="Contact Phone# (optional)" name="phone" />
				</div>
				<div class="form-group">
					<label for="reason">Reason For Contacting:</label>
					<select id="reason" name="reason">
						<option>- Select Reason -</option>
						<option>Looking for a quote</option>
						<option>Need more info.</option>
						<option>Other</option>
					</select>
				</div>
				<div class="form-group">
					<label for="message">More details:</label>
					<textarea id="message" name="message" placeholder="Ender more details here."></textarea>
				</div>
				<input type="submit" value="Send!" class="btn-submit" />
				<input type="hidden" name="site" value="ampnetmedia">
				<input type="hidden" name="token" value="816a845c051917b9fe7d38166aa0828b">
			</form> */ ?>
		</section>
	<div>
</section>

<?php getFooter($data['footerdata']); ?>