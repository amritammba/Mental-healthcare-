<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Bootstrap Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
    function formValidation()
    {
        let x=document.forms["form1"]["name"].value;
        if(x=="")
        {
            alert("name must be fillet out");
            return false;
        }
    }
        
    </script>
</head>

<body>




    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Image -->
                <img src="lg.jpg" class="img-fluid" alt="Login Picture">
            </div>
            <div class="col-md-6">
                <!-- Form -->
                <div class="card">
                    <div class="card-body">
                        <form action="signup.php" method="post" name="form1" id="form1">
                          <div class="form-group">
                            <label for="name">
                                name
                            </label>
                            <input type="name" class="form-control" id="name" placeholder="fname" name="name"required>
                        </div>


                        
                            <div class="form-group">
                                <label for="email">
                                    Email
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                            </div>
                                                        <button class="btn btn-danger">
                                signup
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>