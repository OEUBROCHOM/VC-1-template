<?php
class StoryController extends BaseController
{
    public function index() {
        $this->view('story/storys');
    }
}