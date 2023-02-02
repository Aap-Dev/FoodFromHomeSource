<!DOCTYPE html>
<html lang="en">
   <head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <title>Post your food</title>
   </head>
   <body>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <center>
         <h1>Post your food</h1>
         <form action="insert.php" method="post">
             
<p>
               <label for="email">Email:</label>
               <input type="text" name="email" id="email"class="form-control">
            </p>
 
             
<p>
               <label for="title">Title:</label>
               <input type="text" name="title" id="title"class="form-control">
            </p>
 
             
<p>
               <label for="description">Description:</label>
               <input type="text" name="description" id="description"class="form-control">
            </p>
 
             
<p>
               <label for="category">Category:</label>
               <input type="text" name="category" id="category"class="form-control">
            </p>
 
             


           <p>
               <label for="location">Location:</label>
               <input type="text" name="location" id="location"class="form-control">
            </p>
 
            <input type="submit" value="Submit"class="btn btn-primary">
         </form>
      </center>
   </body>
</html>