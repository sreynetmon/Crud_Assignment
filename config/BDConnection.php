<?php
// namespace config\DBConnection;
class Database {
    private $host = 'dpg-d0ha15qdbo4c73dj2690-a.oregon-postgres.render.com';
    private $port = '5432';
    private $db   = 'employee_jfcu';
    private $user = 'employee_jfcu_user';
    private $pass = 'H5xAvZ00twB2nd61Rh5skOYz3HX5JQiP';

    public function getConnection() {
        try {
            $pdo = new PDO("pgsql:host={$this->host};port={$this->port};dbname={$this->db}", $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "✅ Connected to PostgreSQL successfully!"; 
            return $pdo;
        } catch (PDOException $e) {
            echo "❌ Connection failed: " . $e->getMessage();
            return null;
        }
    }
}
?>
