<?php include_once("header.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media= "screen"/>
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Đăng nhập</h1>
						 </div>
					</div>
                   <form action="" method="post" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Tài khoản</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" >
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Mật khẩu</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp">
                           </div>
                           <div class="form-group">
                              <p class="text-center"> <a href="#"></a></p>
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm"><a class="nav-link " href="./register.php">Đăng ký</a></button>
                           </div>
                           
                        </form>
                     </div>
			</div>
		</div>
      </div>   
</body>
</html>