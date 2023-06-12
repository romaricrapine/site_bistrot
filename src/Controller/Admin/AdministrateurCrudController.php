<?php

namespace App\Controller\Admin;

use App\Entity\Administrateur;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AdministrateurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Administrateur::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('username')->setLabel('Prénom / Pseudo de connexion'),
            IntegerField::new('phone_number')->setLabel('Numéro de téléphone'),
            ArrayField::new('roles')->setLabel('Rôles')
                ->setHelp('
            <br>    
            <div style="color: white">Pour configurer les rangs:
            <br>
            <br> ROLE_ADMIN pour les dirigeants de l\'établissement.
            <br>
            <br> ROLE_CHEF pour le personnel qui pourras éditer le site. 
            <br>
            <br> ROLE_SERVEUR pour le personne qui ne pourras pas éditer le site.
            <br>
            <br> <strong style="color: red;font-size: 20px">Merci de ne pas toucher au ROLE_USER !!</strong>. 
            </div>
           '),
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
            ->disable('new')
            ->setPermission(Action::BATCH_DELETE, 'ROLE_ADMIN');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Liste de l\'équipe')
            ->showEntityActionsInlined();
    }

}
