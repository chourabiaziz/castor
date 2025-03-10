<?php

namespace App\Controller\Admin;

use App\Entity\Expenses;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class ExpensesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Expenses::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
             AssociationField::new('category'),
            NumberField::new('amount'),
            TextEditorField::new('description'),
        ];
    }
    
}
