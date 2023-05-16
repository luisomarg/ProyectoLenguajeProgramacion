<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group col-xs-12 col-sm-5 col-md-12 row">
           
            
            <label for="name"class="titulo2">Codigo:</label>
            <input type="text" class="form-control" name="codigo" value="{{$seccion->codigo}}" >
          

            @if ($errors->has('codigo'))
                    <small class="form-text text-danger">{{ $errors->first('codigo') }}</small>
                @endif
                
               
                <label for="name"class="titulo2">Idetificador:</label>
            <input type="text" class="form-control" name="identificador"  value="{{$seccion->identificador}}" >
          
        
            @if ($errors->has('identificador'))
                    <small class="form-text text-danger">{{ $errors->first('identificador') }}</small>
                @endif


            
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>