<!DOCTYPE html>
<html>
<head> 
	  <title>Bootstrap Example</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <base href="{{asset('')}}">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4">
    	<div class="jumbotron text-center">
	    	<h1>Đăng Nhập</h1>
	  		<p>Resize this responsive page </p> 

			@if(count($errors)>0) 
		    <!--kiểm tra điều kiện errors lưu các điều kiện từ validate -->
		    <div class="alert alert-danger">
	        @foreach($errors->all() as $err)
	            {{$err}} <br>
	        @endforeach
			</div>
			@endif 
			@if(session('thongbao'))
			      <div class="alert alert-success">
			      {{session('thongbao')}}
			      </div>
			@endif
		    <form action="admin/dangnhap" method="post">
			  <input type="hidden" name="_token" value="{{csrf_token()}}">
			 	  <table>
			 	  	<tr>
			 	  		<td><label for="email">Email :</label></td>
			 	  		<td><input type="text" name="email" placeholder="email"></td>
			 	  	</tr>
			 	  	<tr>
			 	  		<td><label for="pwd">Password:</label></td>
			 	  		<td><input type="password" name="password" placeholder="password"></td>
			 	  	</tr>
			 	  </table>
			 		<br>
				  <button type="submit" class="btn btn-primary">Đăng Nhập</button>
			</form> 
		</div> 
    </div>
    <div class="col-sm-4">
     
    </div>
  </div>
  
</div>
</body> 
</html>

   

