<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Jquery.js"></script>
    <title>Dropdown</title>
</head>

<body>
    <div>
        <?php
        // Fetch all categyries
        $sql = "SELECT * FROM catagories";
        $result = mysqli_query($conn, $sql);
        ?>
        <!-- Category Dropdown -->
        <div>Category</div><br>
        <select id="data" onchange="myfun(this.value)">
            <option value="0">Select Category</option>
            <?php
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
                <!-- $category_id = $row['id'];
            $category_name = $row['category_name'];



            // echo "<option value='" . $category_id . "' >" . $category_name . "</option>"; -->

                <option value="<?= $rows['id'] ?>"><?= $rows['category_name'] ?></option>
            <?php }
            ?>
        </select>
        <br><br>

        <!-- Product Dropdown -->
        <div>Product</div><br>
        <select id="dataget">
            <option value="" id="select_opt">Select Product</option>
        </select>

        <br><br>
        <button>Submit</button>
        <!-- Script -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
        <script type="text/javascript">
            function myfun(datavalue) {
                $.ajax({
                    url: "category.php",
                    type: "POST",
                    data: {
                        datapost: datavalue
                    },
                    success: function(result) {
                        // $('#dataget').html(result);
                        var data = JSON.parse(result)
                        console.log(data);
                        $('#select_opt').attr('hidden', true);
                        $('#dataget').append(`<option value="">select product</option>`);
                        $.each(data.id, function(key, value) {

                            // console.log(data.product_name[key])
                            $('#dataget').append(
                                `<option value="` + value + `">` + data.product_name[key] + `</option>`
                            );



                        });
                    }
                });

            }
        </script>
    </div>
</body>