<?php

namespace Magento\CustomWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class VideoWidget extends Template implements BlockInterface
{
    protected $_template = "widget/videowidget.phtml";
}