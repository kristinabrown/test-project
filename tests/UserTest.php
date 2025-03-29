<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {
    private static $pdo;

    public static function setUpBeforeClass(): void
    {
        self::$pdo = new PDO(
            'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASS']
        );
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $schemaFile = __DIR__ .'/../database/schema.sql';
        $sql = file_get_contents($schemaFile);
        self::$pdo->exec($sql);
    }

    public function tearDown(): void
    {
        // Clean up the test database by truncating the tables
        // Truncate the user table after each test
        self::$pdo->exec("TRUNCATE TABLE users;");
    }

    public function testUserHasName() {
        $user = User::findFirst(self::$pdo,'*',['name' => 'Andrej'],null);

        $this->assertEquals("Andrej", $user->getName());
    }
}
