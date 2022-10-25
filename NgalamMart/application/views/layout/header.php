<!-- Start Header -->
	<header>Hai <a href="<?php echo base_url('profil') ?>" title="Update profil">
    <?php echo ucfirst($this->session->userdata('username')); ?>
    </a> | <a href="<?php echo base_url('login/logout') ?>" title="Logout">Logout</a></header>
    <!-- Start Nav -->
    <nav>
    	<ul>
        	<li><a href="<?php echo base_url('dasbor') ?>">Dasbor</a></li>
            <li><a href="<?php echo base_url('user') ?>">User</a></li>
            <li><a href="<?php echo base_url('user/tambah') ?>">Tambah User</a></li>
            <li><a href="<?php echo base_url() ?>assets/templates.html">Templates</a></li>
        </ul>
    </nav>
    <!-- Start Article -->
    <article>
      <h1><?php echo $title ?></h1>