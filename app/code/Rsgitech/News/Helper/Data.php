<?php 
/*
namespace Rsgitech\News\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;


class Data extends AbstractHelper
{
	
	// $this->scopeConfig->getValue('rsgitech_news/storefront/news_link', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	
	// section id => rsgitech_news,group id => storefront,field id =>news_link

	const XML_PATH_RSGITECH_NEWS = 'rsgitech_news/';

	public function getConfigValue($field, $storeCode=null)
	{
		// $field='rsgitech_news/storefront/news_link';

		return $this->scopeConfig->getValue($field,ScopeInterface::SCOPE_STORE,$storeCode);
	}

	public function getGeneralConfig($fieldid, $storeCode=null)
	{
		return $this->getConfigValue(self::XML_PATH_RSGITECH_NEWS.'general/'.$fieldid, $storeCode);
		// general is the id of group
	}

	public function getStorefrontConfig($fieldid, $storeCode=null)
	{
		return $this->getConfigValue(self::XML_PATH_RSGITECH_NEWS.'storefront/'.$fieldid, $storeCode);
		// storefront is the id of group
	}
}*/