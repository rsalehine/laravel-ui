<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Cache;

class ComponentSource extends Component
{
    public array $files = [];

    public function mount($data)
    {
        $this->files = is_array($data) ? $data : [$data];
    }

    #[Computed]
    public function data()
    {
        // Create a cache key based on the files array
        $cacheKey = 'component_source_' . md5(json_encode($this->files));

        return Cache::remember($cacheKey, now()->addHours(24), function () {
            return collect($this->files)->map(function ($filePath) {
                // Cache individual file contents with last modified time
                $fileCacheKey = 'file_content_' . md5($filePath);
                $lastModified = file_exists(base_path($filePath)) ? filemtime(base_path($filePath)) : 0;
                $code = Cache::remember(
                    $fileCacheKey,
                    now()->addHours(24),
                    fn() => file_exists(base_path($filePath)) ? file_get_contents(base_path($filePath)) : ''
                );

                return [
                    'lang' => str_contains($filePath, '.blade') ? 'blade' : $this->determineLang($filePath),
                    'code' => $code,
                    'name' => basename($filePath),
                ];
            })->toArray();
        });
    }

    protected function determineLang(string $path): string
    {
        static $langCache = [];

        $extension = pathinfo($path, PATHINFO_EXTENSION);
        if (isset($langCache[$extension])) {
            return $langCache[$extension];
        }

        $lang = match ($extension) {
            'php' => 'blade',
            'js' => 'js',
            'ts' => 'ts',
            'css' => 'css',
            'html' => 'html',
            'blade' => 'blade',
            'json' => 'json',
            'md' => 'markdown',
            default => 'text',
        };

        $langCache[$extension] = $lang;
        return $lang;
    }

    public function render()
    {
        return view('livewire.component-source');
    }
}