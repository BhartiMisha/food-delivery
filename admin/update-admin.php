<?php include('partials/menu.php')?>

<div class='admin-main'>
    <div class='warpper'>
        <h1 style="text-align:center">Update Admin</h1>
        <br><br>
    <div class='category-div'>
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
</div>

<?php include('partials/footer.php');