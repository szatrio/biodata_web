<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <title>Tambah Data Penduduk</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

         
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Penduduk - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/people/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama penduduk">
 
                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="text" name="dob" class="date form-control" placeholder="Tanggal Lahir Penduduk">
 
                            @if($errors->has('dob'))
                                <div class="text-danger">
                                    {{ $errors->first('dob')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" placeholder="Alamat penduduk"></textarea>
 
                             @if($errors->has('address'))
                                <div class="text-danger">
                                    {{ $errors->first('address')}}
                                </div>
                             @endif
 
                        </div>

                        <div class="form-group">
                    
                            <label for="exampleFormControlSelect1">Agama</label>
                            <select class="form-control" name="religion" id="exampleFormControlSelect1">
                            @foreach($religion as $r)
                            <option value="{{$r->religion}}">{{$r->religion}}</option>
                            @endforeach
                            </select>
 
                             @if($errors->has('religion'))
                                <div class="text-danger">
                                    {{ $errors->first('religion')}}
                                </div>
                             @endif
 
                        </div>
                        <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <br>
                        @foreach($gender as $g)
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="{{ $g->gender }}" name="gender" class="custom-control-input" value="{{ $g->gender }}">
                            <label class="custom-control-label" for="{{ $g->gender }}">{{ $g->gender }}</label>
                            </div>
                        @endforeach
                             @if($errors->has('gender'))
                                <div class="text-danger">
                                    {{ $errors->first('gender')}}
                                </div>
                             @endif
                        </div>

                        <div class="form-group">
                        <label>Hobi</label>
                        <br>
                        @foreach($hobby as $h)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="{{ $h->id_hobby }}" id="inlineCheckbox{{ $h->id_hobby }}" value="{{ $h->id_hobby }}">
                                <label class="form-check-label" for="inlineCheckbox{{ $h->id_hobby }}">{{ $h->hobby }}</label>
                            </div>
                        @endforeach
                            @if($errors->has('hobby'))
                                <div class="text-danger">
                                    {{ $errors->first('hobby')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <b>Foto</b><br/>
                            <input type="file" name="photo">
                            @if($errors->has('photo'))
                                <div class="text-danger">
                                    {{ $errors->first('photo')}}
                                </div>
                            @endif
					    </div>
 

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
        <script type="text/javascript">

        $('.date').datepicker({  
        
           format: 'dd-mm-yyyy'
        
         });  
     
        </script> 
    </body>
</html>

