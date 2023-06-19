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
<?php include 'header.inc.php'; ?>
    
<main>
    <section class="results">
    <?php
        if (!is_numeric($_POST['medium']))
        {
            echo("Medium must be a number");
        }
        elseif (!is_numeric($_POST['year']))
        {
          echo("Year must be a number");
        } 
        else 
        {
      ?>
      <table>
        <caption class="results__caption">Art Work Saved</caption>
        <tr>
          <td class="results__label">Title</td>    
          <td class="results__value"><?php echo $_POST["title"];?></td> 
        </tr>
        <tr>
          <td class="results__label">Description</td>    
          <td class="results__value"><?php echo $_POST["description"];?></td> 
        </tr>
        <tr>
          <td class="results__label">Genre</td>    
          <td class="results__value"><?php echo $_POST["genre"];?></td> 
        </tr>
        <tr>
          <td class="results__label">Subject</td>    
          <td class="results__value"><?php echo $_POST["subject"];?></td> 
        </tr>
        <tr>
          <td class="results__label">Medium</td>    
          <td class="results__value"><?php echo $_POST["medium"];?></td> 
        </tr>   
        <tr>
          <td class="results__label">Year</td>    
          <td class="results__value"><?php echo $_POST["year"];?></td> 
        </tr>  
        <tr>
          <td class="results__label">Museum</td>    
          <td class="results__value"><?php echo $_POST["museum"];?></td> 
        </tr>          
      </table>
    <?php 
      }
    ?>
    </section>
</main>       
</body>
</html>