	<footer class="">
		<div class="navigation">
			<ul>
				<li class="list active">
					<a href="#">
						<span class="icon">
							<ion-icon name="home-outline"></ion-icon>
						</span>
						<span class="text">Home</span>
					</a>
				</li>
				<li class="list">
					<a href="https://wa.me/6281222222454?text=Assalamualaikum">
						<span class="icon">
							<ion-icon name="person-outline"></ion-icon>
						</span>
						<span class="text">Profile</span>
					</a>
				</li>
				<li class="list">
					<a href="#">
						<span class="icon">
							<ion-icon name="chatbubble-outline"></ion-icon>
						</span>
						<span class="text">Mesage</span>
					</a>
				</li>
				<li class="list">
					<a href="#">
						<span class="icon">
							<ion-icon name="camera-outline"></ion-icon>
						</span>
						<span class="text">Photos</span>
					</a>
				</li>
				<li class="list">
					<a href="#">
						<span class="icon">
							<ion-icon name="settings-outline"></ion-icon>
						</span>
						<span class="text">Setting</span>
					</a>
				</li>
				<div class="indicator"></div>
			</ul>
		</div>
		<!-- <div class="container">
			<div class="row my-4">
				<div class="col-lg footer-copyright my-auto">
					<h5 class="text-dark text-center">PT RPP Contractors Indonesia</h5>
				</div>
			</div>
		</div> -->
	</footer>

	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
	<div class="flashdata" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
	<div class="flashdata-success" data-flashdata="<?= $this->session->flashdata('message-success'); ?>"></div>
	<div class="flashdata-failed" data-flashdata="<?= $this->session->flashdata('message-failed'); ?>"></div>
	<!-- ./Sweet Alert 2 -->
	</body>	
	<script>
		const list = document.querySelectorAll('.list');

		function activeLink() {
			list.forEach((item) =>
				item.classList.remove('active'));
			this.classList.add('active');
		}
		list.forEach((item) =>
			item.addEventListener('click', activeLink));
	</script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	</html>