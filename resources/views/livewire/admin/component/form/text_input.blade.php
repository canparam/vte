@php
    $language = config('app.languages')
@endphp
@if(count($language) <=0)
    <div class="form-group">
        <label class="form-label" for="{{$model}}">{{$label}}</label>
        <input type="text" wire:model.defer="{{$model}}.{{config('app.language_primary')}}" class="form-control  "
               id="{{$model}}">
    </div>
@else
    <div class="panel panel-primary">
        <div class="tab-menu-heading">
            <div class="tabs-menu">
                <!-- Tabs -->
                <ul class="nav panel-tabs" role="tablist">
                    @foreach($language as $l => $v)
                        <li>
                            <a href="#{{$model}}_{{$l}}" class="{{$loop->first ? 'active' : ''}}" data-bs-toggle="tab"
                               aria-selected="true"
                               role="tab">{{$v}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="panel-body tabs-menu-body p-0">
            <div class="tab-content">
                @foreach($language as $l => $v)
                    <div class="tab-pane {{$loop->first ? 'active show' : ''}}" id="{{$model}}_{{$l}}" role="tabpanel">
                        <div class="form-group">
                            <label class="form-label" for="{{$model}}_{{$l}}">{{$label}}</label>
                            <input type="text" wire:model.defer="{{$model}}.{{$l}}" placeholder="Tiêu đề {{$v}}"
                                   class="form-control  "
                                   id="{{$model}}_{{$l}}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
