<div class="form-group {{ $errors->has('created_on') ? 'has-error' : null }}">
    <label class="col-md-3 control-label">Datum:</label>

    <div class="col-md-6">
        {{ Form::text('created_on', date('d.m.Y'), ['class' => 'form-control', 'id' => 'pikaday']) }}

        @if ($errors->has('created_on'))
            <span class="help-block">{{ $errors->first('created_on') }}</span>
        @endif
    </div>
</div>

<div class="form-group {{ $errors->has('info') ? 'has-error' : null }}">
    <label class="col-md-3 control-label">Podaci o stranci:</label>

    <div class="col-md-6">
        {{ Form::textarea('info', null, ['class' => 'form-control client-info', 'rows' => '3']) }}

        @if ($errors->has('info'))
            <span class="help-block">{{ $errors->first('info') }}</span>
        @endif
    </div>
</div>

<div class="form-group {{ $errors->has('public_book') ? 'has-error' : null }}">
    <label class="col-md-3 control-label">Sluzbena knjiga:</label>

    <div class="col-md-6">
        {{ Form::text('public_book', null, ['class' => 'form-control public-book']) }}

        @if ($errors->has('public_book'))
            <span class="help-block">{{ $errors->first('public_book') }}</span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        <div class="row">
            <div class="col-xs-6">
                <button type="submit" class="btn btn-primary btn-block">Sačuvaj</button>
            </div>

            <div class="col-xs-6">
                <a href="{{ route('clients.index') }}" class="btn btn-default btn-block">Odustani</a>
            </div>
        </div>
    </div>
</div>
