<div class="form-group {{ $errors->has('vacancies') ? 'has-error' : ''}}">
    <label for="vacancies" class="col-md-4 control-label">{{ 'Vacancies' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="vacancies" type="number" id="vacancies" value="{{ $discipline_class_offer->vacancies or ''}}" >
        {!! $errors->first('vacancies', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
