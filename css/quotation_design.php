<?php
include("connection.php");
$sql="SELECT * FROM `product_master`";
$query=mysqli_query($conn,$sql);
?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Add / Remove Table Rows</title>
<style>
    table{
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid #cdcdcd;
    }
    table th, table td{
        padding: 5px;
        text-align: left;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        $(".add-row").click(function(){
            var name = $("#name").val();
            var email = $("#email").val();
            var qty=parseInt($("#qty").val());
            var uom=$("#uom").val();
            var rate=$("#rate").val();
            var discount=$("#discount").val();
            var mrp=$("#mrp").val();
            var offer=$("#offer").val();
            var amount1=$("#amount").val();
            var amount2=mrp-offer-discount-rate;
            var amount=amount2*qty;
            document.getElementById('amount').innerHTML=amount;
            var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + qty + "</td><td>" + uom + "</td><td>" + rate + "</td><td>" + discount+ "</td><td>" + mrp + "</td><td>" + offer + "</td><td>" + amount + "</td></tr>";
            $("table tbody").append(markup);
        });
       
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>
</head>
<body>
    <form>
        <select name="master" id='name'class="input" style="width: 8%;
    height: 22px">
            <?php while ($category = mysqli_fetch_array(
                        $query,MYSQLI_ASSOC)):;?>
                <option value="<?php echo $category["master"];?>">
                    <?php echo $category["master"];?>
                </option>
            <?php endwhile;?>
          </select>
        <input type="text" id="qty" placeholder="qty">
        <input type="text" id="uom" placeholder="uom">
        <input type="text" id="rate" placeholder="rate">
        <input type="text" id="discount" placeholder="discount">
        <input type="text" id="mrp" placeholder="mrp">
        <input type="text" id="offer" placeholder="offer">
        <input type="hidden" id="amount" placeholder="amount">
        <input type="button" class="add-row" value="Add Row">
    </form>
    <table>
        <thead>
            <tr>
                <th>Select</th>
                <th>Particulars</th>
                <th>Qty</th>
                <th>Uom</th>
                <th>Rate</th>
                <th>Discount</th>
                <th>Mrp</th>
                <th>Offer Rate</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <td><input type="checkbox" name="record"></td> -->
                <!-- <td>r</td>
                <td>1</td>
                <td>2</td>
                <td>400</td>
                <th>18%</th>
                <th>5000</th>
                <th>1002</th>
                <th>5023</th> -->
            </tr>
        </tbody>
    </table>
    <button type="button" class="delete-row">Delete Row</button>
</body>
</html>
