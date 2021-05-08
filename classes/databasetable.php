<?php
    class DatabaseTable{
        private $table;
        function __construct($table){
            $this->table = $table;
        }

        function save($record, $pk=''){
            try {
                $this->insert($record);

            } catch (Exception $e) {
                $this->update($record, $pk);
            }
        }

        // function to extract all the data from table
        function findAll(){
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM $this->table");
            $stmt->execute();
            return $stmt;
        }
        
        // function declaration to extract all the data from table with condition
        function find($field, $value){
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field =:value");
            $criteria = [
                "value" => $value
            ];
            $stmt->execute($criteria);
            return $stmt;
        }

        // function declaration to extract all the data from table with two conditions
        function findValue($field, $value, $field2, $value2){
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field =:value AND $field2 =:value2");
            $criteria = [
                "value" => $value,
                "value2" => $value2
            ];
            $stmt->execute($criteria);
            return $stmt;
        }

        // function declaration to insert data to table
        function insert($record){
            global $pdo;
            $keys = array_keys($record);
            $keyswithComma = implode(',', $keys);
            $keyswithCommaColon = implode(',:',$keys);
            $stmt = $pdo->prepare("INSERT INTO $this->table($keyswithComma) VALUES(:$keyswithCommaColon)");
            $stmt->execute($record);
            
        }

        // function declaration to update data from table
        function update($record, $pk){
            global $pdo;
            $para = [];
            foreach($record as $key => $value){
                $para[] = $key.'= :'.$key;
            }
            $paraString = implode(',',$para);
            $stmt = $pdo->prepare("UPDATE $this->table SET $paraString WHERE $pk = :pk");
            $record['pk'] = $record[$pk];
            if($stmt->execute($record)){
                return true;
            } 
            else
                return false;
        }

        // function declarartion to delete a row from table
        function delete($field, $value){
            global $pdo;
            $stmt = $pdo->prepare("DELETE FROM $this->table WHERE $field = :value");
            $criteria = [
                "value" => $value
            ];
            $stmt->execute($criteria);
            return $stmt;
        }

        // function declaration to count the number of rows in table
        function countRow(){
            global $pdo;
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM $this->table");
            $stmt->execute();
            return $stmt;
        }

        // function declaration to update specific row column data 
        function updateStatus($field, $field2, $value2){
            global $pdo;
            $stmt = $pdo->prepare("UPDATE $this->table SET $field = 1 WHERE $field2 = :value2");
            $criteria = [
                "value2" => $value2 
            ];
            $stmt->execute($criteria);
            return $stmt;
        }

        // function declaration to update specific row column data 
        function updateValues($field, $val, $field2, $value2){
            global $pdo;
            $stmt = $pdo->prepare("UPDATE $this->table SET $field = $val WHERE $field2 = :value2");
            $criteria = [
                "value2" => $value2 
            ];
            $stmt->execute($criteria);
            return $stmt;
        }

        // function declaration to find data through search
        function findProducts($field, $value){
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field LIKE :value");
            $criteria = [
                "value" => $value
            ];
            $stmt->execute($criteria);
            return $stmt;
        }

        // function declaration to join two tables with condition
        function joinTableCondition($table2,$value,$value2,$field,$value3){
            global $pdo;
            $stmt = $pdo->prepare("SELECT $this->table.*, $table2.* FROM $this->table JOIN $table2 ON 
              $this->table.$value = $table2.$value2 WHERE $field =:value3");
              $criteria = [
                "value3" => $value3
            ];
            $stmt->execute($criteria);
            return $stmt;
        }

        // function declaration to join two tables
        function joinTable($table2,$value,$value2){
            global $pdo;
            $stmt = $pdo->prepare("SELECT $this->table.*, $table2.* FROM $this->table JOIN $table2 ON 
            $this->table.$value = $table2.$value2");
            $stmt->execute();
            return $stmt;
        }

        // function declaration to join three tables
        function joinThreeTable($table2,$value, $value2, $table3, $value3 , $value4){
            global $pdo;
            $stmt = $pdo->prepare("SELECT $this->table.*, $table2.*, $table3.* FROM $this->table JOIN $table2 ON 
                $this->table.$value = $table2.$value2 JOIN $table3 ON $table2.$value3 = $table3.$value4");

                
            $stmt->execute();
            return $stmt;
        }


    }
?>