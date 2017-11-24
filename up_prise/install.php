<?php
$this->load->model('user/user_group');
$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'module/update_prise');
$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'module/update_prise');
