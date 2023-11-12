import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/awcodes/filament-curator/resources/**/*.blade.php',
    ],
    presets: [preset],
}
