#
#<?php die('Forbidden.'); ?>
#Date: 2025-12-16 11:39:15 UTC
#Software: Joomla! 6.0.0 Stable [ Kuimarisha ] 14-October-2025 16:00 UTC

#Fields: datetime	priority clientip	category	message
2025-12-16T11:39:15+00:00	INFO 127.0.0.1	updater	Loading information from update site #4 with name "JTicketing" and URL https://techjoomla.com/updates/stream/jticketing.xml?format=xml took 1.30 seconds
2025-12-16T11:39:16+00:00	WARNING 127.0.0.1	jerror	Model class JticketingModelOrders not found in file.
2025-12-16T11:41:34+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Class "jFile" not found". Stack trace: #0 [ROOT]/administrator/components/com_tjvendors/controllers/vendor.php(114): TjvendorsModelVendor->generateGatewayFields()
#1 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): TjvendorsControllerVendor->generateGatewayFields()
#2 [ROOT]/administrator/components/com_tjvendors/tjvendors.php(47): Joomla\CMS\MVC\Controller\BaseController->execute()
#3 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#4 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#5 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#6 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#7 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#8 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#9 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#10 [ROOT]/administrator/index.php(32): require_once('...')
#11 {main}
2025-12-16T11:41:37+00:00	WARNING 127.0.0.1	jerror	Model class JticketingModelOrders not found in file.
2025-12-16T11:41:37+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to a member function getItems() on false". Stack trace: #0 [ROOT]/libraries/src/MVC/View/AbstractView.php(171): JticketingModelcp->getDashboardData()
#1 [ROOT]/administrator/components/com_jticketing/views/cp/view.html.php(92): Joomla\CMS\MVC\View\AbstractView->get()
#2 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JticketingViewcp->display()
#3 [ROOT]/administrator/components/com_jticketing/controller.php(59): Joomla\CMS\MVC\Controller\BaseController->display()
#4 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JticketingController->display()
#5 [ROOT]/administrator/components/com_jticketing/jticketing.php(114): Joomla\CMS\MVC\Controller\BaseController->execute()
#6 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#7 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#8 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#9 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#10 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#11 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#12 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#13 [ROOT]/administrator/index.php(32): require_once('...')
#14 {main}
2025-12-16T11:41:53+00:00	WARNING 127.0.0.1	jerror	Model class JticketingModelOrders not found in file.
2025-12-16T11:41:53+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Call to a member function getItems() on false". Stack trace: #0 [ROOT]/libraries/src/MVC/View/AbstractView.php(171): JticketingModelcp->getDashboardData()
#1 [ROOT]/administrator/components/com_jticketing/views/cp/view.html.php(92): Joomla\CMS\MVC\View\AbstractView->get()
#2 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JticketingViewcp->display()
#3 [ROOT]/administrator/components/com_jticketing/controller.php(59): Joomla\CMS\MVC\Controller\BaseController->display()
#4 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JticketingController->display()
#5 [ROOT]/administrator/components/com_jticketing/jticketing.php(114): Joomla\CMS\MVC\Controller\BaseController->execute()
#6 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#7 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#8 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#9 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#10 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#11 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#12 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#13 [ROOT]/administrator/index.php(32): require_once('...')
#14 {main}
2025-12-16T11:42:10+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Class "JToolBar" not found". Stack trace: #0 [ROOT]/administrator/components/com_jticketing/views/catimpexp/view.html.php(72): JticketingViewCatimpexp->addToolbar()
#1 [ROOT]/libraries/src/MVC/Controller/BaseController.php(697): JticketingViewCatimpexp->display()
#2 [ROOT]/administrator/components/com_jticketing/controller.php(59): Joomla\CMS\MVC\Controller\BaseController->display()
#3 [ROOT]/libraries/src/MVC/Controller/BaseController.php(730): JticketingController->display()
#4 [ROOT]/administrator/components/com_jticketing/jticketing.php(114): Joomla\CMS\MVC\Controller\BaseController->execute()
#5 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#6 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#7 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#8 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#9 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#10 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#11 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#12 [ROOT]/administrator/index.php(32): require_once('...')
#13 {main}
