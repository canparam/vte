@php
    $language = config('app.languages')
@endphp

@if(count($language) <=0)

@else
    <div class="panel panel-primary">
        <div class="tab-menu-heading">
            <div class="tabs-menu">
                <!-- Tabs -->
                <ul class="nav panel-tabs" role="tablist">
                    @foreach($language as $l => $v)
                        <li>
                            <a href="#{{$model}}_{{$l}}" class="{{$loop->first ? 'active' : ''}}"
                               data-bs-toggle="tab"
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
                    <div class="tab-pane {{$loop->first ? 'active' : ''}}" id="{{$model}}_{{$l}}" role="tabpanel">
                        @foreach($fields as $k => $field)
                            @switch($field['type'])
                                @case(\App\View\Components\Form\TextInput::class)
                                    <x-form.text-input :label="$field['label']" :model="$k . '.' . $l"/>
                                    @break

                                @case(\App\View\Components\TinyEditor::class)
                                    <x-tiny-editor :label="$field['label']" :model="$k . '.' . $l"/>
                                    @break
                                @case(\App\View\Components\SEO::class)
                                    <x-s-e-o :model="$k" :lang="$l"/>
                                @break
                            @endswitch
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endif
