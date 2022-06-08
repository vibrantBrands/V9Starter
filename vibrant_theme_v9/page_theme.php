<?php
namespace Application\Theme\VibrantThemeV9;

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme implements ThemeProviderInterface
{
    public function registerAssets()
    {
        $this->providesAsset('css', 'bootstrap');
        $this->providesAsset('css', 'blocks/form');
        $this->providesAsset('css', 'blocks/social_links');
        $this->providesAsset('css', 'blocks/share_this_page');
        $this->providesAsset('css', 'blocks/feature');
        $this->providesAsset('css', 'blocks/testimonial');
        $this->providesAsset('css', 'blocks/date_navigation');
        $this->providesAsset('css', 'blocks/topic_list');
        $this->providesAsset('css', 'blocks/faq');
        $this->providesAsset('css', 'blocks/tags');
        $this->providesAsset('css', 'core/frontend/*');
        $this->providesAsset('css', 'blocks/feature/templates/hover_description');

        $this->providesAsset('css', 'blocks/event_list');

        $this->requireAsset('css', 'font-awesome');

        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('javascript', 'core/lightbox/launcher');
        $this->requireAsset('javascript', 'core/lightbox');
        $this->requireAsset('css', 'core/lightbox');

        $this->requireAsset('javascript', 'picturefill');
        $this->requireAsset('javascript-conditional', 'html5-shiv');
        $this->requireAsset('javascript-conditional', 'respond');
    }

    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function getThemeName()
    {
        return t('Vibrant Theme V9');
    }

    public function getThemeDescription()
    {
        return t('Elegant, spacious theme with support for blogs, portfolios, layouts and more.');
    }

    /**
     * @return array
     */
    public function getThemeBlockClasses()
    {
        return [
            'feature' => ['feature-home-page'],
            'page_list' => [
                'recent-blog-entry',
                'blog-entry-list',
                'page-list-with-buttons',
                'block-sidebar-wrapped',
            ],
            'next_previous' => ['block-sidebar-wrapped'],
            'share_this_page' => ['block-sidebar-wrapped'],
            'content' => [
                'block-sidebar-wrapped',
                'block-sidebar-padded',
            ],
            'date_navigation' => ['block-sidebar-padded'],
            'topic_list' => ['block-sidebar-wrapped'],
            'testimonial' => ['testimonial-bio'],
            'image' => [
                'image-right-tilt',
                'image-circle',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getThemeAreaClasses()
    {
        return [
            'Page Footer' => ['area-content-accent'],
        ];
    }

    /**
     * @return array
     */
    public function getThemeDefaultBlockTemplates()
    {
        return [
            'calendar' => 'bootstrap_calendar.php',
        ];
    }

    /**
     * @return array
     */
    public function getThemeResponsiveImageMap()
    {
        return [
            'large' => '900px',
            'medium' => '768px',
            'small' => '0',
        ];
    }

    /**
     * @return array
     */
    public function getThemeEditorClasses()
    {
        return [
            ['title' => t('Mobile Hide'), 'spanClass' => 'mobile-hide', 'forceBlock' => 1],
            ['title' => t('Font Weight Light'), 'spanClass' => 'fw-light', 'forceBlock' => 0],
            ['title' => t('Font Weight Medium'), 'spanClass' => 'fw-medium', 'forceBlock' => 0],
            ['title' => t('Content Divider'), 'spanClass' => 'content-divider', 'forceBlock' => 0],
            ['title' => t('Main Button'), 'element' => 'a',  'attributes' => array('class' => 'btn btn-main')],
            ['title' => t('Sub Button'), 'element' => 'a',  'attributes' => array('class' => 'btn btn-sub')],
            ['title' => t('Two Column List'), 'element' => 'ul',  'attributes' => array('class' => 'two-col-list')],
            ['title' => t('Left Side Image'), 'element' => 'img',  'attributes' => array('class' => 'img-left')],
            ['title' => t('Right Side Image'), 'element' => 'img',  'attributes' => array('class' => 'img-right')],
        ];
    }

    /**
     * @return array
     */
    public function getThemeAreaLayoutPresets()
    {
        $presets = [
            [
                'handle' => 'left_sidebar',
                'name' => 'Left Sidebar',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-sm-4"></div>',
                    '<div class="col-sm-8"></div>',
                ],
            ],
            [
                'handle' => 'right_sidebar',
                'name' => 'Right Sidebar',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-sm-8"></div>',
                    '<div class="col-sm-4"></div>',
                ],
            ]
        ];

        return $presets;
    }
}
