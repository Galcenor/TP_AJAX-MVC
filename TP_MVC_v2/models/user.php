<?php
include 'database.php';
class User {
    private $id;
    private $username;
    private $email;
    private $password;
    private $role;
    private $token;

    public function __construct($id, $username, $email, $password, $role, $token) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->token = $token;
    }

    public function insertUser() {
        $database = new Database();
        $pdo = $database->getPDO();
    
        // Utiliser password_hash() pour hacher le mot de passe
        $hashed_password = password_hash($this->password, PASSWORD_DEFAULT);
    
        $query = "INSERT INTO user (username, email, password, role, token) VALUES (:username, :email, :password, :role, :token)";
    
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $hashed_password); // Utiliser le mot de passe haché.
        $stmt->bindParam(':role', $this->role);
        $stmt->bindParam(':token', $this->token);
    
        return $stmt->execute();
    }

    // $user = new User(null, 'nouvel_utilisateur', 'email@example.com', 'mot_de_passe', 'utilisateur', 'token');
    //  if ($user->insertUser()) {
    //  echo "Utilisateur inscrit avec succès.";
    //  } else {
    //  echo "Erreur lors de l'inscription de l'utilisateur.";
    //  }


    public static function getUserForLogin($username) {
        $database = new Database();
        $pdo = $database->getPDO();
    
        $query = "SELECT * FROM user WHERE username = :username";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            $user_data = $stmt->fetch(PDO::FETCH_ASSOC);
            return new User($user_data['id'], $user_data['username'], $user_data['email'], $user_data['password'], $user_data['role'], $user_data['token']);
        } else {
            return null; // Aucun utilisateur trouvé avec ce nom d'utilisateur
        }
    }

    // $username = 'nom_d_utilisateur';
    //     $user = User::getUserForLogin($username);
    //     if ($user && password_verify('mot_de_passe', $user->getPassword())) {
    //     // L'utilisateur est authentifié avec succès
    //     echo "Connecté en tant que : " . $user->getUsername();
    // } else {
    // echo "Identifiants incorrects.";
    // }

    public function generateCsrfToken() {
        // Génére un nouveau token CSRF, par exemple, en utilisant une chaîne aléatoire
        $new_csrf_token = bin2hex(random_bytes(32));

        // Mettre à jour le token CSRF dans l'objet User
        $this->token = $new_csrf_token;

        // Mettre à jour le token CSRF dans la base de données
        $database = new Database();
        $pdo = $database->getPDO();
        $query = "UPDATE user SET token = :token WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':token', $new_csrf_token);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    // Connexion réussie, mettez à jour le token CSRF
    // $user->generateCsrfToken();
    
}
