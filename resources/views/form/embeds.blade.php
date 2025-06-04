<style>
    .embed-container .embed-container{
        padding: 0 6.7vw;
        margin: 0 auto;
    }
</style>
<div class="embed-container">
    @if($label!=false)
    <div class="row">
        <div class="{{$viewClass['label']}}"><h4 class="pull-right">{!! $label !!}</h4></div>
        <div class="{{$viewClass['field']}}"></div>
    </div>
    <hr style="margin-top: 0px;">
    @endif

    <div id="embed-{{$format_column}}" class="embed-{{$format_column}}">

        <div class="embed-{{$format_column}}-forms">

            <div class="embed-{{$format_column}}-form fields-group">

                @foreach($form->fields() as $field)
                    {!! $field->render() !!}
                @endforeach

            </div>
        </div>
    </div>


</div>