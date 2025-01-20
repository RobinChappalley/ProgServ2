<?php
require_once '../Personne.php';
require_once '../config/db.ini';


class Database
{
    private $db;

    public function __construct()
    {
        $config = parse_ini_file(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'db.ini', true);

        $dsn = $config['dsn'];
        $username = $config['username'];
        $password = $config['password'];
        //initialisation à la DB
        $this->db = new \PDO($dsn, $username, $password);
        if (!$this->db) { //ici permet de voir si la DB est bien connectée
            die("Problème de connection à la base de données");
        }
    }
    //Créer table Personnes
    public function creerTablePersonnes(): bool
    {
        $sql = <<<COMMANDE_SQL
        CREATE TABLE IF NOT EXISTS personnes (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nom VARCHAR(120) NOT NULL,
            prenom VARCHAR(120) NOT NULL,
            email VARCHAR(120) NOT NULL UNIQUE,
            noTel VARCHAR(20) NOT NULL UNIQUE,
            mdp VARCHAR(255) NOT NULL,
            token VARCHAR(255) DEFAULT NULL,
            is_confirmed BOOLEAN DEFAULT 0
        );
COMMANDE_SQL;

        try {
            $this->db->exec($sql);
            $ok = true;
        } catch (PDOException $e) {
            $e->getMessage();
            $ok = false;
        }
        return $ok;
    }

    public function ajouterPersonne(Personne $personne): int
    {
        $datas = [
            'nom' => $personne->rendNom(),
            'prenom' => $personne->rendPrenom(),
            'email' => $personne->rendEmail(),
            'noTel' => $personne->rendNoTel(),
            'mdp' => $personne->rendMdp(),
            'token' => $personne->rendToken(),
        ];

        // Appeler la méthode recupereContact avec le numéro de téléphone et email
        if (!$this->recupererContact($datas['noTel'], $datas['email'])) {
            $sql = "INSERT INTO personnes (nom, prenom, email, noTel, mdp, token) VALUES "
                . "(:nom, :prenom, :email, :noTel, :mdp, :token)";
            $stmt = $this->db->prepare($sql);

            // Exécutez la requête et gérez les erreurs
            try {
                $stmt->execute($datas);
                return $this->db->lastInsertId();
            } catch (PDOException $e) {
                echo "Erreur lors de l'insertion : " . $e->getMessage();
                return 0;
            }
        } else {
            echo "Le numéro ou l'email existe déjà";
            echo "<br>";
            return 0; // Retourner une valeur pour indiquer l'échec
        }
    }

    public function verifierConnection(string $email, string $mdp): bool
    {
        $retour = false;
        if (empty($email) or empty($mdp)) {
            echo ("Il faut un mot de passe ET un email");
        }
        if (!$this->recupererContact($email, $mdp)) {
            $retour = true;
        }
        return $retour;
    }


    public function recupererContact(string $noTel, string $email): bool
    {
        $sql = "SELECT * FROM personnes WHERE noTel = :noTel OR email = :email";
        $stmt = $this->db->prepare($sql);

        // Lier les paramètres
        $stmt->bindParam(':noTel', $noTel, \PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);

        // Exécuter la requête
        $stmt->execute();

        // Vérifier si des résultats ont été trouvés
        return $stmt->fetch(\PDO::FETCH_ASSOC) !== false;
    }

    //Fonction pour vérifier mdp et email
    public function verifierAccesEtRecupererUtilisateur(string $email): ?array
    {
        // Prépare la requête pour récupérer les données de l'utilisateur
        $sql = "SELECT * FROM personnes WHERE email = :email";
        $stmt = $this->db->prepare($sql);

        // Lier l'adresse e-mail
        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);

        // Exécuter la requête
        $stmt->execute();

        // Récupérer les résultats
        $utilisateur = $stmt->fetch(\PDO::FETCH_ASSOC);

        // Retourne toutes les données de l'utilisateur
        return $utilisateur ? $utilisateur : null; // Si l'utilisateur existe, retourne ses données, sinon null
    }

    //Fonction pour récupérer l'utilisateur
    public function getUserByToken($token)
    {
        $sql = "SELECT * FROM personnes WHERE token = :token";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':token', $token);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    //Fonction pour confirmer l'inscription de l'utilisateur
    public function confirmeInscription($id)
    {
        $sql = "UPDATE personnes SET is_confirmed = 1 WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
