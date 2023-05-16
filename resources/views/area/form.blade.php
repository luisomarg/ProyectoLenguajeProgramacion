<div class="box box-info padding-1">
    <div class="box-body">
        

    </div>
  


        <div class="form-group col-xs-12 col-sm-5 col-md-12 row">
           
            
            <label for="name"class="titulo2">Codigo:</label>
            <input type="text" class="form-control" name="codigo" value="{{$area->codigo}}" >
          

            @if ($errors->has('codigo'))
                    <small class="form-text text-danger">{{ $errors->first('codigo') }}</small>
                @endif
                
              


              <label for="name"class="titulo2">Area:</label>
            <input type="text" class="form-control" name="area"   value="{{$area->area}}">
          

            @if ($errors->has('area'))
                    <small class="form-text text-danger">{{ $errors->first('area') }}</small>
                @endif
                

                <label for="name"class="titulo2">Observaciones:</label>

            <textarea  class="form-control" name="observaciones" >{{$area->observaciones}}


            @if ($errors->has('observaciones'))
                    <small class="form-text text-danger">{{ $errors->first('observaciones') }}</small>
                @endif
            </textarea>   
          </div>

          <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>