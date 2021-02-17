<?php $ptitle='Home'; include '_header.php'; ?>
<!-- MAIN STARTS HERE -->
<main class="clearfix">
	<div class="regular slider" style="max-width: 1200px;">
		<div>
			<picture>
				<source media="(max-width: 559px)" srcset="/images/slider1-small.jpg">
				<source media="(min-width: 560px)" srcset="/images/slider1.jpg">
				<img src="/images/slider1.jpg" alt="cruise ship">
			</picture>
		</div>
		<div>
			<picture>
				<source media="(max-width: 559px)" srcset="/images/slider2-small.jpg">
				<source media="(min-width: 560px)" srcset="/images/slider2.jpg">
				<img src="/images/slider2.jpg" alt="cruise ship">
			</picture>
		</div>
		<div>
			<picture>
				<source media="(max-width: 559px)" srcset="/images/slider3-small.jpg">
				<source media="(min-width: 560px)" srcset="/images/slider3.jpg">
				<img src="/images/slider3.jpg" alt="cruise ship">
			</picture>
		</div>
		<div>
			<picture>
				<source media="(max-width: 559px)" srcset="/images/slider4-small.jpg">
				<source media="(min-width: 560px)" srcset="/images/slider4.jpg">
				<img src="/images/slider4.jpg" alt="cruise ship">
			</picture>
		</div>
	</div>
	<div class="blog-posts">
		<h2>Recent Blog Articles</h2>
		<div class="posts">
			<div class="post">
				<a href="#" class="blog">
					<div class="img" style="background-image:
					url(/images/blog1.jpg);">
					</div>
					<div class="blog-info">
						<div class="title">
							<p>Title</p>
						</div>
						<div class="date">
							<p>January 11, 2021</p>
						</div>
					</div>
				</a>
			</div>
			<div class="post">
				<a href="#" class="blog">
					<div class="img" style="background-image:
					url(/images/blog2.jpg);">
					</div>
					<div class="blog-info">
						<div class="title">
							<p>Title</p>
						</div>
						<div class="date">
							<p>January 11, 2021</p>
						</div>
					</div>
				</a>
			</div>
			<div class="post">
				<a href="#" class="blog">
					<div class="img" style="background-image:
					url(/images/blog3.jpg);">
					</div>
					<div class="blog-info">
						<div class="title">
							<p>Title</p>
						</div>
						<div class="date">
							<p>January 11, 2021</p>
						</div>
					</div>
				</a>
			</div>
			<div class="post">
				<a href="#" class="blog">
					<div class="img" style="background-image:
					url(/images/blog4.jpg);">
					</div>
					<div class="blog-info">
						<div class="title">
							<p>Title</p>
						</div>
						<div class="date">
							<p>January 11, 2021</p>
						</div>
					</div>
				</a>
			</div>

		</div>
	</div>

</main>
<?php include '_footer.php'; ?>
