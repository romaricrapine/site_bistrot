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
            BooleanField::new('active_f_option')
                ->setLabel('On/Off Option1')
                ->setHelp('
                    Permet d\'activer ou de désactiver l\'option de ce produit.
                ')
                ->onlyOnForms(),
            TextField::new('f_option')
                ->setLabel('Option 1')
                ->setHelp('
                    Pour une boisson indiquer la mesure (ex: 25/33/50).
                    <br>
                    Pour de la nourriture indiquer le poid (ex: 250/300/500).
                ')
                ->onlyOnForms(),
            MoneyField::new('price_f_option')
                ->setCurrency('EUR')
                ->setStoredAsCents(false)
                ->setNumDecimals(2)
                ->setLabel('Prix 1')
                ->setHelp('
                    Indiquer le prix sans le signes €.
                ')
                ->onlyOnForms(),
            BooleanField::new('active_s_option')
                ->setLabel('On/Off Option2')
                ->setHelp('
                    Permet d\'activer ou de désactiver l\'option de ce produit.
                ')
                ->onlyOnForms(),
            TextField::new('s_option')
                ->setLabel('Option 2')
                ->setHelp('
                    Pour une boisson indiquer la mesure (ex: 25/33/50).
                    <br>
                    Pour de la nourriture indiquer le poid (ex: 250/300/500).
                ')
                ->onlyOnForms(),
            MoneyField::new('price_s_option')
                ->setCurrency('EUR')
                ->setStoredAsCents(false)
                ->setNumDecimals(2)
                ->setLabel('Prix 2')
                ->setHelp('
                    Indiquer le prix sans le signes €.
                ')
                ->onlyOnForms(),
            BooleanField::new('active_t_option')
                ->setLabel('On/Off Option3')
                ->setHelp('
                    Permet d\'activer ou de désactiver l\'option de ce produit.
                ')
                ->onlyOnForms(),
            TextField::new('t_option')
                ->setLabel('Option 3')
                ->setHelp('
                    Pour une boisson indiquer la mesure (ex: 25/33/50).
                    <br>
                    Pour de la nourriture indiquer le poid (ex: 250/300/500).
                ')
                ->onlyOnForms(),
            MoneyField::new('price_t_option')
                ->setCurrency('EUR')
                ->setStoredAsCents(false)
                ->setNumDecimals(2)
                ->setLabel('Prix 3')
                ->setHelp('
                    Indiquer le prix sans le signes €.
                ')
                ->onlyOnForms(),
            PercentField::new('percent_alcool')
                ->setLabel('Degré d\'Alcool en %')
                ->setNumDecimals(1)
                ->setRoundingMode(\NumberFormatter::DECIMAL)
                ->setStoredAsFractional(false)
                ->setHelp('
                    Indiquer le pourcentage d\'alcool, sinon laissez vide.
                ')
                ->onlyOnForms(),
            AssociationField::new('categorie')
                ->setHelp('
                    Indiquer la catégorie du produit.
                ')
                ->setLabel('Choisir la Catégorie'),
            BooleanField::new('active')
                ->setLabel('On / Off')
                ->setPermission('ROLE_ADMIN')
                ->setPermission('ROLE_CHEF')
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
            ->setPermission('new', 'ROLE_ADMIN')
            ->setPermission('new', 'ROLE_CHEF')
            ->setPermission('edit', 'ROLE_ADMIN')
            ->setPermission('edit', 'ROLE_CHEF')
            ->setPermission('delete', 'ROLE_ADMIN')
            ->setPermission('delete', 'ROLE_CHEF')
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
