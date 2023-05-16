<div class="box box-info padding-1">
    <div class="box-body">


    <div class="form-group col-xs-12 col-sm-5 col-md-12 row">
           
            
           <label for="name"class="titulo2">Codigo:</label>
           <input type="text" class="form-control" name="codigo" value="{{$materia->codigo}}" >
         

           @if ($errors->has('codigo'))
                   <small class="form-text text-danger">{{ $errors->first('codigo') }}</small>
               @endif
               
              
               <label for="name"class="titulo2">Nombre:</label>
           <input type="text" class="form-control" name="nombre"  value="{{$materia->nombre}}" >
         
       
           @if ($errors->has('nombre'))
                   <small class="form-text text-danger">{{ $errors->first('nombre') }}</small>
               @endif


               <label for="name"class="titulo2">U.C:</label>
           <input type="text" class="form-control" name="UC"  value="{{$materia->UC}}" >
         
       
           @if ($errors->has('UC'))
                   <small class="form-text text-danger">{{ $errors->first('UC') }}</small>
               @endif


               <label for="name"class="titulo2">Observaciones:</label>

           <textarea  class="form-control" name="observacion" >{{$materia->observacion}}


           @if ($errors->has('observacion'))
                   <small class="form-text text-danger">{{ $errors->first('observacion') }}</small>
               @endif
           </textarea>   
       </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>