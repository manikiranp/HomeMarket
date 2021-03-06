<?php
if(isset($_COOKIE["uid"]))
{
	include("../functions.php");
	if(LoginVerify())
	{
		header("location: ../logout");
	}
}
else
{
	header("location: ../login?required");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Products - Sellers | HomeMarket</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="HomeMarket - Your Market Buddy">
    <meta name="author" content="Manikiran">

    <link rel="shortcut icon" href="../assets/img/logo-icon-white.png"> 

    <link href="../assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">        <!-- Font Awesome -->
    <link href="../assets/fonts/mdi/css/mdi.css" type="text/css" rel="stylesheet">								 <!-- Material Icons -->
    <!--<link type='text/css' href='//fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
    <link type='text/css'  href='//fonts.googleapis.com/icon?family=Material+Icons'  rel="stylesheet">-->
    <link href="../assets/css/styles.css" type="text/css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link href="../assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">                <!-- Code Prettifier -->

    <link href="../assets/plugins/dropdown.js/jquery.dropdown.css" type="text/css" rel="stylesheet">            <!-- iCheck -->
    <link href="../assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">                   <!-- Skylo -->

    <!--[if lt IE 10]>
        <script src="../assets/js/media.match.min.js"></script>
        <script src="../assets/js/respond.min.js"></script>
        <script src="../assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
	<style>
	td img{
		width:20px !important;
		height:20px !important;
	}
	</style>
    </head>

    <body class="sidebar-scroll animated-content infobar-overlay">
<div class="preloader"><img src="../assets/img/loader.gif"></div>

        <header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
	<!-- <div id="page-progress-loader" class="show"></div> -->

	<div class="logo-area">
		<a class="navbar-brand navbar-brand-success" href="../home?noredirect">
			<img class="show-on-collapse img-logo-white" alt="HomeMarket" src="../assets/img/logo-icon-white.png">
			<img class="show-on-collapse img-logo-dark" alt="HomeMarket" src="../assets/img/logo-icon-dark.png">
			<img class="img-white" alt="HomeMarket" src="../assets/img/logo-white.png">
			<img class="img-dark" alt="HomeMarket" src="../assets/img/logo-dark.png">
		</a>
		<span id="trigger-search" class="toolbar-trigger toolbar-icon-bg ov-h">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="material-icons">search</i>
				</span>
			</a>
		</span>
		<div id="search-box">
			<input class="form-control" type="text" placeholder="Search..." id="search-input"></input>
		</div>
	</div><!-- logo-area -->

	<ul class="nav navbar-nav toolbar pull-right">

		<li class="toolbar-icon-bg appear-on-search ov-h" id="trigger-search-close">
	        <a class="toggle-fullscreen"><span class="icon-bg">
	        	<i class="material-icons">close</i>
	        </span></i></a>
	    </li>

        <li class="dropdown toolbar-icon-bg hidden-xs">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-bg"><i class="material-icons">person</i><span class="caret"></span></span></a>
			<ul class="dropdown-menu">
				<?php 
				if(isset($_COOKIE["user_seller"]))
				{
					echo '<li><a href="../settings"><i class="material-icons">settings</i> Settings</a></li>
					<li><a href="../logout"><i class="material-icons">lock_open</i> Logout</a></li>';
				}
				else
				{
					echo '<li><a href="../login?buyer">Login/Signup</a></li>';
				}
				?>
			</ul>
		</li>
		
	</ul>

</header>

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-cyan">
                    <div class="static-sidebar">
                        <div class="sidebar">
	
	<div class="widget stay-on-collapse" id="widget-sidebar">
        <nav role="navigation" class="widget-body">
	<ul class="acc-menu">
		<li class="nav-separator"><span>Navigation</span></li>
		<li>
			<a  class="withripple" href="home">
				<span class="icon"><i class="material-icons">home</i></span>
				<span>Dashboard</span>
			</a>
		</li>
		<li class="active">
			<a  class="withripple" href="products">
				<span class="icon"><i class="material-icons">art_track</i></span>
				<span>My Products</span>
			</a>
		</li>
		<li>
			<a  class="withripple" href="earnings">
				<span class="icon"><i class="material-icons">monetization_on</i></span>
				<span>My Earnings</span>
			</a>
		</li>
		<li>
			<a  class="withripple" href="../about">
				<span class="icon"><i class="material-icons">contacts</i></span>
				<span>About Us</span>
			</a>
		</li>
		<?php 
		if(isset($_COOKIE["user_seller"]))
		{
			echo '<li>
					<a  class="withripple" href="../settings">
						<span class="icon"><i class="material-icons">settings</i></span>
						<span>Settings</span>
					</a>
				</li>
				<li>
					<a  class="withripple" href="../logout">
						<span class="icon"><i class="material-icons">lock_open</i></span>
						<span>Logout</span>
					</a>
				</li>';
		}
		else
		{
			echo '<li>
					<a  class="withripple" href="../login?buyer">
						<span class="icon"><i class="material-icons">person</i></span>
						<span>Login/Signup</span>
					</a>
				</li>';
		}
		?>
		
	</ul>
</nav>
    </div>
</div>
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            
                            <div class="container-fluid">
                                
<div data-widget-group="group1">
	<div class="row mt">
		<div class="col-md-12">

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>My Products</h2>
					<div class="options pull-right">
						<button class="btn btn-raised btn-success" data-toggle="modal" data-target="#add_productModal"><i class="fa fa-plus"></i> Add</button>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-hover m-n">
						<thead>
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Description</th>
								<th>Price</th>
								<th>Category</th>
								<th>Sub Category</th>
								<th>Image</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if(!isset($conn))
							{
								include("../config.php");
							}
							$uid=$_COOKIE["uid"];
							$sql="SELECT * FROM products WHERE uid='$uid'";
							$result=$conn->query($sql);
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{
									echo '<tr>
											<td id="pid_'.$row["pid"].'">'.$row["pid"].'</td>
											<td id="title_'.$row["pid"].'">'.$row["title"].'</td>
											<td id="desc_'.$row["pid"].'">'.$row["description"].'</td>
											<td><i class="fa fa-inr"></i> <span id="price_'.$row["pid"].'">'.$row["price"].'</span></td>
											<td id="cat_'.$row["pid"].'">'.$row["cat"].'</td>
											<td id="sub_cat_'.$row["pid"].'">'.$row["sub_cat"].'</td>
											<td id="img_'.$row["pid"].'">';
									if($row["img"]=="false"){
										echo 'No image uploaded';
									}
									else
									{
										echo '<img src="../'.$row["img"].'">';
									}
									echo '	</td>
											<td><button class="btn btn-warning btn-raised btn-sm edit_prod" id="edit_'.$row["pid"].'"><i class="fa fa-edit"></i></button><button class="btn btn-danger btn-raised btn-sm del_prod" id="del_'.$row["pid"].'"><i class="fa fa-trash"></i></button></td>
										</tr>';
								}
							}
							else
							{
								echo '<tr>
										<td>No Products Added</td>
									</tr>';
							}
							?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>

                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline text-center">
            <li><h6 style="margin: 0;">&copy; 2016 HomeMarket. All Rights Reserved.</h6></li>
        </ul>
    </div>
