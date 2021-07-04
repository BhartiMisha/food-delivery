<?php include('partials/menu.php')?>

<div class='main admin-main'>
    <div class='warpper'>
        <h1 style="text-align:center">Update Admin</h1>
        <br><br>
        
        <?php 
            //1. Get the ID of Selected Admin
            $id=$_GET['id'];

            //2. Create SQL Query to Get the Details
            $sql="SELECT * FROM tbl_admin WHERE id=$id";

            //Execute the Query
            $res=mysqli_query($conn, $sql);

            //Check whether the query is executed or not
            if($res==true)
            {
                // Check whether the data is available or not
                $count = mysqli_num_rows($res);
                //Check whether we have admin data or not
                if($count==1)
                {
                    // Get the Details
                    //echo "Admin Available";
                    $row=mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $username = $row['username'];
                }
                else
                {
                    //Redirect to Manage Admin PAge
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
        
        ?>
    
        <form action="#" mehtod='post' class='category-form' enctype='multipart/form-data'>
            <table class='tbl-30'> <pre>
                <tr>
                    <td>Full name</td>
                    <td><input type="text" name='full_name' placeholder="Enter full name"></td>
                </tr>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td><input type="text" name='username' placeholder="enter username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name='password' placeholder='password'></td>
                    
                </tr>
                
                <tr>
                <td colspan='2'><input type="submit" name='submit' value='Update admin' class='btn-primary'></td>
                </tr>
                </pre>
            </table>
            </div>
        </form>
        
    </div>

<?php 

    //Check whether the Submit Button is Clicked or not
    if(isset($_POST['submit']))
    {
        //echo "Button CLicked";
        //Get all the values from form to update
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];

        //Create a SQL Query to Update Admin
        $sql = "UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username' 
        WHERE id='$id'
        ";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether the query executed successfully or not
        if($res==true)
        {
            //Query Executed and Admin Updated
            $_SESSION['update'] = "<div class='success'>Admin Updated Successfully.</div>";
            //Redirect to Manage Admin Page
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //Failed to Update Admin
            $_SESSION['update'] = "<div class='error'>Failed to Delete Admin.</div>";
            //Redirect to Manage Admin Page
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
    }

?>


<?php include('partials/footer.php'); ?>


