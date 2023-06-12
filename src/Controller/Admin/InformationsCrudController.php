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
                ->setHelp('
                    Indiquer les horraires.
                ')
                ->onlyOnForms(),
            BooleanField::new('Lundi_active')
                ->setHelp('
                    Indiquer si l\'établissement est fermer ou non.
                ')
                ->setLabel('Fermer / Ouvert le Lundi'),

            TextField::new('Mardi')
                ->setLabel('Mardi')
                ->setHelp('
                    Indiquer les horraires.
                ')
                ->onlyOnForms(),
            BooleanField::new('Mardi_active')
                ->setHelp('
                    Indiquer si l\'établissement est fermer ou non.
                ')
                ->setLabel('Fermer / Ouvert le Mardi'),

            TextField::new('Mercredi')
                ->setLabel('Mercredi')
                ->setHelp('
                    Indiquer les horraires.
                ')
                ->onlyOnForms(),
            BooleanField::new('Mercredi_active')
                ->setHelp('
                    Indiquer si l\'établissement est fermer ou non.
                ')
                ->setLabel('Fermer / Ouvert le Mercredi'),

            TextField::new('Jeudi')
                ->setLabel('Jeudi')
                ->setHelp('
                    Indiquer les horraires.
                ')
                ->onlyOnForms(),
            BooleanField::new('Jeudi_active')
                ->setHelp('
                    Indiquer si l\'établissement est fermer ou non.
                ')
                ->setLabel('Fermer / Ouvert le Jeudi'),

            TextField::new('Vendredi')
                ->setLabel('Vendredi')
                ->setHelp('
                    Indiquer les horraires.
                ')
                ->onlyOnForms(),
            BooleanField::new('Vendredi_active')
                ->setHelp('
                    Indiquer si l\'établissement est fermer ou non.
                ')
                ->setLabel('Fermer / Ouvert le Vendredi'),

            TextField::new('Samedi')
                ->setLabel('Samedi')
                ->setHelp('
                    Indiquer les horraires.
                ')
                ->onlyOnForms(),
            BooleanField::new('Samedi_active')
                ->setHelp('
                    Indiquer si l\'établissement est fermer ou non.
                ')
                ->setLabel('Fermer / Ouvert le Samedi'),

            TextField::new('Dimanche')
                ->setLabel('Dimanche')
                ->setHelp('
                    Indiquer les horraires.
                ')
                ->onlyOnForms(),
            BooleanField::new('Dimanche_active')
                ->setHelp('
                    Indiquer si l\'établissement est fermer ou non.
                ')
                ->setLabel('Fermer / Ouvert le Dimanche'),


            TextField::new('vacances')
                ->setLabel('Date de fermeture')
                ->setHelp('
                    Si fermeture exceptionnel, indiquer les dates avec ce format : (Du XX/XX au XX/XX) 
                ')
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
            ->disable('new')
            ->disable('delete')
            ->setPermission('edit', 'ROLE_ADMIN')
            ->setPermission('edit', 'ROLE_CHEF');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Horaire du Bistrot')
            ->setPageTitle('edit', 'Modifier les Horaires')
            ->showEntityActionsInlined();
    }
}
