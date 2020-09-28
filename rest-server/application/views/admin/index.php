
<div class="container">
  <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
  Tambah data
</button>
  <table class="table mt-3">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Jenis</th>
      <th scope="col">Gambar</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $no =1;
        foreach ($result as $value) :?>
    <tr>
     
      <th scope="row"><?= $no++?></th>
      <td><?= $value->nama ?></td>
      <td><?= $value->harga ?></td>
      <td><?= $value->jenis ?></td>
      <td><img src="assets/img/<?= $value->gambar1 ?>"></td>
      <td class="text-center">
        <a href="" class="badge badge-pill badge-warning">Edit</a>
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
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="" placeholder="...">
          </div>
          <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="text" class="form-control" name="jenis" id="" placeholder="...">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="" placeholder="...">
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="" placeholder="...">
          </div>
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="" name="kategori">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="ckeditor" id="ckeditor" name="keterangan" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
</div>