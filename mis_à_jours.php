<?php

require_once 'vendor/autoload.php'; // Si vous utilisez Composer

use GuzzleHttp\Client;

class UpdateManager
{
    private $lastUpdateFile = 'last_update.txt';
    private $updateServerUrl = 'https://votre-serveur.com/updates/latest.json';
    private $updateDirectory = 'updates/';

    public function checkAndApplyUpdate()
    {
        $lastUpdate = $this->getLastUpdateDate();
        $currentDate = new DateTime();
        $interval = $currentDate->diff($lastUpdate);

        // Vérifier si un mois s'est écoulé depuis la dernière mise à jour
        if ($interval->m < 1) {
            return; // Pas de mise à jour nécessaire
        }

        $latestVersion = $this->getLatestVersion();
        $currentVersion = $this->getCurrentVersion();

        if (version_compare($latestVersion, $currentVersion, '>')) {
            $this->downloadUpdate($latestVersion);
            $this->applyUpdate();
            $this->updateLastUpdateDate($currentDate);
            $this->notifyUser();
        }
    }

    private function getLastUpdateDate()
    {
        if (file_exists($this->lastUpdateFile)) {
            return new DateTime(trim(file_get_contents($this->lastUpdateFile)));
        }
        return new DateTime('2023-01-01'); // Date par défaut si aucun fichier n'existe
    }

    private function getLatestVersion()
    {
        $client = new Client();
        $response = $client->get($this->updateServerUrl);
        $data = json_decode($response->getBody(), true);
        return $data['version'] ?? '1.0.0';
    }

    private function getCurrentVersion()
    {
        return '1.0.0'; // Remplacer par la logique pour obtenir la version actuelle
    }

    private function downloadUpdate($version)
    {
        $client = new Client();
        $updateFileUrl = "https://votre-serveur.com/updates/app_v$version.zip";
        $savePath = $this->updateDirectory . "app_v$version.zip";

        $client->get($updateFileUrl, ['sink' => $savePath]);
        return $savePath;
    }

    private function applyUpdate()
    {
        $zipFile = $this->updateDirectory . 'app_v' . $this->getLatestVersion() . '.zip';
        $extractTo = __DIR__ . '/../';

        $zip = new ZipArchive();
        if ($zip->open($zipFile) === TRUE) {
            $zip->extractTo($extractTo);
            $zip->close();
            unlink($zipFile); // Supprimer le fichier zip après extraction
        } else {
            throw new Exception("Échec de l'extraction du fichier zip.");
        }
    }

    private function updateLastUpdateDate(DateTime $date)
    {
        file_put_contents($this->lastUpdateFile, $date->format('Y-m-d H:i:s'));
    }

    private function notifyUser()
    {
        // Envoyer une notification par email ou afficher un message dans l'application
        mail('admin@example.com', 'Mise à jour effectuée', 'L\'application a été mise à jour avec succès.');
    }
}

// Exécution de la mise à jour
$updateManager = new UpdateManager();
$updateManager->checkAndApplyUpdate();
