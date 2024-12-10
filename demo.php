<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz"; 

try {
   
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = htmlspecialchars($_POST['name']);
        $sname = htmlspecialchars($_POST['sname']);
        $mail = htmlspecialchars($_POST['age']); 
        $gender = htmlspecialchars($_POST['gender']); 
        $hobiler = isset($_POST['hobiler']) ? implode(", ", $_POST['hobiler']) : ""; 

        
        $sql = "INSERT INTO a (o_name, o_surname, o_mail, o_gender, o_hooby) 
                VALUES (:name, :sname, :mail, :gender, :hobiler)";
        $stmt = $conn->prepare($sql);

        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':sname', $sname);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':hobiler', $hobiler);

        // Exécution de la requête
        $stmt->execute();

        echo "oldu !";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Fermer la connexion
$conn = null;
?>