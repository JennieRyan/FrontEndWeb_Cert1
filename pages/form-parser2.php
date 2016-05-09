<html>
<body>
Your name is: <?php echo $_POST['name']; ?><br />
Your e-mail: <?php echo $_POST['email']; ?><br />
Your phone is: <?php echo $_POST['phone']; ?><br />
Your web address is: <?php echo $_POST['url']; ?><br />
  
Your donation amount is: <?php echo $_POST['sponsorAmt']; ?>
  <?php echo $_POST['customAmt']; ?>
  <br />
  
The region you want to help is: <?php echo $_POST['region']; ?><br />

Your newsletter preference is:

    <?php 
        if(!empty($_POST['newsletter'])) {
            foreach($_POST['newsletter'] as $news) {
                echo $news;
            }
        }
    
    ?>
    
    
<br />
Comments:<br />
<?php echo $_POST['comment']; ?>
</body>
</html>
