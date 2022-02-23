<?php 
namespace Seepossible\Custom\Model;
 
use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\View\LayoutInterface;
 
class ConfigProvider implements ConfigProviderInterface
{
    /** @var LayoutInterface  */
    protected $_layout;
    protected $cmsBlock;
    
    public function __construct(
        LayoutInterface $layout, 
        $customBlockId,
        $sidebarBlockId
        )
    {
        $this->_layout = $layout;
        $this->customBlock = $this->constructBlock($customBlockId);
        $this->sidebarBlock = $this->constructBlock($sidebarBlockId);
    }
    
    public function constructBlock($blockId){
        $block = $this->_layout->createBlock('Magento\Cms\Block\Block')
            ->setBlockId($blockId)->toHtml();
        return $block;
    }
    
    public function getConfig()
    {
        return [
            'custom_cms_block' => $this->customBlock,
            'sidebar_cms_block' => $this->sidebarBlock,
        ];
    }
}