# OOP_uebung
OOP Training
Frontend

Home
 - News (?)

Login
 - Loginformular
    - Username
    - Passwort
    - Submit
        - Ruft das entsprechende Skript auf
            - DB Connect
            - Username & Passwort werden mit Datenbank abgeglichen
                - Wenn beides überein stimmt, erfolgt die Weiterleitung
                - Wenn es nicht übereinstimmt - Fehlermeldung
 - PW Forgot (?)

Kontakt
    - n-Anzahl Felder
        - Mit Array mit Feldinformationen und Pflicht sowie optional Parametern
        - Submit
            - Ruft Validierungsskript auf
                - True
                    - Mailversand PHPMailer
                    - // Kommentare für Möglichkeit ohne PHP Mailer
                - False
                    - Fehlermeldungen für den Benutzer

Referenzen Ansicht
    - Ansicht der Referenzen
        - Titel
        - Beschreibung
        - Bild
        - Möglichkeit auf Weiterführenden Link


Backend
    Benutzerrechte
        - Admin: Darf alles
        - User: Eingeschränktes Verhalten wird exemplarisch mit angelegt
        - Gast: Gast - Gucken u. Kommentieren

Referenzen Verwaltung
    - Create, Delete, Update, Insert CRUD
        - Titel
        - Beschreibung
        - Bild

Benutzerverwaltung
    - CRUD
        - User Anlegen, Löschen, Editieren (passwort, username)

Logout
    - Beendet die Session
    - Leert das Session-Array
    - Zerstört die Session


Dateien:
    Application.php
        public function validateParams();
        public $nav = array() // Get-Param, Name

    DatabaseHandler.php
        public function getDBInstance();
            - return PDO Object

    LoginHandler.php
        public $database;
        public $status = new StatusHandler();
        public function userLogin();
            - return True / False
        private checkLoginState();
            - return bool
        public function logout();
            - return bool

    FormHandler.php
        public $status = new StatusHandler();
        public $formFields = array();
        public function validate();
            - False
            - Array mit Kontaktinfos
        public  function sendMail();

    ReferenceHandler.php
        CRUD
        public $status = new StatusHandler();
        public function create();
        public function read();
        public function update();
        public function delete();

    StatusHandler.php
        public function __get();
        public function __set();

Datenbank

users
    user_id:int(11) user_username:varchar(64)
    user_password:varchar(32) user_email:varchar(128) user_role:string
    user_created:timestamp

references
    reference_id:int(11) reference_title:varchar(255)
    reference_description:text reference_image_url:varchar(255)
    reference_access:string("admin", "user", "guest, Null)
    reference_created:timestamp reference_category:varchar(128)
