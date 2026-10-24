<div class="container-input-pass">
    <input type="password" placeholder="Input your password" name="{{ $name }}"
        {{ $attributes->merge(['class' => 'input-pass']) }}>

    <span class="js-toggle-pass iconify" data-icon="nimbus:eye" data-width="20"></span>
</div>

<script>
    if (!window.passwordToggleInitialized) {
        window.passwordToggleInitialized = true;

        document.addEventListener('click', (event) => {

            const toggle = event.target.closest('.js-toggle-pass');
            if (!toggle) return;

            const container = toggle.closest('.container-input-pass');
            const input = container.querySelector('input');

            if (input.type === 'password') {
                input.type = 'text';
                toggle.setAttribute('data-icon', 'mdi:eye-off-outline');
            } else {
                input.type = 'password';
                toggle.setAttribute('data-icon', 'nimbus:eye');
            }

            if (window.Iconify) {
                Iconify.scan(container);
            }
        });
    }
</script>
