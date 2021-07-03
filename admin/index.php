<?php include('partials/menu.php'); ?>

        <!-- Main content : starts-->
        <div class="main index-main">
        <div class="wrapper">
            <strong ><h1>DISCOVER FOOD</h1></strong>
            <div class="col-4" >
                <h1 >5</h1> <br/>
                categories
            </div>
            <?php 
            if(isset($_SESSION['login']))
            {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
            }
            ?>
            <div class="col-4" >
                <h1 >5</h1> <br/>
                categories
            </div>
            <div class="col-4" >
                <h1 >5</h1> <br/>
                categories
            </div>
            <div class="col-4" >
                <h1 >5</h1> <br/>
                categories
            </div>
            <div class="clearfix"></div>
        </div>
        </div>
        <!-- Main content : ends-->

<?php include('partials/footer.php') ?>
