<div id="sidebar" class="app-sidebar bg-dark">

	<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

		<div class="row p-4 d-md-none">
			<div class="col-4">
				<div class="card card-body p-1">
					<img src="assets/img/user/profile.jpg" width="100%">
					<div class="card-arrow">
						<div class="card-arrow-top-left"></div>
						<div class="card-arrow-top-right"></div>
						<div class="card-arrow-bottom-left"></div>
						<div class="card-arrow-bottom-right"></div>
					</div>
				</div>
			</div>
			<div class="col-8">
				<p class="p-0 m-0"><i class="p-0 m-0">@<?= UserData('user_name'); ?></i></p>
				<b><?= UserData('name'); ?></b>
				<P>$ <?= Current_balance() ?></P>
			</div>
		</div>

		<div class="menu pt-md-5">
			<div class="menu-item active">
				<a href="index-2.html" class="menu-link">
					<span class="menu-icon"><i class="bi bi-cpu"></i></span>
					<span class="menu-text">Dashboard</span>
				</a>
			</div>

			<div class="menu-item">
				<a href="packge.php" class="menu-link">
					<span class="menu-icon"><i class="bi bi-gem"></i></span>
					<span class="menu-text">PURCHASE</span>
				</a>
			</div>

			<div class="menu-item">
				<a href="helper.html" class="menu-link">
					<span class="menu-icon"><i class="bi bi-gem"></i></span>
					<span class="menu-text">DEPOSIT</span>
				</a>
			</div>

			<div class="menu-item">
				<a href="helper.html" class="menu-link">
					<span class="menu-icon"><i class="bi bi-gem"></i></span>
					<span class="menu-text">WITHDRAW</span>
				</a>
			</div>

			<div class="menu-item">
				<a href="helper.html" class="menu-link">
					<span class="menu-icon"><i class="bi bi-gem"></i></span>
					<span class="menu-text">TRANSFER</span>
				</a>
			</div>

			<div class="menu-item has-sub">
				<a href="#" class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-envelope"></i>
					</span>
					<span class="menu-text">INCOME DETAILS</span>
					<span class="menu-caret"><b class="caret"></b></span>
				</a>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="deposit.php" class="menu-link">
							<span class="menu-text">ROI</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="sent_money.php" class="menu-link">
							<span class="menu-text">REFERRAL</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="deposit.php" class="menu-link">
							<span class="menu-text">GENARATIONS</span>
						</a>
					</div>

					<div class="menu-item">
						<a href="email_detail.html" class="menu-link">
							<span class="menu-text">RANK AND REWARDS </span>
						</a>
					</div>

					<div class="menu-item">
						<a href="email_detail.html" class="menu-link">
							<span class="menu-text">ROYALITY </span>
						</a>
					</div>
				</div>
			</div>

			<div class="menu-item">
				<a href="packge.php" class="menu-link">
					<span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
					<span class="menu-text">REFERRAL LIST</span>
				</a>
			</div>

			<div class="menu-item">
				<a href="packge.php" class="menu-link">
					<span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
					<span class="menu-text">TREE VIEW </span>
				</a>
			</div>

			<div class="menu-item">
				<a href="packge.php" class="menu-link">
					<span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
					<span class="menu-text">PACKAGE STATUS</span>
				</a>
			</div>

			<div class="menu-item has-sub">
				<a href="#" class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-envelope"></i>
					</span>
					<span class="menu-text">SUPPORT</span>
					<span class="menu-caret"><b class="caret"></b></span>
				</a>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="deposit.php" class="menu-link">
							<span class="menu-text">NEW TICKET</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="sent_money.php" class="menu-link">
							<span class="menu-text">TICKET HISTORY</span>
						</a>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>