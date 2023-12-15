<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableGlobalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate la table avant d'ajouter des données pour éviter les doublons lors des exécutions ultérieures
        DB::table('table_globals')->truncate();

        // Insérer les données
        $data = [
            ['data_type' => 'labo', 'data_cat' => 'recherche', 'cat_name' => 'Labo_de_recherche', 'cat_desc' => null],
            ['data_type' => 'labo', 'data_cat' => 'Pédagogique', 'cat_name' => 'Labo pédagogique', 'cat_desc' => null],
            ['data_type' => 'offre', 'data_cat' => 'licence', 'cat_name' => 'offre_de_licence', 'cat_desc' => 'Une offre de formation aboutissant à l’obtention d’un diplôme de licence'],
            ['data_type' => 'offre', 'data_cat' => 'master', 'cat_name' => 'offre_de_master', 'cat_desc' => 'Une offre de formation aboutissant à l’obtention d’un diplôme de master'],
            ['data_type' => 'offre', 'data_cat' => 'doctorat', 'cat_name' => 'offre_de_doctorat', 'cat_desc' => 'Une offre de formation aboutissant à l’obtention d’un diplôme de doctorat'],
            ['data_type' => 'user', 'data_cat' => 'enseignant', 'cat_name' => 'User_enseignant', 'cat_desc' => 'Représente un enseignant utilisateur de la plateforme'],
            ['data_type' => 'user', 'data_cat' => 'etudiant', 'cat_name' => 'User_etudiant', 'cat_desc' => 'Représente un étudiant utilisateur de la plateforme'],
            ['data_type' => 'user', 'data_cat' => 'Directeur', 'cat_name' => 'User_directeur', 'cat_desc' => 'Représente un directeur utilisateur de la plateforme'],
            ['data_type' => 'User', 'data_cat' => 'Editeur', 'cat_name' => 'User_editeur', 'cat_desc' => 'Représente un enseignant editeur de la plateforme'],
            ['data_type' => 'User', 'data_cat' => 'Chef service', 'cat_name' => 'User_chef_service', 'cat_desc' => 'Représente un chef service utilisateur de la plateforme'],
            ['data_type' => 'User', 'data_cat' => 'partenaire', 'cat_name' => 'User_partenaire', 'cat_desc' => 'Représente un partenaire utilisateur de la plateforme'],
            ['data_type' => 'user', 'data_cat' => 'admin', 'cat_name' => 'User_admin', 'cat_desc' => 'Représente un administrateur utilisateur de la plateforme'],
            ['data_type' => 'evenement', 'data_cat' => 'examen', 'cat_name' => 'Evénement examen', 'cat_desc' => 'Devoir, reprise, rattrapages'],
            ['data_type' => 'evenement', 'data_cat' => 'Activite_pedagogique', 'cat_name' => 'Evenement pédagogique', 'cat_desc' => 'Conseil pédagogique, CODI,…'],
            ['data_type' => 'evenement', 'data_cat' => 'Processus_academique', 'cat_name' => 'Evenement processus académique', 'cat_desc' => 'Réclamations des apprenants, Soutenances, semaines de l’entrepreneuriat'],
            ['data_type' => 'evenement', 'data_cat' => 'Periode_repos', 'cat_name' => 'Période de repos', 'cat_desc' => 'Congés, jours fériés'],
            ['data_type' => 'news', 'data_cat' => 'Academique', 'cat_name' => 'News académique', 'cat_desc' => 'Représente une actualité à propos d’une activité académique'],
            ['data_type' => 'News', 'data_cat' => 'Extra_academique', 'cat_name' => 'News extra academique', 'cat_desc' => 'Représente une actualité à propos d’une activité extra académique'],
            ['data_type' => 'News', 'data_cat' => 'Scientifique', 'cat_name' => 'News scientifique', 'cat_desc' => 'Représente une actualité à propos d’une activité scientifique'],
            ['data_type' => 'galerie', 'data_cat' => 'Academique', 'cat_name' => 'Galerie academique', 'cat_desc' => 'Photo à propos d’une activité académique'],
            ['data_type' => 'galerie', 'data_cat' => 'Extra_academique', 'cat_name' => 'Galerie extracademique', 'cat_desc' => 'Photo à propos d’une activité extra académique'],
            ['data_type' => 'galerie', 'data_cat' => 'scientifique', 'cat_name' => 'Galerie Scientifique', 'cat_desc' => 'Photo à propos d’une activité scientifique'],
            ['data_type' => 'Demande', 'data_cat' => 'attestation', 'cat_name' => 'Demande de attestation', 'cat_desc' => 'Représente une demande de retrait d’une attestation par les enseignants, étudiants, administration, etc'],
            ['data_type' => 'demande', 'data_cat' => 'conges', 'cat_name' => 'Demande de congés', 'cat_desc' => 'Représente une demande de congés (congé de maternité, de maladies, etc) par les enseignants, étudiants, administrations,etc'],
            ['data_type' => 'demande', 'data_cat' => 'bulletin', 'cat_name' => 'Demande de retrait de bulletin', 'cat_desc' => 'Représente une demande de retrait de bulletin par les étudiants'],
            ['data_type' => 'demande', 'data_cat' => 'reclamation', 'cat_name' => 'Demande de réclamation', 'cat_desc' => 'Représente une demande de réclamation par les étudiants pour un mauvais calcul des moyennes ou pour une mauvaise correction des copies de compositions'],
            ['data_type' => 'demande', 'data_cat' => 'absence', 'cat_name' => 'Demande d’absence', 'cat_desc' => 'Demande d’absence par les étudiants , enseignants, administrations'],
            ['data_type' => 'demande', 'data_cat' => 'transfert', 'cat_name' => 'Demande de transfert', 'cat_desc' => 'Demande de transfert d’une filière vers une autre par les étudiants'],
            ['data_type' => 'demande', 'data_cat' => 'reclamation', 'cat_name' => 'Demande de réclamation', 'cat_desc' => 'Représente une demande de réclamation par les étudiants pour un mauvais calcul des moyennes ou pour une mauvaise correction des copies de compositions'],
            ['data_type' => 'demande', 'data_cat' => 'absence', 'cat_name' => 'Demande d’absence', 'cat_desc' => 'Demande d’absence par les étudiants, enseignants, administrations'],
            ['data_type' => 'demande', 'data_cat' => 'transfert', 'cat_name' => 'Demande de transfert', 'cat_desc' => 'Demande de transfert d’une filière vers une autre par les étudiants'],
        ];


        DB::table('table_globals')->insert($data);
    }
}
