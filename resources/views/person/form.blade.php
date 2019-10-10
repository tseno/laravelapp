<!-- サブビュー -->
<div class="form-group">
    <label for="name">{{ __('Name') }}</label>
    @isset($readOnly)
    <input type="text" id="name" name="name" class="form-control-plaintext" value="{{ old('name', $person->name) }}"
           readonly>
    @else
    @if ($errors->has('name'))
    <p>{{ $errors->first('name')}}</p>
    @endif
    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $person->name) }}">
    @endif
</div>
<div class="form-group">
    <label for="mail">{{ __('Mail') }}</label>
    @isset($readOnly)
    <input type="text" id="mail" name="mail" class="form-control-plaintext" value="{{ old('mail', $person->mail) }}"
           readonly>
    @else
    @if ($errors->has('mail'))
    <p>{{ $errors->first('mail')}}</p>
    @endif
    <input type="text" id="mail" name="mail" class="form-control" value="{{ old('mail', $person->mail) }}">
    @endif
</div>
<div class="form-group">
    <label for="age">{{ __('Age') }}</label>
    @isset($readOnly)
    <input type="text" id="age" name="age" class="form-control-plaintext" value="{{ old('age', $person->age) }}"
           readonly>
    @else
    @if ($errors->has('age'))
    <p>{{ $errors->first('age')}}</p>
    @endif
    <input type="text" id="age" name="age" class="form-control" value="{{ old('age', $person->age) }}">
    @endif


</div>

