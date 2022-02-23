<?php
namespace Seepossible\Custom\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class CreateDemoPosts
 * @package Seepossible\Custom\Setup\Patch
 */
class CreateDemoPosts implements DataPatchInterface, PatchVersionInterface
{
    /**
     * @var \Seepossible\Custom\Model\BlogFactory
     */
    private $blogFactory;

    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * CreateDemoPosts constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param \Seepossible\Custom\Model\BlogFactory $blogFactory
     */
    public function __construct(
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup,
        \Seepossible\Custom\Model\BlogFactory $blogFactory
    ) {
        $this->blogFactory = $blogFactory;
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function apply()
    {
        $blogs = [
            [
                'title' => 'Demo Post 1',
                'description' => "<h1>Demo Post 1</h1><p>Demo Post 1 Description content goes here.</p>\r\n",
                'is_active' => 1
            ],
            [
                'title' => 'Demo Post 2',
                'description' => "<h1>Demo Post 2</h1><p>Demo Post 2 Description content goes here.</p>\r\n",
                'is_active' => 1
            ],
            [
                'title' => 'Demo Post 3',
                'description' => "<h1>Demo Post 3</h1><p>Demo Post 3 Description content goes here.</p>\r\n",
                'is_active' => 1
            ],
            [
                'title' => 'Demo Post 4',
                'description' => "<h1>Demo Post 4</h1><p>Demo Post 4 Description content goes here.</p>\r\n",
                'is_active' => 1
            ],
            [
                'title' => 'Demo Post 5',
                'description' => "<h1>Demo Post 5</h1><p>Demo Post 5 Description content goes here.</p>\r\n",
                'is_active' => 1
            ]
        ];

        /**
         * Insert demo blog
         */
        foreach ($blogs as $data) {
            $this->createPost()->setData($data)->save();
        }
       
        $this->moduleDataSetup->endSetup();
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public static function getVersion()
    {
        return '2.0.0';
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * Create blog model instance
     *
     * @return \Seepossible\Custom\Model\Blog
     */
    private function createPost()
    {
        return $this->blogFactory->create();
    }
}
