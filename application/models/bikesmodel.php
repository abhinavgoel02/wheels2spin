<?php

class BikesModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get all bikes from database
     */
    public function getAllBikes()
    {
        $sql = "SELECT id, model, price, owner, phone, link FROM bike";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // libs/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change libs/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a bike to database
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addBike($model, $price, $owner, $phone, $link)
    {
        // clean the input from javascript code for example
        $model = strip_tags($model);
	$price = strip_tags($price);
	$owner = strip_tags($owner);
	$phone = strip_tags($phone);
	$link = strip_tags($link);

        $sql = "INSERT INTO bike (model, price, owner, phone, link) VALUES (:model, :price, :owner, :phone, :link)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':model' => $model, ':price' => $price, ':owner' => $owner, ':phone' => $phone, ':link' => $link));
    }

    /**
     * Delete a bike in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $bike_id Id of bike
     */
    public function deleteBike($bike_id)
    {
        $sql = "DELETE FROM bike WHERE id = :bike_id";
        $query = $this->db->prepare($sql);
        $query->execute(array(':bike_id' => $bike_id));
    }
}
