@props(['links' => [],'current'=>[],'prevSlug'=>'','nextSlug'=>''])

@php
    use App\Support\UrlHelper;

    $breadcrumbs = [
        'components' => ['href' => '/components', 'text' => 'Components'],
        'docs' => ['href' => '/docs', 'text' => 'Docs'],
    ];

    $repoContentLocation = config('base.editContentBaseUrl');
    $path = '/' . ltrim(request()->path() ?: '', '/');
    $filePath = ltrim(substr($path, strrpos($path, '/') + 1), '/') ?: trim($path, '/');
    $words = UrlHelper::splitSlug($filePath);
    $breadcrumbsMain = str_contains($path, '/components') ? $breadcrumbs['components'] : $breadcrumbs['docs'];
    $contentLocation = trim($path, '/');

    $slotHtml = (string) $slot;


@endphp

<main class="grid xl:grid-cols-[1fr_15rem]">
    <article data-pagefind-body class="px-4 sm:px-8 xl:px-16 grid text-fg h-max">
        <div class="w-full xl:max-w-2xl mx-auto">
           <x-molecules.doc-page-header :title="$current['title']" :sub-title="$current['description']" :links="$links" :breadcrumbs-main="$breadcrumbsMain"
                    :breadcrumbs-words="$words" />
            <div data-doc-content class="py-10 w-full grid">
                {{ $slot }}
            </div>
            <div>
                <x-atoms.ui-link href="{{ $repoContentLocation }}{{ $contentLocation }}.blade.php"
                    aria-label="edit this page on github"
                    class="w-max flex items-center gap-x-2 underline underline-dashed underline-offset-3 hover:text-fg-title">
                    <span aria-hidden="true" class="flex iconify ph--pencil-simple-line"></span>
                    Edit this page
                </x-atoms.ui-link>
            </div>
            <div class="flex w-full hpx my-8 border-b border-border"></div>
            <x-molecules.doc-pagination :prev-slug="$prevSlug" :next-slug="$nextSlug" />
        </div>
    </article>
    <x-molecules.box-table-of-content :content-html="$slotHtml" :file-name="$contentLocation" :contrib-url="$repoContentLocation" />
</main>
