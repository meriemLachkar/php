<?php
if(isset($_POST['action'])) {
    include('cnx.php');
    include('db.php');
    $action = $_POST['action'];
    
    switch($action) {
        case 'new':
            if(isset($_POST['id'])) {
                $newTask = $_POST['id'];
                $query = "INSERT INTO todo (task) VALUES ('$newTask')";
                
        
                mysqli_query($connexion, $query);
            }
            break;
            
        case 'delete':
            if(isset($_POST['id'])) {
                $taskId = $_POST['id'];
                

                $query = "DELETE FROM todo WHERE id = $taskId";
                mysqli_query($connexion, $query);
            }
            break;
            
        case 'toggle':
            if(isset($_POST['id'])) {
                $taskId = $_POST['id'];
                
                $query = "UPDATE todo SET done = 1 - done WHERE id = $taskId";
            
                mysqli_query($connexion, $query);
            }
            break;
}
}
?>