<!-- 
<nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse">

	<div class="container-fluid">

		<button 
			class="navbar-toggler navbar-toggler-right" 
			type="button" 
			data-toggle="collapse" 
			data-target="#navbarsExampleDefault" 
			aria-controls="navbarsExampleDefault" 
			aria-expanded="false" 
			aria-label="Toggle navigation"
		>
			<span class="navbar-toggler-icon"></span>
		</button>

		<a class="navbar-brand" href="#">Navbar</a>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">

			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
					<div class="dropdown-menu" aria-labelledby="dropdown01">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
			</ul>

			<form class="form-inline my-2 my-lg-0">

				<input class="form-control mr-sm-2" type="text" placeholder="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

			</form>
		</div>

	</div>

</nav>
 -->

 <nav class="navbar navbar-fixed-top navbar-inverse">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>

      <a class="navbar-brand" href="/">The Neters Group</a>

    </div>

    <div id="navbar" class="collapse navbar-collapse">

      <ul class="nav navbar-nav">

        <li>
        	<a title="Home" href="/">
        		<span class="glyphicon glyphicon-home col-sm-1"></span>
        		<span class="col-sm-2">Home</span>
    		</a>
		</li>

        <li>
        	<a title="About" data-toggle="modal" data-target="#about">
        		<span class="glyphicon glyphicon-info-sign col-sm-1"></span>
        		<span class="col-sm-2">About</span>
    		</a>
		</li>

        <li>
        	<a title="Contact" data-toggle="modal" data-target="#contact">
        		<span class="glyphicon glyphicon-phone col-sm-1"></span>
        		<span class="col-sm-2">Contact</span>
    		</a>
		</li>

        <li>
        	<a title="Shopping Cart" data-toggle="modal" data-target="#cart">
        		<span class="glyphicon glyphicon-shopping-cart col-sm-1">
        			<span class="badge badge-notify"></span>
    			</span>
        		<span class="col-sm-2">Cart</span>
			</a>
		</li>

      </ul>

    </div>
  </div>
</nav>
