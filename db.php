    <?php 
    
    class Database {
           public $pdo;
           
           public function __construct($db="bedrijven", $user="root", $pwd="", $host="localhost:3307") {
                try {
                        $this->pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pwd);
                        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        echo "Connected successfully $db";
                } catch(PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();

                }
               
           
    }


    public function telefoons($Merk, $Model, $Opslag, $Prijs) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO Telefoons (Merk, Model, Opslag, Prijs) VALUES (:Merk, :Model, :Opslag, :Prijs)");
            
            $stmt->bindParam(':Merk', $Merk);
            $stmt->bindParam(':Model', $Model);
            $stmt->bindParam(':Opslag', $Opslag);
            $stmt->bindParam(':Prijs', $Prijs);
            
            $stmt->execute();
               
            
            echo "New records created successfully";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }
    
}
    
    ?>