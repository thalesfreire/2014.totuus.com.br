<nav class="navbar navbar-inverse" role="navigation">

	<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <i class="icon-cog"></i>
    </button>
    <a class="navbar-brand" href="index.php"><img src="../images/LogoTotuus.png" /></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">

		<li class="dropdown">
						
			<a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-user"></i> 
				<?= $_SESSION["nomeUsuarioAdmin"]?>
				<b class="caret"></b>
			</a>
			
			<ul class="dropdown-menu">
				<li><a href="javascript:;">Minha conta</a></li>
				<li class="divider"></li>
				<li><a href="actions/loginAction.php?method=logoutAdmin">Sair</a></li>
			</ul>
			
		</li>
    </ul>
    
  </div><!-- /.navbar-collapse -->
</div> <!-- /.container -->
</nav>
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">
			
			<a href="javascript:;" class="subnav-toggle" data-toggle="collapse" data-target=".subnav-collapse">
		      <span class="sr-only">Toggle navigation</span>
		      <i class="icon-reorder"></i>
		      
		    </a>

			<div class="collapse subnav-collapse">
				<ul class="mainnav">
				
					<li>
						<a href="index.php">
							<i class="icon-home"></i>
							<span>Home</span>
						</a>	    				
					</li>
					
					<li>
						<a href="usuarios.php">
							<i class="icon-user"></i>
							<span>Usu&aacute;rios</span>
						</a>	    				
					</li>
					
					<li>
						<a href="contratos.php">
							<i class="icon-list-alt"></i>
							<span>Contratos</span>
						</a>	    				
					</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-inbox"></i>
							<span>Pagamentos</span>
							<b class="caret"></b>
						</a>	
						
						<ul class="dropdown-menu">
							<li><a href="pagamentos.php">M&ecirc;s corrente</a></li>
							<li><a href="novoPagamento.php">Novo</a></li>
						</ul>
						    				
					</li>
					
					<li class="dropdown">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-th"></i>
							<span>Components</span>
							<b class="caret"></b>
						</a>	    
					
						<ul class="dropdown-menu">
							<li><a href="./elements.html">Elements</a></li>
							<li><a href="./forms.html">Form Styles</a></li>
							<li><a href="./jqueryui.html">jQuery UI</a></li>
							<li><a href="./charts.html">Charts</a></li>
							<li><a href="./popups.html">Popups/Notifications</a></li>
						</ul> 				
					</li>
					
					<li class="dropdown">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-copy"></i>
							<span>Sample Pages</span>
							<b class="caret"></b>
						</a>	    
					
						<ul class="dropdown-menu">
							<li><a href="./pricing.html">Pricing Plans</a></li>
							<li><a href="./faq.html">FAQ's</a></li>
							<li><a href="./gallery.html">Gallery</a></li>
							<li><a href="./reports.html">Reports</a></li>
							<li><a href="./account.html">User Account</a></li>
						</ul> 				
					</li>
					
					<li class="dropdown">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-external-link"></i>
							<span>Extra Pages</span>
							<b class="caret"></b>
						</a>	
					
						<ul class="dropdown-menu">
							<li><a href="./login.html">Login</a></li>
							<li><a href="./signup.html">Signup</a></li>
							<li><a href="./error.html">Error</a></li>
							<li class="dropdown-submenu">
							    <a tabindex="-1" href="#">More options</a>
							    <ul class="dropdown-menu">
							      <li><a tabindex="-1" href="#">Second level</a></li>

							      <li><a href="#">Second level</a></li>
							      <li><a href="#">Second level</a></li>
							    </ul>
							  </li>
						</ul>    				
					</li>
				
				</ul>
				
				
			</div> <!-- /.subnav-collapse -->

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->