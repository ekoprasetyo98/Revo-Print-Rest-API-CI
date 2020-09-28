
<div class="container">
  <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
  Tambah Kategori
</button>
  <table class="table mt-3">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <!-- <th scope="col">ID Kategori</th> -->
      <th scope="col">Nama Kategori</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $no =1;
        foreach ($result as $value) :?>
    <tr>
     
      <th scope="row"><?= $no++?></th>
      <!-- <td><?= $value->id_kategori ?></td> -->
      <td><?= $value->nama_kategori ?></td>
      <td class="text-center">
        <button class=" btn btn-warning" onclick="edit(<?= $value->id_kategori?>)">ediit</button>
        <a href="" class="badge badge-pill badge-success">Detail</a>
        <a href="" class="badge badge-pill badge-danger">Hapus</a>
      </td>

    </tr>
    <?php endforeach ;?>
   
  </tbody>
</table>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="kategori_form" method="post">
      <div class="modal-body">
          <div class="form-group">
            <label for="nama_kategori">Nama</label>
            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="...">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">

  // <!-- fungsi input kategori -->
  $('#kategori_form').submit(function(e) {
    var form = $(this);
    var url =  "<?= base_url('index.php/kategori');?>";
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        dataType: "json",
        success: function(data){
          // console.log(data)
          $('#exampleModal').modal('toggle')
          location.reload();
            // $('#feed-container').prepend(data);
        },
        error: function() { alert("Error posting feed."); }
   });
    // == fungsi input

});

function edit(id){
  form = $(this);
  $('#kategori_form')[0].reset();
  $.ajax({
    url:"<?= base_url('index.php/kategori/index_put');?>/"+id,
    type:"GET",
    dataType:"json",
    success: function(data){
      $('[name="nama_kategori"]').val(data.nama_kategori);
      $('#exampleModal').modal('show');
      $('.modal-title').text('Edit Book');
    },
    error:function(jqXHR, textStatus, errorThrown){alert('tidak ada data')}

  });


}


</script>