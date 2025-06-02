<?php

namespace OnaOnbir\OOReadable;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class OOReadableServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $this->bootReadableBladeDirectives();
    }

    public function bootReadableBladeDirectives()
    {
        $prefix = 'Readable';

        $this->registerBladeDirective($prefix, 'Number');
        $this->registerBladeDirective($prefix, 'HumanNumber');
        $this->registerBladeDirective($prefix, 'NumberToString');
        $this->registerBladeDirective($prefix, 'Decimal');
        $this->registerBladeDirective($prefix, 'DecInt');
        $this->registerBladeDirective($prefix, 'Date');
        $this->registerBladeDirective($prefix, 'DateWoYear');
        $this->registerBladeDirective($prefix, 'Time');
        $this->registerBladeDirective($prefix, 'DateTime');
        $this->registerBladeDirective($prefix, 'DiffDateTime');
        $this->registerBladeDirective($prefix, 'TimeLength');
        $this->registerBladeDirective($prefix, 'DateTimeLength');
        $this->registerBladeDirective($prefix, 'Size');
    }

    protected function registerBladeDirective(string $prefix, string $method): void
    {
        Blade::directive($prefix.$method, function ($data) use ($method) {
            return "<?php echo OnaOnbir\\OOReadable\\Readable::get{$method}($data); ?>";
        });
    }
}
