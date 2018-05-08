<?php namespace Anomaly\PostsArchivesBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;

/**
 * Class PostsArchivesExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class PostsArchivesBlockExtension extends BlockExtension
{

    /**
     * This extension provides a posts
     * archives for the blocks module.
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.blocks::block.posts_archives';

    /**
     * The block view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.posts_archives_block::content';

}
