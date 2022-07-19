<?php
     class Usuario{
          
          private $name;
          private $age;
          private $gender;

          

          public function getName()
          {
                    return $this->name;
          }

          public function setName($name)
          {
                    $this->name = $name;

                    return $this;
          }

          

          public function getGender()
          {
                    return $this->gender;
          }

          public function setGender($gender)
          {
                    $this->gender = $gender;

                    return $this;
          }
         

          public function getAge()
          {
                    return $this->age;
          }
          
          public function setAge($age)
          {
                    $this->age = $age;

                    return $this;
          }

          public function validation(){
               $namePattern = "/^[\_\a-zà-ú ]+$/i";
               $agePattern = "/^[0-9]+$/";
               $genderPattern = "/^[f,m]{1}$/i";

               if(preg_match($namePattern, $this->name) && preg_match($agePattern, $this->age) && preg_match($genderPattern, $this->gender)):
                    return true;
               else:
                    return false;
               endif;
          }
     }
?>