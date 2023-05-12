<?php

namespace Magento\CustomWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class VideoWidget extends Template implements BlockInterface
{
    protected $_template = "widget/videowidget.phtml";

    public function _construct()
    {
        parent::_construct();
        $this->setData('area', 'frontend');
    }

    public function getVideoUrl()
    {
        return $this->getData('videoURL');
    }
}