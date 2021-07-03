<?php include('partials/menu.php')?>

<div class='admin-main'>
    <div class='warpper'>
        <h1 style="text-align:center">Add Food</h1>
        <br><br>
    <div class='category-div'>
        <form action="#" mehtod='post' class='category-form' enctype='multipart/form-data'>
            <table class='tbl-30'> <pre>
            <tr>
                    <td>Food Name</td>
                    <td><b>  </b></td>
                </tr>

                <tr>
                    <td>Price</td>
                    <td>
                        <b></b>
                    </td>
                </tr>

                <tr>
                    <td>Qty</td>
                    <td>
                        <input type="number" name="qty" value="...">
                    </td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status">
                            <option value="Ordered">Ordered</option>
                            <option  value="On Delivery">On Delivery</option>
                            <option  value="Delivered">Delivered</option>
                            <option  value="Cancelled">Cancelled</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Customer Name: </td>
                    <td>
                        <input type="text" name="customer_name" value="">
                    </td>
                </tr>

                <tr>
                    <td>Customer Contact: </td>
                    <td>
                        <input type="text" name="customer_contact" value="">
                    </td>
                </tr>

                <tr>
                    <td>Customer Email: </td>
                    <td>
                        <input type="text" name="customer_email" value="">
                    </td>
                </tr>

                <tr>
                    <td>Customer Address: </td>
                    <td>
                        <textarea name="customer_address" cols="30" rows="5"></textarea>
                    </td>
                </tr>

                <tr>
                    <td clospan="2">
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="price" value="">

                        <input type="submit" name="submit" value="Update Order" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

                            </div>
                            </div>
                            </div>

        
       

    

<?php include('partials/footer.php'); ?>