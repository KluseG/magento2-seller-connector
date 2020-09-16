<?php

namespace MiraklSeller\Sales\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Mirakl\MMP\Shop\Domain\Order\ShopOrder;

class DataMapper extends AbstractHelper
{
  /**
   * @param   Context                     $context
   */
  public function __construct(
    Context $context
  ) {
    parent::__construct($context);
  }

  public function extractFromOrder(ShopOrder $miraklOrder)
  {
    return [];
  }
}