</footer>

                </div>
                <div class="extrabar-underlay"></div>
            </div>
        </div>

        

            </div>
        </div>

    </div>

</div>
        </div>

<div class="modal fade" id="add_productModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h2 class="modal-title">Add Product</h2>
			</div>
			<div class="modal-body">
				<form id="add_prod_form" enctype="multipart/form-data">
					<div class="form-group" id="add_prod_title_group">
						<label for="add_prod_title" class="col-md-2 control-label">Title</label>
						<div class="col-md-10">
							<input type="text" class="form-control" placeholder="Title" id="add_prod_title">
						</div>
					</div>
					<div class="form-group" id="add_prod_desc_group">
						<label for="add_prod_desc" class="col-md-2 control-label">Description</label>
						<div class="col-md-10">
							<textarea class="form-control" placeholder="Description" id="add_prod_desc"></textarea>
						</div>
					</div>
					<div class="form-group" id="add_prod_price_group">
						<label for="add_prod_price" class="col-md-2 control-label">Price</label>
						<div class="col-md-10">
							<input type="number" step="0.5" min="20" max="10000" class="form-control" placeholder="Price" id="add_prod_price">
						</div>
					</div>
					<div class="form-group" id="add_prod_cat_group">
						<label for="add_prod_cat" class="col-md-2 control-label">Category</label>
						<div class="col-md-10">
							<select class="form-control" id="add_prod_cat">
								<option value="food">Food Product</option>
								<option value="handicraft">Handicraft</option>
								<option value="others" selected>Others</option>
							</select>
						</div>
					</div>
					<div class="form-group" id="add_prod_sub_cat_group">
						<label for="add_prod_sub_cat" class="col-md-2 control-label">Sub Category</label>
						<div class="col-md-10">
							<select class="form-control" id="add_prod_sub_cat">
								<option value="pickles">Pickles</option>
								<option value="curries">Curries</option>
								<option value="cookies">Cookies</option>
								<option value="clothes">Clothes</option>
								<option value="arts">Arts</option>
								<option value="toys">Toys</option>
								<option value="others" selected>Others</option>
							</select>
						</div>
					</div>
					<div class="form-group" id="add_prod_img_group">
						<label for="add_prod_img" class="col-md-2 control-label">Image</label>
						<div class="col-md-10">
							<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
								<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
									
								</div>
								<div>
									<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
									<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..." id="add_prod_img"></span>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-raised btn-primary" id="add_prod_submit">Add</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="edit_productModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h2 class="modal-title">Edit Product</h2>
			</div>
			<div class="modal-body">
				<form id="edit_prod_form" enctype="multipart/form-data">
					<div class="form-group" id="edit_prod_title_group">
						<label for="edit_prod_title" class="col-md-2 control-label">Title</label>
						<div class="col-md-10">
							<input type="text" class="form-control" placeholder="Title" id="edit_prod_title">
						</div>
					</div>
					<div class="form-group" id="edit_prod_desc_group">
						<label for="edit_prod_desc" class="col-md-2 control-label">Description</label>
						<div class="col-md-10">
							<textarea class="form-control" placeholder="Description" id="edit_prod_desc"></textarea>
						</div>
					</div>
					<div class="form-group" id="edit_prod_price_group">
						<label for="edit_prod_price" class="col-md-2 control-label">Price</label>
						<div class="col-md-10">
							<input type="number" step="0.5" min="20" max="10000" class="form-control" placeholder="Price" id="edit_prod_price">
						</div>
					</div>
					<div class="form-group" id="edit_prod_cat_group">
						<label for="edit_prod_cat" class="col-md-2 control-label">Category</label>
						<div class="col-md-10">
							<select class="form-control" id="edit_prod_cat">
								<option value="food">Food Product</option>
								<option value="handicraft">Handicraft</option>
								<option value="others" selected>Others</option>
							</select>
						</div>
					</div>
					<div class="form-group" id="edit_prod_sub_cat_group">
						<label for="edit_prod_sub_cat" class="col-md-2 control-label">Sub Category</label>
						<div class="col-md-10">
							<select class="form-control" id="edit_prod_sub_cat">
								<option value="pickles">Pickles</option>
								<option value="curries">Curries</option>
								<option value="cookies">Cookies</option>
								<option value="clothes">Clothes</option>
								<option value="arts">Arts</option>
								<option value="toys">Toys</option>
								<option value="others" selected>Others</option>
							</select>
						</div>
					</div>
					<div class="form-group" id="edit_prod_img_group">
						<label for="edit_prod_img" class="col-md-2 control-label">Image</label>
						<div class="col-md-10">
							<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
								<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
									
								</div>
								<div>
									<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
									<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..." id="edit_prod_img"></span>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-raised btn-primary" id="edit_prod_submit">Save changes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script src="../assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script src="../assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script src="../assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script src="../assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->
