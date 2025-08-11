<?php
$username="select * from `user_table` where user_name='$username'";
$result_query=mysqli_query($con,$username);
$row_fetch=mysqli_fetch_assoc($result_query);
$user_id=$row_fetch['user_id'];
?>

<h3 class="text-light text-center my-3">All My Orders</h3>
<table class="table table-bordered mt-5">
    <thead class="text-center text-light bg-primary">
        <tr>
        <th>Serial No</th>
        <th>Amount Due</th>
        <th>Total Products</th>
        <th>Invoice Number</th>
        <th>Date</th>
        <th>Complete/Incomplete</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody class="text-light">
        <?php
            $get_order_details="select * from `user_orders` where user_id=$user_id";
            $result_orders=mysqli_query($con,$get_order_details);
            $number=1;
            while($row_orders=mysqli_fetch_assoc($result_orders)){
                $order_id=$row_orders['order_id'];
                $amount_due=$row_orders['amount_due'];
                $total_products=$row_orders['total_products'];
                $invoice_number=$row_orders['invoice_number'];
                $order_status=$row_orders['order_status'];
                if($order_status=='pending'){
                        $order_status='Incomplete';
                }else{
                    $order_status='Complete';
                }
                $order_date=$row_orders['order_date'];
                
                echo "
                    <tr class='text-center'>
                    <td>$number</td>
                    <td>$amount_due</td>
                    <td>$total_products</td>
                    <td>$invoice_number</td>
                    <td>$order_date</td>
                    <td>$order_status</td>
                    <td><a href='confirm_payment.php' class='text-center text-light'>Confirm</a></td>
                </tr>";
                $number++;
            }

        ?>
        
        

    </tbody>
</table>