<div class="show-order">
    <h4>Nama Customer : <?= $customer->nama; ?></h4>
    <h5>Daftar order dari customer :</h5>
    <?php 
    echo '<br>';
    foreach($customer->order as $order){
        echo 'Order Id: '.$order->id;
        echo'<ul>';
        foreach ($order->items as $item){
            echo '<li>'.$item->nama_barang.'</li>';
        }
       echo '</ul>';
    }
    ?>
</div>