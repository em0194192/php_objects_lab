<?php

    //Create A Reservation Class with 3 properties and 2 methods
    class Reservation {
        public string $customer_name;
        public int $room_number;
        public int $room_rate;
        public bool $isCheckedIn = false; //defaults to false, will print nothing if echoed

        //Calculates totalCharges for room given number of days
        public function totalCharges (int $days)
        {
            $total = $this->room_rate * $days;
            return "Total Charges for Room $this->room_number for $days days will be $$total.\n";
        }

        //Checks in room
        public function checkIn ()
        {
            $this->isCheckedIn = true;
            return "Room $this->room_number is checked in!\n";
        }
    }

    //Instantiate Object 1 and initialize property values
    $reservation1 = new Reservation();
    $reservation1->customer_name = "Jack Torrance";
    $reservation1->room_number = 237;
    $reservation1->room_rate = 100;
   
    //Instantiate Object 2 and initialize property values
    $reservation2 = new Reservation();
    $reservation2->customer_name = "Delbert Grady";
    $reservation2->room_number = 217;
    $reservation2->room_rate = 150;

    //Print out both objects
    print_r($reservation1); 
    print_r($reservation2); 

    //Test Both methods for both objects
    echo $reservation1->totalCharges(3);
    echo $reservation2->totalCharges(5);
    echo $reservation1->checkIn();
    echo $reservation2->checkIn();

    //Print out both objects again to show that check in worked
    print_r($reservation1); 
    print_r($reservation2); 