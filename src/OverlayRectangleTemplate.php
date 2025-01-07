<?php

namespace Remp\CampaignModule;

class OverlayRectangleTemplate extends AbstractTemplate
{
    protected $fillable = [
        'header_text',
        'main_text',
        'button_text',
        'width',
        'height',
        'image_link',
        'color_scheme',
    ];

    protected $attributes = [
        'color_scheme' => 'grey',
    ];

    public function text()
    {
        return strip_tags("{$this->main_text}");
    }
}
