<?php

namespace App\Controller\Admin;

use App\Entity\CategoryFournisseur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategoryFournisseurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CategoryFournisseur::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('name')->setRequired(true),
         ];
    }
}
