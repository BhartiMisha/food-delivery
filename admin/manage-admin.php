<?php include('partials/menu.php') ?>

        <!-- Main content : starts-->
        <div class="main admin-main">
        <div class="wrapper">
            <h1 >Admin page</h1>
            <br/> <br/> 
            <a href="add-admin.php" class='btn-primary'>Add Admin</a>
            
            <br/><br/>
            <table class=" tbl-full">
                <tr>
                    <th>S.no</th>
                    <th>Full name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <?php

                $sql= "SELECT * FROM tbl_admin";
                $res=mysqli_query($conn, $sql);

                if($res==TRUE)
                {
                    $count= mysqli_num_rows($res);
                    $sn=1;
                    if($count>0)
                    {
                        while($rows=mysqli_fetch_assoc($res))
                        {
                            $id=$rows['id'];
                            $full_name=$rows['full_name'];
                            $username=$rows['username'];

                            ?>


                            <tr>
                            <td><?php echo $sn++; ?></td>
                            <td> <?php echo $full_name; ?></td>
                            <td><?php echo $username; ?></td>
                            <td>
                            <a href="update-admin.php" class='btn-secondary'>Update Admin</a>
                            <a href="delete-admin.php" class='btn-danger'>Delete Admin</a>
                            </td>
                            </tr>

                            <?php 
                        }
                    }
                    else
                    {

                    }
                }
                
                ?>

               
                
                   
            </table>
           
        </div>
        </div>
        <!-- Main content : ends-->

        <?php include('partials/footer.php') ?>