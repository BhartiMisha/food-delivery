<?php include('partials/menu.php')?>

<div class='admin-main'>
    <div class='warpper'>
        <h1 style="text-align:center">Add Category</h1>
        <br><br>
    <div class='category-div'>
        <form action="#" mehtod='post' class='category-form' enctype='multipart/form-data'>
            <table class='tbl-30'> <pre>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name='title' placeholder="Category title"></td>
                </tr>
                <tr>
                    <td>
                        Select Image
                    </td>
                    <td><input type="file" name='image'></td>
                </tr>
                <tr>
                    <td>Featured</td>
                    <td><input type="radio" name='featured' value="Yes">Yes</td>
                    <td><input type="radio" name='featured' value="No">No</td>
                </tr>
                <tr>
                    <td>Active</td>
                    <td><input type="radio" name='active' value="Yes">Yes</td>
                    <td><input type="radio" name='active' value="No">No</td>
                </tr>
                <tr>
                <td colspan='2'><input type="submit" name='submit' value='Add Category' class='btn-primary'></td>
                </tr>
                </pre>
            </table>
            </div>
        </form>
        
    </div>
</div>

<?php include('partials/footer.php');