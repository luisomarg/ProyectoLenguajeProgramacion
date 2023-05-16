<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group col-xs-12 col-sm-5 col-md-12 row">
           
            
            <label for="name"class="titulo2">Materia:</label>
            <input type="text" class="form-control" name="materia" value="{{$horario->materia}}" >
          
 
            @if ($errors->has('matera'))
                    <small class="form-text text-danger">{{ $errors->first('materia') }}</small>
                @endif
            
            
            <label for="name"class="titulo2">Seccion:</label>
            <input type="text" class="form-control" name="seccion" value="{{$horario->seccion}}" >
          
 
            @if ($errors->has('seccion'))
                    <small class="form-text text-danger">{{ $errors->first('seccion') }}</small>
                @endif

            <label for="name"class="titulo2">Hora:</label>
            <input type="text" class="form-control" name="hora" value="{{$horario->hora}}" >
          
 
            @if ($errors->has('hora'))
                    <small class="form-text text-danger">{{ $errors->first('hora') }}</small>
                @endif
            
               
                
             
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>