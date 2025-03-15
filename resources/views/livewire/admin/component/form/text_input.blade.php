
<div class="form-group">
    <label class="form-label" for="{{$model}}">{{$label}}</label>
    <input type="text" wire:model.defer="{{$model}}" class="form-control  @error($model)is-invalid @enderror"
           id="{{$model}}">
</div>

