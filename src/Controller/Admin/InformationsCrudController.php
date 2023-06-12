<?php

namespace App\Controller\Admin;

use App\Entity\Informations;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class InformationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Informations::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('lundi')
                ->setLabel('Lundi')
                ->onlyOnForms(),
            BooleanField::new('Lundi_active')
                ->setLabel('Fermer / Ouvert le Lundi'),

            TextField::new('Mardi')
                ->setLabel('Mardi')
                ->onlyOnForms(),
            BooleanField::new('Mardi_active')
                ->setLabel('Fermer / Ouvert le Mardi'),

            TextField::new('Mercredi')
                ->setLabel('Mercredi')
                ->onlyOnForms(),
            BooleanField::new('Mercredi_active')
                ->setLabel('Fermer / Ouvert le Mercredi'),

            TextField::new('Jeudi')
                ->setLabel('Jeudi')
                ->onlyOnForms(),
            BooleanField::new('Jeudi_active')
                ->setLabel('Fermer / Ouvert le Jeudi'),

            TextField::new('Vendredi')
                ->setLabel('Vendredi')
                ->onlyOnForms(),
            BooleanField::new('Vendredi_active')
                ->setLabel('Fermer / Ouvert le Vendredi'),

            TextField::new('Samedi')
                ->setLabel('Samedi')
                ->onlyOnForms(),
            BooleanField::new('Samedi_active')
                ->setLabel('Fermer / Ouvert le Samedi'),

            TextField::new('Dimanche')
                ->setLabel('Dimanche')
                ->onlyOnForms(),
            BooleanField::new('Dimanche_active')
                ->setLabel('Fermer / Ouvert le Dimanche'),


            TextField::new('vacances')
                ->setLabel('Date de fermeture')
                ->setHelp('<span style="color: white;font-size: 15px">Du xx/xx au xx/xx</span>')
                ->onlyOnForms(),
            BooleanField::new('vacances_active')
                ->setLabel('Fermeture Temporaire'),
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
            ->disable('delete')
            ->setPermission('edit', 'ROLE_ADMIN')
            ->disable('new')
            ->setPermission(Action::BATCH_DELETE, 'ROLE_ADMIN');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Horaire du Bistrot')
            ->setPageTitle('edit', 'Modifier les Horaires')
            ->showEntityActionsInlined();
    }
}
