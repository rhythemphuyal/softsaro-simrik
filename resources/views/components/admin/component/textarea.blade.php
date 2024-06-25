<div>

    <textarea class="{{ $class }} border block w-full mt-1 rounded-md focus:border-[#7065d4] hover:border-[#7065d4]"
        name="{{ $name }}" rows="5">{!! old($name,$value) !!}</textarea>
    @error($name)
        <div class="text-sm text-red-400 invalid-feedback" style="display: block;">
            * {{ $message }}
        </div>
    @enderror
</div>
