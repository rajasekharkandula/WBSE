  <!-- Start: Header -->
    <header class="navbar navbar-fixed-top bg-dark">
		<ul class="nav navbar-nav navbar-left ml-35">
            <li class="dropdown menu-merge hidden-xs">
                <a href="<?php echo base_url();?>" class="header-name">WBSE </a>
            </li>
        </ul>
		<?php if($page != 'LOGIN'){ ?>
        <ul class="nav navbar-nav navbar-right" id="header-bar">
			<li class="">
                <div class="navbar-btn btn-group">
                    <a href="#topbar-dropmenu1" class="topbar-menu-toggle btn" data-toggle="button">
                        <span class="fa fa-cog fs20 text-info"></span> Settings
                    </a>
                </div>
            </li>
			<li class="">
                <div class="navbar-btn btn-group">
                    <a href="#topbar-dropmenu2" class="topbar-menu-toggle btn" data-toggle="button">
                        <span class="fa fa-envelope fs20 text-info"></span> Messages
                    </a>
                </div>
            </li>
            <li class="dropdown menu-merge">
				<?php if($this->session->userdata('login')){?>
					<a href="#" class="dropdown-toggle fw600" data-toggle="dropdown">
						<span class="hidden-xs"><name><?php echo $this->session->userdata('userName');?></name> </span>
						<span class="fa fa-caret-down hidden-xs mr15"></span>
						<img src="<?php echo base_url($this->session->userdata('profilePic'));?>" alt="avatar" class="mw55">
					</a>
				<?php }?>
                <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                   <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-envelope-o"></span> Messages
                            <span class="label label-warning">54</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-users"></span> Friends
                            <span class="label label-warning">6</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-bell"></span> Notifications </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-cogs"></span> Settings </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="/WBSE/home/logout" class="btn btn-primary btn-sm btn-bordered">
                            <span class="fa fa-power-off pr5"></span> Logout </a>
                    </li>
                </ul>
            </li>
        </ul>
		<?php } ?>
    </header>
    <!-- End: Header -->
	<!-- Start: Topbar-Dropdown -->
	<div class="topbar-dropmenu" id="topbar-dropmenu1">
		<div class="topbar-menu row">
			<div class="col-xs-4 col-sm-2">
				<a href="<?php echo base_url('home/categories');?>" class="metro-tile bg-danger">
					<span class="fa fa-music"></span>
					<span class="metro-title">Categories</span>
				</a>
			</div>
			<div class="col-xs-4 col-sm-2">
				<a href="<?php echo base_url('home/tasks');?>" class="metro-tile bg-success">
					<span class="fa fa-picture-o"></span>
					<span class="metro-title">Tasks</span>
				</a>
			</div>
			<div class="col-xs-4 col-sm-2">
				<a href="<?php echo base_url('home/budget');?>" class="metro-tile bg-primary">
					<span class="fa fa-video-camera"></span>
					<span class="metro-title">Budget Reports</span>
				</a>
			</div>
			<div class="col-xs-4 col-sm-2">
				<a href="<?php echo base_url('home/expenditure');?>" class="metro-tile bg-alert">
					<span class="fa fa-envelope"></span>
					<span class="metro-title">Expenditure Reports</span>
				</a>
			</div>
			<div class="col-xs-4 col-sm-2">
				<a href="<?php echo base_url('home/recovery');?>" class="metro-tile bg-system">
					<span class="fa fa-cog"></span>
					<span class="metro-title">Recovery Reports</span>
				</a>
			</div>
			<div class="col-xs-4 col-sm-2">
				<a href="<?php echo base_url('home/summaryreport');?>" class="metro-tile bg-dark">
					<span class="fa fa-user"></span>
					<span class="metro-title">Summary Reports</span>
				</a>
			</div>
		</div>
	</div>
	<div class="topbar-dropmenu" id="topbar-dropmenu2">
		<div class="topbar-menu row">
			<div class="col-xs-4 col-sm-2">
				<a href="#" class="metro-tile bg-system">
					<span class="fa fa-cog"></span>
					<span class="metro-title">Settings</span>
				</a>
			</div>
			<div class="col-xs-4 col-sm-2">
				<a href="#" class="metro-tile bg-dark">
					<span class="fa fa-user"></span>
					<span class="metro-title">Users</span>
				</a>
			</div>
			<?php if($this->session->userdata('login')){?>
			<div class="col-xs-4 col-sm-2">
				<a href="/WBSE/home/roles" class="metro-tile bg-roles">
					<span class="fa fa-user"></span>
					<span class="metro-title">Roles</span>
				</a>
			</div>
			<?php }?>
		</div>
	</div>
	<!-- End: Topbar-Dropdown -->
	
	