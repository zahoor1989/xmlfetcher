<!DOCTYPE html>
<html>
<head>
   <title>Fetching Data From XML URL</title>
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="jumbotron">
   <div style="text-align:center;">
   <h1>SCRIPT TO READ DATA FROM XML URL </h1>
   </div>
   </div>
<div class="container">
  <h2>Fetching Data From Xml Url</h2>
  <form action="displaydata.php" method="POST">
    <div class="form-group">
      <label for="email">URL:</label>
      <input type="url" class="form-control"  placeholder="Enter/ Past Url Here" name="xml_url">
    </div>   
    <button type="submit" class="btn btn-default" name="submit_url">Submit</button>
  </form>
</div>
</body>
</html>