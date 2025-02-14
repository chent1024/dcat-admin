<div class="input-group input-group-sm quick-form-field">
    <input name="{{$name}}" type="hidden" value="0" />
    <input type="checkbox" name="{{$name}}" class="{{ $class }}" {{ $value == 1 ? 'checked' : '' }} {!! $attributes !!} />

</div>

<script require="@switchery" init="{!! $selector !!}">
    $this.parent().find('.switchery').remove();

    $this.each(function() {
        new Switchery($(this)[0], $(this).data())
    })
</script>
