<?php
$db = \Config\Database::connect();
try {
    $db->initialize();
    echo "Database connection successful!";
} catch (\Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
