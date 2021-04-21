<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="home.css">
    <title>Document</title>
</head>
<body>

<div class="container" id="body">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100" id="guts">
	<div class="card-body bg-success">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name">DOUBLE-RJ CORPORATION</h5>
				<h6 class="user-email text-white">MOTORCYCLE</h6>
			</div>
			<div class="about">
				<h5 class="text-warning">ABOUT</h5>
				<p class="text-white">I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100"id="Gut">
	<div class="card-body bg-dark">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h4 class="mb-2 text-primary pb-1">Personal Details</h4>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
                    <form action="" method="post">
					<label for="fullName" class="text-white">Full Name:</label>
					<input type="text" class="form-control form-control-lg" id="fullName" placeholder="Enter full name">
                    </form>
                </div>

			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <form action="" method="post">
				<div class="form-group">
					<label for="eMail" class="text-white">Email:</label>
					<input type="email" class="form-control form-control-lg" id="eMail" placeholder="Enter email ">
                    </form>
                </div>

			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
                    <form action="" method="post">
					<label for="phone"class="text-white">Gender:</label>
					<input type="text" class="form-control form-control-lg" id="phone" placeholder="Enter gender">
                    </form>
                </div>

			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
                    <form action="" method="post">
					<label for="website" class="text-white">Phone:</label>
					<input type="url" class="form-control form-control-lg" id="website" placeholder="Enter phone number">
                    </form>
                </div>

			</div>
		</div>
        <br>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 bg-dark">
				<h4 class="mt-3 mb-2 text-primary pb-1">Address</h4>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Street</label>
					<input type="name" class="form-control" id="Street" placeholder="Enter Street">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="ciTy">City</label>
					<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="sTate">State</label>
					<input type="text" class="form-control" id="sTate" placeholder="Enter State">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="zIp">Zip Code</label>
					<input type="text" class="form-control" id="zIp" placeholder="Zip Code">
				</div>
			</div>
		</div>
        <br>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="button" id="submit" name="submit" class="btn btn-secondary">SUBMIT</button>
					<button type="button" id="submit" name="submit" class="btn btn-primary">Cancel</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>
