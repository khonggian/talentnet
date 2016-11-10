<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/



/* End of file hooks.php */
/* Location: ./application/config/hooks.php */
$hook['post_controller_constructor'] = array(
                                'class'    => 'seo',
                                'function' => 'index',
                                'filename' => 'seo.php',
                                'filepath' => 'hooks',
                                //'params'   => array('beer', 'wine', 'snacks')
                                );
$hook['pre_controller'] = array(
                                'class'    => 'redirect',
                                'function' => 'index',
                                'filename' => 'redirect.php',
                                'filepath' => 'hooks'
                                );