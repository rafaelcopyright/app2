<?php 

function url() {
	echo base_url();
}

?>

<html>
	<head><?php $this->load->view('head'); ?></head>

	<body>
		<header>
			<p>Nome so Site</p>	

			<ul class="menu">
				<li class="menu-item"><a href="<?php url(); ?>">Home</a></li>
				<li class="menu-item"><a href="<?php url(); ?>">Serviços</a>
					<ul class="sub-menu">
						<li class="sub-menu-item"><a href="<?php url(); ?>">Serviço 1</a></li>
						<li class="sub-menu-item"><a href="<?php url(); ?>">Serviço 1</a></li>
						<li class="sub-menu-item"><a href="<?php url(); ?>">Serviço 1</a></li>
					</ul>
				</li>
				<li class="menu-item"><a href="<?php url(); ?>">Sobre</a></li>
				<li class="menu-item"><a href="<?php url(); ?>">Contato</a></li>
			</ul>		
		</header>
		
<?php ?>