<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<style>
 input{
        width:12%;
    }
</style>
</head>
<body>
    <div class="flex-container">
    <form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control " id="name">
  <div class="form-group">
    <label for="cnic">CNIC</label>
    <input type="number" class="form-control" id="cnic">
  </div>
  <div class="form-group">
    <label for="phone">Phone #</label>
    <input type="number" class="form-control" id="phone"></div>

    <div class="form-group">
    <label for="disease">Disease</label>
    <input type="textarea" class="form-control" id="disease"></div>
</form>
<input style="margin-top: 12px;margin-left: 41%; width: 15%;" type="submit" class="btn btn-danger">

    </div>
</body>
</html>