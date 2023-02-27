@extends('indexs') 
@section('title')
@section('breadcrumbs')  
  


  <section class="section dashboard">
    <div class="row"> 
      <!-- Left side columns -->
      <div class="col-lg-12">
        


    <table width="100%" border="0" cellpadding="0" cellspacing="0">
       <tr>
       <td><h5 class="card-title">Tiket Konser</span></h5></td>
       <td> <div align="right"><a href="" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-print"></span>Tambah</a></div> 
       </td> 
       </tr>
      </table>
               <table class="table table-borderless datatable">
               <thead>
                 <tr>
                   <th scope="col">Id Tiket </th>
                   <th scope="col">Id Jenis</th>
                   <th scope="col">Id Harga</th>
                   <th scope="col">Stock Tiket</th>
                   <th scope="col">Nama Konser</th>
                   <th scope="col">Delete</th>
                  <th scope="col">Edit</th>
                 </tr>
               </thead>
               <tbody> 
            @foreach ($belii as $item)  
               <tr>
               <td>{{$item -> id_tiket}}</a></td>
               <td>{{$item -> id_jenis}}</td> 
               <td>{{$item -> id_harga}}</td> 
               <td>{{$item -> stok_tiket}}</td> 
               <td>{{$item -> nama_konser}}</td> 
               <td> 
                <form action="{{ url('belii/' .$item->id_tiket)}}" method="post" class="d-inline" 
                    onsubmit="return confirm('Yakin Hapus Data')">
                    @method('delete')
                    @csrf
                    <button class="btn btn-success btn-sm" ><span class="bi bi-trash"></span></button>  
                </form> 
              </td> 
                <td>
                  <a href="{{ url('belii/'.$item->id_tiket.'/edit')}}" class="text-primary"><span id="btnConfirm"  class="bi bi-eyedropper"></span></a>
                
                </td>  
               </tr>  
               @endforeach  

                  </tbody>
             </table>

           </div>

         </div>
        </div>
      </div> 
    </div>
  </section> 

@endsection