<?php
try {
    $conn = new PDO('mysql:host=localhost:3306;dbname=goodies;', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlquerystring = "SELECT * FROM messages";
    $returnobj = $conn->query($sqlquerystring);
    if ($returnobj->rowCount() == 0) {
        //no data found
?>
       

        

        <?php
    } else {
        $twoDtable = $returnobj->fetchAll();
        foreach ($twoDtable as $row) {
            //$row is a oneDarray representing each data row
        ?>
            
                <?php echo $row['message'] ?> 
                
                
            

    <?php
        }
    }
   
} catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}
 ?>