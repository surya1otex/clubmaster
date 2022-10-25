<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align:center">Sports Club Registation Form</h2>
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Add</a></li>
    <li><a data-toggle="tab" href="#menu1">View</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <div class="row" style="margin-top: 20px">
         <div class="col-md-4">
         <div class="form-group">
         <label for="email">Club Name:</label>
         <input type="email" class="form-control" id="email">
      </div>
         </div>
         <div class="col-md-4">
         <div class="form-group">
         <label for="email">Sports Name:</label>
         <input type="email" class="form-control" id="email">
  </div>
         </div>
         <div class="col-md-4">
         <div class="form-group">
          <label for="email">Membership Fee:</label>
          <input type="email" class="form-control" id="email">
  </div>
         </div>
</div>


 <div class="form-area">
 <fieldset>
  <legend>Applicant Details:</legend>
 <div class="row">
 <div class="col-md-4">
         <div class="form-group">
         <label for="email">Applicant Name:</label>
         <input type="email" class="form-control" id="email">
      </div>
         </div>
         <div class="col-md-4">
         <div class="form-group">
         <label for="email">Email:</label>
         <input type="email" class="form-control" id="email">
      </div>
         </div>
         <div class="col-md-4">
         <div class="form-group">
         <label for="email">Mobile:</label>
         <input type="email" class="form-control" id="email">
      </div>
         </div>
 </div>
</div>
<div class="row">

 <div class="col-md-4">
         <div class="form-group">
         <label for="email">Date Of Birth:</label>
         <input type="email" class="form-control" id="email">
      </div>
         </div>

         <div class="col-md-4">
         <div class="form-group">
         <label for="email">Gender:</label>
         <input type="email" class="form-control" id="email">
      </div>
         </div>

         <div class="col-md-4">
         <div class="form-group">
         <label for="email">Upload Photo:</label>
         <input type="email" class="form-control" id="email">
      </div>
         </div>

 </div>

</div>
</fieldset>
    </div>




    <div id="menu1" class="tab-pane fade">
      <h3>View</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>