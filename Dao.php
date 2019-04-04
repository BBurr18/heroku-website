

    <?php
        require_once 'KLogger.php';
        session_start();
        class Dao {

         private $host = "us-cdbr-iron-east-03.cleardb.net";
            private $db = "heroku_1b104b73ca96f18";
            private $user = "b8ef71eff746f6";
            private $pass = "b3ce4c63";
            /*private $host = "localhost";
            private $db = "referraldb";
            private $user = "root";
            private $pass = "root";*/
            public function __construct () {
                $this->logger = new KLogger ( "log.txt" , KLogger::DEBUG );
            }

            public function getConnection () {
                $this->logger->LogDebug("Getting a connection. Inside getConnection()");
                try {
                $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
                        $this->pass);
                } catch (Exception $e) {
                $this->logger->LogError(__CLASS__ . "::" . __FUNCTION__ . " The database exploded " . print_r($e,1));
                echo print_r($e,1);
                exit;
                }
                return $conn;
            }

            public function log($message) {
                $this->logger->LogDebug($message);
            }

            public function getComments () {
                $conn = $this->getConnection();
                return $conn->query("select comment, date_created  from comment order by date_created desc", PDO::FETCH_ASSOC);
            }
            public function getUser ($userName) {
                $conn = $this->getConnection();
            }
            public function saveComment ($comment) {
                $this->logger->LogInfo("Saving a comment [{$comment}]");
                $conn = $this->getConnection();
                $saveQuery = "insert into comment (comment, user_id) values (:comment, 1)";
                $q = $conn->prepare($saveQuery);
                $q->bindParam(":comment", $comment);
                $q->execute();
            }
            public function getUsername($userName){
                $conn = $this->getConnection();
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                $stmt = "select Username from Person where Username like (:userName)";
                $q = $conn->prepare($stmt);
                $q->bindParam(":userName", $userName);
                $q->execute();
                $user = $q->fetch(PDO::FETCH_ASSOC);
                return $user;
            }
            public function getPassword($password){
                $conn = $this->getConnection();
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                $stmt = "select Password from Person where Password like (:password)";
                $q = $conn->prepare($stmt);
                $q->bindParam(":password", $password);
                $q->execute();
                $user = $q->fetch(PDO::FETCH_ASSOC);

                return $user;
            }
            public function createUser($username, $password){
                $conn = $this->getConnection();
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                $stmt = "insert into Person(Username , Password) values((:username) , (:password));";
                $q = $conn->prepare($stmt);
                $q->bindParam(":username", $username);
                $q->bindParam(":password", $password);
                $q->execute();
            }
            public function getPatient($patient){
                $conn = $this->getConnection();
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                $stmt = "select * from Patient where FirstName Like (:patient);";
                $q = $conn->prepare($stmt);
                $q->bindParam(":patient", $patient);
                $q->execute();
                $user = $q->fetch(PDO::FETCH_ASSOC);
                return $user;
            }
            
        }
    ?>
