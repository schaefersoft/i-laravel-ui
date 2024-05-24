<div class="expand-frame" @if($opened) data-opened="true" @endif>
    <div class="expand-title">
        {{$title}}
    </div>
    <div class="expand-content @if($maxHeight) {{$maxHeight}} @else max-h-60 @endif">
        {{$content}}
    </div>
</div>
