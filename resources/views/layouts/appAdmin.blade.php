<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DentCare</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

     <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
     <link rel="preconnect" href="/https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    @yield('head')
</head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class=" border-right-5 border-dark ">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="{{url('admin/')}}" data-toggle="collapse" aria-expanded="false" >Home</a>
	            
	          </li>
	          <li>
	              <a href="{{route('admin.product.index')}}">Product</a>
	          </li>
	          
	          <li>
              <a href="{{route('admin.service.index')}}">Service</a>
              
	          </li>
            <li>
              <a href="{{route('admin.member.index')}}">Member</a>
              
	          </li>
	          <li>
              <form  id="logout-form" action="{{route('logout')}}" method="POST" >
                <button  class="btn btn-danger  py-2 px- ms-3" type="submit">logout</button>
              @csrf
              </form> 
	          </li>
	        </ul>

	        
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
        @if (session('msg'))
        <div class="alert alert-success" role="alert">
            {{ session('msg') }}
        </div>
    @endif
       @yield('content')
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>