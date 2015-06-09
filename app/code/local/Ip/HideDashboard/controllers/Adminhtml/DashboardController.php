<?php
require_once 'Mage/Adminhtml/controllers/DashboardController.php';
class Ip_HideDashboard_Adminhtml_DashboardController extends Mage_Adminhtml_DashboardController
{

    public function indexAction()
    {
        $this->_redirect('*/sales_order');
    }

}