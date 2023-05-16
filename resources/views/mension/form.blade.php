<div class="box box-info padding-1">
    <div class="box-body">
        

    </div>


    <div class="form-group col-xs-12 col-sm-5 col-md-12 row">
           
            
            <label for="name"class="titulo2">Codigo:</label>
            <input type="text" class="form-control" name="codigo" value="{{$mension->codigo}}" >
          

            @if ($errors->has('codigo'))
                    <small class="form-text text-danger">{{ $errors->first('codigoarea') }}</small>
                @endif
                
               
                <label for="name"class="titulo2">Nombre:</label>
            <input type="text" class="form-control" name="mension"  value="{{$mension->mension}}" >
          
        
            @if ($errors->has('mension'))
                    <small class="form-text text-danger">{{ $errors->first('mension') }}</small>
                @endif


                

                <label for="name"class="titulo2">Observaciones:</label>

            <textarea  class="form-control" name="observaciones" >{{$mension->observaciones}}


            @if ($errors->has('observaciones'))
                    <small class="form-text text-danger">{{ $errors->first('observaciones') }}</small>
                @endif
            </textarea>   
        </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>