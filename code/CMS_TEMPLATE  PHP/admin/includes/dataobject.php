<?php
namespace Admin\Includes;

abstract class DataObject
{
    public $id;
    protected static $dbTableFields;
    protected static $mainTable;
    /**
     * @var Database
     */
    protected $database;
    protected $mappedArray;

    public function __construct()
    {
        global $database;
        $this->database = $database;
    }

    public static function getAll()
    {
        $sql = "SELECT * FROM " . static::$mainTable . " ";
        return self::query($sql);
    }

    public static function getById($id)
    {
        $sql = "SELECT * FROM " . static::$mainTable . " where id = $id LIMIT 1";
        $result = self::query($sql);
        return empty($result) ? null : $result[0];
    }

    static function query($sql)
    {
        global $database;
        $queryResults = $database->query($sql);

        if (empty($queryResults)) {
            return;
        }

        if (is_bool($queryResults)) {
            return $queryResults;
        }

        $objectsArray = [];
        while($row = $queryResults->fetch_array()) {
            $objectsArray[] = self::instantation($row);
        }

        return $objectsArray;
    }

    public static function instantation($the_record)
    {
        $calling_class = get_called_class();
        $the_object = new $calling_class;
        foreach ($the_record as $the_attribute => $value) {
            $the_attribute = snakeToCamel($the_attribute);
            if($the_object->has_the_attribute($the_attribute)) {
                $the_object->$the_attribute = $value;
            }
        }

        return $the_object;
    }

    private function has_the_attribute($the_attribute) {
        return property_exists($this, $the_attribute);
    }

    public function save()
    {
        return isset($this->id) ? $this->update() : $this->create();
    }

    protected function create()
    {
        $valueSql = [];
        $columnSql = [];
        foreach ($this->propertyColumnMapper() as $key => $value) {
            $valueSql[] = "'$value'";
            $columnSql[] = "$key";
        }

        $sql = "INSERT INTO " . static::$mainTable . " (" . implode(",", $columnSql) . ") VALUES (" . implode(",", $valueSql) . ");";
        return self::query($sql);
    }

    protected function update()
    {
        $setSql = [];
        foreach ($this->propertyColumnMapper() as $key => $value) {
            $setSql[] = "$key = '$value'";
        }

        $sql = "UPDATE " . static::$mainTable . " SET " . implode(", ", $setSql) . " WHERE {$setSql[0]};";
        return self::query($sql);
    }

    public function delete()
    {
        $sql = "DELETE FROM " . static::$mainTable . " WHERE Id='" . $this->id . "';";
        return self::query($sql);
    }

    public function propertyColumnMapper()
    {
        global $database;
        if (empty($this->mappedArray)) {
            foreach(self::$dbTableFields as $column) {
                if (property_exists(Users::class, snakeToCamel($column))) {
                    $this->mappedArray[$column] = $database->escapeString($this->{snakeToCamel($column)});
                }
            }
        }
        return $this->mappedArray;
    }


}