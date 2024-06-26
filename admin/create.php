<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="dashboard d-flex justify-content-between">
        <div class="sidebar bg-dark  ">
          <h1 class="bg-primary p-4"><a href="" class="text-light text-decoration-none">Dashboard</a></h1>
        </div> -->
        <?php 
        include("templates/header.php")
        ?>
        <div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
            <form action="process.php" method="post">
              <div class="form-field mb-4">
                <input type="text" class="form-control" name="title" id="" placeholder="Enter Title:"/>
              </div>
              <div class="form-field mb-4">
                <textarea name="summary" class="form-control" id="" cols="30" rows="10" placeholder="Enter Summary:"></textarea>
              </div>
              <div class="form-field mb-4">
                <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="Enter Post:"></textarea>
              </div>
              <input type="hidden" name="date" value="<?php echo date("Y/m/d");?>"/>

              <div class="form-field">
               <input type="submit" class="btn btn-primary" value="Submit" name="create"/>
              </div>
            </form>
        </div>
        <?php 
        include("templates/footer.php")
        ?>
    <!-- </div>
</body>
</html> -->