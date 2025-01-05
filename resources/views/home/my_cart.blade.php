<!DOCTYPE html>
<html lang="en">
<head>
	@include('home.css')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    @include('home.navbar')

    <!-- header -->
    {{-- @include('home.header') --}}

    

    <!-- page footer  -->
    @include('home.footer')
    <!-- end of page footer -->

	<!-- core  -->
    @include('home.js')

</body>
</html>
