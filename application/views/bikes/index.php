<div class="container">
    <h2>You are in the View: application/views/bikes/index.php (everything in this box comes from that file)</h2>
    <!-- add bike form -->
    <div>
        <h3>Add a bike</h3>
        <form action="<?php echo URL; ?>bikes/addbike" method="POST">
            <label>Model</label>
            <input type="text" name="model" value="" required />
            <label>Price</label>
            <input type="text" name="price" value="" required />
            <label>Owner</label>
            <input type="text" name="owner" value="" required />
            <label>Phone</label>
            <input type="text" name="phone" value="" required />
            <label>Link</label>
            <input type="text" name="link" value="" required />
            <input type="submit" name="submit_add_bike" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div>
        <h3>Amount of bikes (data from second model)</h3>
        <div>
            <?php echo $amount_of_bikes; ?>
        </div>
        <h3>List of bikes (data from first model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Model</td>
                <td>Price</td>
                <td>Owner</td>
                <td>Phone</td>
                <td>Link</td>
                <td>DELETE</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($bikes as $bike) { ?>
                <tr>
                    <td><?php if (isset($bike->id)) echo $bike->id; ?></td>
                    <td><?php if (isset($bike->model)) echo $bike->model; ?></td>
                    <td><?php if (isset($bike->price)) echo $bike->price; ?></td>
                    <td><?php if (isset($bike->owner)) echo $bike->owner; ?></td>
                    <td><?php if (isset($bike->phone)) echo $bike->phone; ?></td>
                    <td>
                        <?php if (isset($bike->link)) { ?>
                            <a href="<?php echo $bike->link; ?>"><?php echo $bike->link; ?></a>
                        <?php } ?>
                    </td>
                    <td><a href="<?php echo URL . 'bikes/deletebike/' . $bike->id; ?>">x</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
