<?php

namespace App\Controller\Admin;

use App\Controller\HomeController;
use App\Entity\CategoryExpeneses;
use App\Entity\CategoryFournisseur;
use App\Entity\Client;
use App\Entity\Fournisseur;
use App\Entity\Region;
use App\Entity\Zone;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render("admin/dashboard.html.twig");
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Castor');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Fournisseur', 'fa fa-user-circle-o',Fournisseur::class  );
        yield MenuItem::linkToCrud('Client', 'fa fa-user-circle-o',Client::class  );
        yield MenuItem::subMenu('Configuration', 'fa fa-cog')
        ->setSubItems([
            MenuItem::linkToCrud('Region', 'fa fa-circle',  Region::class),
            MenuItem::linkToCrud('Zone', 'fa fa-circle',Zone::class  ),
            MenuItem::linkToCrud('Category Expenses', 'fa fa-circle', CategoryExpeneses::class ),
            MenuItem::linkToCrud('Category Fournisseur', 'fa fa-circle',CategoryFournisseur::class ),
        ]);

}}
