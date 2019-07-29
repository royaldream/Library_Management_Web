<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-app.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Library Management</title>
  <style>
	.form-group.required .control-label:after {
		content:"*";
		color: red;
	}
	</style>
</head>
<body>
  <div class="container">
    <div class="text-center ">
      <div class="form-horizontal">
        <div class="form-group required">
          <label class="control-label col-sm-2" for="input1">User Name: </label>
          <div class="col-sm-10">
          <input type="text" class="form-control user-name not-null number" id="input1" placeholder="Enter user name" required>
          </div>
        </div>
        <div class="form-group required">
          <label class="control-label col-sm-2" for="input2">Password : </label>
          <div class="col-sm-10">
          <input type="password" class="form-control password not-null number" id="input2" placeholder="Enter password" required>
        </div>
        </div>
        <div class="text-center" >
            <div class="text-center">
          <input type="button" style="margin-top:10px;margin-bottom:10px;" class="submit-btn btn btn-primary form-control" value="Login" required>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
$('.submit-btn').on('click', function(){
  var confirmation = confirm("Please check your login details!\nAre you sure?");
  if(!confirmation) {
    return false;
  }
  var status = true;

  $('.not-null').each(function() {
    if($(this).val() == "" || $(this).val() == " ") {
      status = false;
      alert('Please enter all required data!');
      return false;
    }
  });

  if(status == false) {
    return false;
  }
  if(status == true)
  {
    var email=$('.user-name').val().trim();
    var password=$('.password').val().trim();

    if(email=="royaldreams" && password=="royparth94")
    {
      			window.location.href ="./admin/book_list.html";
    }else {
      alert("Login Unsucessfully");
    }
  }
});
</script>
</body>
</html>
