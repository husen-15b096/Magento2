<?php

namespace Rsgitech\News\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $date;

	public function __construct(\Magento\Framework\Stdlib\DateTime\DateTime $date)
	{
		$this->date = $date;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$dataNewsRows = [
			[
			'name'         => "How to Create SQL Setup Script in Magento 2",
			'post_content' => "In this article, we will find out how to install and upgrade sql script for module in Magento 2. When you install or upgrade a module, you may need to change the database structure or add some new data for current table. To do this, Magento 2 provide you some classes which you can do all of them.",
			'url_key'      => '/magento-2-module-development/magento-2-how-to-create-sql-setup-script.html',
			'tags'         => 'magento 2,mageplaza helloworld',
			'status'       => 1
		],
		[
			'name'         => "How to Create SQL Setup Script in Magento 2 2",
			'post_content' => "In this article, we will find out how to install and upgrade sql script for module in Magento 2. When you install or upgrade a module, you may need to change the database structure or add some new data for current table. To do this, Magento 2 provide you some classes which you can do all of them.2",
			'url_key'      => '/magento-2-module-development/magento-2-how-to-create-sql-setup-script.html2',
			'tags'         => 'magento 2,mageplaza helloworld2',
			'status'       => 1
		]
		];

		foreach ($dataNewsRows as $data) 
		{
			$setup->getConnection()->insert($setup->getTable('rsgitech_news'), $data);
		}
		
	}
}