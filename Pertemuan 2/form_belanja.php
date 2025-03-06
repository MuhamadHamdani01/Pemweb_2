<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="d-flex">
    <div class="col-8">
        <h3>Form Belanja</h3>
        <hr>
        <form method="POST">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
          <label for="produk_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
            <label for="produk_1" class="custom-control-label">Kulkas</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
            <label for="produk_2" class="custom-control-label">Mesi Cuci</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
        <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
</div> 
<div class="form-group row">
    <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
</div>
<table class="table">
    <tr>
        <td class="text-light bg-primary">Daftar Harga</td>
    </tr>
    <tr>
        <td class="text-light bg-primary">TV : 4.200.000</td>
    </tr>
    <tr>
        <td class="text-light bg-primary">Kulkas 5.300.000</td>
    </tr>
    <tr>
        <td class="text-light bg-primary"> Cuci: 3.500.000</td>
    </tr>
    <tr>
        <td class="text-light bg-primary"> sewaktu-waktu bisa berubah</td>
    </tr>
</table>
</div>

<hr>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    
    if ($produk == "TV") {
        $harga = 4200000;
    } elseif ($produk == "Kulkas") {
        $harga = 3000000;
    } elseif ($produk == "Mesin Cuci") {
        $harga = 2500000;
    }

    $total = $harga * $jumlah;

    echo "Nama Customer : $nama <br>";
    echo "Produk Pilihan : $produk <br>";
    echo "Jumlah Beli : $jumlah <br>";
    echo "Total Belanja : $total <br>";
}
?>