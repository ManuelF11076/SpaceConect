<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $cliente?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion__i_p" class="form-label">{{ __('Direccion Ip') }}</label>
            <input type="text" name="direccion_IP" class="form-control @error('direccion_IP') is-invalid @enderror" value="{{ old('direccion_IP', $cliente?->direccion_IP) }}" id="direccion__i_p" placeholder="Direccion Ip">
            {!! $errors->first('direccion_IP', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direcciones_id" class="form-label">{{ __('Direcciones Id') }}</label>
            <input type="text" name="direcciones_id" class="form-control @error('direcciones_id') is-invalid @enderror" value="{{ old('direcciones_id', $cliente?->direcciones_id) }}" id="direcciones_id" placeholder="Direcciones Id">
            {!! $errors->first('direcciones_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pagos_id" class="form-label">{{ __('Pagos Id') }}</label>
            <input type="text" name="pagos_id" class="form-control @error('pagos_id') is-invalid @enderror" value="{{ old('pagos_id', $cliente?->pagos_id) }}" id="pagos_id" placeholder="Pagos Id">
            {!! $errors->first('pagos_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>