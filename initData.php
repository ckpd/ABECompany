<?php

/*****
* @ function initData() insert sample data 
* into the database
* @ foreach get array and insert data 
*******/

function initData(){
        
        $sql = db_query("CREATE TABLE comp (company_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                            address varchar(255) NOT NULL, 
                                            company_name varchar(255) NOT NULL,
                                            phone_number varchar(255) NOT NULL,
                                            email_address varchar(255) NOT NULL,
                                            parish varchar(255) NOT NULL,
                                            city varchar(255) NOT NULL)
                                            ");

    
        $comp = array(
          array('company_id' => '1','address' => 'Lowther\'s Lane','company_name' => 'Island Code','phone_number' => '4734055738','email_address' => 'admin@islandcode.com','parish' => 'Saint George','city' => 'Saint Georges'),
          array('company_id' => '2','address' => 'Archibald Avenue','company_name' => 'Cathwills Stationary','phone_number' => '14734401111','email_address' => 'info@css.com','parish' => 'St. Geo','city' => 'Saint George'),
          array('company_id' => '3','address' => 'Grenville','company_name' => 'Caribbean Fresh','phone_number' => '14734401234','email_address' => 'info@caribfresh.com','parish' => 'St. Andrew','city' => 'St. Andrews'),
          array('company_id' => '4','address' => 'Esplanade Mall','company_name' => 'Milan Shoe Store','phone_number' => '14734409090','email_address' => 'buy@milan.com','parish' => 'St. John','city' => 'St. John\'s'),
          array('company_id' => '7','address' => 'Dusty Highway','company_name' => 'Spiceisle Tyres','phone_number' => '14734444533','email_address' => 'info@spiceisle.com','parish' => 'St George','city' => 'Grand Anse'),
          array('company_id' => '8','address' => 'Bay Gardens','company_name' => 'Bay Gardens Zoo','phone_number' => '14734440000','email_address' => 'info@bgzoo.com','parish' => 'St George','city' => 'St Pauls'),
          array('company_id' => '11','address' => 'La bay','company_name' => 'Country Cold Store','phone_number' => '14734449012','email_address' => 'meat@country.com','parish' => 'St. John','city' => 'Paul Village'),
          array('company_id' => '12','address' => 'Armsterdam','company_name' => 'Legal Kush','phone_number' => '14734401212','email_address' => 'info@kushsnacks.com','parish' => 'St. David','city' => 'La Tante'),
          array('company_id' => '13','address' => 'Vendomme','company_name' => 'Tallpree\'s Enterprises','phone_number' => '14734403412','email_address' => 'admin@tallent.com','parish' => 'St. George','city' => 'Willis'),
          array('company_id' => '14','address' => 'Carenage','company_name' => 'Osprey Lines','phone_number' => '14734420303','email_address' => 'info@osprey.com','parish' => 'St. George','city' => 'Hopeville'),
          array('company_id' => '15','address' => 'Spiceland Mall','company_name' => 'Grenada Co-op Bank','phone_number' => '14734423030','email_address' => 'bank@coop.com','parish' => 'St. George','city' => 'Grand Anse'),
          array('company_id' => '16','address' => 'Esplanade Mall','company_name' => 'Linen and Things','phone_number' => '14734350934','email_address' => 'find@linenandthings.com','parish' => 'St. David','city' => 'Grand Etang'),
          array('company_id' => '17','address' => 'Calliste','company_name' => 'Yum Yum Cafe','phone_number' => '14734436789','email_address' => 'info@yumyumcafe.com','parish' => 'St. David','city' => 'Frequente'),
          array('company_id' => '18','address' => 'Point Saline','company_name' => 'Brydens Print Shop','phone_number' => '14734409234','email_address' => 'print@brydens.com','parish' => 'St. George','city' => 'Grand Anse'),
          array('company_id' => '19','address' => 'Brooks Ally','company_name' => 'IGA supermarket','phone_number' => '14734420394','email_address' => 'admin@igasuper.com','parish' => 'St. George','city' => 'Steele Street'),
          array('company_id' => '1104','address' => 'Diamond Street','company_name' => 'AbC World','phone_number' => '12342235','email_address' => 'me@ab.com','parish' => 'St Johns','city' => 'Gouyave'),
          array('company_id' => '1105','address' => 'Mark Town','company_name' => 'Computer Visioneer','phone_number' => '14734034050','email_address' => 'com@me.com','parish' => 'St Davids','city' => 'Corinth'),
          array('company_id' => '1107','address' => 'Ja','company_name' => 'James Town','phone_number' => '22','email_address' => 'mme@me.com','parish' => 'adad','city' => 'adada'),
        );


        foreach($comp as $row){
            $address = $row['address'];
            $name = $row['company_name'];
            $number = $row['phone_number'];
            $email = $row['email_address'];
            $parish = $row['parish'];
            $city = $row['city'];

             $query = "INSERT INTO comp(address, company_name, phone_number, email_address,parish,city) VALUES ('$address','$name',$number,'$email','$parish','$city')";

                                $sqlInsert = db_query($query);
                                //error handling
                                if($sqlInsert === false){
                                    db_error();
                                }
        }

}

?>