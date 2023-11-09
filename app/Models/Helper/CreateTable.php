<?php
namespace App\Models\Helper;
require __DIR__ . '/../../../helper/database.php';

class CreateTable
{
    protected $schema;
    function __construct($schema)
    {
        $this->schema = $schema;
    }
    public function getShema()
    {
        return $this->schema;
    }
    
    public function create()
    {
        global $db_connontion;
        $connection =$db_connontion->get_connection();
        if ($connection->query($this->schema) === TRUE) {
            echo "Table users created successfully";
        } else {
            echo "Error creating table: " . $connection->error;
        }
    }
}
