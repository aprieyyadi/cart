
<div class="container"><br/>
    <h2>Cart</h2>
    <hr/>
          <h4>Produk</h4>
    <div class="container">
      <div class="row">
  
        <?php foreach ($data as $row) : ?>
        <div class="col-sm">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url().'assets/img/'.$row->gambar;?>" alt="Card image cap">
        <div class="card-body">
                <p class="card-title"><?php echo $row->nama;?></p>
                <p class="card-subtitle"><?php echo 'Rp '.number_format($row->harga);?></p>
                <p class="card-text"><?php echo $row->deskripsi;?></p>
                <input type="number" name="quantity" id="<?php echo $row->id;?>" value="1" class="quantity form-control col-md-4">
                <button class="add_cart btn btn-success btn-block mt-3" data-produkid="<?php echo $row->id;?>" data-produknama="<?php echo $row->nama;?>" data-produkharga="<?php echo $row->harga;?>">Add To Cart</button>
              </div>
        </div>
        </div>
        <?php endforeach;?>
      </div>
    </div>
 
</div>
 
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
    var total = 0;
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var id    = $(this).data("produkid");
            var nama  = $(this).data("produknama");
            var harga = $(this).data("produkharga");
            var quantity     = $('#' + id).val();
            total++;
            $.ajax({
                url : "<?php echo base_url();?>cart/add_to_cart",
                method : "POST",
                data : {id: id, nama: nama, harga: harga, quantity: quantity, total: total},
                success: function(data){
                    $('#detail_cart').html(data);
                    //window.location.href = "https://www.example.com";
                    window.location = "<?php echo base_url();?>";
                }
            });
        });

        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>cart/load_cart");
 
        //Hapus Item Cart
        $(document).on('click','.hapus_cart',function(){
            var id=$(this).attr("id"); //mengambil id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>index.php/cart/hapus_cart",
                method : "POST",
                data : {id : id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });
</script>
