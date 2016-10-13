
<ul id="mainNav">
<!-- Removed as it does not work in Safari
	<li class="hide"><a href="content" title="s is the accesskey for skipping to main content." accesskey="s">Skip to Main Content</a></li>
-->
	<li <?php echo(isset($section[1]) ? 'class="sub"' : '') ?>><a href="/aboutus/" title="About Us" <?php echo(isset( $section[1] ) ? 'class="selected"' : '') ?>>About Us</a>
		<ul>
			<li><a href="/aboutus/who_we_are.php" title="Board &amp; Staff" <?php echo(isset( $page[1] ) ? 'class="selected"' : '') ?>>Who We Are</a> |</li>
			<li><a href="/aboutus/events.php" title="Events" <?php echo(isset( $page[2] ) ? 'class="selected"' : '') ?>>Events</a> |</li>
			<li><a href="/aboutus/news.php" title="News" <?php echo(isset( $page[3] ) ? 'class="selected"' : '') ?>>News</a> |</li>
			<li><a href="/aboutus/partners.php" title="Partners" <?php echo(isset( $page[4] ) ? 'class="selected"' : '') ?>>Partners</a> |</li>
            		<li><a href="/aboutus/facility.php" title="Facility" <?php echo(isset( $page[5] ) ? 'class="selected"' : '') ?>>Facility</a> |</li>
			<li><a href="/aboutus/newsletter/index.php" title="Newsletters" <?php echo(isset( $page[6] ) ? 'class="selected"' : '') ?>>Newsletters</a> |</li>
			<li><a href="/aboutus/career.php" title="Career" <?php echo(isset($page[8]) ? 'class="selected"' : '')?>>Career</a> |</li>
			<li><a href="/aboutus/contact_us.php" title="Contact Us" <?php echo(isset( $page[7] ) ? 'class="selected"' : '') ?>>Contact Us</a></li>
		</ul> 	
	</li>
	<li <?php echo(isset( $section[2] ) ? 'class="sub"' : '') ?>><a href="/employers/" title="For Employers" <?php echo(isset( $section[2] ) ? 'class="selected"' : '') ?>>For Employers</a>
		<ul>
			<li><a href="/employers/reserveworker.php" title="Reserve Worker" <?php echo(isset( $page[2] ) ? 'class="selected"' : '') ?>>Reserve Worker</a> |</li>
			<li><a href="/employers/services.php" title="Services" <?php echo(isset( $page[3] ) ? 'class="selected"' : '') ?>>Services</a> |</li>
			<li><a href="/employers/success_stories.php" title="Success Stories" <?php echo(isset( $page[4] ) ? 'class="selected"' : '') ?>>Success Stories</a> |</li>
			<li><a href="/employers/faq.php" title="Frequently Asked Questions" <?php echo(isset( $page[1] ) ? 'class="selected"' : '') ?>>Frequently Asked Questions</a></li>
		</ul> 	
	</li>
	<li <?php echo(isset( $section[3] ) ? 'class="sub"' : '') ?>><a href="/workers/" title="For Workers" <?php echo(isset( $section[3] ) ? 'class="selected"' : '') ?>>For Workers</a>
		<ul>
			<li><a href="/workers/other_programs.php" title="Programs" <?php echo(isset( $page[2] ) ? 'class="selected"' : '') ?>>Programs</a> |</li>
			<!--li><a href="/workers/resources.php" title="Resources" <?php echo(isset( $page[3] ) ? 'class="selected"' : '') ?>>Resources</a></li-->
			<li><a href="/workers/success_stories.php" title="Success Stories" <?php echo(isset( $page[4] ) ? 'class="selected"' : '') ?>>Success Stories</a> |</li>
			<li><a href="/workers/faq.php" title="Frequently Asked Questions" <?php echo(isset( $page[5] ) ? 'class="selected"' : '') ?>>Frequently Asked Questions</a></li>
		</ul> 			
	</li>
	<li <?php echo(isset( $section[4] ) ? 'class="sub"' : '') ?>><a href="/volunteer/" title="For Volunteers" <?php echo(isset( $section[4] ) ? 'class="selected"' : '') ?>>For Volunteers</a>
		<ul>
			<li><a href="/volunteer/signup.php" title="Sign Up" <?php echo(isset( $page[3] ) ? 'class="selected"' : '') ?>>Sign Up</a> |</li>
			<li><a href="/volunteer/opportunities.php" title="Opportunities" <?php echo(isset( $page[2] ) ? 'class="selected"' : '') ?>>Opportunities</a> |</li>
			<li><a href="/volunteer/success_stories.php" title="Success Stories" <?php echo(isset( $page[4] ) ? 'class="selected"' : '') ?>>Success Stories</a> |</li>
			<li><a href="/volunteer/faq.php" title="Frequently Asked Questions" <?php echo(isset( $page[1] ) ? 'class="selected"' : '') ?>>Frequently Asked Questions</a></li>
		</ul> 	
	</li>
	<li class="last"><a href="/donate.php" title="For Donors" <?php echo(isset( $section[5] ) ? 'class="selected"' : '') ?>>For Donors</a></li>
</ul>