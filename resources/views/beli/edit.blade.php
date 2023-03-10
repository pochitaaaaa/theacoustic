@extends('indexs') 
@section('title')
@section('breadcrumbs')  
  

<section class="section dashboard">
    <div class="row"> 
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">  
          <div class="card recent-sales overflow-auto">
              <div class="card-body"> 
           <h5 class="card-title">Edit Jenis Barang </h5>

           <!-- Horizontal Form -->
          <form class="form-horizontal" action="{{ url('belii')}}" method="post" enctype="multipart/form-data">
            @method('patch')  
            @csrf
              <div class="row mb-3">
               <label for="id_tiket" class="col-sm-2 col-form-label">Id Tiket </label>
               <div class="col-sm-10">
                 <input  readonly type="text" class="form-control" value="{{$belii->id_tiket}}" name="id_tiket" id="id_tiket">
               </div>
             </div>
             <div class="row mb-3">
              <label for="id_jenis" class="col-sm-2 col-form-label">Jenis Tiket</label>
              <div class="col-sm-10">
              <select class="form-control" id="id_jenis" name="id_jenis">
              <option value=""></option>
                    <?php $jenis_tiket = $jenistiket->jenis_tiket()?>
                    <?php foreach ($daftarbarang as $row) :?>
                        <option value="<?php echo $row['id_jenis']?>"><?php echo $row['id_jenis']?></option>
                    <?php endforeach ?>
                </select>
              </div>
            </div>
             <div class="row mb-3">
               <label for="id_harga" class="col-sm-2 col-form-label">Harga </label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="id_harga" value="{{$belii->id_harga}}" name="id_harga">
               </div>
             </div> 
             <div class="row mb-3">
               <label for="stok_tiket" class="col-sm-2 col-form-label">StokTiket </label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="stok_tiket" value="{{$belii->stok_tiket}}" name="stok_tiket">
               </div>
             </div> 
             <div class="row mb-3">
               <label for="nama_konser" class="col-sm-2 col-form-label">Nama Konser </label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="NAMA_KONSER" value="{{$belii->NAMA_KONSER}}" name="NAMA_KONSER">
               </div>
             </div> 
              
             <div class="text-center">
               <button type="submit" id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
               <button type="reset" class="btn btn-secondary">Clear</button>
             </div>
           </form> 
         </div>
       </div>       
        </div>
      </div> 
    </div>
  </section> 

