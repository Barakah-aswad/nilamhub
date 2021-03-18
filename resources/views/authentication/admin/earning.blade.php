@extends('layout.master_login')
@section('content')

                <h2>INI HALAMAN ADMIN</h2>

           <form action="/posts" method="POST">

                  @if(session('error'))
                  <div class="alert alert-danger">
                    {{ session('error') }}
                  </div>
                  @endif

                  @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                  @endif

                  {{ csrf_field() }}
                 <input type="text" name="test" placeholder="Title">
                <input type="submit" value="Submit data">
           </form>

           <h4><b>DAFTAR USER</b></h4>
           <table class="table table-dark">
                    <thead style="color: #099386">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Hak Akses</th>
                        <th scope="col">Terakhir Aktif</th>
                        <th scope="col" colspan="2" style="text-align: center;">AKSI</th>
                      </tr>
                    </thead>

                    <tbody>
                      
                      @foreach($show as $documents)
                      <tr>
                        <td>{{$documents->id}}</td>
                        <td>{{$documents->email}}</td>
                        <td>{{$documents->first_name}}</td>
                        <td>@json($documents->permissions)</td>
                        <td>{{$documents->last_login}}</td>
                        <td><a href="/user/{{$documents->id}}/edit" class="btn btn-primary">Edit</a></td>
                        <td><a href="/user/{{$documents->id}}/edit" class="btn btn-danger">Hapus</a></td>
                        
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
           <h4><b>DAFTAR KEPALA KELUARGA</b></h4>
           <table class="table table-dark">
                    <thead style="color: #099386">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Nomor KTP</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Penghasilan</th>
                        <th scope="col">Usaha</th>
                        <th scope="col">Umur</th>
                        <th scope="col" colspan="2" style="text-align: center;">AKSI</th>
                      </tr>
                    </thead>

                    <tbody>
                      
                      @foreach($list_ayah as $ayah)
                      <tr>
                        <td>{{$ayah->id}}</td>
                        <td>{{$ayah->user_id}}</td>
                        <td>{{$ayah->first_name}}</td>
                        <td>{{$ayah->no_ktp}}</td>
                        <td>{{$ayah->pekerjaan}}</td>
                        <td>{{$ayah->penghasilan}}</td>
                        <td>{{$ayah->usaha}}</td>
                        <td>{{$ayah->umur}}</td>
                        <td><a href="/user/{{$documents->id}}/edit" class="btn btn-primary">Edit</a></td>
                        <td><a href="/delete/{{$ayah->id}}" class="btn btn-danger">Hapus</a></td>
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                  
                  <h4><b>DAFTAR IBU KELUARGA</b></h4>
           <table class="table table-dark">
                    <thead style="color: #099386">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Nomor KTP</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Penghasilan</th>
                        <th scope="col">Usaha</th>
                        <th scope="col">Umur</th>
                        <th scope="col" colspan="2" style="text-align: center;">AKSI</th>
                      </tr>
                    </thead>

                    <tbody>
                      
                      @foreach($list_ibu as $ibu)
                      <tr>
                        <td>{{$ibu->id}}</td>
                        <td>{{$ibu->user_id}}</td>
                        <td>{{$ibu->first_name}}</td>
                        <td>{{$ibu->no_ktp}}</td>
                        <td>{{$ibu->pekerjaan}}</td>
                        <td>{{$ibu->penghasilan}}</td>
                        <td>{{$ibu->usaha}}</td>
                        <td>{{$ibu->umur}}</td>
                        <td><a href="/user/{{$documents->id}}/edit" class="btn btn-primary">Edit</a></td>
                        <td><a href="/user/{{$documents->id}}/edit" class="btn btn-danger">Hapus</a></td>
                        
                      </tr>
                       @endforeach
                    </tbody>
                    
                  </table>
                <form action="/logout" method="POST" id="logout-form">
                  {{ csrf_field() }}
                  <a class="btn btn-danger" href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
                </form>
@endsection