<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
   public function getSubMenu()
   {
      $query = "SELECT `tbl_sub_menu`.*, `tbl_menu`.`menu`
               FROM `tbl_sub_menu` JOIN `tbl_menu`
               WHERE `tbl_sub_menu`.`id_menu` = `tbl_menu`.`id_menu`
               ";
      return $this->db->query($query)->result_array();
   }
}
