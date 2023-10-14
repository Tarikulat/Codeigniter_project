
<?= $this->extend('backend/common/dheader');?>
<?= $this->section('content');?>

<div class="d-flex">
   <div class="col-md-2 mt-4 p-5"></div>
   <div class="col-md-10 mt-4 p-5">
            <div id="data">
                <h1 class="text-center p-3 mb-2 bg-danger text-white">Booking Print</h1>
                <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                    }
                ?>
                <div class="">
                    <table class="table " style="border-color:white;" >
                        <tr>
                            <td style="width:25%" >Booking Id:</td>
                            <td style="width:75%" ><?php echo $book['id']; ?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Name:</td>
                            <td style="width:75%" ><?php echo $book['first']." ".$book['last']; ?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Adress:</td>
                            <td style="width:75%" ><?php echo $book['address']; ?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Room Type:</td>
                            <td style="width:75%" ><?php echo $book['roomtype']; ?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Number of Guests:</td>
                            <td style="width:75%" ><?php echo $book['guests']; ?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Contract Number:</td>
                            <td style="width:75%" ><?php echo $book['contract']; ?></td>
                        </tr>
                        
                    </table>
                </div>

                <div>
                    <table class="table table-bordered" id="book-list">
                        <tr class="border">
                            <th>Arrival date:</th>
                            <th>Check-in time:</th>
                            <th>Departure date:</th>
                            <th>Check-out time:</th>
                            <th>Days of Stay</th>
                            <th>Status</th>
                        </tr>
                    
                        <tr class="border">
                            <td><?php echo $book['arridate']; ?></td>
                            <td><?php echo $book['arritime']; ?></td>
                            <td><?php echo $book['depdate']; ?></td>
                            <td><?php echo $book['deptime']; ?></td>
                            <td><?php echo $book['stay']; ?></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-end ">  
                <div>
                    <a href="" class=" btn btn-success mx-2" onclick=" printpage()" > Print</a> 
                    <!-- <a href="<?= base_url()?>dashboard/all_student"class=" btn btn-primary mx-2 "> All Student</a> 
                    <a href="<?= base_url()?>dashboard/all_payment"class=" btn btn-primary mx-2">All Payment</a> -->
                </div>
            </div>
        </div>
    </div> 
    
    


<script>
     function printpage(){
            var body = document.getElementById('body').innerHTML;
            var data = document.getElementById('data').innerHTML;
            document.getElementById('body').innerHTML=data;
            window.print();
            document.getElementById('body').innerHTML=body;
        }
</script>


<?= $this->endSection();?>