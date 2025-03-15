<div class="card border">
    <div class="card-header p-2">
        <h5 class="card-title">SEO</h5>
    </div>
    <div class="card-body px-0">
        <x-form.text-input label="Meta Title" :model="$model. '.' . $lang. '.title'"/>
        <div class="form-group">
            <label class="form-label" for="metaDes">Meta Description</label>
            <textarea class="form-control" wire:model.defer="{{$model}}.{{$lang}}.description" autocomplete="off"
                      id="metaDes" rows="3" placeholder="Meta Description"></textarea>
        </div>
    </div>
</div>
