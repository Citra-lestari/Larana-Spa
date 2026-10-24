@props(['image' => null])

<label class="relative img-upload">

    <div class="upload-placeholder" style="margin: 40px; text-align: center;">
        {{ $image ? basename($image) : 'Choose File' }}
    </div>

    <input type="file"
        name="image"
        value="{{ $image }}"
        accept=".png,.jpg,.jpeg, .webp"
        onchange="this.parentElement.querySelector('.upload-placeholder').textContent = this.files[0]?.name || 'Choose File'"
        class="absolute top-0 left-0 w-full h-full cursor-pointer opacity-0 bg-none"
    >
</label>
