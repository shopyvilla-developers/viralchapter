<?php

namespace Modules\Post\Admin;

use Modules\Admin\Ui\Tab;
use Modules\Admin\Ui\Tabs;
use Modules\Category\Entities\Category;

class PostTabs extends Tabs
{
    public function make()
    {
        $this->group('post_information', trans('post::posts.tabs.group.post_information'))
            ->active()
            ->add($this->general())
            ->add($this->seo());
    }

    private function general()
    {
        return tap(new Tab('general', trans('post::posts.tabs.general')), function (Tab $tab) {
            $tab->active();
            $tab->weight(5);
            $tab->fields(['title', 'body', 'is_active', 'slug']);
            

            $tab->view('post::admin.posts.tabs.general',['categories' => Category::treeList(),]);
        });
    }

    private function seo()
    {
        return tap(new Tab('seo', trans('post::posts.tabs.seo')), function (Tab $tab) {
            $tab->weight(10);
            $tab->view('post::admin.posts.tabs.seo');
        });
    }
}
