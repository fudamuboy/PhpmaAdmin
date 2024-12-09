<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz"; // Remplacez par votre base de données

try {
    // Connexion à la base de données
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $name = htmlspecialchars($_POST['name']);
        $sname = htmlspecialchars($_POST['sname']);
        $mail = htmlspecialchars($_POST['age']); // Correspond à "E-posta"
        $gender = htmlspecialchars($_POST['gender']); 
        $hobiler = isset($_POST['hobiler']) ? implode(", ", $_POST['hobiler']) : ""; // Joindre les hobbies en une chaîne

        // Requête SQL pour insérer les données
        $sql = "INSERT INTO a (o_name, o_surname, o_mail, o_gender, o_hooby) 
                VALUES (:name, :sname, :mail, :gender, :hobiler)";
        $stmt = $conn->prepare($sql);

        // Liaison des paramètres
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':sname', $sname);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':hobiler', $hobiler);

        // Exécution de la requête
        $stmt->execute();

        echo "Enregistrement ajouté avec succès !";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Fermer la connexion
$conn = null;
?>
