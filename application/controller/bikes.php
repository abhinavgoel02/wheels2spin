<?php

/**
 * Class Bikes
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Bikes extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/bikes/index
     */
    public function index()
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: Bikes, using the method index().';

        // load a model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
        $bikes_model = $this->loadModel('BikesModel');
        $bikes = $bikes_model->getAllBikes();

        // load another model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
        $stats_model = $this->loadModel('StatsModel');
        $amount_of_bikes = $stats_model->getAmountOfBikes();

        // load views. within the views we can echo out $bikes and $amount_of_bikes easily
        require 'application/views/_templates/header.php';
        require 'application/views/bikes/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * ACTION: addBike
     * This method handles what happens when you move to http://yourproject/bikes/addbike
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a bike" form on bikes/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to bikes/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function addBike()
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: Bikes, using the method addBike().';

        // if we have POST data to create a new bike entry
        if (isset($_POST["submit_add_bike"])) {
            // load model, perform an action on the model
            $bikes_model = $this->loadModel('BikesModel');
            $bikes_model->addBike($_POST["model"], $_POST["price"],  $_POST["owner"], $_POST["phone"], $_POST["link"]);
        }

        // where to go after bike has been added
        header('location: ' . URL . 'bikes/index');
    }

    /**
     * ACTION: deleteBike
     * This method handles what happens when you move to http://yourproject/bikes/deletebike
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a bike" button on bikes/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to bikes/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $bike_id Id of the to-delete bike
     */
    public function deleteBike($bike_id)
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: Bikes, using the method deleteBike().';

        // if we have an id of a bike that should be deleted
        if (isset($bike_id)) {
            // load model, perform an action on the model
            $bikes_model = $this->loadModel('BikesModel');
            $bikes_model->deleteBike($bike_id);
        }

        // where to go after bike has been deleted
        header('location: ' . URL . 'bikes/index');
    }
}