<script src="../assets/js/annyang.min.js"></script> 									<!-- Load Annyang -->
<script src="../assets/js/mespeak.js"></script> 									<!-- Load meSpeak -->
<script src="../assets/js/mespeak_config.js"></script> 								<!-- Load meSpeak Config -->

<script src="../assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script src="../assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script src="../assets/plugins/progress-skylo/skylo.js"></script> 		<!-- Skylo -->

<script src="../assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script src="../assets/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script src="../assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->

<script src="../assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script src="../assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->
<script src="../assets/plugins/form-jasnyupload/fileinput.min.js"></script>               			<!-- File Input -->

<script src="../assets/plugins/dropdown.js/jquery.dropdown.js"></script> <!-- Fancy Dropdowns -->
<script src="../assets/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
<script src="../assets/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->

<script src="../assets/js/application.js"></script>

<!-- End loading site level scripts -->

<script src="../assets/plugins/pines-notify/pnotify.min.js"></script> 		<!-- PNotify -->
    
    <!-- Load page level scripts-->
<script type="text/javascript">
$(document).ready(function(){
	var pid=0;
	$(".edit_prod").click(function(){
		pid=this.id.split("_")[1];
		$("#edit_prod_title").val($("#title_"+pid).html());
		$("#edit_prod_desc").val($("#desc_"+pid).html());
		$("#edit_prod_price").val($("#price_"+pid).html());
		$("#edit_prod_cat").val($("#cat_"+pid).html());
		$("#edit_prod_sub_cat").val($("#sub_cat_"+pid).html());
		if($("#img_"+pid).html()!="No image uploaded")
		{
			$(".fileinput-preview").html($("#img_"+pid).html());
		}
		$("#edit_productModal").modal("show");
	});
	$("#add_prod_submit").click(function(){
		$("#add_prod_form").submit();
	});
	$("#add_prod_form").submit(function(e){
		e.preventDefault();
		var title=$("#add_prod_title").val();
		var desc=$("#add_prod_desc").val();
		var price=$("#add_prod_price").val();
		var cat=$("#add_prod_cat").val();
		var sub_cat=$("#add_prod_sub_cat").val();
		if(title.length<4)
		{
			$("#add_prod_title").focus();
		}
		else if(desc.length<10)
		{
			$("#add_prod_desc").focus();
		}
		else if(price.length<2)
		{
			$("#add_prod_price").focus();
		}
		else
		{
			var formdata = new FormData();
			formdata.append("add_prod","true");
			formdata.append("title",title);
			formdata.append("desc",desc);
			formdata.append("price",price);
			formdata.append("cat",cat);
			formdata.append("sub_cat",sub_cat);
			formdata.append('img', $('#add_prod_img')[0].files[0]);
			$.ajax({
				url:"../verify",
				method:"POST",
				data:formdata,
				processData: false,
				contentType: false,
				success: function(response, textStatus, jqXHR){
					var resp=JSON.parse(response);
					if(resp.msg=="success")
					{
						$("#add_productModal").modal("hide");
						new PNotify({
								title: 'Product Added',
								text: 'That thing that you were trying to do worked!',
								type: 'success',
								icon: 'fa fa-check',
								styling: 'fontawesome'
							});
						window.location="";
					}
					else
					{
						new PNotify({
								title: 'Oh No!',
								text: 'Something terrible happened.',
								type: 'error',
								icon: 'fa fa-close',
								styling: 'fontawesome'
							});
					}
				},
				error: function(jqXHR, textStatus, errorThrown){
						new PNotify({
								title: 'Oh No!',
								text: 'Something terrible happened.',
								type: 'error',
								icon: 'fa fa-close',
								styling: 'fontawesome'
							});
				}
			});
		}
		return false;
	});
	$("#edit_prod_submit").click(function(){
		$("#edit_prod_form").submit();
	});
	$("#edit_prod_form").submit(function(e){
		e.preventDefault();
		var title=$("#edit_prod_title").val();
		var desc=$("#edit_prod_desc").val();
		var price=$("#edit_prod_price").val();
		var cat=$("#edit_prod_cat").val();
		var sub_cat=$("#edit_prod_sub_cat").val();
		if(title.length<4)
		{
			$("#edit_prod_title").focus();
		}
		else if(desc.length<10)
		{
			$("#edit_prod_desc").focus();
		}
		else if(price.length<2)
		{
			$("#edit_prod_price").focus();
		}
		else
		{
			var formdata = new FormData();
			formdata.append("edit_prod","true");
			formdata.append("pid",pid);
			formdata.append("title",title);
			formdata.append("desc",desc);
			formdata.append("price",price);
			formdata.append("cat",cat);
			formdata.append("sub_cat",sub_cat);
			formdata.append('img', $('#edit_prod_img')[0].files[0]);
			$.ajax({
				url:"../verify",
				method:"POST",
				data:formdata,
				processData: false,
				contentType: false,
				success: function(response, textStatus, jqXHR){
					var resp=JSON.parse(response);
					if(resp.msg=="success")
					{
						$("#edit_productModal").modal("hide");
						new PNotify({
								title: 'Product Edited',
								text: 'That thing that you were trying to do worked!',
								type: 'success',
								icon: 'fa fa-check',
								styling: 'fontawesome'
							});
						window.location="";
					}
					else
					{
						new PNotify({
								title: 'Oh No!',
								text: 'Something terrible happened.',
								type: 'error',
								icon: 'fa fa-close',
								styling: 'fontawesome'
							});
					}
				},
				error: function(jqXHR, textStatus, errorThrown){
						new PNotify({
								title: 'Oh No!',
								text: 'Something terrible happened.',
								type: 'error',
								icon: 'fa fa-close',
								styling: 'fontawesome'
							});
				}
			});
		}
		return false;
	});
});
</script>
    <!-- End loading page level scripts-->
<?php include("../options.php"); ?>

    </body>
</html>