<?php

    include('conndbz.php');

    class staff extends connUsers{


            function getDetails(){
                $sql = "SELECT * FROM userz1";
                $result = $this->conns->query($sql);
                $items = [];
                if ($result->num_rows > 0){
                    while ( $row = $result->fetch_assoc()){
                        $items[] = $row;
                    }
                    return $items;
                }
            }



            function getDeeets($id){
                
                $sql = "SELECT concat(fnamez,' ',lnamez)as fullnames, pPhoto, usernamez, dob1 FROM userz1 where id = $id";
                $result = $this->conns->query($sql);
                $items = [];
                if ($result->num_rows > 0){
                    while ( $row = $result->fetch_assoc()){
                        $items[] = $row;
                    }
                    return $items;
                }
            }

        }