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

        function findAll(){
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM $this->table");
            $stmt->execute();
            return $stmt;
        }
        
        function find($field, $value){
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field =:value");
            $criteria = [
                "value" => $value
            ];
            $stmt->execute($criteria);
            return $stmt;
        }

        function insert($record){
            global $pdo;
            $keys = array_keys($record);
            $keyswithComma = implode(',', $keys);
            $keyswithCommaColon = implode(',:',$keys);
            $stmt = $pdo->prepare("INSERT INTO $this->table($keyswithComma) VALUES(:$keyswithCommaColon)");
            $stmt->execute($record);
            
        }

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

        function delete($field, $value){
            global $pdo;
            $stmt = $pdo->prepare("DELETE FROM $this->table WHERE $field = :value");
            $criteria = [
                "value" => $value
            ];
            $stmt->execute($criteria);
            return $stmt;
        }




    }
?>