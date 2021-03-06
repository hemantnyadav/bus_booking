<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Himmat - Online Bus Booking</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?PHP echo base_url()."/assets/"; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?PHP echo base_url()."/assets/"; ?>css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	  <!-- jQuery -->
    <script src="<?PHP echo base_url()."/assets/"; ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?PHP echo base_url()."/assets/"; ?>js/bootstrap.min.js"></script>
	
	<script src="<?PHP echo base_url()."/assets/"; ?>js/moment.js"></script>

	<script src="<?PHP echo base_url()."/assets/"; ?>js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker(
				{	
					format: 'DD/MM/YYYY'
				});
            });
    </script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
	

<style>
				   	ul li{display:inline; padding:0px 20px 0px 20px;}
					ul li select{width:100px;}
				   </style>
</head>

<div class="brand">Online Bus Ticket Booking</div>
    <div class="address-bar">Rajula - Vijapadi - Savarkundla - Dhasa - Ahmedabad</div>
	
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?PHP echo base_url(); ?>home">Home</a>
                    </li>
                    <li>
                        <a href="<?PHP echo base_url(); ?>terms">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="<?PHP echo base_url(); ?>contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
