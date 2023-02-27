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
          <form class="form-horizontal" action="{{ url('jeniss')}}" method="post" enctype="multipart/form-data">
            @method('patch')  
            @csrf
              <div class="row mb-3">
               <label for="id_jenis" class="col-sm-2 col-form-label">Id Jenis </label>
               <div class="col-sm-10">
                 <input  readonly type="text" class="form-control" value="{{$jenis->id_jenis}}" name="id_jenis" id="id_jenis">
               </div>
             </div>
             <div class="row mb-3">
               <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis Barang </label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="jenis_barang" value="{{$jenis->jenis_barang}}" name="jenis_barang">
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

