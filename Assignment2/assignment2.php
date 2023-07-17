<?php 


?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Assignment 2</title>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="misc.js"></script>
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
<?php include 'header.inc.php'; 
    $GLOBALS['genres'] =['Abstract', 'Baroque', 'Gothic', 'Renaissance'];
    $GLOBALS['subjects'] =['Animals', 'Landscape', 'People']; 

    function showOptions ($myArray) {
        foreach($myArray as $value){ 
            echo "<option value='$value'>$value</option>";
        }
    }
?>
    
<main>
<form class="form"  id="mainForm" action="art-process.php" method ="POST">
   <fieldset class="form__panel">
      <legend class="form__heading">Edit Art Work Details</legend>
        <p class="form__row">
           <label>Title</label><br/>
           <input type="text" name="title" required class="form__input form__input--large"/>
       </p>
       <p class="form__row">
           <label>Description</label><br/>
           <input type="text" name="description" required class="form__input form__input--large">
       </p>            
       <p class="form__row"> 
           <label>Genre</label><br/>
           <select name="genre" required class="form__input form__select">
              <option selected="true" disabled="disabled">Choose genre</option> 
              <?php
                showOptions($GLOBALS['genres']);
              ?>
              
           </select>
       </p> 
       <p class="form__row"> 
           <label>Subject</label><br/>
           <select name="subject" required class="form__input form__select">
              <option selected="true" disabled="disabled">Choose subject</option> 
              <?php
                showOptions($GLOBALS['subjects']);
              ?>
              
           </select>
       </p>
       <p class="form__row">    
           <label>Medium</label><br/>               
           <input type="text" name="medium" required  class="form__input form__input--medium" />
       </p>
       <p class="form__row">    
           <label>Year</label><br/>               
           <input type="text" name="year" required  class="form__input form__input--small" />
       </p>  
       <p class="form__row">    
           <label>Museum</label><br/>               
           <input type="text" name="museum" required  class="form__input form__input--medium"/>
       </p>                             

       <div class="form__box"> 
          <input type="submit" class="form__btn"> <input type="reset" value="Clear Form" class="form__btn">      
       </div>
   </fieldset>
</form>
</main>       
</body>
</html>