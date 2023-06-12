<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\PercentField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')
                ->setLabel('Nom'),
            TextEditorField::new('description')
                ->setLabel('Description')
                ->onlyOnForms(),
            TextField::new('f_option')
                ->setLabel('Option 1')
                ->onlyOnForms(),
            MoneyField::new('price_f_option')
                ->setCurrency('EUR')
                ->setStoredAsCents(false)
                ->setNumDecimals(2)
                ->setLabel('Prix 1'),
            BooleanField::new('active_f_option')
                ->setLabel('On/Off Option1')
                ->onlyOnForms(),
            TextField::new('s_option')
                ->setLabel('Option 2')
                ->onlyOnForms(),
            MoneyField::new('price_s_option')
                ->setCurrency('EUR')
                ->setStoredAsCents(false)
                ->setNumDecimals(2)
                ->setLabel('Prix 2')
                ->onlyOnForms(),
            BooleanField::new('active_s_option')
                ->setLabel('On/Off Option2')
                ->onlyOnForms(),
            TextField::new('t_option')
                ->setLabel('Option 3')
                ->onlyOnForms(),
            MoneyField::new('price_t_option')
                ->setCurrency('EUR')
                ->setStoredAsCents(false)
                ->setNumDecimals(2)
                ->setLabel('Prix 3')
                ->onlyOnForms(),
            BooleanField::new('active_t_option')
                ->setLabel('On/Off Option3')
                ->onlyOnForms(),
            PercentField::new('percent_alcool')
                ->setLabel('Degré d\'Alcool en %')
                ->setNumDecimals(1)
                ->setRoundingMode(\NumberFormatter::DECIMAL)
                ->setStoredAsFractional(false)
                ->onlyOnForms(),
            AssociationField::new('categorie')
                ->setLabel('Choisir la Catégorie'),
            BooleanField::new('active')
                ->setLabel('On / Off'),
        ];
    }

    public function configureAssets(Assets $assets): Assets
    {
        return parent::configureAssets($assets)
            ->addWebpackEncoreEntry('pageadmin');
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->setPermission('delete', 'ROLE_ADMIN')
            ->setPermission('edit', 'ROLE_ADMIN')
            ->setPermission('new', 'ROLE_ADMIN')
            ->setPermission(Action::BATCH_DELETE, 'ROLE_ADMIN');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Liste des Produits')
            ->setPageTitle('new', 'Ajouter un Produit')
            ->setPageTitle('edit', 'Modifier un Produit')
            ->showEntityActionsInlined();
    }
}
