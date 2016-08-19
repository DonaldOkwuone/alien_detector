<!DOCTYPE>
<html lang="us-en">
<head>
<title>
	NAVBAR BASIC
</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css" >


</head>
<body>
<!--Navbar-->
<ul class="topnav" id="myTopnav">
  <li><a href="{{url('/home')}}">Home</a></li>
  <li><a href="{{url('/view')}}">View All</a></li>
  <li><a href="{{url('/edit')}}">Edit/Delete</a></li>
  <li><a href="{{url('/new')}}">Add</a></li>
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul>


<!--//Navbar-->

@yield('content')

<!--SCRIPT-->
<script type="text/javascript" src="{{URL::asset('js/jquery-2.1.4.min.js')}} "></script>
<script type="text/javascript" src="{{URL::asset('js/custom_script.js')}}   "></script>

<!--//SCRIPT-->


</body>
</html>