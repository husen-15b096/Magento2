<?php
namespace Rsgitech\News\Controller\Adminhtml\AllNews;

class Index extends \Magento\Backend\App\Action
{
	protected $resultpageFactory;

	//protected $helperData;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultpageFactory
		//\Rsgitech\News\Helper\Data $helperData
		)
	{
		//$this->resultpageFactory = $resultpageFactory;
		parent::__construct($context);
		$this->resultpageFactory = $resultpageFactory;
		//$this->$helperData = $helperData;
	}

	public function execute()
	{
		//echo $this->$helperData->getConfigValue('news_link'); // field id=news_link 
		//exit();
		 return $resultpage=$this->resultpageFactory->create();
	}
}

?>