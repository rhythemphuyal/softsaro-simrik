<input
    class="border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-[#7065d4] focus:border-[#7065d4] focus:outline-none block w-full p-2.5"
    name="{{ $name }}" placeholder="Type {{ $name }} here" type="{{ $inputType }}"
    value="{{ old('title', $value) }}" @if ($inputType == 'file') onchange="{{ $onchange }}" @endif
    value="{{ old($name) }}" />

@if ($inputType == 'file' && $value != null)
    <img class="oldimage" src="{{ asset('/uploads/' . $value) }}" alt="banner_image" style="width: 70px;margin-bottom:2px;">
@endif

<img id="{{ $name }}" style="width: 70px; margin-bottom: 2px;" />

@error($name)
    <div class="invalid-feedback text-red-400 text-sm" style="display: block;">
        * {{ $message }}
    </div>
@enderror

@if ($inputType == 'file')
    <script>
        var loadFile = function(event) {
            var aa = @json($name);
            var output = document.getElementById(aa);

            output.src = URL.createObjectURL(event.target.files[0]);

            var oldImage = document.getElementsByClassName('oldimage')[0];
            if (oldImage) {
                oldImage.classList.add("hidden");
            }
        };
    </script>
@endif
