<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php'; ?>

    <body>
        <!-- Menu -->
        <?php include 'includes/menu.php'; ?>

        <!-- Menu -->
        <?php include 'includes/slider.php'; ?>


<br>
        <!-- Page Content -->
        <div class="container">
            <h2 style="text-align:center;">Latest Video Lectures</h2>
            <br>
            <div class="row">
                <?php foreach ($result as $row):?>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"> <img class="card-img-top img-thumbnail" style="height:220px;" src="_images/lectur/lecturer/<?php echo $row->lecturer_img?>" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#"> <?php echo $row->file_name?> </a>
                            </h4>
                            <p class="card-text">By- <?php echo $row->lecturer_name;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <br>
            <!-- /.row -->
            
            <h2 style="text-align:center;">Latest Audio Lectures</h2>
            <br>
            <div class="row">
                <?php foreach ($result as $row):?>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"> <img class="card-img-top img-thumbnail" style="height:220px;" src="_images/lectur/lecturer/<?php echo $row->lecturer_img?>" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#"> <?php echo $row->file_name?> </a>
                            </h4>
                            <p class="card-text">By- <?php echo $row->lecturer_name;?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>
            <!-- /.row -->

            <!-- Features Section -->
            <div class="row">
                <div class="col-lg-6">
                    <h2>Modern Business Features</h2>
                    <p>The Modern Business template by Start Bootstrap includes:</p>
                    <ul>
                        <li>
                            <strong>Bootstrap v4</strong>
                        </li>
                        <li>jQuery</li>
                        <li>Font Awesome</li>
                        <li>Working contact form with validation</li>
                        <li>Unstyled page elements for easy customization</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Call to Action Section -->
            <div class="row mb-4">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
                </div>
            </div>

        </div>
        <!-- /.container -->

        <!--footer-->

        <?php include 'includes/footer.php'; ?>

    </body>

</html>
