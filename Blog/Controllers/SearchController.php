<?php

namespace Blog\Controllers;

use Framework\Controllers\Controller;
use Blog\Models\Entities\PostEntity;
use Blog\Models\SearchModel;
use Framework\Core\Config;
use Framework\Core\Utilities\Messages;

class SearchController extends Controller
{
    public function index()
    {
        $this->redirect("home");
    }

    public function tag(array $searchData)
    {
//        $tag = $searchData[0];
//        var_dump(urldecode($tag));
//        // todo
        if ($this->isPost()) {
            $searchTag = trim($this->getRequest()["searchTag"]);
            /**
             * @var $model SearchModel
             */
            $model = $this->getModel();

            $this->addData("searchedPosts", $model->getPostsByTagsByName($searchTag));
            $this->addData("searchedTag", $searchTag);
            $this->renderView("search/tag");
        }
    }
}