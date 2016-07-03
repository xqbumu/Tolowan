<?php
namespace Modules\Comment\Entity;

use Core\Config;
use Modules\Entity\Entity\Manager;

class CommentManager extends Manager
{
    protected $_entityId = 'comment';
    protected $_module = 'comment';

    public function menuTabs()
    {
        return false;
    }

    public function saveBefore($form)
    {
        if (!$this->user->isLogin()) {
            $this->flash->error('请登陆后评论');
            return false;
        }
        return $form;
    }

    public function saveAfter($entityModel, $entityForm)
    {
        if ($entityModel) {
            $nodeConfig = Config::get('m.node.config');
            if (isset($nodeConfig['comment_num']) && $nodeConfig['comment_num'] == true) {
                $nodeEntity = $this->entityManager->get('node');
                $node = $nodeEntity->findFirst($this->entityModel->nid, true);
                if ($node) {
                    $node->comment_num = $node->comment_num + 1;
                    $node->save();
                }
            }
        }
        parent::saveAfter($entityModel, $entityForm);
    }
}