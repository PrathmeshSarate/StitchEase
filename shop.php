<?php
include('components/navbar.php');
include('dbcon.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ROBOTO FONT CSS -->
    <link rel="stylesheet" href="components/css/robotocondensed.css">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="components/css/bootstrap.min.css">


    <link rel="stylesheet" href="components/css/jquery-ui.css">
    

    

    <title>Raymond</title>

</head>

<body>
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <!-- SECOND ROW START -->

            <div class="col-md-3">
                <!-- START COLUMN DIV IN 3 -->

                <div class="list-group">
                    <h3 class="text-info ">FILTERS</h3><br>
                    <h3>Price Range</h3>
                    <div style="height: 180px; overflow-y:auto; overflow-x:hidden;">
                        <div class="list-group-item">
                            <div class="pt-2">
                                <div id="slider-range"></div>
                                <label>
                                    <input class="pt-4 list-inline" type="text" id="amount_min" readonly
                                        style="border:0;  font-weight:bold;">
                                    <input class="pt-4" type="text" id="amount_max" readonly
                                        style="border:0;  font-weight:bold;">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="list-group">

                    <h3>Color</h3>
                    <div style="height: 180px; overflow-y:auto; overflow-x:hidden;">
                        <?php
                        $query = "SELECT DISTINCT(color) FROM `cloths` WHERE stock = '0' ORDER BY id DESC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) { ?>
                        <div class="list-group-item checkbox">
                            <label> <input type="checkbox" class="common_selcetor color"
                                    value="<?php echo $row['color']; ?>"><?php echo $row['color']; ?></label>
                        </div>
                        <?php }
                        ?>
                    </div>
                </div> <!-- END LIST DIV COLOR -->

                <div class="list-group">
                    <h3>Material Type</h3>
                    <div style="height: 180px; overflow-y:auto; overflow-x:hidden;">
                        <?php
                        $query = "SELECT DISTINCT(material_type) FROM `cloths` WHERE stock = '0'";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) { ?>
                        <div class="list-group-item checkbox">
                            <label><input type="checkbox" class="common_selcetor material_type"
                                    value="<?php echo $row['material_type']; ?>"><?php echo $row['material_type']; ?></label>
                        </div>
                        <?php }
                        ?>
                    </div>
                </div> <!-- END LIST DIV MATERIAL TYPE -->

                <div class="list-group">
                    <h3>Cloth Type</h3>
                    <div style="height: 180px; overflow-y:auto; overflow-x:hidden;">
                        <?php
                        $query = "SELECT DISTINCT(p_type) FROM `cloths` WHERE stock = '0'";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) { ?>
                        <div class="list-group-item checkbox">
                            <label><input type="checkbox" class="common_selcetor p_type"
                                    value="<?php echo $row['p_type']; ?>"><?php echo $row['p_type']; ?></label>
                        </div>
                        <?php }
                        ?>
                    </div>
                </div>



                <!-- END LIST DIV PRICE FILTER -->


            </div> <!-- END COLUMN DIV IN 3 -->

            <div class="col-md-9 ">
                <!-- START COLUMN DIV IN 9 -->

                <div class="row filter_data">


                </div>

            </div> <!-- END COLUMN DIV IN 9 -->

        </div> <!-- SECOND ROW END -->

    </div>






    <!-- JQuery JS -->
    <script src="components/js/jquery.js"></script>
   


    <!-- JQuery UI JS -->
    <script src="components/js/jquery-ui.js"></script>

    

    <!-- BOOTSTRAP JS -->
    <script src="components/js/bootstrap.min.js"></script>

    <!-- ajax onload product filter JS-->
    <script>
        $(document).ready(function () 
        {
            let p_min, p_max;

                filter_data();

                function filter_data() {
                    
                    var action = 'fetch_data.php';
                    var color = get_filter('color');
                    var material_type = get_filter('material_type');
                    var p_type = get_filter('p_type');
                    
                    
                     $.ajax({
                         

                            url: "fetch_data.php",
                            method: "POST",
                            data: {
                                action: action,
                                color: color,
                                material_type: material_type,
                                p_type: p_type,
                                            p_min: p_min,
                                            p_max: p_max
                                
                            }
                            ,
                            success: function (data) {
                                $('.filter_data').html(data);
                                
                            }
                        

                    });
                }


                    // -----------------------SILDER JS-------------------------------------------------------------

                    $("#slider-range").slider({

                            range: true,
                            min: 200,
                            max: 10000,
                            values: [200, 10000],
                            slide: function (event, ui) 
                            {
                                $("#amount_min").val("From : " + "₹" + ui.values[0]);
                                $("#amount_max").val("To: " + "₹" + ui.values[1]);
                                p_min = ui.values[0];
                                p_max = ui.values[1];
                                filter_data();
                            }
                        });                    

                    $("#amount_min").val("From : " + "₹" + $("#slider-range").slider("values", 0));
                    $("#amount_max").val("To: " + "₹" + $("#slider-range").slider("values", 1));

                    // -----------------------SILDER JS------------------------------------------------------------

                   
                    
                
                
                function get_filter(class_name) {
                    var filter = [];

                    $('.' + class_name + ':checked').each(function () {
                            filter.push($(this).val());
                        }

                    );
                    return filter;
                }

                $('.common_selcetor').click(function () {
                        filter_data();
                    }

                );
        });
    </script>

</body>

</html>