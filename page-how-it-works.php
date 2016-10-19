<?php
/* Template Name: How it works */
?>
<?php get_header(); ?>
	<div class="content-page">
	<?php get_template_part('inc', 'process'); ?>

		<div class="container-on-main">
			<div class="container content-sm">
				<?php //get_template_part('loop'); ?>

				<header class="text-center underlined">
					To process your order faster we need you to follow these steps:
				</header>

				<strong>1.</strong> Specify paper length, academic level and order deadline. Mind that these parameters influence the order cost.
				<br>
				<strong>2.</strong> Select a relevant subject. We need it to assign a proper expert to your order.
				<br>
				<strong>3.</strong> Specify your topic or let us know if you need any help with it.
				<br>
				<strong>4.</strong> We craft papers according to the quality standards. You may choose any standard.
				<br>
				<strong>5.</strong> Set the number of sources to be used in your paper. If you have a list of sources at hand, provide it in the instruction field.
				<br>
				<strong>6.</strong> Provide detailed order instructions. Be as much specific as possible
				<ul>
					<li>Leave your comments in the order instruction field.</li>
					<li>Attach instructions given by your teacher/professor.</li>
					<li>Discuss your order details with assigned writer (after placing an order).</li>
				</ul>


				<strong>7.</strong> Provide detailed order instructions. Be as much specific as possible
				<ul>
					<li>Selecting “Make my order high priority” service.</li>
					<li>Selecting “Assign a TOP writer in this subject to do my work” service.</li>
				</ul>

				<strong>8.</strong>  Give us your contact details.
				<br>
				<strong>9.</strong>  Pay for your order. (receive a verification call from our support representative)
				<br>
				<strong>10.</strong>  Log in to your customer’s profile. (login details are e-mailed to you)
				<br>
				<strong>11.</strong>  Check the accuracy of your order, make corrections if any.
				<br>
				<strong>12.</strong>  Confirm your instructions in one click.
				<br>
				<strong>13.</strong>  Discuss order details with your writer. Specify your requirements if needed.
				<br>
				<strong>14.</strong>  Download a completed paper at your personal profile in a due time.
				<br>
				<strong>15.</strong>  Check your completed paper, approve it or send it for revision.
				<br>
				<strong>16.</strong>  If any questions arise, please contact us 24/7 via:

				<ul>
					<li><a href="javascript:void($zopim.livechat.window.show())">Online chat</a></li>
					<li>Phone number: <span style="background-image: url('<?php bloginfo('template_url'); ?>/images/phone-top.png'); height: 18px; width: 269px; display: inline-block;	background-repeat: no-repeat;"></span></li>
					<li>E-mail: <a href="mailto:support@<?php echo $_SERVER['SERVER_NAME'] ?>">support@<?php echo $_SERVER['SERVER_NAME'] ?></a></li>
				</ul>

			</div>
		</div>

		<div class="content-md container">
	        <div class="container">
	            <div class="row margin-b-30">
	                <div class="col-xs-12">
	                    <div data-crm-widget="priceCalc"></div>
	                </div>
	            </div>
	        </div>
	    </div>

	
	</div>

<?php get_footer(); ?>