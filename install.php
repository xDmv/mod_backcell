<?php
$this->load->model('user/user_group');
$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'module/cellback');
$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'module/cellback');
