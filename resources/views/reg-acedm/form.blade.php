<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group col-xs-12 col-sm-5 col-md-12 row">
           
            
            <label for="name"class="titulo2">Cedula:</label>
            <input type="text" class="form-control" name="cedula" value="{{$regAcedm->cedula}}" >
          
 
            @if ($errors->has('cedula'))
                    <small class="form-text text-danger">{{ $errors->first('cedula') }}</small>
                @endif

            <label for="name"class="titulo2">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{$regAcedm->nombre}}" >
          
 
            @if ($errors->has('nombre'))
                    <small class="form-text text-danger">{{ $errors->first('nombre') }}</small>
                @endif

            <label for="name"class="titulo2">Carrera:</label>
            <input type="text" class="form-control" name="carrera" value="{{$regAcedm->carrera}}" >
          
 
            @if ($errors->has('carrera'))
                    <small class="form-text text-danger">{{ $errors->first('carrera') }}</small>
                @endif
            
            <label for="name"class="titulo2">Materia:</label>
            <input type="text" class="form-control" name="materia" value="{{$regAcedm->materia}}" >
          
 
            @if ($errors->has('materia'))
                    <small class="form-text text-danger">{{ $errors->first('cmateria') }}</small>
                @endif

            <label for="name"class="titulo2">Calificacion:</label>
            <input type="text" class="form-control" name="calificacion" value="{{$regAcedm->calificacion}}" >
          
 
            @if ($errors->has('calificacion'))
                    <small class="form-text text-danger">{{ $errors->first('calificacion') }}</small>
                @endif
            
           
            
               
                
             
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>