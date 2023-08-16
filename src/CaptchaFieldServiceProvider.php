<?php

namespace Alareqi\CaptchaField;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Filament\Support\Icons\Icon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Alareqi\CaptchaField\Commands\CaptchaFieldCommand;
use Alareqi\CaptchaField\Testing\TestsCaptchaField;
use Filament\Facades\Filament;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\HtmlString;

class CaptchaFieldServiceProvider extends PackageServiceProvider
{
    public static string $name = 'captcha-field';

    public static string $viewNamespace = 'captcha-field';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name);
    }

    public function packageRegistered(): void
    {
    }

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );
        TextInput::macro('captcha', function ($config = 'flat') {
            $this->helperText = new HtmlString("<img class='dark:invert dark:brightness-150' src='" . captcha_src($config) . "' />");
            $this->type = $config == 'math' ? "number" : 'text';
            $this->rules('required|captcha');
            return $this;
        });
    }

    protected function getAssetPackageName(): ?string
    {
        return 'alareqi/captcha-field';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            Css::make('captcha-field-styles', __DIR__ . '/../resources/dist/captcha-field.css'),
        ];
    }
}