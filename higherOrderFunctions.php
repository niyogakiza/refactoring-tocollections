<?php

// A higher order function is a function that takes another function as a parameter, returns a function, or does both

class HigherOrderFunction
{
    
    public function transaction($func)
    {
        $this->beginTransaction();
        
        // try {
        //     $result = $func();
        //     $this->commitTransaction();
        // } catch (Exception $e) {
        //     $this->rollbackTransaction()
        //     throw $e
            
        // }
        
        // best practice is 
        
        try {
            $databaseConnection->transaction(function() use ($comment) {
                $comment->save();
            });
            
        } catch (Exception $e) {
            echo "Something went wrong";
            
        }
        // return $result;
    }
}

// Best practice 


?>